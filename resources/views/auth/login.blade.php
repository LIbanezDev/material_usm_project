@extends('layout.base')
@section('titulo')
    Material USM | Login
@endsection
@section('contenido')
    <div class="columns is-multiline is-centered">
        <div class="column is-12">
            <h2 class="title has-text-centered"> Ingresar </h2>
        </div>
        <div class="column is-6">
            <div class="box">
                <form id="form-login" autocomplete="off">
                    <div class="field">
                        <label class="label" for="input-email">Email</label>
                        <div class="control">
                            <div class="control">
                                <input required class="input" value="{{app('request')->input('email')}}" type="text" name="email"
                                       id="input-email">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="input-password">Contraseña</label>
                        <div class="control">
                            <div class="control">
                                <input required class="input" type="password" name="password" id="input-password">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" id="checkbox-remember">
                            Mantener sesión iniciada
                        </label>
                    </div>
                    <div class="control">
                        <button class="button is-success" id="btn-login">
                        <span class="icon is-small">
                          <i class="fas fa-sign-in-alt"></i>
                        </span>
                            <strong>
                                Ingresar
                            </strong>
                        </button>
                    </div>
                </form>
                <div class="has-text-right">
                    <a href="{{route('Auth::register')}}">
                        <strong>Ir a registro</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    const formLogin = document.getElementById('form-login');
    const emailInput = document.getElementById('input-email');
    const passwordInput = document.getElementById('input-password');
    const rememberCheckbox = document.getElementById('checkbox-remember');
    const btnLogin = document.getElementById('btn-login');

    formLogin.addEventListener('submit', async (evt) => {
    btnLogin.classList.add('is-loading');
    evt.preventDefault();
    const {data} = await axios.post('/login', {
    email: emailInput.value,
    password: passwordInput.value,
    remember: rememberCheckbox.checked
    });
    btnLogin.classList.remove('is-loading');
    if(data.ok) return window.location.href = '/';
    alert(data.msg);
    })
@endsection
