@extends('layout.adminApp')
@section('titre')
    Catégories d'articles
@endsection
@section('adminContent')

<div style="" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">
                <h3 style="margin-bottom: 0.5em">Catégories d'articles</h3>
                <div class="row ">
                    @foreach ($categories as $categorie)
                        <div class="col-lg-3 col-md-6 col-sm-12 ">
                            <div style=" border: none; margin-bottom: 1em; padding-top: 8px; text-align:center" class="card">
                                <div style=";" class="">
                                    <a style="text-decoration: none; color: white; display: inline-block," href="/admin/category/{{$categorie->nom}}">
                                        <h5 class="card-title">{{$categorie->nom}}</h5>
                                         
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


