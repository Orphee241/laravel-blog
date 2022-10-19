@extends('layout.adminApp')
@section('titre')
    Tous les articles
@endsection
@section('adminContent')
    
<div style="" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">
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
            <div style="background-color: rgb(225, 231, 237)" class="card-body">
              <h5 style="margin-top: -0.5em" class="card-title">{{$article->titre}}</h5>
              <p style="margin-top: -0.5em" class="card-text">{{$article->description}}</p>
              <p style="margin-top: -0.8em" class="card-date">Publié le: {{$article->date_publication}}</p>
              <p style="margin-top: -0.8em" class="card-auteur">Par: <strong>{{$article->auteur}}</strong></p>
              <a style="margin-top: -0.5em; border: none; background-color:rgb(9, 22, 38)" href="/article/{{$article->id}}" class="btn btn-primary">Lire plus</a>
            </div>
        </div>
      </div> 
      @endforeach     
  </div>
  <div style="margin-top: 2em">
  
    </div>
    </div>
    </div>
    </div> 
</div>
@endsection