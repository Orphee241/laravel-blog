@extends('layout.adminApp')
@section('titre')
    Tous les tutos | Digitarea
@endsection
@section('adminContent')
    
<div style="background-color: rgb(238, 236, 255)" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">

              <div class="d-flex justify-content-between">
                <div class="">
                  <h2 class="pt-2" style="color: #211061">Tous les tutos ({{$tutos->count()}})</h2>
                </div>
                <div class="">
                  <button style="background-color:#211061;" class="au-btn au-btn-icon au-btn--blue">
                    <a style="color: white" href="/admin/add-tuto"><i class="zmdi zmdi-plus"></i>Publier un tuto</a>
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
      @foreach ($tutos as $tuto)
      <div class="mt-4 col-lg-4 col-md-6 col-sm-12 ">
        <div style="min-height: 100%; border-radius: 12px; overflow:hidden; padding-bottom: 0" class="card">
          <div  class="img">
          <video controls width="100%">
            <source src="{{URL::to('/')}}/video/{{$tuto->video}}" type="video/mp4">
          </video>
          </div>
            <div style="background-color: rgb(246, 246, 246); border-radius: 16px" class="card-body">
              <h3 style="margin-top: -0.4em; color: #211061" class="card-title">{!!html_entity_decode($tuto->titre)!!}</h3>
              <p style="margin-top: -0.5em; margin-bottom: 1em; line-height: 1.2em" class="">{!!substr(html_entity_decode($tuto->description),0,35)."..."!!}</p>
              <p style="margin-top: -0.5em; margin-bottom: 0.5em" class="card-date">Publié le: {!!html_entity_decode($tuto->date_publication)!!}</p>
              <p style="margin-top: -0.8em"  class="">Par: <strong>{!!html_entity_decode($tuto->auteur)!!}</strong></p>
              <a style="border: none; background-color:#211061" href="/admin/article/{{$tuto->id}}" class="btn btn-primary mt-3">Lire plus</a>
              <a class="btn btn-danger text-white mt-3" href="/admin/delete-article/{{$tuto->id}}">Supprimer</a>
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