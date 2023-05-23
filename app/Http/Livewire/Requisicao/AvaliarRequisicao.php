<?php

namespace App\Http\Livewire\Requisicao;

use Livewire\Component;

use App\Models\Fornecedor;
use App\Models\Requisicao;

class AvaliarRequisicao extends Component
{
    public Requisicao $requisicao;
    public $rec; protected $queryString = ['rec'];

    public $fornecedor;

    public $linhas;

    public function mount()
    {
        if ($this->rec != null) 
        {
            $this->requisicao = Requisicao::where('Documento', $this->rec)->first();
            $this->fornecedor = Fornecedor::where('Fornecedor', $this->requisicao->Entidade)->select('Nome')->first()->Nome;
            $this->linhas = $this->requisicao->linhas;
        }
    }

    public function render()
    {
        if( $this->rec != null ) 
            return view('livewire.requisicao.avaliar-requisicao', 
                [
                    'requisicao' => $this->requisicao, 
                    'fornecedor' => $this->fornecedor
                ]);

        return view('livewire.requisicao.avaliar-requisicao');
    }
}
