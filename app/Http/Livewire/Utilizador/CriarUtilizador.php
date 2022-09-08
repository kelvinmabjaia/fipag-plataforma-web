<?php

namespace App\Http\Livewire\Utilizador;

use Livewire\Component;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class CriarUtilizador extends Component
{
    public User $user;

    protected $rules = [
        'user.name' => 'required|string|min:6',
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

        $this->emit('actualizarListaUtilizadores');
        $this->emit('closeModal');
    }
    
    public function render() {
        return view('livewire.utilizador.criar-utilizador');
    }
}


