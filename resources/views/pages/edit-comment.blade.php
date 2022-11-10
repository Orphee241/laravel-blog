@extends('layout.app')
@section('title')
    Modifier un commentaire | Digitarea
@endsection
@section('content')
  
<div class="edit-comment container">
    <h3>Modifier un commentaire</h3>
    @if(Session::has("error"))
      <div class="alert alert-danger col-lg-5">
        {{Session::get("error")}}
      </div>
    @endif
  <form class="row" action="{{URL::to('/edit-comment2')}}/{{$article->id}}/{{$comment->id}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="col-lg-8">
    <div class="form-group">
        <textarea placeholder="Commenter" name="comment" id="editor" cols="30" rows="10" class="form-control @error('comment') is-invalid @enderror">
           {!!html_entity_decode($comment->corps)!!}
        </textarea>
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
