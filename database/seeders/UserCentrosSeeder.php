<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UserCentros;

class UserCentrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'user_id' => 'mabjaiakelvin@gmail.com',
            'centro' => '11100',
            'ano' => '2023',
            'responsavel' => true,
        ];
        
        UserCentros::create($data);
    }
}
