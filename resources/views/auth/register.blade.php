@extends('layout.base')
@section('titulo')
    Registro
@endsection
@section('contenido')
    <div class="columns">
        <div class="column">
            <form id="form-login">
                <div class="field">
                    <label class="label" for="input-name">Name</label>
                    <div class="control">
                        <div class="control">
                            <input class="input" value="Amazing" type="text" name="email"
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
    const emailInput = document.getElementById('input-email');
    const passwordInput = document.getElementById('input-password');
    const btnRegister = document.getElementById('btn-register');
@endsection
