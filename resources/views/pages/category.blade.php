@extends('layout.app')
@section('title')
    Tous les articles
@endsection
@section('content')
    
<div class="container mt-4">
  {{-- Affichage du nombre d'article si il existe --}}
    <div>
      @if($articles->count() == 0)
        <h3 class="text-center col-lg-6 col-md-6 col-sm-12 py-2 px-2" style="box-shadow: 0px 0px 8px -5px black; color:#211061; border-radius: 4px">Aucun article disponible pour le moment.<h3>
      @else <h3 style="color:#211061" >Tous les articles ({{$articles->count()}})</h3>
      @endif
    </div>

    <div class="row">
      @foreach ($articles as $article)
      <div class="mt-4 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%" class="card">
          <img src="{{URL::to('/')}}/img/{{$article->image}}" class="card-img-top" alt="...">
            <div style="background-color: rgb(246, 246, 246)" class="card-body">
              <h5 style="margin-top: -0.5em; color: #211061" class="card-title">{!!html_entity_decode($article->titre)!!}</h5>
              <p style="margin-top: -0.5em" class="card-text">{!!html_entity_decode($article->description)!!}</p>
              <p style="margin-top: -0.8em" class="card-date">Publié le: {!!html_entity_decode($article->publication)!!}</p>
              <p style="margin-top: -0.8em" class="card-auteur">Par: <strong>{!!html_entity_decode($article->auteur)!!}</strong></p>
              <a style="margin-top: -0.5em; border: none; background-color:#211061" href="/article/{{$article->id}}" class="btn btn-primary">Lire plus</a>
            </div>
        </div>
      </div> 
      @endforeach     
  </div>
  <div style="margin-top: 2em">
  
  </div>
   
</div>
@endsection