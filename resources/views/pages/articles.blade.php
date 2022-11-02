@extends('layout.app')
@section('title')
    Tous les articles | Digitarea 
@endsection
@section('content')
<div class="container">
  <div style="transform: translateY(1.5em)" class="row">
    <div class="col-lg-7"></div>
    <div class="col-lg-5">
      <input placeholder="Rechercher un article" style="border: 1px solid #211061; border-radius:4px; width: 18em; padding: 0.4em 12px" type="search" name="search" id="search">
      <button style="padding: 7px 8px; background-color: #211061; color:white" class="btn" type="submit">Rechercher</button>
    </div>
  </div>
</div>
<div style="background-color: rgb(255, 255, 255); border-radius: 4px" class="container mt-5">
  @if($articles->count() > 0)
    <h2 class="pt-3" style="color: #211061; font-weight: 800">Tous les articles ({{$articles->count()}})</h2>
    <div class="row">
      @foreach ($articles as $article)
      <div class="mt-3 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%" class="card">
          <img src="{{asset('/img')}}/{{$article->image}}" class="card-img-top" alt="...">
            <div style="background-color: rgb(246, 246, 246)" class="card-body">
              <h5 style="margin-top: -0.5em; color: #211061; font-weight:700" class="card-title">{!!html_entity_decode($article->titre)!!}</h5>
              <p style="margin-top: -0.5em" class="card-text">{!!html_entity_decode($article->description)!!}</p>
              <p style="margin-top: -0.8em" class="card-date">Publié le: {!!html_entity_decode($article->date_publication)!!}</p>
              <p style="margin-top: -0.8em" class="card-auteur">Par: <strong>{!!html_entity_decode($article->auteur)!!}</strong></p>
              <a style="margin-top: -0.5em; border: none; background-color:#211061" href="/article/{{$article->id}}" class="btn btn-primary">Lire plus</a>
            </div>
        </div>
      </div> 
      @endforeach   
  </div>
  @else
    <div class="row">
      <div class="col-lg-7">
        <h2 style="color: #211061; border-radius: 4px" class="pb-2 border text-center">Aucun article disponible pour le moment</h2>
      </div>
    </div>
  @endif
  <div style="margin-top: 2em">
  
  </div>
</div>
<script>
  $("#search").keyup(function() {
    let search = $("#search").val();
    alert(search)
  })
</script>
@endsection