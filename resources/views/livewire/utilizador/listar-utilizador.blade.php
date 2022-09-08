<div class="main-content">

    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white"><strong>Add, Edit, Delete features are not functional!</strong> This is a
            <strong>PRO</strong> feature!
            Click <strong><a href="https://www.creative-tim.com/live/soft-ui-dashboard-pro-laravel" target="_blank"
                    class="text-white">here</a></strong>
            to see the PRO
            product!</span>
    </div>

    <div class="row px-4 mb-4">
        <div class="col-12">
            <div class="card p-4">

                <div class="d-flex mb-4 flex-row justify-content-between">
                    <h5 class="mb-0">Processos</h5>

                    <button type="button" class="btn bg-gradient-info btn-icon" data-bs-toggle="modal" data-bs-target="#modal-form">
                        <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        <span class="btn-inner--text">&nbsp; Adicionar</span>
                    </button>

                </div>
                
                {{-- Tabela de Utilizadores --}}
                <livewire:users-table />

                <div class="col-md-4">
                    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" >
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body p-0">
                            <div class="card card-plain">

                                <div class="card-header text-left">
                                    <h5 class="font-weight-bolder text-dark text-gradient">Criar Utilizador</h5>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                
                                <div class="card-body py-0">
                                
                                    {{-- Formulário para Criar Utilizador --}}
                                    <livewire:utilizador.criar-utilizador />
                                
                                </div>
                                
                                <div class="card-footer text-center px-lg-2 px-1">
                                
                                    <p class="text-sm text-muted mx-auto">
                                        Formulário feito com <i style="font-size: .65rem" class="ni ni-favourite-28"></i> pela
                                        <a href="javascript:;" class="text-info text-dark font-weight-bold">FastTech</a>
                                    </p>
                                    
                                </div>
                
                            </div>
                
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <script type="text/javascript">
                    jQuery.("#modal-form").modal('show');                
                </script>

                
            </div>
        </div>
    </div>

</div>


