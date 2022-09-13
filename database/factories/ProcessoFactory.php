<?php

namespace Database\Factories;

use App\Models\Processo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProcessoFactory extends Factory
{
    protected $model = Processo::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'referencia' => Str::random(10),
            'nr' => rand(1000, 9999),
            'finalidade' => $this->faker->text(),
            'orcamento' => mt_rand(1000, 1000000),
            'data_submissao' => now(),
            'data_prazo' => now(),
        ];
    }
}
