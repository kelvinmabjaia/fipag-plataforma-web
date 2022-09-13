<?php

namespace App\Http\Livewire\Utilizador;

use Livewire\Component;

class ListarUtilizador extends Component
{

    protected $listeners = [
        'closeCreateModal'
    ];

    public function closeCreateModal(){
        session()->flash('success', 'Utilizador criado com sucesso!'); // Alerta de Sucesso
        $this->dispatchBrowserEvent('closeCreateModal'); 
    }

    public function render()
    {
        return view('livewire.utilizador.listar-utilizador');
    }
}
