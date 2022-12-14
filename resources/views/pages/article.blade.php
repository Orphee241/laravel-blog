@extends('layout.app')
@section('title')
{!!html_entity_decode($article->titre)!!}
@endsection
@section('content')

<?php
/* Formatage des dates */
  $jour = getdate(strtotime($article->created_at))["mday"] < 10 ? "0".getdate(strtotime($article->created_at))["mday"] : getdate(strtotime($article->created_at))["mday"];
  $mois = getdate(strtotime($article->created_at))["mon"] < 10 ? "0".getdate(strtotime($article->created_at))["mon"] : getdate(strtotime($article->created_at))["mon"];
  $minute = getdate(strtotime($article->created_at))["minutes"] < 10 ? "0".getdate(strtotime($article->created_at))["minutes"] : getdate(strtotime($article->created_at))["minutes"];
  $heure = getdate(strtotime($article->created_at))["hours"] < 10 ? "0".getdate(strtotime($article->created_at))["hours"] : getdate(strtotime($article->created_at))["hours"];
  $annee = getdate(strtotime($article->created_at))["year"] < 10 ? "0".getdate(strtotime($article->created_at))["year"] : getdate(strtotime($article->created_at))["year"];
?>

<div class="container px-3">
  <h2 class="" style="margin-top: 4em; color: #211061; font-weight:800">{!!html_entity_decode($article->titre)!!}</h2>
</div>

<div  style="background-color: white; border-radius: 16px;" class="pt-2 container article">  
    <p style="margin-top: 1em; color: rgb(9, 22, 38)" class="card-date"><i style="color:#211061;" class="fa-sharp fa-solid fa-calendar"></i> Publié le: {{$jour ."/". $mois ."/". $annee ." à ". $heure ."h". $minute}}</p>
    <p style="margin-top: -0.8em; color: rgb(9, 22, 38)" class="card-auteur"><i style="color:#211061;" class="fa-solid fa-user"></i> Par : <span style="color:rgb(9, 22, 38)"><strong>{{$article->auteur}}</strong></span></p>
    @if(Session::has("success"))
      <div class="col-lg-6 alert alert-success">{{Session::get("success")}}</div>
    @endif
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div style="min-height: 100%; border: none" class="card">
          <img src="{{asset('/img')}}/{{$article->image}}" class="card-img-top" alt="...">
            <div style="border: none" class="card-bo">
              <p style="font-size: 18px; margin-top: 1em; color: rgb(9, 22, 38)" class=" card-text">{!!html_entity_decode($article->corps)!!}</p><br>
              @if(session()->has("uzer"))
              <a href="/add-comment/{{$article->id}}">
                <button style="background-color: #211061" class="text-white btn"><i style="color: #ffffff; transform: translateY(2px)" class="mr-2 zmdi zmdi-comment"></i>Commenter</button>
              </a> 
              @endif
            </div>   
        </div>
         
      </div>  
  </div>
  {{-- Commentaires --}}
  <div class=" container">
    <h3 class="mb-5" style="color:#211061">Commentaires({{$comments->count()}})</h3>
    @if(session()->has("uzer"))
    @else
      <h5 style="margin-top: -1.5em" class="border rounded py-2 text-center mb-5" style="color:#211061">Veuillez vous connecter pour laisser un commentaire</h5>
    @endif
    <div class="px-3 row">
      @foreach($comments as $comment)
      <div class="py-4 mb-4 pl-4 pr-3 border rounded col-lg-8 col-md-12 col-sm-12" style=" box-shadow: 0px 0px 4px  #bebebf" >
        <div class="row">
          <div style="height: 78px; width:78px;" class="border rounded">
            <img src="" alt="">
            <div style="display: flex; justify-content: center; align-item: center" class="auteur">
              <h4 style="color: #211061; font-weight: bold">{!!html_entity_decode(ucfirst(substr($comment->auteur,0,1)))!!}</h4>
            </div>
          </div>
          <div class=" rounded col-lg-9 col-sm-12 col-md-12">
            <h6 class="nomAuteur" style="color: #211061; word-wrap: break-word">Par : {!!html_entity_decode($comment->auteur)!!}</h6>
            
            <p style="color: #625c7d; font-weight: 500;" class="">Posté le : {{$jour ."/". $mois ."/". $annee ." à ". $heure ."h". $minute}}</p>
            <div style="word-wrap: break-word">{!!html_entity_decode($comment->corps)!!}</div>
          </div>
          @if(session()->has("uzer"))
          <div class="col-lg-12">
            <a href="/add-comment2/{{$article->id}}/{{$comment->id}}">
              <button style="background-color: #211061; border: 1px solid #211061; color: white; font-weight: bold" class="mt-2 btn"><i style="width: 2.5em; color: #ffffff; transform: translateY(2px)" class=" zmdi zmdi-comment"></i></button>
            </a>
            @if(session()->get("uzer") == $comment->auteur)
              <a href="/edit-comment/{{$article->id}}/{{$comment->id}}">
                <button style="background-color: #211061; border: 1px solid #211061; color: #ffffff, font-weight: bold" class="mt-2 btn btn-primary"><i style="width: 2.5em; color: #ffffff; transform: translateY(2px)" class=" zmdi zmdi-edit"></i></button>
              </a>
              <a href="/delete-comment/{{$article->id}}/{{$comment->id}}">
                <button style="color: #211061, font-weight: bold" class="mt-2 btn btn-danger"><i style="width: 2.5em; transform: translateY(2px)" class=" zmdi zmdi-delete"></i></button>
              </a> 
            @endif  
        </div> 
        @endif 
        </div>
      </div>
        {{-- Reply --}}
      @foreach($replies as $reply)
      <p style="color:#625c7d; margin:0">réponse</p>
      <div class="reply pt-4 pb-4 mb-4 pl-4 pr-3 border rounded col-lg-8 col-sm-12" style="background-color:rgb(249, 249, 249); -1em" >
        <div class="row">
          <div style="height: 78px; width:78px;" class="border rounded">
            <img src="" alt="">
            <div style="display: flex; justify-content: center; align-item: center" class="auteur">
              <h4 style="color: #211061; font-weight: bold">{!!html_entity_decode(ucfirst(substr($reply->auteur,0,1)))!!}</h4>
            </div>
          </div>
          <div class=" rounded col-lg-9 col-sm-12 col-md-12">
            <h6 class="nomAuteur" style="color: #211061; word-wrap: break-word">Par : {!!html_entity_decode($reply->auteur)!!}</h6>
            <?php
            /* Formatage des dates */
              $jour = getdate(strtotime($reply->created_at))["mday"] < 10 ? "0".getdate(strtotime($reply->created_at))["mday"] : getdate(strtotime($comment->created_at))["mday"];
              $mois = getdate(strtotime($reply->created_at))["mon"] < 10 ? "0".getdate(strtotime($reply->created_at))["mon"] : getdate(strtotime($comment->created_at))["mon"];
              $minute = getdate(strtotime($reply->created_at))["minutes"] < 10 ? "0".getdate(strtotime($reply->created_at))["minutes"] : getdate(strtotime($comment->created_at))["minutes"];
              $heure = getdate(strtotime($reply->created_at))["hours"] < 10 ? "0".getdate(strtotime($reply->created_at))["hours"] : getdate(strtotime($comment->created_at))["hours"];
              $annee = getdate(strtotime($reply->created_at))["year"] < 10 ? "0".getdate(strtotime($reply->created_at))["year"] : getdate(strtotime($comment->created_at))["year"];
            ?>
            <p style="color: #625c7d; font-weight: 500;" class="">Posté le : {{$jour ."/". $mois ."/". $annee ." à ". $heure ."h". $minute}}</p>
            <div style="word-wrap: break-word">{!!html_entity_decode($reply->corps)!!}</div>
          </div>
          @if(session()->has("uzer"))
          <div class="col-lg-12 ">
            @if(session()->get("uzer") == $comment->auteur)
              <a href="/edit-comment/{{$article->id}}">
                <button style="background-color: #211061; border: 1px solid #211061; color: #ffffff, font-weight: bold" class="mt-2 btn btn-primary"><i style="width: 2.5em; color: #ffffff; transform: translateY(2px)" class=" zmdi zmdi-edit"></i></button>
              </a>
              <a href="/delete-comment/{{$article->id}}/{{$comment->id}}">
                <button style="color: #211061, font-weight: bold" class="mt-2 btn btn-danger"><i style="width: 2.5em; transform: translateY(2px)" class=" zmdi zmdi-delete"></i></button>
              </a> 
            @endif 
        </div> 
        @endif 
        </div>
      </div>
      @endforeach
      @endforeach
    </div>
  </div>
  <div class="container"><h2 class="text-center mt-5" style="color: #211061; margin-top: 3em; font-weight:800">Articles que vous pourriez aimer</h2></div>
  <div class="pb-5 row pl-1">
    @foreach ($articles as $article)
      <div class="mt-4 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%; border-radius: 4px" class="card">
          <div  class="img">
          <img style="overflow: hidden;height: 200px;" src="{{asset('/img')}}/{{$article->image}}" class="card-img-top" alt="...">
          </div>
            <div style="background-color: rgb(246, 246, 246)" class="card-body">
              <h4 style="margin-top: 0.5em; color: #211061" class="card-title">{!!html_entity_decode($article->titre)!!}</h4>
              <p style="margin-top: -0.5em; margin-bottom: 1em; line-height: 1.2em" class="mt-2">{!!html_entity_decode($article->description)!!}</p>
              <p style="margin-top: -0.5em; margin-bottom: 0.5em" class="card-date">Publié le: {!!html_entity_decode($article->date_publication)!!}</p>
              <p style="margin-top: -0.8em"  class="">Par: <strong>{!!html_entity_decode($article->auteur)!!}</strong></p>
              <a style="border: none; background-color:#211061" href="/article/{{$article->id}}" class="btn btn-primary mt-3">Lire plus</a>
            </div>
        </div>
      </div> 
      @endforeach   
  </div>   
</div>
<footer style="background-color: #13083b" class="container-fluid pt-2 homeFooter ">
  <div class="row">
    <div class="py-4 col-lg-12">
      <p class="text-center text-white">Copyright &copy; DIgitarea {{date("Y")}}</p>
      <p class="text-center text-white">Conception GONA</p>
    </div>
  </footer>
@endsection