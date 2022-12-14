<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            
                            {{-- LOGOTIPO FIPAG --}}
                            <img src="../assets/img/fipag-logo.png" class="navbar-brand-img mb-3" alt="..." height="32px">

                            <p class="mb-0">{{__('Faça login com suas credenciais.') }}</p>
                            <p class="mb-0 text-sm">{{__('Exemplo:') }} {{ __('Email ') }}<b>{{ __('user@fipag.co.mz') }}</b> | {{ __('Senha ') }}<b>{{ __('secreto') }}</b></p>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="login" action="#" method="POST" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Senha') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input wire:model="password" id="password" type="password" class="form-control"
                                            placeholder="Senha" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                        id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">{{ __('Lembrar') }}</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-dark w-100 mt-4 mb-0">{{ __('Acessar') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <small class="text-muted">{{ __('Esqueceu da senha? Redefina sua senha') }} <a
                                    href="{{ route('forgot-password') }}"
                                    class="text-info text-dark font-weight-bold">{{ __('aqui!') }}</a></small>
                            <p class="mb-4 text-sm mx-auto">
                                {{ __('Não tem uma conta?') }}
                                <a href="{{ route('sign-up') }}"
                                    class="text-info text-dark font-weight-bold">{{ __('Cadastre-se.') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                            style="background-image:url('../assets/img/curved-images/curved-water.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
