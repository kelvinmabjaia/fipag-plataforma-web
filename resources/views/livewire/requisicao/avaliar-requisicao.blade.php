<div class="main-content">

    <div class="container-fluid py-4">

        <div class="row">

            <div class="col-9 mx-auto">

                <div class="row">
                    <div class="col-12">
                        <div class="d-md-flex justify-content-between py-3">
        
                            <div class="d-md-flex">
                                <div>
                                    <h5>Documento #{{ $requisicao->Documento }}</h5>
                                </div>
                            </div>
                    
                            <div class="d-md-flex">
                                    
                                <div class="my-auto">
                                    <button wire:click="requisitar()" type="button" class="btn btn-sm bg-gradient-success mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">
                                        <i class="fa fa-check me-1 text-sm" aria-hidden="true"></i>
                                        <span class="text-sm">Aprovar</span>
                                    </button>
                                    <button wire:click="requisitar()" type="button" class="btn btn-sm bg-gradient-info mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">
                                        <i class="fa fa-money me-1 text-sm" aria-hidden="true"></i>
                                        <span class="text-sm">Orçamentar</span>
                                    </button>
                                    <button wire:click="requisitar()" type="button" class="btn btn-sm bg-gradient-danger mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">
                                        <i class="fa fa-close me-1 text-sm" aria-hidden="true"></i>
                                        <span class="text-sm">Fechar</span>
                                    </button>
                                    <button wire:click="requisitar()" type="button" class="btn btn-sm bg-gradient-secondary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">
                                        <i class="fa fa-print me-1 text-sm" aria-hidden="true"></i>
                                        <span class="text-sm">Imprimir</span>
                                    </button>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card py-3">
                        
                        <div class="card-header">

                            <div class="d-flex justify-content-between align-items-top">

                                <div class="col-md-5 col-sm-12">
                                    <!-- Numero Documento -->
                                    <div class="d-flex justify-content-between mb-2">
                                        
                                        <div>
                                            Número:
                                        </div>

                                        <div>
                                            <b> {{ $requisicao->Documento }} </b>
                                        </div>

                                    </div>
                                    <!-- Estado Documento -->
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        
                                        <div>
                                            Estado:
                                        </div>

                                        <div>
                                            @switch($requisicao->CDU_Estado)
                                                @case('A')
                                                    <span class="badge badge-success"> Aprovado </span>
                                                    @break
                                                @case('R')
                                                    <span class="badge badge-info"> Requer Aprovação </span>
                                                    @break
                                                @case('F')
                                                    <span class="badge badge-danger"> Fechado </span>
                                                    @break
                                                @default
                                                    <span class="badge badge-secondary"> Pendente </span>
                                            @endswitch 
                                        </div>

                                    </div>

                                    <hr class="bg-white">

                                    <!-- Data Documento -->
                                    <div class="d-flex justify-content-between mb-2">
                                        
                                        <div>
                                            Data Doc.:
                                        </div>

                                        <div>
                                            <b> {{ date('d/m/Y', strtotime( $requisicao->DataDoc)) }} </b>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-5 col-sm-12">
                                    <!-- Fornecedor -->
                                    <div class="d-flex justify-content-between mb-2">
                                        
                                        <div>
                                            Fornecedor:
                                        </div>

                                        <div>
                                            <b> {{ $fornecedor }} </b>
                                        </div>

                                    </div>
                                    <!-- Centro de Custo -->
                                    <div class="d-flex justify-content-between mb-2">
                                        
                                        <div>
                                            Centro de Custo:
                                        </div>

                                        <div>
                                            ...
                                        </div>

                                    </div>

                                    <hr class="bg-white">

                                    <!-- IVA -->
                                    <div class="d-flex justify-content-between mb-2">
    
                                        <div>
                                            IVA:
                                        </div>

                                        <div>
                                            {{ number_format($requisicao->TotalIva, 2)  }} MT
                                        </div>

                                    </div>
                                    <!-- IVA -->
                                    <div class="d-flex justify-content-between mb-2">
    
                                        <div>
                                            Total Documento:
                                        </div>

                                        <div>
                                            {{ number_format($requisicao->TotalDocumento, 2)  }} MT
                                        </div>

                                    </div>

                                </div>

                            </div>
                            
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-12">

                                    <div class="table-responsive">

                                        <table class="table text-right">

                                            <thead class="bg-default">
                                                <tr>
                                                    <th scope="col">Artigo</th>
                                                    <th scope="col">Descrição</th>
                                                    <th scope="col">Preço Unit</th>
                                                    <th scope="col">Quantidade</th>
                                                    <th scope="col">Preço</th>
                                                    <th scope="col">IVA</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($linhas as $linha)
                                                    <tr>
                                                        <td class="ps-4">{{ $linha->Artigo }}</td>
                                                        <td class="ps-4">{{ $linha->Descricao }}</td>
                                                        <td class="text-end">{{ number_format($linha->PrecUnit, 2) }}</td>
                                                        <td class="ps-4">{{ $linha->Quantidade }}</td>
                                                        <td class="text-end">{{ number_format($linha->TotalIliquido, 2) }}</td>
                                                        <td class="ps-4">{{ number_format($linha->TotalIva, 2) }}</td>
                                                        <td class="text-end">{{ number_format($linha->TotalIliquido + $linha->TotalIva, 2) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="h6 ps-4" colspan="2">Total</th>
                                                    <th colspan="1" class="text-end h5 ps-4">{{ number_format($requisicao->TotalDocumento, 2)  }}</th>
                                                </tr>
                                            </tfoot>

                                        </table>
                                        
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                    

            </div>

        </div>

    </div>

</div>