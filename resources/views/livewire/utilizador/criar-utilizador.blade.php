<form wire:submit.prevent="save">

    <div class="card p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">

        <div class="row mt-3">
            <div class="col-12 col-sm-6">
                <label>Nome</label>
                <input wire:model="nome" class="form-control" type="text" placeholder="ex. Messias"> <!-- onfocus="focused(this)" onfocusout="defocused(this)" -->
            </div>
            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                <label>Apelido</label>
                <input wire:model="apelido" class="form-control" type="text" placeholder="ex. Macamo">
            </div>
        </div>
    
        <div class="row mt-3">
            <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                <label>Email</label>
                <input wire:model="user.email" class="form-control" type="email" placeholder="ex. nome@fipag.co.mz">
            </div>
        </div>
    
        <div class="row mt-3">
            <div class="col-12 col-sm-6">
                <label>Senha</label>
                <input wire:model="password" class="form-control" type="password" placeholder="******">
            </div>
            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                <label>Confirmar senha</label>
                <input wire:model="confirmar" class="form-control" type="password" placeholder="******">
            </div>
        </div>
    
        <div class="button-row d-flex mt-4">
            <button class="btn bg-gradient-info ms-auto mb-0 js-btn-next" type="submit" title="Adicionar">Adicionar</button>
        </div>
    </div>                                    
                                    
</form>