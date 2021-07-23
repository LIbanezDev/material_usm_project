@extends('layout.base')
@section('titulo')
    Material USM | Login
@endsection
@section('contenido')
    <div class="columns">
        <div class="column">
            <form id="form-login">
                <div class="field">
                    <label class="label" for="input-email">Email</label>
                    <div class="control">
                        <div class="control">
                            <input class="input" value="lucas.ignacio@gmail.com" type="text" name="email"
                                   id="input-email">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="input-email">Password</label>
                    <div class="control">
                        <div class="control">
                            <input class="input" type="password" value="password" name="password" id="input-password">
                        </div>
                    </div>
                </div>
                <div class="control">
                    <button class="button is-success" id="btn-login">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('javascript')
    const formLogin = document.getElementById('form-login');
    const emailInput = document.getElementById('input-email');
    const passwordInput = document.getElementById('input-password');
    const btnLogin = document.getElementById('btn-login');

    formLogin.addEventListener('submit', async (evt) => {
    btnLogin.classList.add('is-loading');
        evt.preventDefault();
    const {data} = await axios.post('/login', {
    email: emailInput.value,
    password: passwordInput.value
    });
    btnLogin.classList.remove('is-loading');
    if(data.ok) window.location.href = '/';
    else alert(data.msg);
    })
@endsection
