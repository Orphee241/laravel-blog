
@extends('layout.app')
@section('title')
Apprenez gratuitement des tutos  en Développement web, Infographie, Marketing digital, Musique...
@endsection
@section('content')

<div class="row header">
  <div class="colHeader col-lg-5 col-md-12 col-sm-12">
    <h1 style="font-weight:900; color: #211061" class="h1Home mt-5">Découvrez des articles, des tutoriels et des formations sur le digital Grâce à Digitarea</h1>
    <p style="font-size: 20px" class="">
      Apprenez en suivant gratuitement des tutos et des formations dans plusieurs domaines : <span style="font-weight: 700; color:#211061">Développement web</span>, <span style="font-weight: 700; color:#211061">Infographie</span>, 
       <span style="font-weight: 700; color:#211061">Marketing digital, </span> <span style="font-weight: 700; color:#211061">Musique...</span>
    </p>
    <a class="voirAstuces mt-2 btn" style="text-decoration: none; font-weight:600" href="{{URL::to("/articles")}}">Découvrir nos tutos</a>
    <a class="creerCompte mt-2 btn" style="text-decoration: none; font-weight:600" href="{{URL::to("/signup")}}">Je crée mon compte</a>
  </div>
  <div class="headerLogo justify-content-center col-lg-6 pt-5">
    <img  class="headerLogo  pl-5" src="{{URL::to("/img/digitareaheader3.png")}}" alt="">
  </div>
</div>   
<div style="background-color: rgb(255, 255, 255)" class="container-fluid home ">
    <h2 class="pt-4" style="color:#211061; font-weight:800">Qui sommes-nous ?</h2>
    <div class="row">
      <div class="homeAbout col-lg-8 col-md-12 col-sm-12" style="font-size: 18px; ">
        <strong>Digitarea</strong> est une plateforme  qui offre une diversité de tutos et formations sur des thèmes relatifs au digital: infographie, montage vidéo, développement web, marketing digital, MAO... <br>
        Notre principale mission est de partager nos connaissances avec toutes personnes passionnées du domaine et désireuses d'apprendre de nouvelles choses.             
      </div>
      <div style="padding-left: 9em; margin-top: -2em" class="interrogation justify-content-center col-lg-4">
        <img class="" width="200px" src="{{asset("/img/interrogation.png")}}" alt="">
      </div>
    </div>
</div>
<div style="background-color: rgb(255, 255, 255)" class="home2 container-fluid pt-2">
    <h2 class="mt-3" style="color:#211061; font-weight:800">Articles récents</h2>
    @if(session()->has("uzer"))
    <div class="success-popup alert alert-success col-lg-6">
      {{session()->get("uzer"). " " ."vous êtes connecté"}}
    </div>
    @endif
    @if($articles->count() > 0)
    <div class="pb-5 row"> 
      @foreach($articles as $article)
      <?php
      /* Formatage des dates */
        $jour = getdate(strtotime($article->created_at))["mday"] < 10 ? "0".getdate(strtotime($article->created_at))["mday"] : getdate(strtotime($article->created_at))["mday"];
        $mois = getdate(strtotime($article->created_at))["mon"] < 10 ? "0".getdate(strtotime($article->created_at))["mon"] : getdate(strtotime($article->created_at))["mon"];
        $minute = getdate(strtotime($article->created_at))["minutes"] < 10 ? "0".getdate(strtotime($article->created_at))["minutes"] : getdate(strtotime($article->created_at))["minutes"];
        $heure = getdate(strtotime($article->created_at))["hours"] < 10 ? "0".getdate(strtotime($article->created_at))["hours"] : getdate(strtotime($article->created_at))["hours"];
        $annee = getdate(strtotime($article->created_at))["year"] < 10 ? "0".getdate(strtotime($article->created_at))["year"] : getdate(strtotime($article->created_at))["year"];
      ?>
      <div class="mt-3 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%" class="card">
          <img style="overflow: hidden;height: 200px;" src="{{asset('/img')}}/{{$article->image}}" class="card-img-top" alt="...">
            <div style="background-color: rgb(246, 246, 246)" class="card-body">
              <h5 style="margin-top: 0.5em; color: #211061;  font-weight: 800" class="card-title">{!!html_entity_decode($article->titre)!!}</h5>
              <p style="margin-top: 0.5em, margin-bottom: 0.5em" class="card-text">{!!html_entity_decode($article->description)!!}</p>
              <p style="margin-top: -0.8em" class="card-date"><i style="color:#211061;" class="fa-solid fa-calendar"></i> Publié le: {{$jour ."/". $mois ."/". $annee ." à ". $heure ."h". $minute}}</p>
              <p style="margin-top: -0.8em" class="card-auteur"><i style="color:#211061;" class="fa-solid fa-user"></i> Par: <strong>{!!html_entity_decode($article->auteur)!!}</strong></p>
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
<div style="background-color: rgb(255, 255, 255)" class="container-fluid home homeFormations">
  <h2 class="" style="color:#211061; font-weight:800">Allez encore plus loin</h2>
  <div class="row">
    <div class=" col-lg-7 col-md-12 col-sm-12" style="font-size: 18px; ">
      Vous souhaitez <strong style="color:#211061">approfondir vos connaissances ?</strong><br>
      Vous êtes au bon endroit! <br>
      <strong style="color:#211061">Digitarea</strong> met également à votre disposition des formations pour vous aider à résoudre des problèmes
      plus ou moins complexes.<br>
      <a class="voirAstuces mt-3 btn" style="text-decoration: none; font-weight:600" href="{{URL::to("formations")}}">Découvrir nos formations</a>
    </div>
    <div style="padding-left: 5em; margin-top: -5em" class="interrogation justify-content-center col-lg-5">
      <img class="" width="" src="{{asset("/img/formation.png")}}" alt="">
    </div>
  </div>
</div>
<div style="background-color: rgb(255, 255, 255)" class="container-fluid home homeFormations">
  <h2 class="" style="color:#211061; font-weight:800">Devenez <span style="color:#ffc011">VIP</span><i style="color: #ffc011; transform: translateY(2px)" class="mr-2 zmdi zmdi-"></i><i style="color:#ffc011" class="fa-sharp fa-solid fa-crown"></i></h2>
  <div class="row">
    <div class=" col-lg-7 col-md-12 col-sm-12" style="font-size: 18px; ">
      En devenant <span style="color:#ffc011"><strong>VIP</strong></span> vous nous encouragez à créer d'avantage du contenu. <br>
      En devenant <span style="color:#ffc011"><strong>VIP</strong></span> vous obtenez plusieurs privilèges :  <br><br>
      <p><i style="color:#ffc011" class="fa-sharp fa-solid fa-crown"></i>
        Assistance technique.
      </p>
      <p><i style="color:#ffc011" class="fa-sharp fa-solid fa-crown"></i>
        Accès aux tutos et aux formations payantes.
      </p>
      <p><i style="color:#ffc011" class="fa-sharp fa-solid fa-crown"></i>
        Téléchargement des vidéos avec les ressouces.
      </p>
      <p><i style="color:#ffc011" class="fa-sharp fa-solid fa-crown"></i>
       30% de réduction sur nos tutos et formations payantes.
    </p>
      <a class="voirAstuces mt-3 btn" style="text-decoration: none; font-weight:600; color:#ffea00" href="{{URL::to("vip")}}">Devenir VIP</a>
    </div>
    <div style="padding-left: 8em; margin-top: -2em;" class="interrogation justify-content-center col-lg-5">
      <i style="font-size: 17em; color: #211061" class="fa-sharp fa-solid fa-crown"></i>
    </div>
  </div>
</div>
<div style="background-color: rgb(255, 255, 255)" class="container-fluid home homeFormations">
  <h2 class="col-lg-6 " style="color:#211061; font-weight:800; padding-left: 0">Vous souhaitez proposer vos propres 
    <span style="color:#ffc011">tutos</span> ou <span style="color:#ffc011">formations</span> ?
  </h2>
  <div class="row">
    <div class="mt-3 col-lg-7 col-md-12 col-sm-12" style="font-size: 18px">
      <p>
        Nous vous donnons la possibilité de proposer votre savoir-faire sur notre plateforme.
      </p>
      <p>
        Nous vous laissons le soin de choisir les prix de vos tutos ou formations selon un intervalle de prix donné.
      </p>
      <p>
        Nous mettons à votre disposition espace dédié pour communiquer avec vos apprenants.
      </p>
      <a class="voirAstuces mt-3 btn" style="text-decoration: none; font-weight:600" href="{{URL::to("formations")}}">Devenir formateur</a>
    </div>
    <div style="padding-left: 5em; margin-top: -6em" class="interrogation justify-content-center col-lg-5">
      <img class="" width="" src="{{asset("/img/formation.png")}}" alt="">
    </div>
  </div>
</div>
<div style="background-color: rgb(255, 255, 255)" class="container-fluid pt-2 home ">
  <h2 class="pt-4" style="color:#211061; font-weight:800">Contactez-nous</h2>
  <div class="row">
    <div class="homeAbout col-lg-8 col-md-12 col-sm-12" style="font-size: 18px; ">
      Vous avez des interrogations ? vous souhaitez entrer en contact avec nous ? Joignez-nous via les canaux ci-dessous.
      <div class="mt-4">
            <div class="col-lg-12 justify-content-center">
                <a style="text-decoration: none; color: #211061" href="httpss://wa.me/+24177187894"><i class="fa-brands fa-whatsapp mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i> Whatsapp</a>
            </div>
            <div class="col-lg-12 justify-content-center">
                <i class="fa-solid fa-envelope mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061;"> <a style="font-size: 20px; color: #211061; text-decoration:none" href="mailto:digitarea@gmail.com">Email</a></span>
            </div>
            <div class="col-lg-12 justify-content-center">
                <i class="fa-solid fa-phone mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i> <span style="font-size: 20px; color: #211061"><a style="text-decoration: none; color:#211061" href="tel:+24177187894">Téléphone</a></span>
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