<?php

namespace App\Http\Livewire\Regiao;

use App\Models\Regiao;
use Livewire\Component;

use Illuminate\Support\Facades\Route;

class ExibirRegiao extends Component
{
    public Regiao $regiao;

    public function mount()
    {
        if( str_contains(Route::currentRouteName(), 'orcamento') )
            $this->regiao = Regiao::where('id', 2)->first();
    }

    public function render()
    {
        if( str_contains(Route::currentRouteName(), 'orcamento') )
            return view('livewire.orcamento.exibir-orcamento', ['regiao' => $this->regiao]);

        return view('livewire.regiao.listar-regiao');
    }
}
