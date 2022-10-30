@extends('layout.adminApp')
@section('titre')
    Ajouter une catégorie
@endsection
@section('adminContent')
    
<div style="background-color: rgb(238, 236, 255)" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">

                <h3 class="mb-4">Ajouter une catégorie</h3>
                {{-- Message success --}}
                {{-- @if($errors->any())
                  <div>
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger col-lg-8">{{$error}}</p>
                    @endforeach
                  </div>
                @endif --}}
              <form class="row" action="{{URL::to('/admin/create-category')}}" method="post" enctype="multipart/form-data" >
                @csrf
            
                <div class="col-lg-9">
                <div class="form-group">
                    <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom de l'article">
                    @error("nom") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-5">
                <button type="submit" class="mt-2 btn btn-primary">Ajouter la catégorie</button>
                </div>
              </div>
              </form>
            </div>
            <script>
                CKEDITOR.replace( 'editor' );
            </script>            

            </div>
        </div>
    </div> 
</div>
@endsection