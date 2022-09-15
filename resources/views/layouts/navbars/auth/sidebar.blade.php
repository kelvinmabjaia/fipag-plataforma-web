<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <img src="../assets/img/fipag-logo.png" class="navbar-brand-img" alt="Logotipo da FIPAG" height="24px">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            {{-- Dashboard --}}
            <li class="nav-item pb-1">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-bar-32 text-sm opacity-10" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            {{-- Lista de Pocessos --}}
            <li class="nav-item pb-3">

                <?php $collapse = in_array(Route::currentRouteName(), array('avaliar-processo', 'listar-processo')); ?>

                <a class="nav-link {{ $collapse == 'tables' ? 'active' : '' }}"
                    href="{{ route('listar-processo') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-sm opacity-10" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Processos</span>
                </a>
            </li>

            {{-- LAYBEL Gestão --}}
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Gestão</h6>
            </li>

            {{-- Menu Gestão --}}
            <li class="nav-item">

                <?php $collapse = in_array(Route::currentRouteName(), array('listar-regiao', 'listar-departamento', 'listar-utilizador')); ?>

                <a data-bs-toggle="collapse" href="#menuGestao" aria-controls="menuGestao" role="button" 
                    aria-expanded="{{ $collapse ? 'true' : 'false' }}" 
                    class="nav-link mb-1 
                        {{ $collapse ? 'active' : 'collapsed' }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-folder-17 text-sm opacity-10" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Gestão </span>
                </a>

                <div class="collapse
                    {{ $collapse ? 'show' : '' }}" 
                    id="menuGestao" style="">

                    <ul class="nav ms-4 ps-3">

                        {{-- Lista de Regiões --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'listar-regiao' ? 'active' : '' }}"
                                href="{{ route('listar-regiao') }}">
                                <span class="nav-link-text ms-1">Região</span>
                            </a>
                        </li>

                        {{-- Lista de Departamentos --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'listar-departamento' ? 'active' : '' }}"
                                href="{{ route('listar-departamento') }}">
                                <span class="nav-link-text ms-1">Departamento</span>
                            </a>
                        </li>
                    
                        {{-- Lista de Utiizadores --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'listar-utilizador' ? 'active' : '' }}"
                                href="{{ route('listar-utilizador') }}">
                                <span class="nav-link-text ms-1">Utilizador</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>

            </li>

            {{-- 
                Buy Button
                <li class="nav-link mb-0">
                    <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-laravel-livewire"
                        class="btn btn-primary btn-md active px-5 text-white" target="_blank" role="button" aria-pressed="true">
                        Upgrade to PRO</a>
                </li>
            --}}
        </ul>
    </div>
    <div class="sidenav-footer mx-3 mt-3 pt-3">
        <div class="card card-background shadow-none card-background-mask-dark" id="sidenavCard">
            <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')">
            </div>
            <div class="card-body text-left p-3 w-100">
                <div
                    class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                    <i class="ni ni-support-16 text-dark text-gradient text-lg top-0" aria-hidden="true"
                        id="sidenavCardIcon"></i>
                </div>
                <div class="docs-info">
                    <h6 class="text-white up mb-0">Precisa de Apoio?</h6>
                    <p class="text-xs pb-3 font-weight-bold">Entre em contacto</p>
                    <a href="/documentation/bootstrap/overview/soft-ui-dashboard/index.html" target="_blank"
                        class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                </div>
            </div>
        </div>
    </div>
</aside>
