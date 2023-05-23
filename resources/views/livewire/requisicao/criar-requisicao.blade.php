<div class="main-content">

    <div class="container-fluid py-4">

        <div class="row">

            <div class="col-lg-8 mx-auto">

                <div class="card px-4 py-2 mb-4">

                    <!-- BUTTONS -->
                    <div class="card-header p-3 pb-0">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div>
                                <h6>REC - Requisicação</h6>

                                <p class="text-sm mb-0">
                                    Série: <b>2023</b>
                                </p>

                                <p class="text-sm mb-0">
                                    Centro de Custo: <b>{{ $centro_desc }} ( {{ $centro }} )</b>
                                </p>
                            </div>

                            <div class="my-auto">
                                <button
                                    wire:click="requisitar()"
                                    type="button" class="btn bg-gradient-info mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">
                                    Requisitar
                                </button>
                                <button type="button" class="btn bg-gradient-secondary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">Limpar</button>
                            </div>

                        </div>

                    </div>

                    <hr class="horizontal dark mt-0 mb-4">
                    
                    <!-- CABEÇALHO -->
                    <div class="card-body p-3 pt-0">

                        <div class="row">

                            <div class="col-md-8 col-sm-12">

                                <div class="col-md-12 col-sm-6 mb-3">
                                    <label>Fornecedor</label>
                                    <select class="form-select" id="select_fornecedor" wire:model="select_fornecedor">
                                        <option selected disabled></option>
                                        @foreach ($fornecedores as $fornecedor)
                                            <option value="{{ $fornecedor->Fornecedor }}">{{ $fornecedor->Fornecedor }} - {{ $fornecedor->Nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Data Doc.</label>
                                        <input class="form-control" type="date" id="data_doc" wire:model="data_doc"/>
                                        @error('data_doc') <span>{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>Data Venc.</label>
                                        <input class="form-control" type="date" id="data_venc" wire:model="data_venc"/>
                                        @error('data_venc') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3 col-sm-12 ms-auto px-3">
                                
                                <div class="d-flex justify-content-between">
                                    <span class="mb-2 text-sm">
                                        Total sem IVA:
                                    </span>
                                    <span class="text-dark ms-2 font-weight-bold">{{ $total_semIVA }} MT</span>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <span class="text-sm">
                                        IVA:
                                    </span>
                                    <span class="text-dark ms-2 font-weight-bold">{{ $total_IVA }} MT</span>
                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <span class="mb-2 text-lg">
                                        Total:
                                    </span>
                                    <span class="text-dark text-lg ms-2 font-weight-bold">{{ $total_comIVA }} MT</span>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- LINHAS -->
                    <div class="card-footer p-3 pt-1">

                        <div class="row p-3">

                            <button 
                                class="btn btn-dark btn-sm mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2"
                                type="button" wire:click="adicionarLinha">
                                <i class="fa fa-plus me-1 text-sm" aria-hidden="true"></i>
                                <span class="text-sm">Adicionar</span>
                            </button>
                            
                        </div>

                        <div class="row p-3 bg-gray-100 border-radius-lg">

                            <div class="col-md-6">
                                <label>Artigo</label>
                                <select class="form-select" id="select_artigo" wire:model="select_artigo">
                                    <option selected disabled></option>
                                    @foreach ($artigos as $artigo)
                                        <option value="{{ $artigo->Artigo }}">{{ $artigo->Artigo }} - {{ $artigo->Descricao }}</option>
                                    @endforeach
                                </select>
                                @error('select_artigo') <span>{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="col-md-2">
                                <label>Quantidade</label>
                                <input class="form-control" type="number" id="input_quant" wire:model="input_quant" />
                                @error('input_quant') <span>{{ $message }}</span> @enderror
                            </div>

                            <div class="col-md-2">
                                <label>Preço</label>
                                <input class="form-control" type="number" id="input_preco" wire:model="input_preco" />
                                @error('input_preco') <span>{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="col-md-2 d-flex align-items-center">
                                <button 
                                    class="btn bg-gradient-info mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2"
                                    type="button" wire:click="adicionarLinha">
                                    Adicionar
                                </button>
                            </div>
                            
                        </div>

                        <table class="table align-items-center mt-4 mb-0">
                    
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Artigo</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IVA</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantidade</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Preço</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                    
                                <tr>

                                    @foreach ($linhas as $index => $linha)
                                    <tr>
                                        <td><input class="form-control" type="text" wire:model="linhas.{{ $index }}.Artigo" /></td>
                                        <td><input class="form-control" type="text" wire:model="linhas.{{ $index }}.IVA" /></td>
                                        <td><input class="form-control" type="text" wire:model="linhas.{{ $index }}.Quantidade" /></td>
                                        <td><input class="form-control" type="text" wire:model="linhas.{{ $index }}.PrecUnit" /></td>
                                        <td>
                                            <button 
                                                wire:click="removerLinha({{ $index }})"
                                                class="btn bg-gradient-danger mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2"
                                                type="button">
                                                Remover
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                    
                                </tr>
                    
                            </tbody>
                    
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>