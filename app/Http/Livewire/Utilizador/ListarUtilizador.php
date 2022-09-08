<?php

namespace App\Http\Livewire\Utilizador;

use Livewire\Component;

class ListarUtilizador extends Component
{
    protected $listeners = [
        'actualizarListaUtilizadores'
    ];

    public function actualizarListaUtilizadores(){
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.utilizador.listar-utilizador');
    }
}
