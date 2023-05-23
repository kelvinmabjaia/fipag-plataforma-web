<?php

namespace App\Http\Livewire\Requisicao;

use Livewire\Component;

use App\Models\Requisicao;

class ListarRequisicao extends Component
{

    public $estado = '';
    public $quantEstado = [];

    public function mount()
    {
        $this->quantEstado = 
        [
            Requisicao::where('CDU_Estado', 'P')->count(),
            Requisicao::where('CDU_Estado', 'R')->count(),
            Requisicao::where('CDU_Estado', 'F')->count(),
            Requisicao::where('CDU_Estado', 'A')->count(),
            Requisicao::all()->count(),
        ];

    }
    
    public function render()
    { return view('livewire.requisicao.listar-requisicao'); }
}
