<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use App\Models\Carrera;
use App\Models\Sede;
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
        $sede = new Sede();
        $sede->nombre = 'Jose Miguel Carrera';
        $sede->ciudad = 'Vina del Mar';
        $sede->save();

        $carrera = new Carrera();
        $carrera->nombre = "Tecnico Universitario en Informatica";
        $carrera->regimen = 'D';
        $carrera->save();
        $carrera->sedes()->save($sede);

        for ($i = 0; $i < count($this->asignaturas); $i++) {
            $asignatura = new Asignatura();
            $asignatura->nombre = $this->asignaturas[$i]['nombre'];
            $asignatura->save();
            $carrera->asignaturas()->attach([1 => ['asignatura_id' => $asignatura->id, 'semestre' => $this->asignaturas[$i]['semestre']]]);
        }
    }
}
