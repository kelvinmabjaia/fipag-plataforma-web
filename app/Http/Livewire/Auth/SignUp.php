<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $name = '';
    public $username = '';
    public $email = '';
    public $password = '';

    protected $rules = [
        'name' => 'required|min:3',
        'username' => 'required|min:3',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:6'
    ];

    public function mount() 
    {
        if(auth()->user()){
            redirect('/dashboard');
        }
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'name') {
            $this->username = $this->generateUsername($this->name);
        }
    }

    private function generateUsername($name)
    { return strtolower(str_replace(' ', '.', $name)); }

    public function register() 
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }

    public function render() { return view('livewire.auth.sign-up'); }
}
