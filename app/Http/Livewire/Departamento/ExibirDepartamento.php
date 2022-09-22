<?php

namespace App\Http\Livewire\Departamento;

use App\Models\Departamento;
use Livewire\Component;

class ExibirDepartamento extends Component
{
    public Departamento $departamento;
    public $d; protected $queryString = ['d'];

    public function mount()
    {
        if($this->d != null)
            $this->departamento = Departamento::where('id', $this->d)->first();
    }

    public function render()
    {
        if( $this->d != null )
            return view('livewire.departamento.exibir-departamento', ['departamento' => $this->departamento]);
        
        return view('livewire.departamento.listar-departamento');
    }
}
