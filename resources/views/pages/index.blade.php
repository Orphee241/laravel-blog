
@extends('layout.app')
@section('title')
Apprenez gratuitement des tutos en Développement web, Infographie, Marketing digital, MAO...
@endsection
@section('content')
<div class="row header">
  <div class="colHeader col-lg-5 col-md-12 col-sm-12">
    <h1 style="font-weight:900; color: #211061" class="h1Home mt-5">Découvrez plusieurs tutoriels sur le digital Grâce à Digitarea</h1>
    <p style="font-size: 20px" class="">
      Apprenez gratuitement des tutos dans plusieurs domaines : <span style="font-weight: 700; color:#211061">Développement web</span>, <span style="font-weight: 700; color:#211061">Infographie</span>, 
       <span style="font-weight: 700; color:#211061">Marketing digital, </span> <span style="font-weight: 700; color:#211061">MAO...</span>
    </p>
    <a class="voirAstuces mt-2 btn" style="text-decoration: none; font-weight:600" href="{{URL::to("/articles")}}">Découvrir nos tutos</a>
    <a class="creerCompte mt-2 btn" style="text-decoration: none; font-weight:600" href="{{URL::to("/signup")}}">Je crée mon compte</a>
  </div>
  <div class="d-flex justify-content-center col-lg-7 pt-5">
    <img class="headerLogo ml-4 pl-5" src="{{URL::to("/img/digitareaheader3.png")}}" alt="">
  </div>
</div>   
<div style="background-color: rgb(255, 255, 255)" class="container-fluid pt-2 home ">
    <h2 class="pt-3" style="color:#211061; font-weight:800">Qui sommes-nous ?</h2>
    <div class="row">
      <div class="homeAbout col-lg-8 col-md-12 col-sm-12" style="font-size: 18px; ">
        <strong>Digitarea</strong> est une plateforme  qui offre une diversité d'astuces sur des thèmes relatifs au digital: infographie, montage vidéo, développement web, marketing digital, MAO... <br>
        Notre principale mission est de partager nos connaissances avec toutes personnes passionnée du domaine et désireuse d'apprendre de nouvelles choses.             
      </div>
      <div style="padding-left: 9em; margin-top: -1em" class="interrogation justify-content-center col-lg-4">
        <img class="" width="200px" src="{{asset("/img/interrogation.png")}}" alt="">
      </div>
    </div>
</div>
<div style="background-color: rgb(255, 255, 255)" class="home2 container-fluid pt-2">
    <h2 class="mt-3" style="color:#211061; font-weight:800">Tutos récents</h2>
    @if(session()->has("uzer"))
    <div class="success-popup alert alert-success col-lg-6">
      {{session()->get("uzer"). " " ."vous êtes connecté"}}
    </div>
    @endif
    @if($articles->count() > 0)
    <div class="pb-5 row"> 
      @foreach($articles as $article)
      <div class="mt-3 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%" class="card">
          <img style="overflow: hidden;height: 200px;" src="{{asset('/img')}}/{{$article->image}}" class="card-img-top" alt="...">
            <div style="background-color: rgb(246, 246, 246)" class="card-body">
              <h5 style="margin-top: -0.5em; color: #211061;  font-weight: 800" class="card-title">{!!html_entity_decode($article->titre)!!}</h5>
              <p style="margin-top: -0.5em" class="card-text">{!!html_entity_decode($article->description)!!}</p>
              <p style="margin-top: -0.8em" class="card-date"><i style="color:#211061;" class="bi bi-calendar2-fill"></i> Publié le: {!!html_entity_decode($article->date_publication)!!}</p>
              <p style="margin-top: -0.8em" class="card-auteur"><i style="color:#211061;" class="bi bi-person-fill"></i> Par: <strong>{!!html_entity_decode($article->auteur)!!}</strong></p>
              <a style="margin-top: -0.5em; border: none; background-color:#211061" href="/article/{{$article->id}}" class="btn btn-primary">Lire plus</a>
            </div>
        </div>
      </div>   
      @endforeach       
  </div>
  @else
  <div class="row">
    <div class="col-lg-7">
      <h3 style="color: #211061; border-radius: 4px" class="border text-center">Aucun article disponible pour le moment</h3>
    </div>
  </div>
  @endif
</div>
<div style="background-color: rgb(255, 255, 255)" class="container-fluid pt-2 home ">
  <h2 class="pt-3" style="color:#211061; font-weight:800">Contactez-nous</h2>
  <div class="row">
    <div class="homeAbout col-lg-8 col-md-12 col-sm-12" style="font-size: 18px; ">
      Vous avez des interrogations ? vous souhaitez entrer en contact avec nous ? Joignez-nous via les canaux ci-dessous.
      <div class="mt-4">
            <div class="col-lg-12 justify-content-center">
                <a style="text-decoration: none; color: #211061" href="httpss://wa.me/+24177187894"><i class="fa-brands fa-whatsapp mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i> Whatsapp</a>
            </div>
            <div class="col-lg-12 justify-content-center">
                <i class="fa-solid fa-envelope mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061;"> <a style="font-size: 20px; color: #211061; text-decoration:none" href="mailto:digitarea@gmail.com">digitarea@gmail.com</a></span>
            </div>
            <div class="col-lg-12 justify-content-center">
                <i class="fa-solid fa-phone mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i> <span style="font-size: 20px; color: #211061"><a style="text-decoration: none; color:#211061" href="tel:+24177187894">+241 77 18 78 94</a> / <a style="text-decoration: none; color:#211061" href="te:+24162102805">+241 62 10 28 05</a></span>
            </div>
    </div>
    </div>
    <div style="padding-left: em; margin-top: -1em" class="interrogation justify-content-center col-lg-4">
      <img class="" width="400px" src="{{asset("/img/cntakt.png")}}" alt="">
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
</div>
<script>
  $(document).ready(function () {

$('.first-button').on('click', function () {

  $('.animated-icon1').toggleClass('open');
});
$('.second-button').on('click', function () {

  $('.animated-icon2').toggleClass('open');
});
$('.third-button').on('click', function () {

  $('.animated-icon3').toggleClass('open');
});
});
</script>
@endsection