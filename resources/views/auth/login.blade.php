@extends('layouts.app_login')

@section('content')
<div class="login-register" style="background-image:url({{ ('assets/images/enterprise.png')}});">        
    <div class="login-box card">
        <div class="card-body">
            <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                @csrf
                <h3 class="box-title m-b-20">Entrar</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password" placeholder="Senha">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Entrar</button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Não tem uma conta? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Cadatre-se</b></a></p>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
@endsection
