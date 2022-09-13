<main class="main-content mt-1 border-radius-lg">

    <div wire:id="1eFTPhU6C3R21Hk4eDSQ" class="container-fluid mt-1">

        <div class="col-11 mx-auto my-4">
            <div class="row">

                <div class="d-flex justify-content-between bd-highlight">

                    <a class="btn btn-outline-secondary" href="{{ route('listar-processo') }}">
                        <span><i class="fa fa-chevron-left fa-lg mt-1" aria-hidden="true"></i></span>
                    </a>
    
                    <div class="row">

                        <div class="d-flex justify-content-between bd-highlight">
                            <button type="button" class="btn bg-gradient-danger mx-1">
                                <span class="pe-2 mt-3"><i class="fas fa-times fa-lg mt-1" aria-hidden="true"></i></span>
                                Rejeitar
                            </button>

                            <button type="button" class="btn bg-gradient-info mx-1">
                                <span class="pe-2 mt-3"><i class="fas fa-check fa-lg mt-1" aria-hidden="true"></i></span>
                                Aprovar
                            </button>

                            <button type="button" class="btn bg-gradient-secondary mx-1">
                                <span class="pe-2 mt-3"><i class="fas fa-share fa-lg mt-1" aria-hidden="true"></i></span>
                                Encaminhar
                            </button>
                        </div>
                        
                    </div>

                </div>
                
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-11 mx-auto mb-3">
            <form class="" action="index.html" method="post">
                <div class="card p-3 mb-3">

                    <div class="card-header text-center">

                        <div class="row justify-content-between">

                            <div class="row">

                                <div class="row justify-content-md-between">

                                    <h3 class="text-start">Estado do Processo</h3>

                                    <div class="col-md-6">

                                        <div class="row mt-5 mb-3 text-start">
                                            <div class="col-md-6">
                                            <h6 class="text-secondary mb-0">Número do Processo:</h6>
                                            </div>
                                            <div class="col-md-6">
                                            <h6 class="text-dark mb-0">{{ $processo->nr }}</h6>
                                            </div>
                                        </div>

                                        <div class="row mb-3 text-start">
                                            <div class="col-md-6">
                                                <h6 class="text-secondary mb-0">Referência:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-dark mb-0">{{ $processo->referencia }}</h6>
                                            </div>
                                        </div>

                                        <div class="row mb-3 text-start">
                                            <div class="col-md-6">
                                                <h6 class="text-secondary mb-0">Data de Submissao:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-dark mb-0">{{ $processo->data_submissao }}</h6>
                                            </div>
                                        </div>

                                        <div class="row mb-3 text-start">
                                            <div class="col-md-6">
                                                <h6 class="text-secondary mb-0">Prazo do Pedido:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-dark mb-0">{{ $processo->data_prazo }}</h6>
                                            </div>
                                        </div>

                                    </div>
        
                                    <div class="col-md-6">

                                        <div class="row mt-5 mb-3 text-start">
                                            <div class="col-md-6">
                                            <h6 class="text-secondary mb-0">Tipo de Pedido:</h6>
                                            </div>
                                            <div class="col-md-6">
                                            <h6 class="text-dark mb-0">{{ $processo->tipo_pedido }}</h6>
                                            </div>
                                        </div>

                                        <div class="row mb-3 text-start">
                                            <div class="col-md-6">
                                                <h6 class="text-secondary mb-0">Orçamento Requisitado:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-dark mb-0">MT {{ $processo->orcamento }}</h6>
                                            </div>
                                        </div>

                                        <div class="row mb-3 text-start">
                                            <div class="col-md-6">
                                                <h6 class="text-secondary mb-0">Orçamento Geral:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-dark mb-0">MT ---</h6>
                                            </div>
                                        </div>

                                        <div class="row mb-3 text-start">
                                            <div class="col-md-6">
                                                <h6 class="text-secondary mb-0">Finalidade:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-dark mb-0">{{ Illuminate\Support\Str::limit($processo->finalidade, 50)  }}</h6>
                                            </div>
                                        </div>

                                    </div>
        
                                </div>

                            </div>

                        </div>

                    </div>

                    <br>

                    <div class="card-body">
                        
                        <div class="row">

                            <div class="col-5" style="border-right: 1px dotted grey;">
                            
                                <div class="row">
                                    <h5 class="mb-3 text-start"> Anexos </h5>
                                    <ul class="list-group px-3">

                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-3 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark font-weight-bold text-sm">Proposta Comercial</h6>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                                    <small>23 - 30 March 2020</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i> Mostrar</button>
                                            </div>
                                        </li>

                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-3 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark font-weight-bold text-sm">Proposta Comercial</h6>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                                    <small>23 - 30 March 2020</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i> Mostrar</button>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                <br>

                                <div class="row">
                                    <h5 class="mb-3 text-start"> Documentos de Entidades </h5>
                                    <ul class="list-group px-3">

                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-3 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark font-weight-bold text-sm">Proposta Comercial</h6>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                                    <small>23 - 30 March 2020</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i> Mostrar</button>
                                            </div>
                                        </li>

                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-3 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark font-weight-bold text-sm">Proposta Comercial</h6>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                                    <small>23 - 30 March 2020</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i> Mostrar</button>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
    
                            </div>
    
                            <div class="col-7 px-5 text-center">
                                <h5> Pré-visualização </h5>

                                <style>
                                    iframe {
                                        display: block;
                                        background: white;
                                        border: none;
                                        height: 512px;
                                        width: 256px;
                                    }
                                </style>
                                <br />
                                <div>
                                    <iframe style="border: 0; border-radius: 6px;" src="@Url.Content("~/Content/"+@Model.pasta+""+@Model.nome_ficheiro+"")" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                </div>

                                <div class="text-end">
                                    <button class="btn btn-icon btn-sm btn-outline-dark" type="button">
                                      <span class="btn-inner--text">Imprimir</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="card-footer mt-5">
                        <div class="row">
                            <div class="col-lg-5 text-left">
                            <h5>Thank you!</h5>
                            <p class="text-secondary text-sm">If you encounter any issues related to the invoice you
                            can contact us at:</p>
                            <h6 class="text-secondary mb-0">
                            email:
                            <span class="text-dark">support@creative-tim.com</span>
                            </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    
</main>