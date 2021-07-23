@extends('layout.base')
@section('titulo')
    Registro
@endsection
@section('contenido')
    <div class="columns is-multiline is-centered">
        <div class="column is-12">
            <h2 class="title has-text-centered"> Registro </h2>
        </div>
        <div class="column is-half is-8">
            <form id="form-login">
                <div class="field">
                    <label class="label" for="input-name">Name</label>
                    <div class="control">
                        <div class="control">
                            <input class="input" type="text" name="name"
                                   id="input-name">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="input-email">Email</label>
                    <div class="control">
                        <div class="control">
                            <input class="input" type="text" name="email"
                                   id="input-email">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="input-email">Password</label>
                    <div class="control">
                        <div class="control">
                            <input class="input" type="password" name="password" id="input-password">
                        </div>
                    </div>
                </div>
                <div class="control">
                    <button class="button is-success" id="btn-register">Registrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('javascript')
    const formLogin = document.getElementById('form-login');
    const nameInput = document.getElementById('input-name');
    const emailInput = document.getElementById('input-email');
    const passwordInput = document.getElementById('input-password');
    const btnRegister = document.getElementById('btn-register');

    formLogin.addEventListener('submit', async(evt) => {
    evt.preventDefault();
    btnRegister.classList.add('is-loading');
    const body = {
    name: nameInput.value,
    email: emailInput.value,
    password: passwordInput.value
    }
    const {data} = await axios.post('/register', body);
    btnRegister.classList.remove('is-loading');
    if(data.ok) return window.location.href = `/login?email=${body.email}`
    alert(data.msg)
    })
@endsection
