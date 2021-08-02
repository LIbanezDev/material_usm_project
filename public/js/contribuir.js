const DEFAULT_OPTION = '<option selected disabled> Selecciona una opción</option>'
const fileNameSpan = document.getElementById('file-name');
const sedeSelect = document.getElementById('input-sede');
const carreraSelect = document.getElementById('input-carrera');
const asignaturaSelect = document.getElementById('input-asignatura');
const tipoArchivoSelect = document.getElementById('input-tipo_archivo');
const btnSubirArchivo = document.getElementById('btn-subir-archivo');

const tabsAndForms = {
    carrera: {
        tab: document.getElementById('tab-carrera'),
        form: document.getElementById('form-agregar-carrera')
    },
    asignatura: {
        tab: document.getElementById('tab-asignatura'),
        form: document.getElementById('form-agregar-asignatura')
    },
    archivo: {
        tab: document.getElementById('tab-archivo'),
        form: document.getElementById('form-agregar-archivo')
    },
}

// Manejar tabs ocultando y mostrando los respectivos formularios
Object.keys(tabsAndForms).forEach(key => {
    tabsAndForms[key].tab.addEventListener('click', () => {
        tabsAndForms[key].tab.classList.add('is-active');
        tabsAndForms[key].form.classList.remove('is-hidden');
        Object.keys(tabsAndForms).forEach(keyTwo => {
            if (keyTwo !== key) {
                tabsAndForms[keyTwo].form.classList.add('is-hidden');
                tabsAndForms[keyTwo].tab.classList.remove('is-active')
            }
        })
    })
})

const fireAlert = (title, content, image = 'https://miro.medium.com/max/724/1*kcHIKmRQn9KxfZk6QT0QYg.jpeg', timer = 3000) =>
    Swal.fire({
        title: title,
        html: content,
        timer,
        timerProgressBar: true,
        imageUrl: image,
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Thanks',
        showClass: {
            popup: 'animate__animated animate__jackInTheBox',
            showCloseButton: false
        }
    })


sedeSelect.addEventListener('change', async () => {
    carreraSelect.disabled = true;
    carreraSelect.innerHTML = DEFAULT_OPTION;
    asignaturaSelect.innerHTML = DEFAULT_OPTION;
    const url = `/api/carreras?sede=${sedeSelect.value}`
    const {data} = await axios.get(url)
    data.forEach((carrera) => {
        carreraSelect.innerHTML += `
    <option value="${carrera.id}"> ${carrera.nombre}</option>`
    })
    carreraSelect.disabled = false;
})

carreraSelect.addEventListener('change', async () => {
    asignaturaSelect.disabled = true;
    asignaturaSelect.innerHTML = DEFAULT_OPTION;
    const url = `/api/asignaturas?carrera=${carreraSelect.value}`
    const {data} = await axios.get(url)
    data.forEach(asignatura => {
        asignaturaSelect.innerHTML += `
    <option value="${asignatura.id}"> ${asignatura.nombre}</option>`
    })
    asignaturaSelect.disabled = false;
})

document.getElementById('archivo-input').addEventListener('change', () => {
    fileNameSpan.classList.remove('is-hidden');
    fileNameSpan.classList.add('file-name');
    fileNameSpan.innerText = document.getElementById('archivo-input').files[0].name
})

// Subir archivo
tabsAndForms.archivo.form.addEventListener('submit', async (evt) => {
    try {
        evt.preventDefault();
        btnSubirArchivo.classList.add('is-loading');
        const url = 'api/archivos';
        const formData = new FormData();
        const archivo = document.getElementById('archivo-input').files[0];
        formData.append('file', archivo)
        formData.append('asignatura', asignaturaSelect.value)
        formData.append('tipo', tipoArchivoSelect.value)
        const config = {
            headers: {
                'content-type': 'multipart/form-data'
            }
        }
        const {status} = await axios.post(url, formData, config)
        if (status === 201) {
            await fireAlert('Exito!', 'El archivo ha sido subido exitosamente')
            tabsAndForms.archivo.form.reset();
        }
    } catch (e) {
        await fireAlert('Error al subir archivo!',
            'Recuerda que los tipos de datos admitidos son: <br/> <strong> ' + ['pdf', 'docx', 'jpg', 'jpeg', 'png', 'doc', 'xlsx'].join(', ') + ' </strong>',
            'https://i1.sndcdn.com/artworks-YPmsRprkaUmgDfDE-6hWsoQ-t500x500.jpg')
    }
    btnSubirArchivo.classList.remove('is-loading');
})


// TODO: Implementar formulario de agregacion de asignatura (hard mode)

// Subir carrera
tabsAndForms.carrera.form.addEventListener('submit', async (evt) => {
    evt.preventDefault()
    const checkboxes = document.getElementsByName('sedes[]');
    const tipoCarrera = document.getElementById('select-tipo-carrera').value;
    const especialidad = document.getElementById('input-carrera-carrera').value;
    const btnAgregarCarrera = document.getElementById('btn-agregar-carrera');
    btnAgregarCarrera.classList.add('is-loading')
    let body = {}
    body.nombre = tipoCarrera + ' en ' + especialidad;
    body.regimen = document.getElementById('input-carrera-regimen').value;
    body.sedes = []
    checkboxes.forEach(checkbox => {
        if (checkbox.checked) body.sedes.push(parseInt(checkbox.value))
    })
    console.log(body)
    const {data} = await axios.post('/api/carreras', body)
    await fireAlert('Gracias!', 'Carrera añadida exitosamente!')
    tabsAndForms.carrera.form.reset()
    btnAgregarCarrera.classList.remove('is-loading')
})
