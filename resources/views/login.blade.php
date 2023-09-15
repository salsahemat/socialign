@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')

    <div class="login" id="login">
        <i class="bx bx-x login__close" id="login-close"></i>

        <h2 class="login__title-center">Login</h2>

        <form action="" class="login__form grid">
            <div class="login__content">
                <label for="" class="login__label">Email</label>
                <input type= "email" class="login__input">
            </div>
            <div class="login_content">
                <label for="" class= "login_label">Password</label>
                <input type="password" class="login__input">
            </div>
            <div>
                <a href="#" class="button">Sign in</a>
            </div>
            <div>
                <p class="signup">Not a member? <a href="/regist">Sign up now</a></p>
            </div>
        </form>
    </div>

@endsection
