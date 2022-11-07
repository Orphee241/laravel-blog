@extends('layout.app')

@section('title')
    Formations | Digitarea
@endsection
@section('content')
<div class="formationsTitre container-fluid">
    <h2 class="" style="color:#211061; font-weight:800">Formations</h2>
</div>
<div style="background-color: rgb(255, 255, 255)" class="container-fluid formations">
    <h3 class="" style="color:#211061; font-weight:800">Allez encore plus loin</h3>
    <div class="row">
      <div class=" col-lg-7 col-md-12 col-sm-12" style="font-size: 18px; ">
        Vous souhaitez <strong style="color:#211061">approfondir vos connaissances ?</strong><br>
        Vous êtes au bon endroit! <br>
        <strong style="color:#211061">Digitarea</strong> met également à votre disposition des formations pour vous aider à résoudre des problèmes
        plus ou moins complexes.<br>
      </div>
      <div style="padding-left: 5em; margin-top: -5em" class="interrogation justify-content-center col-lg-5">
        <img class="" width="" src="{{asset("/img/formation.png")}}" alt="">
      </div>
    </div>
  </div>
  <div style="background-color: rgb(255, 255, 255)" class="container-fluid formations">
    <h3 class="" style="color:#211061; font-weight:800">
        Formations gratuites<span style="color:#ffc011"> Gratuites</span>
    </h3>
    <div class="row">
      <div class=" col-lg-7 col-md-12 col-sm-12" style="font-size: 18px; ">
        
      </div>
      <div style="padding-left: 5em; margin-top: -5em" class="interrogation justify-content-center col-lg-5">
        <img class="" width="" src="{{asset("/img/formation.png")}}" alt="">
      </div>
    </div>
  </div>
  <div style="background-color: rgb(255, 255, 255)" class="container-fluid formations">
    <h3 class="" style="color:#211061; font-weight:800">
        Formations <span style="color:#ffc011">Premium</span>
        <i style="color:#ffc011" class="fa-sharp fa-solid fa-crown"></i>
    </h3>
    <div class="row">
      <div class=" col-lg-7 col-md-12 col-sm-12" style="font-size: 18px; ">
      </div>
      <div style="padding-left: 5em; margin-top: -5em" class="interrogation justify-content-center col-lg-5">
        <img class="" width="" src="{{asset("/img/formation.png")}}" alt="">
      </div>
    </div>

  </div>
  <footer style="background-color: #13083b" class="container-fluid pt-2 homeFooter ">
    <div class="row">
      <div class="py-4 col-lg-12">
        <p class="text-center text-white">Copyright &copy; DIgitarea {{date("Y")}}</p>
        <p class="text-center text-white">Conception GONA</p>
      </div>
    </footer>
@endsection