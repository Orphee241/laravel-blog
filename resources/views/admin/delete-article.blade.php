@extends('layout.adminApp')
@section('title')
    Contactez BLOGTK
@endsection
@section('adminContent')
  
<div style="background-color: rgb(238, 236, 255); padding-bottom: 5em" class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <h3>Voulez-vous vraiment supprimer cet article ?</h3>
                <div class="mt-4 col-lg-6 col-md-6 col-sm-12 ">
                    <div style="min-height: 100%; border: none" class="row card pt-3">
                    <img src="{{URL::to('/')}}/img/{{$article->image}}" class="card-img-top" alt="...">
                      <div style="border: none" class="card-body">
                        <h4 style="margin-top: -0.5em; color: #211061" class="card-title">{!!html_entity_decode($article->titre)!!}</h4>
                        <p style="font-size: 18px; margin-top: -0.5em; color: rgb(9, 22, 38)" class="mt-3  card-text">{!!html_entity_decode($article->description)!!}</p><br>
                        <p style="margin-top: -0.8em; color: rgb(9, 22, 38)" class="card-date"><i style="color:#211061;" class="bi bi-calendar2-fill"></i> Publié le: {{$article->date_publication}}</p>
                        <p style="color: rgb(9, 22, 38)" class="card-auteur"><i style="color:#211061;" class="bi bi-person-fill"></i> Auteur : <span style="color:rgb(9, 22, 38)"><strong>{{$article->auteur}}</strong></span></p>
                      </div>
                      <div class="col-lg-6" style="margin-top: ; margin-bottom: 2em">
                        <a class="btn btn-danger" href="/admin/confirm-delete-article/{{$article->id}}">Oui</a>
                        <a style="background-color:#211061;" class="btn text-white" href="/admin/article/{{$article->id}}">Non</a>   
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
