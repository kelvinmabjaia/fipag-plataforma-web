<?php

namespace App\Http\Livewire\Processo;

use App\Models\Processo;
use Livewire\Component;

class ExibirProcesso extends Component
{
    public Processo $processo;
    public $p; protected $queryString = ['p'];

    public function mount()
    {
        if ($this->p != null)
            $this->processo = Processo::where('id', $this->p)->first();
    }

    public function render()
    {
        if( $this->p != null ) 
            return view('livewire.processo.avaliar-processo', ['processo' => $this->processo]);
        
        return view('livewire.processo.listar-processo');
    }
}
