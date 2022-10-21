@extends('layout.adminApp')
@section('titre')
    Tous les articles
@endsection
@section('adminContent')
    
<div style="background-color: rgb(238, 236, 255)" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">

              <div class="d-flex justify-content-between">
                <div class="">
                  <h2 class="pt-2" style="color: #211061">Tous les articles ({{$articles->count()}})</h2>
                </div>
                <div class="">
                  <button style="background-color:#211061;" class="au-btn au-btn-icon au-btn--blue">
                    <a style="color: white" href="/admin/add-article"><i class="zmdi zmdi-plus"></i>Publier un article</a>
                  </button>
                </div>
              </div>

  @if(Session::has("success"))
    <div class="alert alert-success mt-2 col-lg-6">
      {{Session::get("success")}}
    </div>
  @endif
  {{-- Message error --}}
  @if(Session::has("error"))
    <div class="alert alert-danger mt-2 col-lg-6">
      {{Session::get("error")}}
    </div>
  @endif
    <div class="row">
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