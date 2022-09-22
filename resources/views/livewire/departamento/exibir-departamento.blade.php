<div class="row">
    <div class="col-lg-12 mx-auto">

        <div class="card py-1 px-4 mb-4">

            <div class="card-header p-3 pb-0">
                <div class="row">

                    <div class="col-12 col-lg-3 col-md-6 col-sm-12">

                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column">
                            <h5 class="mb-3 text-md">{{ $departamento->departamento }}</h5>
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
                            <span class="mb-2 text-sm"> Orçamento do Centro de Custo: </span>
                            <span class="text-secondary font-weight-bold ms-2">
                                {{ number_format($departamento->orcamento, 2) }} MT
                            </span>
                        </div>

                        <!-- Orçamento Alocado -->
                        <div class="d-flex justify-content-between">
                            <span class="mb-2 text-sm"> Orçamento Alocado: </span>
                            <span class="text-secondary font-weight-bold ms-2">
                               <!-- { number_format($departamento->processo->sum('orcamento'), 2) }} --> MT 
                            </span>
                        </div>

                        <!-- Orçamento Disponível -->
                        <div class="d-flex justify-content-between mt-4">
                            <span class="mb-2 text-lg"> Disponível: </span>
                            <span class="text-dark text-lg ms-2 font-weight-bold">
                               <!-- { number_format($regiao->orcamento - $regiao->departamentos->sum('orcamento'), 2) }} --> MT
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
                                    <i class="ni ni-bell-55 text-secondary"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Order received</h6>
                                    <p class="text-dark font-weight-bold text-xs text-uppercase mt-1 mb-0">pendente</p>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                                </div>
                            </div>

                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-fat-remove text-danger text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Derpatamento x - <span class="text-muted text-sm"> Processo #1024 </span> </h6>
                                    <p class="text-danger font-weight-bold text-xs text-uppercase mt-1 mb-0">recusado</p>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                                </div>
                            </div>

                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-curved-next text-warning text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Derpatamento x - <span class="text-muted text-sm"> Processo #1024 </span> </h6>
                                    <p class="text-warning font-weight-bold text-xs text-uppercase mt-1 mb-0">EM ANÁLISE</p>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                                </div>
                            </div>

                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-check-bold text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Derpatamento z - <span class="text-muted text-sm"> Processo #1024 </span> </h6>
                                    <p class="text-success font-weight-bold text-xs text-uppercase mt-1 mb-0">Aceite</p>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-9 col-sm-12">
                        <h6 class="mb-3">Processos</h6>
                        {{-- Tabela de Processos :departalento="$departamento->id"   --}}
                        <livewire:processo.tabela-processo />
                    </div>

                </div>

            </div>
            </b>

        </div>
        </b>

    </div>
    </b>

</div>