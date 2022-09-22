<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;

/** Dashboard */
use App\Http\Livewire\Dashboard;

/** Departamento */
use App\Http\Livewire\Departamento\CriarDepartamento;
use App\Http\Livewire\Departamento\ExibirDepartamento;

/** Orçamento */
use App\Http\Livewire\Orcamento\ExibirOrcamento;

/** Processo */
use App\Http\Livewire\Processo\ExibirProcesso;

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

    // Departamento
    Route::get('/departamento', ExibirDepartamento::class)->name('exibir-departamento');
    Route::get('/departamentos', ExibirDepartamento::class)->name('listar-departamento');

    // Orçamento
    Route::get('/orcamento', ExibirOrcamento::class)->name('exibir-orcamento');

    // Processo
    Route::get('/processo', ExibirProcesso::class)->name('avaliar-processo');
    Route::get('/processos', ExibirProcesso::class)->name('listar-processo');

    // Região
    Route::get('/regiao', ListarRegiao::class)->name('listar-regiao');

    // Utilizador
    Route::get('/utilizador', ListarUtilizador::class)->name('listar-utilizador');

    
});

