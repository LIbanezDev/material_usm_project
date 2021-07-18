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
