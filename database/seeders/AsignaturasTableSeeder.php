<?php

namespace Database\Seeders;

use App\Models\Archivo;
use App\Models\Asignatura;
use App\Models\Carrera;
use App\Models\Sede;
use App\Models\TipoArchivo;
use Illuminate\Database\Seeder;

class AsignaturasTableSeeder extends Seeder
{

    private $asignaturas = [
        ['nombre' => "Elementos de la Matemática", 'semestre' => 1],
        ['nombre' => "Inglés I", 'semestre' => 1],
        ['nombre' => "Educacion Fisica", 'semestre' => 1],
        ['nombre' => "Análisis de Sistemas de Información", 'semestre' => 1],
        ['nombre' => "Programación", 'semestre' => 1],
        ['nombre' => "Introducción a la Informática y Computación", 'semestre' => 1],
        ['nombre' => "Matemática Aplicada", 'semestre' => 2],
        ['nombre' => "Inglés II", 'semestre' => 2],
        ['nombre' => "Análisis y Diseño Orientado a Objeto", 'semestre' => 2],
        ['nombre' => "Diseño de Sistemas de Información", 'semestre' => 2],
        ['nombre' => "Estructuras de Datos", 'semestre' => 2],
        ['nombre' => "Programación Orientada a Evento", 'semestre' => 2],
        ['nombre' => "Taller de Sistemas de Información I", 'semestre' => 3],
        ['nombre' => "Inglés III", 'semestre' => 3],
        ['nombre' => "Programación Orientada a Objeto", 'semestre' => 3],
        ['nombre' => "Diseño y Programación Orientada a la Web", 'semestre' => 3],
        ['nombre' => "Bases de Datos", 'semestre' => 3],
        ['nombre' => "Arquitectura y organización de Computadores", 'semestre' => 3],
        ['nombre' => "Taller de Sistemas de Información II", 'semestre' => 4],
        ['nombre' => "Humanidades", 'semestre' => 4],
        ['nombre' => "Desarrollo de Aplicaciones Móviles", 'semestre' => 4],
        ['nombre' => "Taller de desarrollo de Software", 'semestre' => 4],
        ['nombre' => "Sistemas Operativos", 'semestre' => 4],
    ];
    private $electronica = [
        ['nombre' => "Elementos de la Matemática", 'semestre' => 1],
        ['nombre' => "Inglés I", 'semestre' => 1],
        ['nombre' => "Programación", 'semestre' => 1],
        ['nombre' => "Circuito de Corriente Continua", 'semestre' => 1],
        ['nombre' => "Laboratorio de Circuitos Eléctricos I", 'semestre' => 1],
        ['nombre' => "Sistemas Digitales", 'semestre' => 1],
        ['nombre' => "Matemática Aplicada", 'semestre' => 2],
        ['nombre' => "Introducción a la Física", 'semestre' => 2],
        ['nombre' => "Electrónica I", 'semestre' => 2],
        ['nombre' => "Circuitos de Corriente Alterna", 'semestre' => 2],
        ['nombre' => "Laboratorio de Circuitos Eléctricos II", 'semestre' => 2],
        ['nombre' => "Microcontroladores", 'semestre' => 2],
        ['nombre' => "Educación Física", 'semestre' => 3],
        ['nombre' => "Comunicación Efectiva y Liderazgo", 'semestre' => 3],
        ['nombre' => "Electrónica II", 'semestre' => 3],
        ['nombre' => "Instrumentación Industrial", 'semestre' => 3],
        ['nombre' => "Electrónica Industrial", 'semestre' => 3],
        ['nombre' => "Controladores Lógicos Programables", 'semestre' => 3],
        ['nombre' => "Preparación de Proyectos", 'semestre' => 4],
        ['nombre' => "Redes Computacionales e Industriales", 'semestre' => 4],
        ['nombre' => "Electrónica no Lineal", 'semestre' => 4],
        ['nombre' => "Sistemas de Telecomunicaciones", 'semestre' => 4],
        ['nombre' => "Control de Máquinas Eléctricas", 'semestre' => 4],
        ['nombre' => "Automatización y Control", 'semestre' => 4],
    ];
    private $comercial = [
        ['nombre' => "Taller de Creatividad y Comunicación Efectiva", 'semestre' => 1],
        ['nombre' => "Educación Física I", 'semestre' => 1],
        ['nombre' => "Programación y Tratamiento de Datos para la Gestión", 'semestre' => 1],
        ['nombre' => "Introducción a la Economía", 'semestre' => 1],
        ['nombre' => "Álgebra y Geometría", 'semestre' => 1],
        ['nombre' => "Administración de Empresas", 'semestre' => 1],
        ['nombre' => "Taller de Emprendimiento y Gestión", 'semestre' => 2],
        ['nombre' => "Educación Física II", 'semestre' => 2],
        ['nombre' => "Introducción a la Ingeniería Sostenible", 'semestre' => 2],
        ['nombre' => "Pre-Cálculo", 'semestre' => 2],
        ['nombre' => "Álgebra Lineal", 'semestre' => 2],
        ['nombre' => "Legislación Empresarial", 'semestre' => 2],
        ['nombre' => "Teoría Financiera", 'semestre' => 3],
        ['nombre' => "Contabilidad Financiera", 'semestre' => 3],
        ['nombre' => "Base de Datos para la Gestión", 'semestre' => 3],
        ['nombre' => "Cálculo Diferencial", 'semestre' => 3],
        ['nombre' => "Inglés I", 'semestre' => 3],
        ['nombre' => "Historia Económica", 'semestre' => 3],
        ['nombre' => "Deportes", 'semestre' => 4],
        ['nombre' => "Contabilidad de Gestión", 'semestre' => 4],
        ['nombre' => "Microeconomía I", 'semestre' => 4],
        ['nombre' => "Cálculo Integral", 'semestre' => 4],
        ['nombre' => "Inglés II", 'semestre' => 4],
        ['nombre' => "Ciencias Sociales", 'semestre' => 4],
        ['nombre' => "Taller de Evaluación Privada de Proyectos", 'semestre' => 5],
        ['nombre' => "Marketing Estratégico", 'semestre' => 5],
        ['nombre' => "Dirección Tributaria", 'semestre' => 5],
        ['nombre' => "Macroeconomía", 'semestre' => 5],
        ['nombre' => "Métodos Cuantitativos para los Negocios", 'semestre' => 5],
        ['nombre' => "Inglés III", 'semestre' => 5],
        ['nombre' => "Taller de Evaluación Social de Proyectos", 'semestre' => 6],
        ['nombre' => "Gestión Estratégica I", 'semestre' => 6],
        ['nombre' => "Dirección Financiera", 'semestre' => 6],
        ['nombre' => "Microeconomía II", 'semestre' => 6],
        ['nombre' => "Econometría", 'semestre' => 6],
        ['nombre' => "Inglés IV", 'semestre' => 6],
        ['nombre' => "Marketing Táctico", 'semestre' => 7],
        ['nombre' => "Finanzas Corporativas", 'semestre' => 7],
        ['nombre' => "Organización Industrial", 'semestre' => 7],
        ['nombre' => "Investigación de Operaciones", 'semestre' => 7],
        ['nombre' => "Inglés V", 'semestre' => 7],
        ['nombre' => "Dirección de Personas", 'semestre' => 7],
        ['nombre' => "Creación de Empresas", 'semestre' => 8],
        ['nombre' => "Gestión Estratégica II", 'semestre' => 8],
        ['nombre' => "Sistemas de Información para la Gestión", 'semestre' => 8],
        ['nombre' => "Gestión de Operaciones", 'semestre' => 8],
        ['nombre' => "Inglés VI", 'semestre' => 8],
        ['nombre' => "Política e Instituciones", 'semestre' => 8],
        ['nombre' => "Taller de Emprendimiento e Innovación", 'semestre' => 9],
        ['nombre' => "Electivo I", 'semestre' => 9],
        ['nombre' => "Electivo II", 'semestre' => 9],
        ['nombre' => "Entorno Legal de Empresa", 'semestre' => 9],
        ['nombre' => "Dirección y Liderazgo Organizacional", 'semestre' => 9],
        ['nombre' => "Seminario de Titulo", 'semestre' => 10],
        ['nombre' => "Electivo III", 'semestre' => 10],
    ];
    private $arquitectura = [
        ['nombre' => "Taller de Introducción a la Arquitectura", 'semestre' => 1],
        ['nombre' => "Matemática I", 'semestre' => 1],
        ['nombre' => "Introducción a la Física", 'semestre' => 1],
        ['nombre' => "Educación Física I", 'semestre' => 1],
        ['nombre' => "Taller de Introducción a la Arquitectura", 'semestre' => 2],
        ['nombre' => "Matemática II", 'semestre' => 2],
        ['nombre' => "Física Básica para Arquitectos", 'semestre' => 2],
        ['nombre' => "Educación Física II", 'semestre' => 2],
        ['nombre' => "Taller Espacio Urbano", 'semestre' => 3],
        ['nombre' => "Matemática III", 'semestre' => 3],
        ['nombre' => "Teoría e Historia de la Ciudad", 'semestre' => 3],
        ['nombre' => "Geometría Arquitectónica", 'semestre' => 3],
        ['nombre' => "Conceptos de Estructuras", 'semestre' => 3],
        ['nombre' => "Deporte", 'semestre' => 3],
        ['nombre' => "Taller Espacio Intermedio y Clima", 'semestre' => 4],
        ['nombre' => "Teoría Historia de la Arquitectura Vernácula", 'semestre' => 4],
        ['nombre' => "Cultura Urbana Contemporánea", 'semestre' => 4],
        ['nombre' => "Métodos Computacionales en Arquitectura", 'semestre' => 4],
        ['nombre' => "Tecnologías Sustentables", 'semestre' => 4],
        ['nombre' => "Análisis Aproximado", 'semestre' => 4],
        ['nombre' => "Taller Modelación del Espacio", 'semestre' => 5],
        ['nombre' => "Teoría Historia de la Representación en Arquitectura", 'semestre' => 5],
        ['nombre' => "Estrategias de Intervención Territorial", 'semestre' => 5],
        ['nombre' => "Taller de Métodos Computacionales en Arquitectura", 'semestre' => 5],
        ['nombre' => "Sistemas Constructivos Básicos", 'semestre' => 5],
        ['nombre' => "Suelos y Fundaciones", 'semestre' => 5],
        ['nombre' => "Taller Espacio y Tectónica", 'semestre' => 6],
        ['nombre' => "Teoría Historia de la Construcción", 'semestre' => 6],
        ['nombre' => "Pre-Práctica Administración y Programación de Obra", 'semestre' => 6],
        ['nombre' => "Estructuras Sismorresistentes", 'semestre' => 6],
        ['nombre' => "Economía I", 'semestre' => 6],
        ['nombre' => "Inglés I", 'semestre' => 6],
        ['nombre' => "Taller Avanzado I", 'semestre' => 7],
        ['nombre' => "Optativa I", 'semestre' => 7],
        ['nombre' => "Instalaciones Sanitarias, Eléctricas y Clima", 'semestre' => 7],
        ['nombre' => "Marketing e Investigación de Mercado", 'semestre' => 7],
        ['nombre' => "Inglés II", 'semestre' => 7],
        ['nombre' => "Taller Avanzado II", 'semestre' => 8],
        ['nombre' => "Optativa II", 'semestre' => 8],
        ['nombre' => "Hormigón Armado", 'semestre' => 8],
        ['nombre' => "Evaluación de Proyectos Inmobiliarios", 'semestre' => 8],
        ['nombre' => "Inglés III", 'semestre' => 8],
        ['nombre' => "Taller Avanzado III", 'semestre' => 9],
        ['nombre' => "Optativa III", 'semestre' => 9],
        ['nombre' => "Gestión Territorial", 'semestre' => 9],
        ['nombre' => "Sistemas Constructivos Complejos", 'semestre' => 9],
        ['nombre' => "Estructuras de Acero", 'semestre' => 9],
        ['nombre' => "Inicio Proceso de Titulación (*)", 'semestre' => 10],
        ['nombre' => "Término Proceso de Titulación (*)", 'semestre' => 11],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sedes = [
            ['nombre' => 'Campus Casa Central Valparaiso', 'direccion' => 'Avenida España 1680, Valparaíso', 'imagen' => 'valparaiso.jpeg'],
            ['nombre' => 'Campus San Joaquin', 'direccion' => 'Avenida Vicuña Mackenna 3939, San Joaquín, Santiago', 'imagen' => 'san-joaquin.jpeg'],
            ['nombre' => 'Campus Vitacura', 'direccion' => 'Avenida Santa María 6400, Vitacura, Santiago', 'imagen' => 'vitacura.jpeg'],
            ['nombre' => 'Sede Vina del Mar', 'direccion' => 'Avenida Federico Santa María 6090, Viña del Mar', 'imagen' => 'vina-del-mar.jpeg'],
            ['nombre' => 'Sede Concepción', 'direccion' => 'Arteaga Alemparte 943, Hualpén, Concepción', 'imagen' => 'concepcion.jpeg'],
            ['nombre' => 'Campus Guayaquil', 'direccion' => 'Av. Pdte. Carlos Julio Arosemena Tola Km 4.5, Guayaquil 090615, Ecuador', 'imagen' => 'ecuador.jpeg'],
        ];

        foreach ($sedes as $sede) {
            $new_sede = new Sede();
            $new_sede->nombre = $sede['nombre'];
            $new_sede->direccion = $sede['direccion'];
            $new_sede->imagen = $sede['imagen'];
            $new_sede->save();
        }

        $carrera = new Carrera();
        $carrera->nombre = "Tecnico Universitario en Informatica";
        $carrera->regimen = 'D';
        $carrera->save();
        $carrera->sedes()->save(Sede::find(4));
        $carrera->sedes()->save(Sede::find(5));

        $carrera_electronica = new Carrera();
        $carrera_electronica->nombre = "Tecnico Universitario en Electrónica";
        $carrera_electronica->regimen = 'D';
        $carrera_electronica->save();
        $carrera_electronica->sedes()->save(Sede::find(4));
        $carrera_electronica->sedes()->save(Sede::find(5));

        $carrera_comercial = new Carrera();
        $carrera_comercial->nombre = "Ingeniería Comercial";
        $carrera_comercial->regimen = 'D';
        $carrera_comercial->save();
        $carrera_comercial->sedes()->save(Sede::find(3));
        $carrera_comercial->sedes()->save(Sede::find(1));

        $carrera_arquitectura = new Carrera();
        $carrera_arquitectura->nombre = "Arquitectura";
        $carrera_arquitectura->regimen = 'D';
        $carrera_arquitectura->save();
        $carrera_arquitectura->sedes()->save(Sede::find(2));
        $carrera_arquitectura->sedes()->save(Sede::find(1));

        $tipo_archivo = new TipoArchivo();
        $tipo_archivo->nombre = 'Certamen';
        $tipo_archivo->puntaje = 20;
        $tipo_archivo->save();

        $tipo_archivo = new TipoArchivo();
        $tipo_archivo->nombre = 'Control';
        $tipo_archivo->puntaje = 10;
        $tipo_archivo->save();

        for ($i = 0; $i < count($this->asignaturas); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->asignaturas[$i]['nombre'];
            $asignatura->save();
            $carrera->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->asignaturas[$i]['semestre']]]);
        }
        for ($i = 0; $i < count($this->electronica); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->electronica[$i]['nombre'];
            $asignatura->save();
            $carrera_electronica->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->electronica[$i]['semestre']]]);
        }
        for ($i = 0; $i < count($this->comercial); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->comercial[$i]['nombre'];
            $asignatura->save();
            $carrera_comercial->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->comercial[$i]['semestre']]]);
        }
        for ($i = 0; $i < count($this->arquitectura); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->arquitectura[$i]['nombre'];
            $asignatura->save();
            $carrera_arquitectura->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->arquitectura[$i]['semestre']]]);
        }
        $archivo = new Archivo();
        $archivo->nombre = 'orange_cat.jpeg';
        $archivo->tipo_id = 1;
        $archivo->asignatura_id = 1;
        $archivo->save();

        $archivo = new Archivo();
        $archivo->nombre = 'black_cat.jpeg';
        $archivo->tipo_id = 1;
        $archivo->asignatura_id = 1;
        $archivo->save();

        $archivo = new Archivo();
        $archivo->nombre = 'calico_cat.jpeg';
        $archivo->tipo_id = 2;
        $archivo->asignatura_id = 1;
        $archivo->save();

        $archivo = new Archivo();
        $archivo->nombre = 'BD-2019-C1.pdf';
        $archivo->tipo_id = 1;
        $archivo->asignatura_id = 17;
        $archivo->save();
    }
}
