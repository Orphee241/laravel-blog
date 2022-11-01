@extends('layout.app')
@section('title')
    A propos de Digitarea
@endsection
@section('content')
<div class="about container mt-4">
  <h2 style="color:#211061; font-weight:800">Qui sommes-nous ?</h2>
  <div class="row">
    <div style="height: 95%" class="col-lg-7 mt-4 slider-item-show2 slider-nav-outside slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio slider-item-ratio-contain slider-item-ratio-32x9 bg-white shadow-lg py-3 px-4 " data-slider-nav-autoplay-interval="2000">
        <div class="mt-4 row ">
            <p style="font-size: 18px" class=""><strong>Digitarea</strong> est une plateforme  qui offre une diversité d'astuces sur des thèmes relatifs au digital: infographie, montage vidéo, développement web, marketing digital, MAO...
                Elle a été crée en septembre 2022 par Glen Orphée NZIENGUI - AKOUMBOU (GONA). <br>
                Notre principale mission est de partager nos connaissances avec les acteurs ou ceux qui débutent dans numérique en publiant
                régulièrement quelques résolutions de problèmes.
            </p>
        </div>
    </div>
    <div style="margin-top: 1.9em" class="logoAbout col-lg-5">
      <img style="border-radius: 4px; margin-top: -2em" src="{{URL::to('/')}}/img/about-us.png" width=350px alt="">
    </div>
  </div>
</div>
@endsection

