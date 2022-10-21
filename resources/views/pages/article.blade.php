@extends('layout.app')
@section('title')
    {{$article->titre}}
@endsection
@section('content')
    
<div class="container mt-5">
    <h2 style="color: #211061">{{$article->titre}}</h2>
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
      </div>  
  </div>
  <div class="container"><h2 class="mt-3" style="color: #211061">Articles que vous pourriez aimer</h2></div>
  <div class="row ml-1">
    @foreach ($articles as $article)
      <div class="mt-4 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%; border-radius: 4px" class="card">
          <div  class="img">
          <img style="overflow: hidden;height: 200px;" src="{{URL::to('/')}}/img/{{$article->image}}" class="card-img-top" alt="...">
          </div>
            <div style="background-color: rgb(246, 246, 246)" class="card-body">
              <h3 style="margin-top: 0.5em; color: #211061" class="card-title">{!!html_entity_decode($article->titre)!!}</h3>
              <p style="margin-top: -0.5em; margin-bottom: 1em; line-height: 1.2em" class="">{!!html_entity_decode($article->description)!!}</p>
              <p style="margin-top: -0.5em; margin-bottom: 0.5em" class="card-date">Publié le: {!!html_entity_decode($article->date_publication)!!}</p>
              <p style="margin-top: -0.8em"  class="">Par: <strong>{!!html_entity_decode($article->auteur)!!}</strong></p>
              <a style="border: none; background-color:#211061" href="/admin/article/{{$article->id}}" class="btn btn-primary mt-3">Lire plus</a>
            </div>
        </div>
      </div> 
      @endforeach   
  </div>   
</div>
@endsection