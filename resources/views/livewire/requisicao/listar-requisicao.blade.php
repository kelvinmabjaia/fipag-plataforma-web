<div class="main-content">
    
    @if ( session()->has('success') )
        <div class="alert alert-success mx-4 text-white" role="alert">
            <strong>{{ session('success') }}</strong> 
        </div>
    @endif
    


    <div class="row p-4 mb-4">

        <div class="row">
            <div class="col-12">
                <div class="d-md-flex justify-content-between py-3">

                    <div class="d-md-flex">
                        <div>
                            <h5>Requisições</h5>
                        </div>
                    </div>
            
                    <div class="d-md-flex">
                        <div>
                            <a href="{{route('criar-requisicao')}}" class="btn btn-icon btn-5 px-5 bg-gradient-info mb-0">
                                <i class="fa fa-plus me-1 text-sm" aria-hidden="true"></i>
                                <span class="text-sm">Criar Requisição</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card p-4">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pendente-tab" data-bs-toggle="tab" data-bs-target="#pendente" type="button" role="tab" aria-controls="pendente" aria-selected="true">
                                
                                <i class="fa fa-folder-o me-1 text-sm" aria-hidden="true"></i>
                                <span class="text-sm">Pendentes</span>
                                <span class="badge bg-dark">
                                    {{ $quantEstado[0] }}
                                </span>

                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="requer-tab" data-bs-toggle="tab" data-bs-target="#requer" type="button" role="tab" aria-controls="requer" aria-selected="false">
                                
                                <i class="fa fa-money me-1 text-sm" aria-hidden="true"></i>
                                <span class="text-sm">Requer Orçamento</span>                
                                <span class="badge bg-dark">
                                    {{ $quantEstado[1] }}
                                </span>

                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fechado-tab" data-bs-toggle="tab" data-bs-target="#fechado" type="button" role="tab" aria-controls="fechado" aria-selected="false">
                                
                                <i class="fa fa-close me-1 text-sm" aria-hidden="true"></i>
                                <span class="text-sm">Fechados</span>
                                <span class="badge bg-dark">
                                    {{ $quantEstado[2] }}
                                </span>

                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="aprovado-tab" data-bs-toggle="tab" data-bs-target="#aprovado" type="button" role="tab" aria-controls="aprovado" aria-selected="false">
                                
                                <i class="fa fa-check-circle-o me-1 text-sm" aria-hidden="true"></i>
                                <span class="text-sm">Aprovados</span>
                                <span class="badge bg-dark">
                                    {{ $quantEstado[3] }}
                                </span>

                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="todos-tab" data-bs-toggle="tab" data-bs-target="#todos" type="button" role="tab" aria-controls="todos" aria-selected="false">
                                
                                <i class="fa fa-book me-1 text-sm" aria-hidden="true"></i>
                                <span class="text-sm">Todos</span>
                                <span class="badge bg-dark">
                                    {{ $quantEstado[4] }}
                                </span>

                            </button>
                        </li>
                    </ul>
            
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active pt-4" id="pendente" role="tabpanel" aria-labelledby="pendente-tab">
                            {{-- Tabela de Requisições --}}
                            <livewire:requisicao.tabela-requisicao :estado="'P'"/>
                        </div>

                        <div class="tab-pane fade pt-4" id="requer" role="tabpanel" aria-labelledby="requer-tab">
                            {{-- Tabela de Requisições --}}
                            <livewire:requisicao.tabela-requisicao :estado="'R'"/>
                        </div>

                        <div class="tab-pane fade pt-4" id="fechado" role="tabpanel" aria-labelledby="fechado-tab">
                            {{-- Tabela de Requisições --}}
                            <livewire:requisicao.tabela-requisicao :estado="'F'"/>
                        </div>

                        <div class="tab-pane fade pt-4" id="aprovado" role="tabpanel" aria-labelledby="aprovado-tab">
                            {{-- Tabela de Requisições --}}
                            <livewire:requisicao.tabela-requisicao :estado="'A'"/>
                        </div>

                        <div class="tab-pane fade pt-4" id="todos" role="tabpanel" aria-labelledby="todos-tab">
                            <livewire:requisicao.tabela-requisicao/>
                        </div>



                    </div>
    
                </div>
            </div>
        </div>

    </div>

</div>
