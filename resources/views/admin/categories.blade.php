@extends('layout.adminApp')
@section('titre')
    Catégories d'articles
@endsection
@section('adminContent')

<div style="" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">
                <h2 style="color: #211061; margin-bottom: 0.8em">Catégories d'articles</h2>
                <div class="row ">
                    @foreach ($categories as $categorie)
                        <div class="col-lg-3 col-md-6 col-sm-12 ">
                            <div style="background-color: #211061; border: none; margin-bottom: 1em; padding-top: 8px; text-align:center" class="card">
                                <div >
                                    <a style="text-decoration: none; color: white; display: inline-block," href="/admin/category/{{$categorie->nom}}">
                                        <h5 class="text-white card-title">{{$categorie->nom}}</h5> 
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


