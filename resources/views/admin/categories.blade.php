@extends('layout.adminApp')
@section('titre')
    Catégories d'articles
@endsection
@section('adminContent')

<div style="" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">
                <div class="mb-4 d-flex justify-content-between">
                    <div class="">
                      <h2 class="pt-2" style="color: #211061">Toutes les catégories ({{$categories->count()}})</h2>
                      @if(Session::has("success"))
                      <div class="alert alert-success mt-2 col-lg-12">
                        {{Session::get("success")}}
                      </div>
                    @endif
                    {{-- Message error --}}
                    @if(Session::has("error"))
                      <div class="alert alert-danger mt-2 col-lg-12">
                        {{Session::get("error")}}
                      </div>
                    @endif
                    </div>
                    <div class="">
                      <button style="background-color:#211061;" class="au-btn au-btn-icon au-btn--blue">
                        <a style="color: white" href="/admin/add-category"><i class="zmdi zmdi-plus"></i>Ajouter une catégorie</a>
                      </button>
                      
                    </div>
                  </div>
                <div class="row ">
                    @foreach ($categories as $categorie)
                        <div class="mb-4 mt-3 col-lg-3 col-md-6 col-sm-12 ">
                            <div style="background-color: transparent; border: 1px solid #211061; margin-bottom: 1em; padding-top: 8px; text-align:center" class="card">
                                <div >
                                    <a style="text-decoration: none; color: #211061; display: inline-block," href="/admin/category/{{$categorie->nom}}">
                                        <h5 style="color: #211061" class=" card-title">{{$categorie->nom}}</h5> 
                                    </a>
                                </div>
                            </div>
                            <button class=" btn btn-danger">
                                <a style="color: white" href="/admin/add-category"><i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
                            </button>
                            <button style="background-color:#211061;" class="btn btn-blue">
                                <a style="color: white" href="/admin/add-category"><i class="zmdi zmdi-edit "></i></a>
                            </button>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


