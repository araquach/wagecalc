@extends('layouts.app')

@section('content')

<h1>Login Form</h1>

                
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">{{ __('E-Mail Address') }}</label>

        <div>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span>
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

        <div>
            <input type="password" name="password" required>

            @if ($errors->has('password'))
                <span>
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div>
        <div>
            <input type="checkbox" name="remember">

            <label for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>

    <div>
        <button type="submit">
            {{ __('Login') }}
        </button>

        <a href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    </div>
</form>

@endsection
