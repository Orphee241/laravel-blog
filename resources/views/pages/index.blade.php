
@extends('layout.app')
@section('title')
    Bienvenue
@endsection
@section('content')
<div class="row header">
  <div class="colHeader col-lg-5 col-md-12 col-sm-12">
    <h1 style="font-weight:900; color: #211061" class="h1Home mt-5">Apprenez plusieurs astuces du digital Grâce à Digitarea</h1>
    <p style="font-size: 20px" class="">
      Allez encore plus loin en découvrant nos astuces sur la résolution des problèmes que l'on
       rencontre au quotidien dans le <span style="font-weight: 700; color:#211061">Développement web</span>, l'<span style="font-weight: 700; color:#211061">Infographie</span>, 
       <span style="font-weight: 700; color:#211061">Marketing digital, </span>la <span style="font-weight: 700; color:#211061">MAO...</span>
    </p>
    <button style="border: 1px solid #211061; color: #211061, font-weight: 700" class="voirAstuces mt-2 btn"><a style="text-decoration: none; font-weight:600; color:#211061" href="">Découvrir nos astuces</a></button>
    <button style="border: 1px solid #211061; background-color:#211061;" class="creerCompte mt-2 btn"><a style="text-decoration: none; font-weight:600; color:#ffffff" href="">Je crée mon compte</a></button>
  </div>
  <div class="d-flex justify-content-center col-lg-7 pt-5">
    <img class="headerLogo ml-4 pl-5" src="{{URL::to("/img/digitareaheader3.png")}}" alt="">
  </div>
</div>   
<div style="background-color: rgb(255, 255, 255); border-radius: 4px" class="home container mt-5 pt-2">
    <h2 style="color:#211061; font-weight:800">Astuces récentes</h2>
    @if(session()->has("uzer"))
    <div class="success-popup alert alert-success col-lg-6">
      {{session()->get("uzer"). " " ."vous êtes connecté"}}
    </div>
    @endif
    @if($articles->count() > 0)
    <div class="pb-5 row"> 
      @foreach($articles as $article)
      <div class="mt-3 mb-3 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%" class="card">
          <img style="overflow: hidden;height: 200px;" src="{{asset('/img')}}/{{$article->image}}" class="card-img-top" alt="...">
            <div style="background-color: rgb(246, 246, 246)" class="card-body">
              <h5 style="margin-top: -0.5em; color: #211061" class="card-title">{!!html_entity_decode($article->titre)!!}</h5>
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
      <h3 style="color: #211061; border-radius: 4px" class="pb-2 border text-center">Aucun article disponible pour le moment</h3>
    </div>
  </div>
  @endif
</div>
@endsection