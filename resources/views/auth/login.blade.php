@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">{{ __('E-Mail Address') }}</label>
                <div class="col-sm-4">
                    <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="inputEmail3" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">{{ __('Password') }}</label>
                <div class="col-sm-4">
                    <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputPassword3" placeholder="{{ __('Password') }}" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
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
</div>
@endsection
