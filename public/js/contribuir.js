const DEFAULT_OPTION = `
    <option selected disabled> Selecciona una opción</option>`
const fileNameSpan = document.getElementById('file-name');
const sedeSelect = document.getElementById('input-sede-archivo');
const carreraSelect = document.getElementById('input-carrera');
const asignaturaSelect = document.getElementById('input-asignatura');
const tipoArchivoSelect = document.getElementById('input-tipo_archivo');
const formAgregarArchivo = document.getElementById('form-agregar-archivo')

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

formAgregarArchivo.addEventListener('submit', async (evt) => {
    evt.preventDefault();
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
        await Swal.fire({
            title: 'Archivo Subido!',
            html: 'El archivo se encontrara disponible en breve',
            timer: 3000,
            timerProgressBar: true,
            imageUrl: 'https://miro.medium.com/max/724/1*kcHIKmRQn9KxfZk6QT0QYg.jpeg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Thanks',
            showClass: {
                popup: 'animate__animated animate__jackInTheBox',
                showCloseButton: false
            }
        })
        formAgregarArchivo.reset();
    } else {
        await Swal.fire({
            title: 'Error al subir archivo!',
            timer: 3000,
            timerProgressBar: true,
            showClass: {
                popup: 'animate__animated animate__jackInTheBox',
                showCloseButton: false
            }
        })
    }
})
