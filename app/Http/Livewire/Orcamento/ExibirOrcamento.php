<?php

namespace App\Http\Livewire\Orcamento;

use App\Models\Regiao;
use Livewire\Component;

class ExibirOrcamento extends Component
{
    public Regiao $regiao;

    public function mount()
    {
        $this->regiao = Regiao::where('id', 2)->first();
    }

    public function render()
    {
        return view('livewire.orcamento.exibir-orcamento', ['regiao' => $this->regiao]);
    }
}