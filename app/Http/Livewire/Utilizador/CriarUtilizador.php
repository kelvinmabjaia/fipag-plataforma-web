<?php

namespace App\Http\Livewire\Utilizador;

use App\Models\User;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class CriarUtilizador extends Component
{
    public User $user;
    
    public $nome;
    public $apelido;
    
    public $password;
    public $confirmar;


    protected $rules = [
        'nome' => 'required|string|min:3',
        'apelido' => 'required|string|min:3',
        'user.email' => 'required|string|max:500',
        'password' => 'required_with:confirmar|min:6',
        'confirmar' => 'same:password|min:6'
    ];

    public function mount() {
        $this->user = new User();
    }

    public function save() {

        $this->validate();

        $this->user->name = $this->nome . " " . $this->apelido;
        $this->user->password = Hash::make( $this->password );
        $this->user->save();

        $this->user = new User();

        $this->emit('refreshDatatable', 'livewire.utilizador.tabela-utilizador'); // Actualizar Tabela Utilizador
        $this->emit('closeCreateModal', 'livewire.utilizador.listar-utilizador'); // Fechar Modal Criar Utilizador
        
    }
    
    public function render() {
        return view('livewire.utilizador.criar-utilizador');
    }
}


