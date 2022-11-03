@extends('layout.app')
@section('title')
    Connexion
@endsection
  @section('content')
  <div class="login signup container">   
    <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row  d-flex  align-items-center h-100">
        <div class="col-md-8 col-lg-6">
          <form class="" action="{{URL::to("/user-login")}}" method="POST">
            @csrf
            <h2 style="color:#211061; font-weight:800" class="mb-4 titre-connexion">Connexion</h2>
            @if(Session::has("success"))
            <div class="alert alert-success mt-2 col-lg-12">
              {{Session::get("success")}}
            </div>
          @endif
          {{-- Message error --}}
          @if(Session::has("error"))
            <div class="alert alert-danger mt-2 col-lg-12">
              {{Session::get("error")}}
            </div>
          @endif
            <div class="displayError">
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label style="color: #211061" class="form-label" for="form3Example3">Adresse email</label>
              <input  style=";" type="email" name="email" id="form3Example3" class=" @error('email') is-invalid @enderror form-control"
                placeholder="Entrer une adresse email valide" />
                @error("email") <span class="text-danger">{{$message}}</span> @enderror
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
                <label style="color: #211061" class="form-label" for="form3Example4">Mot de passe</label>
              <input  style=";" type="password" name="password" id="form3Example4" class="@error('password') is-invalid @enderror form-control "
                placeholder="Entrer votre mot de passe" />
                @error("password") <span class="text-danger">{{$message}}</span> @enderror
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input  style="border-color: #211061;" class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Se souvenir de moi
                </label>
              </div>
              <a href="#!" class="text-body">Mot de passe oublié ?</a>
            </div>
  
            <div class=" text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 1rem; background-color:#211061; border: none; padding-right: 1rem; padding-top: 3px; padding-bottom: 5px;">Connexion</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Vous n'avez pas de compte ? <a style="color:#211061" href="{{URL::to('pages.signup')}}"
                  class="">Inscription</a></p>
            </div>
  
          </form>
        </div>
        <div class="logoLogin col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              class="img-fluid" alt="Sample image">
          </div>
      </div>
    </div>
    </section>
  </div> 
  <footer style="background-color: #13083b" class="container-fluid pt-2 signupFooter ">
    <div class="row">
      <div class="py-4 col-lg-12">
        <p class="text-center text-white">Copyright &copy; DIgitarea {{date("Y")}}</p>
        <p class="text-center text-white">Conception GONA</p>
      </div>
    </footer>
  @endsection
