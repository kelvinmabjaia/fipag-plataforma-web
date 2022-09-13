<?php

namespace App\Http\Livewire\Processo;

use App\Models\Processo;

use Livewire\Component;

class AvaliarProcesso extends Component
{
    public Processo $processo;

    public $p;
    protected $queryString = ['p'];

    public function mount()
    {
        $this->processo = Processo::find($this->p)->first();
    }

    public function render()
    {
        return view('livewire.processo.avaliar-processo', ['processo' => $this->processo]);
    }

}
