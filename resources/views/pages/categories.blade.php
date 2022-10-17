@extends('layout.app')
@section('title')
    Catégories d'articles
@endsection
@section('content')
    
<div class="categories container mt-4">
  <h3 style="color:#211061">Catégories</h3>
  <div style="min-height: 100%" class="row justify-content-center"> 
    <div style="background-color: white" class="mt-3 col-lg-5 rounded swiffy-slider slider-item-show5 slider-nav-outside slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio slider-item-ratio-contain slider-item-ratio-32x9 bg- shadow-lg py-3 py-lg-4" data-slider-nav-autoplay-interval="2000">
        <div class="mt-4 row slider-container">
          @foreach ($categories as $categorie)
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div>
                    <div style="background-color: #211061; border: none; margin-bottom: 1em; text-align:center" class="card">
                        <div style="border-color: rgb(9, 22, 38);" class="card-body">
                          <a style="text-decoration: none; color: white; " href="/category/{{$categorie->nom}}"><h5 class="card-title">{{$categorie->nom}}</h5></a>
                        </div>
                        
                      </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
    <div class="image-categorie mt-4 d-grid justify-content-center col-lg-6 col-md-6 col-sm-12">
      <img src="{{url('/img/categorieflat.png')}}" width=450px alt="">
    </div>
  </div>
</div>
@endsection


