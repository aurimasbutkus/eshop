@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">E-mail address</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           id="inputEmail" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required
                           autofocus>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           id="inputPassword" placeholder="{{ __('Password') }}" required>
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="checkboxRemember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="checkboxRemember" class="col-sm-2 form-check-label">Remember me</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
