@extends('layout.adminApp')
@section('titre')
    Editer un article
@endsection
@section('adminContent')
  
<div style="background-color: rgb(238, 236, 255); padding-bottom: 2em" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">
    <h3 class="ml-3 mb-3">Editer un article</h3>
  <form  action="{{URL::to('/admin/editt-article')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <input type="hidden" name="id" value="{{$article->id}}">
    <div class="col-lg-8">
    <div class="form-group">
        <input type="text" value="{{$article->titre}}" name="titre" class="form-control @error('titre') is-invalid @enderror" placeholder="Nom de l'article">
        @error("titre") <span class="text-danger">{!!$message!!}</span> @enderror
    </div>
    <div class="form-group">
        <input type="file" value="{{$article->image}}" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Auteur de l'article">
        @error("image") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <input type="text" value="{{$article->auteur}}" name="auteur" class="form-control @error('auteur') is-invalid @enderror" placeholder="Auteur de l'article">
        @error("auteur") <span class="text-danger">{!!$message!!}</span> @enderror
    </div>
    <div class="form-group">
        <input type="date" value="{{$article->date_publication}}" name="publication" class="form-control @error('publication') is-invalid @enderror" placeholder="Date de publication">
        @error("publication") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <select name="categorie" id="" class="form-control @error('categorie') is-invalid @enderror">>
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
        @error("categorie") <span class="text-danger">{!!$message!!}</span> @enderror
    </div>
    <div class="form-group">
        <input type="text" value="{!!$article->description!!}" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description de larticle">
        @error("description") <span class="text-danger">{!!$message!!}</span> @enderror
    </div>
    <div class="form-group">
        <textarea  name="corps" id="editor" cols="30" rows="10" class="form-control @error('corps') is-invalid @enderror">
            {!!html_entity_decode($article->corps)!!}
        </textarea>
        @error("corps") <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="mb-5">
    <button type="submit" class="mt-2 btn btn-primary">Modifier l'article</button>
    </div>
    </div>
  </form>
<script>
    CKEDITOR.replace( 'editor' );
</script>
</div>
</div>
</div>
</div>

@endsection
