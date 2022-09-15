<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;

/** Departamento */
use App\Http\Livewire\Departamento\CriarDepartamento;
use App\Http\Livewire\Departamento\ListarDepartamento;

/** Processo */
use App\Http\Livewire\Processo\AvaliarProcesso;
use App\Http\Livewire\Processo\ListarProcesso;

/** Região */
use App\Http\Livewire\Regiao\ListarRegiao;

/** Utilizador */
use App\Http\Livewire\Utilizador\CriarUtilizador;
use App\Http\Livewire\Utilizador\ListarUtilizador;



use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    // Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');

    // Departamento
    Route::get('/departamento', ListarDepartamento::class)->name('listar-departamento');

    // Processo
    Route::get('/avaliar-processo', AvaliarProcesso::class)->name('avaliar-processo');
    Route::get('/processo', ListarProcesso::class)->name('listar-processo');

    // Região
    Route::get('/regiao', ListarRegiao::class)->name('listar-regiao');

    // Utilizador
    Route::get('/utilizador', ListarUtilizador::class)->name('listar-utilizador');

    
});

