<?php

namespace Database\Seeders;

use App\Models\Archivo;
use App\Models\Asignatura;
use App\Models\Carrera;
use App\Models\Sede;
use App\Models\TipoArchivo;
use App\Models\Usuario;
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
    private $mercadotecnia = [
        ['nombre' => "Matematicas I", 'semestre' => 1],
        ['nombre' => "Mercadotecnia", 'semestre' => 1],
        ['nombre' => "Computacion aplicada al marketing", 'semestre' => 1],
        ['nombre' => "Lenguaje", 'semestre' => 1],
        ['nombre' => "Realidad del Pais", 'semestre' => 1],
        ['nombre' => "Macroeconomia", 'semestre' => 1],
        ['nombre' => "Matematicas II", 'semestre' => 2],
        ['nombre' => "Gestion de Marketing", 'semestre' => 2],
        ['nombre' => "Comportamiento del consumidor y neuromarketing", 'semestre' => 2],
        ['nombre' => "Publicidad y Taller de Diseño Grafico", 'semestre' => 2],
        ['nombre' => "Contabilidad Financiera", 'semestre' => 2],
        ['nombre' => "Microeconomia", 'semestre' => 2],
        ['nombre' => "Matematicas III", 'semestre' => 3],
        ['nombre' => "Estadistica para la Gestion I", 'semestre' => 3],
        ['nombre' => "Logistica y Distribucion", 'semestre' => 3],
        ['nombre' => "Comunicacion integrada y Medios digitales", 'semestre' => 3],
        ['nombre' => "Administracion de Empresas", 'semestre' => 3],
        ['nombre' => "Contabilidad de costos", 'semestre' => 3],
        ['nombre' => "Estadistica para la Gestion II", 'semestre' => 4],
        ['nombre' => "Investigacion de Mercados I", 'semestre' => 4],
        ['nombre' => "Gestion de Medios de comunicacion", 'semestre' => 4],
        ['nombre' => "Venta al detalle y merchandising", 'semestre' => 4],
        ['nombre' => "Gestion del Talento Humano", 'semestre' => 4],
        ['nombre' => "Control y Presupuesto", 'semestre' => 4],
        ['nombre' => "Metodos Cuantitativos para el Marketing", 'semestre' => 5],
        ['nombre' => "Investigacion de Mercados II", 'semestre' => 5],
        ['nombre' => "Tecnicas de Negociacion y Ventas", 'semestre' => 5],
        ['nombre' => "Marketing de Servicios", 'semestre' => 5],
        ['nombre' => "Politica de Precios", 'semestre' => 5],
        ['nombre' => "Finanzas de corto plazo", 'semestre' => 5],
        ['nombre' => "Canales y Trade Marketing", 'semestre' => 6],
        ['nombre' => "Marketing Industrial y Calidad Total", 'semestre' => 6],
        ['nombre' => "Marketing Internacional, Franquisias y Licencias", 'semestre' => 6],
        ['nombre' => "Legislacion Comercial", 'semestre' => 6],
        ['nombre' => "Ingles de Negocios", 'semestre' => 6],
        ['nombre' => "Finanzas de Largo plazo", 'semestre' => 6],
        ['nombre' => "Gerencia de ventas", 'semestre' => 7],
        ['nombre' => "Marketing Relacional", 'semestre' => 7],
        ['nombre' => "Sistemas de Informacion de Marketing", 'semestre' => 7],
        ['nombre' => "Sistemas de informacion en la organizacion", 'semestre' => 7],
        ['nombre' => "Catedra de la Paz", 'semestre' => 7],
        ['nombre' => "Evaluacion de Proyectos de Marketing", 'semestre' => 7],
        ['nombre' => "Benchmarking", 'semestre' => 8],
        ['nombre' => "Marketing Estrategico", 'semestre' => 8],
        ['nombre' => "Electiva I", 'semestre' => 8],
        ['nombre' => "Electiva II", 'semestre' => 8],
        ['nombre' => "Simulacion de negocios", 'semestre' => 8],
        ['nombre' => "Etica Empresarial", 'semestre' => 8],
        ['nombre' => "Gerencia de Producto y Marca", 'semestre' => 9],
        ['nombre' => "Gerencia de Marketing", 'semestre' => 9],
        ['nombre' => "Creacion de Empresas", 'semestre' => 9],
        ['nombre' => "Electiva III", 'semestre' => 9],
        ['nombre' => "Gobierno Corporativo", 'semestre' => 9],
        ['nombre' => "Seminario de Titulo", 'semestre' => 9],
    ];

    private $fisica = [
        ['nombre' => "Física General I", 'semestre' => 1],
        ['nombre' => "Matemática I", 'semestre' => 1],
        ['nombre' => "Química y Sociedad", 'semestre' => 1],
        ['nombre' => "Introducción a la Física Contemporánea", 'semestre' => 1],
        ['nombre' => "Educación Física I", 'semestre' => 1],
        ['nombre' => "Física General III", 'semestre' => 2],
        ['nombre' => "Matemática II", 'semestre' => 2],
        ['nombre' => "Programación", 'semestre' => 2],
        ['nombre' => "Instrumentación Científica", 'semestre' => 2],
        ['nombre' => "Educación Física II", 'semestre' => 2],
        ['nombre' => "Humanista I", 'semestre' => 2],
        ['nombre' => "Física General II", 'semestre' => 3],
        ['nombre' => "Matemática III", 'semestre' => 3],
        ['nombre' => "Física Experimental", 'semestre' => 3],
        ['nombre' => "Deportes", 'semestre' => 3],
        ['nombre' => "Inglés I", 'semestre' => 3],
        ['nombre' => "Humanista II", 'semestre' => 3],
        ['nombre' => "Fisica General IV", 'semestre' => 4],
        ['nombre' => "Matemática IV", 'semestre' => 4],
        ['nombre' => "Probabilidad y Estadística", 'semestre' => 4],
        ['nombre' => "Mecánica Intermedia I", 'semestre' => 4],
        ['nombre' => "Inglés II", 'semestre' => 4],
        ['nombre' => "Campos Electromagnéticos I", 'semestre' => 5],
        ['nombre' => "Termodinámica y Mecánica Estadística", 'semestre' => 5],
        ['nombre' => "Métodos de la Física Matemática", 'semestre' => 5],
        ['nombre' => "Mecánica Intermedia II", 'semestre' => 5],
        ['nombre' => "Inglés III", 'semestre' => 5],
        ['nombre' => "Campos Electromagnéticos II", 'semestre' => 6],
        ['nombre' => "Física Cuántica I", 'semestre' => 6],
        ['nombre' => "Física Experimental Avanzada", 'semestre' => 6],
        ['nombre' => "Análisis Numérico", 'semestre' => 6],
        ['nombre' => "Inglés IV", 'semestre' => 6],
        ['nombre' => "Física Cuántica II", 'semestre' => 7],
        ['nombre' => "Introducción a la Física de Alta Energía", 'semestre' => 7],
        ['nombre' => "Física Computacional", 'semestre' => 7],
        ['nombre' => "Optativo Avanzado I", 'semestre' => 7],
        ['nombre' => "El Método Científico", 'semestre' => 7],
        ['nombre' => "Optativo Avanzado II", 'semestre' => 8],
        ['nombre' => "Optativo Avanzado III", 'semestre' => 8],
        ['nombre' => "Optativo Avanzado IV", 'semestre' => 8],
        ['nombre' => "Introducción a la Física de la Materia Condensada", 'semestre' => 8],
        ['nombre' => "Seminario de Grado", 'semestre' => 8],
    ];
    private $empresas = [
        ['nombre' => "Fundamentos Económicos para la Administración", 'semestre' => 1],
        ['nombre' => "Administración de Empresas", 'semestre' => 1],
        ['nombre' => "Tecnologías para la Administración", 'semestre' => 1],
        ['nombre' => "Taller de Habiliadades Sociales y Comunicacionales", 'semestre' => 1],
        ['nombre' => "Elementos de la Matemática", 'semestre' => 1],
        ['nombre' => "Inglés I", 'semestre' => 1],
        ['nombre' => "Economía para la Administración", 'semestre' => 2],
        ['nombre' => "Comercialización I", 'semestre' => 2],
        ['nombre' => "Aspectos Legales de la Administración", 'semestre' => 2],
        ['nombre' => "Matemática Aplicada", 'semestre' => 2],
        ['nombre' => "Inglés II", 'semestre' => 2],
        ['nombre' => "Matemática Financiera", 'semestre' => 3],
        ['nombre' => "Proceso de Control en la Administración", 'semestre' => 3],
        ['nombre' => "Comercialización II", 'semestre' => 3],
        ['nombre' => "Contabilidad para la Administración", 'semestre' => 3],
        ['nombre' => "Programación y Tratamiento de datos para la Gestión", 'semestre' => 3],
        ['nombre' => "Educación Física", 'semestre' => 3],
        ['nombre' => "Gestión de Personas", 'semestre' => 4],
        ['nombre' => "Taller de Integración", 'semestre' => 4],
        ['nombre' => "Taller de Creatividad y Emprendimiento", 'semestre' => 4],
        ['nombre' => "Costos y Presupuestos para la Administración", 'semestre' => 4],
        ['nombre' => "Optativo", 'semestre' => 4],
    ];
    private $diseñografico = [
        ['nombre' => "Diseño Basico", 'semestre' => 1],
        ['nombre' => "Dibujo Natural 1", 'semestre' => 1],
        ['nombre' => "Taller de Creatividad", 'semestre' => 1],
        ['nombre' => "Historia del Arte", 'semestre' => 1],
        ['nombre' => "Lenguaje", 'semestre' => 1],
        ['nombre' => "Comp. Aplicada al Diseño", 'semestre' => 1],
        ['nombre' => "Teoria del Color", 'semestre' => 2],
        ['nombre' => "Dibujo Natural 2", 'semestre' => 2],
        ['nombre' => "Historia del Diseño Grafico", 'semestre' => 2],
        ['nombre' => "Metodologia de la Investigacion", 'semestre' => 2],
        ['nombre' => "Grafica Computacional", 'semestre' => 2],
        ['nombre' => "Matematicas Diseño", 'semestre' => 2],
        ['nombre' => "Tipografía", 'semestre' => 3],
        ['nombre' => "Taller de Ilustracion", 'semestre' => 3],
        ['nombre' => "Fotografia", 'semestre' => 3],
        ['nombre' => "Mercadotecnia", 'semestre' => 3],
        ['nombre' => "Grafica Audiovisual", 'semestre' => 3],
        ['nombre' => "Multimedia 1", 'semestre' => 3],
        ['nombre' => "Talleres de Diseño 1", 'semestre' => 4],
        ['nombre' => "Taller de Diseño Corporativo", 'semestre' => 4],
        ['nombre' => "Preprensa Digital", 'semestre' => 4],
        ['nombre' => "Redaccion Creativa", 'semestre' => 4],
        ['nombre' => "Diseño Web", 'semestre' => 4],
        ['nombre' => "Multimedia 2", 'semestre' => 4],
        ['nombre' => "Taller de Diseño Editorial", 'semestre' => 5],
        ['nombre' => "Taller de Diseño de Envases", 'semestre' => 5],
        ['nombre' => "Teoria de la Comunicacion", 'semestre' => 5],
        ['nombre' => "Publicidad I", 'semestre' => 5],
        ['nombre' => "Produccion de Audio", 'semestre' => 5],
        ['nombre' => "Estadistica para Diseño", 'semestre' => 5],
        ['nombre' => "Taller de Merchandising", 'semestre' => 6],
        ['nombre' => "Materiales y Recursos", 'semestre' => 6],
        ['nombre' => "Publicidad II", 'semestre' => 6],
        ['nombre' => "Animacion y Produccion de Videos", 'semestre' => 6],
        ['nombre' => "Planificacion de Mercado", 'semestre' => 6],
        ['nombre' => "Ingles de Negocios", 'semestre' => 6],
        ['nombre' => "Señaletica y Sistemas de Informacion", 'semestre' => 7],
        ['nombre' => "Taller Ferias y Exposiciones", 'semestre' => 7],
        ['nombre' => "Sistemas de Produccion Grafica", 'semestre' => 7],
        ['nombre' => "Semiotica", 'semestre' => 7],
        ['nombre' => "Animacion 3D", 'semestre' => 7],
        ['nombre' => "Produccion de Television", 'semestre' => 7],
        ['nombre' => "Proyectos de Diseño", 'semestre' => 8],
        ['nombre' => "Gerencia de Productos y Marcas", 'semestre' => 8],
        ['nombre' => "Animacion 3D Avanzada", 'semestre' => 8],
        ['nombre' => "Administracion de Empresas", 'semestre' => 8],
        ['nombre' => "Electiva I", 'semestre' => 8],
        ['nombre' => "Electiva II", 'semestre' => 8],
        ['nombre' => "Legislacion y Propiedad Intelectual", 'semestre' => 9],
        ['nombre' => "Etica Empresarial", 'semestre' => 9],
        ['nombre' => "Creacion de Empresas", 'semestre' => 9],
        ['nombre' => "Gestion de Proyectos de Diseño", 'semestre' => 9],
        ['nombre' => "Electiva III", 'semestre' => 9],
        ['nombre' => "Seminario de Titulo", 'semestre' => 9],
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

        Usuario::factory()->create(['name' => 'Lucas Vergara', 'email' => 'lucas@gmail.com']);
        Usuario::factory()->create(['name' => 'Benjamin Bahamondes', 'email' => 'bejamin@gmail.com']);

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

        $carrera_mercadotecnia = new Carrera();
        $carrera_mercadotecnia->nombre = "Mercadotecnia";
        $carrera_mercadotecnia->regimen = 'D';
        $carrera_mercadotecnia->save();
        $carrera_mercadotecnia->sedes()->save(Sede::find(6));

        $carrera_fisica = new Carrera();
        $carrera_fisica->nombre = "Licenciatura en Fisica";
        $carrera_fisica->regimen = 'D';
        $carrera_fisica->save();
        $carrera_fisica->sedes()->save(Sede::find(1));
        $carrera_fisica->sedes()->save(Sede::find(2));

        $carrera_empresas = new Carrera();
        $carrera_empresas->nombre = "Técnico Universitario en Administración de Empresas";
        $carrera_empresas->regimen = 'D';
        $carrera_empresas->save();
        $carrera_empresas->sedes()->save(Sede::find(3));
        $carrera_empresas->sedes()->save(Sede::find(4));
        $carrera_empresas->sedes()->save(Sede::find(5));

        $carrera_diseñografico = new Carrera();
        $carrera_diseñografico->nombre = "Diseño Gráfico";
        $carrera_diseñografico->regimen = 'D';
        $carrera_diseñografico->save();
        $carrera_diseñografico->sedes()->save(Sede::find(6));

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
        for ($i = 0; $i < count($this->mercadotecnia); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->mercadotecnia[$i]['nombre'];
            $asignatura->save();
            $carrera_mercadotecnia->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->mercadotecnia[$i]['semestre']]]);
        }
        for ($i = 0; $i < count($this->fisica); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->fisica[$i]['nombre'];
            $asignatura->save();
            $carrera_fisica->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->fisica[$i]['semestre']]]);
        }
        for ($i = 0; $i < count($this->empresas); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->empresas[$i]['nombre'];
            $asignatura->save();
            $carrera_empresas->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->empresas[$i]['semestre']]]);
        }
        for ($i = 0; $i < count($this->diseñografico); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->diseñografico[$i]['nombre'];
            $asignatura->save();
            $carrera_diseñografico->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->diseñografico[$i]['semestre']]]);
        }
    }
}
