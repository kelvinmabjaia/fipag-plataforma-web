<div class="main-content">

    @if ( session()->has('success') )
        <div class="alert alert-success mx-4 text-white" role="alert">
            <strong>{{ session('success') }}</strong> 
        </div>
    @endif

    <div class="row px-4 mb-4">
        <div class="col-12">
            <div class="card p-4">

                <div class="d-flex mb-4 flex-row justify-content-between">
                    <h5 class="mb-0">Departamento</h5>

                    <button type="button" class="btn bg-gradient-info btn-icon" data-bs-toggle="modal" data-bs-target="#modal-criar-departamento">
                        <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        <span class="btn-inner--text">&nbsp; Adicionar</span>
                    </button>

                </div>
                
                {{-- Tabela de Departamentos --}}
                <livewire:departamento.tabela-departamento />

                <div class="col-md-4">

                    <!-- Modal -->
                    <div class="modal fade" id="modal-criar-departamento" tabindex="-1" role="dialog" aria-labelledby="modal-criar-departamento" aria-hidden="true" >
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body p-0">
                            <div class="card card-plain">

                                <div class="card-header text-left">
                                    <h5 class="font-weight-bolder text-dark text-gradient">Criar Departamento</h5>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                
                                <div class="card-body py-0">
                                
                                    {{-- Formulário para Criar Departamento --}}
                                    .
                                
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
                    <!-- Close Modal -->
                    <script>
                        document.addEventListener('closeCreateModal', () => {
                            $("#modal-criar-departamento").modal('dispose'); // for cleaning a modal form
                        }); 
                    </script>
                </div>


                
            </div>
        </div>
    </div>

</div>


