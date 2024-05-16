@extends('layouts.applogin')

@section('title', 'Login')

@section('content')
<style>
</style>
    <div class="d-flex container justify-content-center mt-5 gap-3">
        <!-- /.login-logo -->
        <div class="bg-white rounded col-5 ">
            
            <div class="card-header text-center  mt-5 ">
                <a href="../../index2.html" class="h1">El Vecindario</a>
            </div>
            <div class="card-body px-3">
                <p class="login-box-msg pt-3">Inicio de  Sesion</p>

                <form method="POST" action="{{ route('login') }}">
                 @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3 ">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-block bg-success">{{ ('Ingresar') }}</button>
                        </div>
                        <div class="col-6 ">
                            <a href="{{route('register')}}" class="btn  btn-block  bg-success">Registro</a>
                        </div>
                       
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                                <p class="mb-1">

                                    @if (Route::has('password.request'))
                                         <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste la contraseña?') }}
                                         </a>
                                    @endif
                                </p>  
                        </div>                       
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="col-3 bg-light rounded  justify-content-center align-items-center">
            <img src="{{ asset('backend/dist/img/mercado/logoo.png') }}" class="img-fluid " alt="logo">
            <div class="w-100 bg-info">
                
            </div>
        </div>
    </div>
    <!-- /.login-box -->
@endsection
