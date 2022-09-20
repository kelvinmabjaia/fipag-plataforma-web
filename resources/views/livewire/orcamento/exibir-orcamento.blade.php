<div class="row">
    <div class="col-lg-12 mx-auto">

        <div class="card py-1 px-4 mb-4">

            <div class="card-header p-3 pb-0">
                <div class="row">

                    <div class="col-3">

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

                    <div class="col-3 ms-auto">
                        <h6 class="mb-3">Orçamento</h6>

                        <div class="d-flex justify-content-between">
                            <span class="mb-2 text-sm"> Orçamento Geral: </span>
                            <span class="text-dark font-weight-bold ms-2">90MT</span>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="mb-2 text-sm"> Orçamento Alocado: </span>
                            <span class="text-dark font-weight-bold ms-2">90MT</span>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <span class="mb-2 text-lg"> Disponível: </span>
                            <span class="text-dark text-lg ms-2 font-weight-bold">105.95MT</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-body p-3 pt-0">

                <hr class="horizontal dark mt-4 mb-4">

                <div class="row">

                    <div class="col-3">
                    <h6 class="mb-3">Histórico</h6>
                    <div class="timeline timeline-one-side">
                    <div class="timeline-block mb-3">
                    <span class="timeline-step">
                    <i class="ni ni-bell-55 text-secondary"></i>
                    </span>
                    <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Order received</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 AM</p>
                    </div>
                    </div>
                    <div class="timeline-block mb-3">
                    <span class="timeline-step">
                    <i class="ni ni-html5 text-secondary"></i>
                    </span>
                    <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Generate order id #1832412
                    </h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:21 AM</p>
                    </div>
                    </div>
                    <div class="timeline-block mb-3">
                    <span class="timeline-step">
                    <i class="ni ni-cart text-secondary"></i>
                    </span>
                    <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Order transmited to courier
                    </h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 8:10 AM</p>
                    </div>
                    </div>
                    <div class="timeline-block mb-3">
                    <span class="timeline-step">
                    <i class="ni ni-check-bold text-success text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Order delivered</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="col-9">
                        <h6 class="mb-3">Centro de Curto</h6>
                        {{-- Tabela de Departamentos --}}
                        <livewire:departamento.tabela-departamento />
                    </div>

                </div>

            </div>
            </b>

        </div>
        </b>

    </div>
    </b>

</div>