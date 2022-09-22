<div class="main-content">
    <div class="row px-4 mb-4">
        <div class="col-12">
            <div class="card p-4">
    
                <div class="card-header p-3 pb-0">
                    <div class="row">
    
                        <div class="col-12 col-lg-3 col-md-6 col-sm-12">
    
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                <h1 class="mb-3 text-sm">Região {{ $regiao->regiao }}</h1>
                                <span class="mb-2 text-xs">Director: <span class="text-dark font-weight-bold ms-2">Viking Burrito</span></span>
                                <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-2 font-weight-bold">oliver@burrito.com</span></span>
                                </div>
                                </li>
                            </ul>
    
                        </div>
    
                        <div class="col-12 col-lg-3 col-md-6 col-sm-12  ms-auto">
                            <h6 class="mb-3">Orçamento</h6>
    
                            <!-- Orçamento Geral -->
                            <div class="d-flex justify-content-between">
                                <span class="mb-2 text-sm"> Orçamento Geral: </span>
                                <span class="text-secondary font-weight-bold ms-2">
                                    {{ number_format($regiao->orcamento, 2) }} MT
                                </span>
                            </div>
    
                            <!-- Orçamento Alocado -->
                            <div class="d-flex justify-content-between">
                                <span class="mb-2 text-sm"> Orçamento Alocado: </span>
                                <span class="text-secondary font-weight-bold ms-2">
                                    {{ number_format($regiao->departamentos->sum('orcamento'), 2) }} MT
                                </span>
                            </div>
    
                            <!-- Orçamento Disponível -->
                            <div class="d-flex justify-content-between mt-4">
                                <span class="mb-2 text-lg"> Disponível: </span>
                                <span class="text-dark text-lg ms-2 font-weight-bold">
                                    {{ number_format($regiao->orcamento - $regiao->departamentos->sum('orcamento'), 2) }} MT
                                </span>
                            </div>
                        </div>
    
                    </div>
                </div>
    
                <div class="card-body p-3 pt-0">
    
                    <hr class="horizontal dark mt-4 mb-4">
    
                    <div class="row">
    
                        <div class="col-12 col-md-3 col-sm-12">
    
                            <h6 class="mb-3">Histórico</h6>
    
                            <div class="timeline timeline-one-side">
    
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-archive-2 text-dark"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Derpatamento x  
                                            <span class="text-muted text-sm"> Processo #1024 </span> </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                                        <p class="text-xs mt-3 mb-2">
                                            People care about how you see the world.
                                        </p>
                                        <span class="badge badge-sm bg-gradient-secondary">Submetido</span>
                                    </div>
                                </div>
    
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-fat-remove text-danger text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Derpatamento x  
                                            <span class="text-muted text-sm"> Processo #1024 </span> </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                                        <p class="text-xs mt-3 mb-2">
                                            People care about how you see the world.
                                        </p>
                                        <span class="badge badge-sm bg-gradient-danger">Recusado</span>
                                    </div>
                                </div>
    
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-curved-next text-warning text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Derpatamento x  
                                            <span class="text-muted text-sm"> Processo #1024 </span> </h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                                            <p class="text-xs mt-3 mb-2">
                                                People care about how you see the world.
                                            </p>
                                            <span class="badge badge-sm bg-gradient-warning">Pendente</span>
                                    </div>
                                </div>
    
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-check-bold text-success text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Derpatamento z - <span class="text-muted text-sm"> Processo #1024 </span> </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                                        <p class="text-xs mt-3 mb-2">
                                            People care about how you see the world.
                                        </p>
                                        <span class="badge badge-sm bg-gradient-success">Aceite</span>
                                    </div>
                                </div>
    
                            </div>
    
                        </div>
    
                        <div class="col-12 col-md-9 col-sm-12">
                            <h6 class="mb-3">Centro de Curto</h6>
                            {{-- Tabela de Departamentos --}}
                            <livewire:departamento.tabela-departamento :regiao="$regiao->id"  />
                        </div>
    
                    </div>
    
                </div>
                </b>
    
            </div>
            </b>
    
        </div>
        </b>
    
    </div>
</div>