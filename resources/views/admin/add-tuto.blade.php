@extends('layout.adminApp')
@section('titre')
    Ajouter un tuto | Digitarea
@endsection
@section('adminContent')
    
<div style="background-color: rgb(238, 236, 255)" class="page-container">
    <div class="main-content ">
        <div class="section__content">
            <div class="container-fluid ">
                <h3 class="mb-4">Poster un tuto</h3>

                @if(Session::has("error"))
                <div class="alert alert-success col-lg-12">
                  {{Session::get("error")}}
                </div>
                @endif

              <form class="row" action="{{URL::to('/admin/create-tuto')}}" method="post" enctype="multipart/form-data" >
                @csrf
            
                <div class="col-lg-9">
                <div class="form-group">
                    <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" placeholder="Nom du tuto">
                    @error("titre") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="temps" class="form-control @error('temps') is-invalid @enderror" placeholder="La durée du tuto vidéo ex: 1h25min ou 45min">
                    @error("temps") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <input type="file" name="video" class="form-control @error('video') is-invalid @enderror" placeholder="Ajouter le tuto video">
                    @error("video") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="auteur" class="form-control @error('auteur') is-invalid @enderror" placeholder="Auteur du tuto">
                    @error("auteur") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="prix" class="form-control @error('prix') is-invalid @enderror" placeholder="Prix ex: Gratuit ou 1000">
                    @error("prix") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <input type="date" name="publication" class="form-control @error('publication') is-invalid @enderror" placeholder="Date de publication">
                    @error("publication") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <select name="categorie" id="" class="form-control  @error('categorie') is-invalid @enderror">
                        <option value="" selected disabled>Catégorie</option>
                        <option value="devweb">Développement web</option>
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
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description de l'article">
                    @error("description") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-5">
                <button type="submit" class="mt-2 btn btn-primary">Poster le tuto</button>
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