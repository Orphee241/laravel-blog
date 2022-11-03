@extends('layout.app')
@section('title')
    Catégories d'articles
@endsection
@section('content')
    
<div class="categories container">
  <div style="min-height: 100%" class="row justify-content-center"> 
    @if($categories->count() > 0)
    <div style="background-color: white" class="mt-3 col-lg-5 rounded swiffy-slider slider-item-show5 slider-nav-outside slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio slider-item-ratio-contain slider-item-ratio-32x9 bg- shadow-lg py-3 py-lg-4" data-slider-nav-autoplay-interval="2000">
        <div class="mt-4 row justify-content-center slider-container">
          @foreach ($categories as $categorie)
            <div class="col-lg-5 col-md-6 col-sm-12 ">
              <button class="btn py-2" style="background-color: #211061; width: 9em; margin-top: 12px">
                <a style="text-decoration: none; color: white;" href="/category/{{$categorie->nom}}">{{$categorie->nom}}</a>
              </button>
            </div>
          @endforeach
        </div>
    </div>
    @else
      <div class="col-lg-7">
        <h2 style="color: #211061; border-radius: 4px" class="pb-2 border text-center">Aucune catégorie disponible pour le moment</h2>
      </div>
    @endif
    <div class="image-categorie mt-4 d-grid justify-content-center col-lg-6 col-md-6 col-sm-12">
      <img src="{{asset('/img/categorieflat.png')}}" width=450px alt="">
    </div>
  </div>
</div>
<footer style="background-color: #13083b" class="container-fluid pt-2 categoriesFooter ">
  <div class="row">
    <div class="py-4 col-lg-12">
      <p class="text-center text-white">Copyright &copy; DIgitarea {{date("Y")}}</p>
      <p class="text-center text-white">Conception GONA</p>
    </div>
  </footer>
@endsection


