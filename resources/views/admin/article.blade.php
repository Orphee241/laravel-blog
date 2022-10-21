@extends('layout.adminApp')
@section('titre')
    {{$article->titre}}
@endsection
@section('adminContent')
    
<div style="background-color: rgb(238, 236, 255); padding-bottom: 5em" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">
    <h2 style="color: #211061">{{$article->titre}}</h2>
    <div class="row ml-1">
      <div class="mt-2 mb-5 col-lg-9 col-md-9 col-sm-12 ">
        <div style="min-height: 100%; border: none" class="row card pt-3">
          <img src="{{URL::to('/')}}/img/{{$article->image}}" class="card-img-top" alt="...">
            <div style="border: none" class="card-body">
              <p style="font-size: 18px; margin-top: -0.5em; color: rgb(9, 22, 38)" class="mt-3  card-text">{!!html_entity_decode($article->corps)!!}</p><br>
              <p style="margin-top: -0.8em; color: rgb(9, 22, 38)" class="card-date"><i style="color:#211061;" class="bi bi-calendar2-fill"></i> Publié le: {{$article->date_publication}}</p>
              <p style="color: rgb(9, 22, 38)" class="card-auteur"><i style="color:#211061;" class="bi bi-person-fill"></i> Auteur : <span style="color:rgb(9, 22, 38)"><strong>{{$article->auteur}}</strong></span></p>
            </div>
            <div class="col-lg-6" style="margin-top: -2em; margin-bottom: 2em">
                <a style="background-color:#211061;" class="btn text-white" href="/admin/edit-article/{{$article->id}}">Editer</a>   
                <a style="background-color:#211061;" class="btn text-white" href="/admin/comment-article/{{$article->id}}">Commenter</a>
                <a class="btn btn-danger text-white" href="/admin/delete-article/{{$article->id}}">Supprimer</a>
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
              <a class="btn btn-danger text-white mt-3" href="/admin/delete-article/{{$article->id}}">Supprimer</a>
            </div>
        </div>
      </div> 
      @endforeach   
  </div>
</div>
</div>
</div>
</div>

@endsection