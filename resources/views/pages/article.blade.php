@extends('layout.app')
@section('title')
    {{$article->titre}}
@endsection
@section('content')
    
<div class="container mt-5">
    <h3 style="color: #211061">Article / {{$article->titre}}</h3>
    <div class="row">
      <div class="mt-2 col-lg-9 col-md-9 col-sm-12 ">
        <div style="min-height: 100%; border: none" class="card">
          <img src="{{URL::to('/')}}/img/{{$article->image}}" class="card-img-top" alt="...">
            <div style="border: none" class="card-body">
              <h4 style="margin-top: -0.5em; color: #211061" class="mt-2 ard-title">{{$article->titre}}</h4>
              <p style="font-size: 18px; margin-top: -0.5em; color: rgb(9, 22, 38)" class="mt-3 mb-4 card-text">{!!html_entity_decode($article->corps)!!}</p><br>
              <p style="margin-top: -0.8em; color: rgb(9, 22, 38)" class="card-date"><i style="color:#211061;" class="bi bi-calendar2-fill"></i> Publié le: {{$article->date_publication}}</p>
              <p style="margin-top: -0.8em; color: rgb(9, 22, 38)" class="card-auteur"><i style="color:#211061;" class="bi bi-person-fill"></i> Auteur : <span style="color:rgb(9, 22, 38)"><strong>{{$article->auteur}}</strong></span></p>
            </div>
        </div>
        <a style="background-color:#211061;" class="btn text-white" href="/edit-article/{{$article->id}}">Editer</a>   
        <a class="btn btn-danger" href="/delete-article/{{$article->id}}">Supprimer</a>
      </div>  
  </div>

  <h3 style="color: #211061; margin-top: 2em">Articles que vous pourriez également aimer</h3>

 {{--  <div class="row">
    @foreach ($articles as $article)
    <div class="mt-4 col-lg-4 col-md-6 col-sm-12 ">
      <div style="min-height: 100%" class="card">
        <img src="{{URL::to('/')}}/img/{{$article->image}}" class="card-img-top" alt="...">
          <div style="background-color: rgb(246, 246, 246)" class="card-body">
            <h5 style="margin-top: -0.5em; color: #211061" class="card-title">{{$article->titre}}</h5>
            <p style="margin-top: -0.5em" class="card-text">{{$article->description}}</p>
            <p style="margin-top: -0.8em" class="card-date">Publié le: {{$article->date_publication}}</p>
            <p style="margin-top: -0.8em" class="card-auteur">Par: <strong>{{$article->auteur}}</strong></p>
            <a style="margin-top: -0.5em; border: none; background-color:#211061" href="/article/{{$article->id}}" class="btn btn-primary">Lire plus</a>
          </div>
      </div>
    </div> 
    @endforeach   
</div> --}}
  
   
</div>
@endsection