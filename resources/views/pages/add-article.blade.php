@extends('layout.app')
@section('title')
    Ajouter un article
@endsection
@section('content')
  
<div class="add-article container mt-4">
    <h2>ADMINISTRATION</h2>
    <H5>Ajouter un article</H5>
    {{-- Message success --}}
    @if(Session::has("success"))
      <div class="alert alert-success col-lg-6">
        {{Session::get("success")}}
      </div>
    @endif
    {{-- Message error --}}
    @if(Session::has("error"))
      <div class="alert alert-danger col-lg-6">
        {{Session::get("error")}}
      </div>
    @endif
    {{-- @if($errors->any())

      <div>
        @foreach($errors->all() as $error)
            <p class="alert alert-danger col-lg-8">{{$error}}</p>
        @endforeach
      </div>
    @endif --}}
  <form class="row" action="{{URL::to('/create-article')}}" method="post" enctype="multipart/form-data" >
    @csrf

    <div class="col-lg-8">
    <div class="form-group">
        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" placeholder="Nom de l'article">
        @error("titre") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Auteur de l'article">
        @error("image") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <input type="text" name="auteur" class="form-control @error('auteur') is-invalid @enderror" placeholder="Auteur de l'article">
        @error("auteur") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <input type="date" name="publication" class="form-control @error('publication') is-invalid @enderror" placeholder="Date de publication">
        @error("publication") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <select name="categorie"  id="" class="form-control @error('categorie') is-invalid @enderror">
            <option value="" selected disabled>Catégorie</option>
            <option value="Frontend">Frontend</option>
            <option value="Backend">Backend</option>
            <option value="Infographie">Infographie</option>
            <option value="Growth-Hacking">Growth-Hacking</option>
            <option value="MAO">MAO</option>
            <option value="Marketing-Digital">Marketing-Digital</option>
            <option value="Montage-Vidéo">Montage-Vidéo</option>
            <option value="SEO">SEO</option>
        </select>
        @error("categorie") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description de larticle">
        @error("description") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <textarea name="corps" id="editor" cols="30" rows="10" class="form-control @error('corps') is-invalid @enderror"></textarea>
        @error("corps") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <button type="submit" class="mt-2 btn btn-primary">Creer l'article</button>
    </div>
  </form>
</div>
<script>
    CKEDITOR.replace( 'editor' );
  </script>
@endsection
