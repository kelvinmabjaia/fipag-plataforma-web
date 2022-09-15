<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Models\Cargo;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        $cargos = [ 
            ["cargo" => "Administrador", "nivel" => 99, "created_at"=> $now, "updated_at"=> $now ],
            ["cargo" => "Gestor", "nivel" => 98, "created_at"=> $now, "updated_at"=> $now ], 
            ["cargo" => "Consultor", "nivel" => 1, "created_at"=> $now, "updated_at"=> $now ],
            ["cargo" => "Utilizador", "nivel" => 0, "created_at"=> $now, "updated_at"=> $now ],
        ];

        Cargo::insert( $cargos );
    }
}
