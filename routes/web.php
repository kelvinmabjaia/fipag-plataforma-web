<?php

/* IMPORTS */
    use Illuminate\Support\Facades\Route;
    use Illuminate\Http\Request;

    use App\Http\Livewire\Auth\ForgotPassword;
    use App\Http\Livewire\Auth\ResetPassword;
    use App\Http\Livewire\Auth\SignUp;
    use App\Http\Livewire\Auth\Login;

    /** Dashboard */
    use App\Http\Livewire\Dashboard;

    /** Departamento */
    use App\Http\Livewire\Departamento\CriarDepartamento;
    use App\Http\Livewire\Departamento\ExibirDepartamento;

    /** Requisição */
    use App\Http\Livewire\Requisicao\AvaliarRequisicao;
    use App\Http\Livewire\Requisicao\CriarRequisicao;
    use App\Http\Livewire\Requisicao\ListarRequisicao;

    /** Processo */
    use App\Http\Livewire\Processo\ExibirProcesso;

    /** Região */
    use App\Http\Livewire\Regiao\ExibirRegiao;

    /** Utilizador */
    use App\Http\Livewire\Utilizador\CriarUtilizador;
    use App\Http\Livewire\Utilizador\ListarUtilizador;
/* ------ */

/* INICIO AUTENTICAÇÃO */
    
    // Login
    Route::get('/', function() { return redirect('/login'); });
    Route::get('/login', Login::class)->name('login');

    // Sign up
    Route::get('/sign-up', SignUp::class)->name('sign-up');

    // Forgot Password
    Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

    // Reset Password
    Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

/* FIM AUTENTICAÇÃO */

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Departamento
    Route::get('/departamento', ExibirDepartamento::class)->name('exibir-departamento');
    Route::get('/departamentos', ExibirDepartamento::class)->name('listar-departamento');

    // Requisição
    Route::get('/requisicao', AvaliarRequisicao::class)->name('avaliar-requisicao');
    Route::get('/requisicoes', ListarRequisicao::class)->name('listar-requisicao');
    Route::get('/requisitar', CriarRequisicao::class)->name('criar-requisicao');

    // Processo
    Route::get('/processo', ExibirProcesso::class)->name('avaliar-processo');
    Route::get('/processos', ExibirProcesso::class)->name('listar-processo');

    // Orçamento / Região 
    Route::get('/orcamento', ExibirRegiao::class)->name('exibir-orcamento');
    Route::get('/regiao', ExibirRegiao::class)->name('listar-regiao');

    // Utilizador
    Route::get('/utilizador', ListarUtilizador::class)->name('listar-utilizador');
    
});

