<?php

namespace App\Http\Livewire\Utilizador;

use App\Models\User;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class CriarUtilizador extends Component
{
    public User $user;

    protected $rules = [
        'user.name' => 'required|string|min:3',
        'user.email' => 'required|string|max:500',
    ];

    public function mount() {
        $this->user = new User();
    }

    public function save() {

        $this->validate();
        $this->user->password = Hash::make('secret');
        $this->user->save();

        $this->user = new User();

        $this->emit('refreshDatatable', 'livewire.utilizador.tabela-utilizador'); // Actualizar Tabela Utilizador
        $this->emit('closeCreateModal', 'livewire.utilizador.listar-utilizador'); // Fechar Modal Criar Utilizador
        
    }
    
    public function render() {
        return view('livewire.utilizador.criar-utilizador');
    }
}


