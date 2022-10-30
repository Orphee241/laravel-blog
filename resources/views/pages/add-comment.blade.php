@extends('layout.app')
@section('title')
    Commenter
@endsection
@section('content')
  
<div class="add-article container mt-4">
    <h3>Laisser un commentaire</h3>
    @if(Session::has("error"))
      <div class="alert alert-danger col-lg-5">
        {{Session::get("error")}}
      </div>
    @endif
  <form class="row" action="{{URL::to('/create-comment')}}/{{$article->id}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="col-lg-8">
      <div class="form-group">
        <input name="auteur" placeholder="Entrez votre pseudo" id="" cols="30" rows="10" class="form-control @error('auteur') is-invalid @enderror">
        @error("auteur") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <textarea placeholder="Commenter" name="comment" id="editor" cols="30" rows="10" class="form-control @error('comment') is-invalid @enderror"></textarea>
        @error("comment") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <button type="submit" class="mt-2 btn btn-primary">Creer l'article</button>
    </div>
  </form>
</div>
<script>
    CKEDITOR.replace( 'editor' );
  </script>
@endsection
