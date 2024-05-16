@extends('layouts.applogin')

@section('content')

<div class="d-flex container justify-content-center mt-5 gap-3 ">
  <div class="bg-white rounded col-5 ">
    <div class=" text-center mt-5 ">
      <a href="../../index2.html" class="h1"><b>El Vecindario</b></a>
    </div>
    <div class="card-body px-3">
      <p class="login-box-msg">registrate nuevo estudiante</p>

      <form action="{{ route('register') }}" method="post">
      @csrf
        <div class="input-group mb-3">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder= "Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder= "Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder= "Confirmar">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="d-flex container mb-3 mt-5">
          <div class="col-4">
            <button type="submit" class="btn btn-block bg-success">Registrar</button>
          </div>
          <div class="ms-auto ">
            <a  class="text-success" href="{{route('login')}}" class=" ">Ya tengo cuenta</a>
          </div>
        </div>
      </form>
      
    </div>
  </div>
  <div class="col-3 bg-light rounded">
    <img src="{{ asset('backend/dist/img/mercado/logoo.png') }}" class="img-fluid" alt="logo">
    <p class="bg-success bg-gradient pt-2 px-4 rounded shadow-lg ">
    Con mochila al hombro y sueños en el corazón, damos los primeros pasos en esta emocionante aventura llamada educación. En el colegio, aprenderemos, creceremos y construiremos recuerdos que durarán toda la vida.
    </p>
  </div>
</div>
@endsection