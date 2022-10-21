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
          <form class="" action="/signin" method="post">
            <h2 style="color:#211061" class="mb-4 titre-connexion">Inscription</h2>
            <!-- Email pseudo -->
            <div class="form-outline mb-4">
              <label style="color: #211061" class="form-label" for="form3Example3">Pseudo</label>
            <input style="border-color: #211061;" type="text" name="pseudo" id="form3Example3" class="form-control form-control-lg"
              placeholder="Entrer un pseudo" />
          </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label style="color: #211061" class="form-label" for="form3Example3">Adresse email</label>
              <input style="border-color: #211061;" type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Entrer une adresse email valide" />
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
                <label style="color: #211061" class="form-label" for="form3Example4">Mot de passe</label>
              <input style="border-color: #211061;" type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Entrer votre mot de passe" />
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
