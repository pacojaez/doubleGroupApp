<?php

namespace Database\Seeders;

use App\Models\Trabajador;
use App\Models\Uniformidad;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Trabajador::factory(10)->create();
        \App\Models\Uniformidad::factory(10)->create();
        //done
        $uniformidades = Uniformidad::all();

        for ($i = 0; $i < 50; $i++) {
            $now = new DateTime();
            $trabajador = \App\Models\Trabajador::factory()->create();
            $uniformidad = \App\Models\Uniformidad::factory()->create();
            DB::table('trabajador_uniformidad')->insert([
                'trabajador_id' => $trabajador->id,
                'uniformidad_id' => $uniformidad->id,
                'created_at' => $now
            ]);
        }

        // Populate the pivot table
        // \App\Models\Trabajador::All()->each(function ($trabajador) use ($uniformidades) {
        //     $trabajador->uniformidads()->saveMany($uniformidades);
        // });

        // $trabajadores = Trabajador::all();

        // foreach($trabajadores as $trabajador){
        //     $trabajador->attach(Uniformidad::factory()->count(3))->create();
        // }
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
