<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Models\Regiao;

class RegiaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        $regioes = [ 
            ["regiao" => "Norte", "created_at"=> $now, "updated_at"=> $now ],
            ["regiao" => "Centro", "created_at"=> $now, "updated_at"=> $now ], 
            ["regiao" => "Sul", "created_at"=> $now, "updated_at"=> $now ] 
        ];

        Regiao::insert( $regioes );
    }
}
