
@extends('layout.app')
@section('title')
    Bienvenue
@endsection
@section('content')
    
<div style="background-color: rgb(255, 255, 255); border-radius: 4px" class="home container mt-5 pt-2">
    <h1 style="color:#211061">Bienvenue</h1>
    @if(session()->has("uzer"))
    <div class="success-popup alert alert-success col-lg-6">
      {{session()->get("uzer"). " " ."vous êtes connecté"}}
    </div>
    @endif
    @if($articles->count() > 0)
    <h3 style="color:#211061">Les articles en vogue</h3>
    <div class="pb-5 row"> 
      @foreach($articles as $article)
      <div class="mt-4 mb-3 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%" class="card">
          <img style="overflow: hidden;height: 200px;" src="{{URL::to('/')}}/img/{{$article->image}}" class="card-img-top" alt="...">
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