@extends('layout.app')

@section('title')
    Inscription
@endsection
@section('content')

<div class="signup container mt-5">
    <section class="">
    <div class="container-fluid h-custom">
      <div class="row  d-flex  align-items-center h-100">
        <div class="col-md-8 col-lg-6  ">
          {{-- Message success --}}
                {{-- @if($errors->any())
                  <div>
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger col-lg-8">{{$error}}</p>
                    @endforeach
                  </div>
                @endif  --}}
          <form class="" action="{{URL::to('/user-signup')}}" method="POST">
            @csrf
            <h2 style="color:#211061" class="mb-4 titre-connexion">Inscription</h2>
            @if(Session::has("success"))
              <div class="col-lg-12 alert alert-success">
                  {{Session::get('success')}}
              </div>
            @endif
            @if(Session::has("error"))
            <div class="col-lg-12 alert alert-danger">
                {{Session::get('error')}}
            </div>
          @endif
            <!-- Email pseudo -->
            <div class="form-outline mb-4">
              <label style="color: #211061" class="form-label" for="form3Example3">Pseudo</label>
            <input style="" type="text" name="pseudo" id="" class="@error('pseudo') is-invalid @enderror   form-control"
              placeholder="Entrer un pseudo" />
              @error("pseudo")<span class="text-danger ">{{$message}}</span> @enderror
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label style="" class="form-label" for="form3Example3">Adresse email</label>
              <input style="" type="email" name="email" id="" class="@error('email') is-invalid @enderror  form-control"
                placeholder="Entrer une adresse email valide" />
                @error("email")<span class="text-danger ">{{$message}}</span> @enderror
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
                <label style="" class="form-label" for="form3Example4">Mot de passe</label>
              <input style="" type="password" name="password" id="" class="@error('password') is-invalid @enderror  form-control"
                placeholder="Entrer votre mot de passe" />
                @error("password")<span class="text-danger ">{{$message}}</span> @enderror
            </div> 
            <div class=" text-lg-start mt-2 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 1rem; background-color:#211061; border: none; padding-right: 1rem; padding-top: 3px; padding-bottom: 5px;">Inscription</button>
            </div>
  
          </form>
        </div>
        <div class="image-connexion col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              class="img-fluid" alt="Sample image">
          </div>
      </div>
    </div>
    </section>
</div>
    @endsection
