<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Articles;
use Illuminate\Http\Request;
use App\Models\Tutos;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view("admin.dashboard");
    }

    public function users(){
        return view("admin.users");
    }

    public function articles(){
        $articles = Articles::orderBy("id", "desc")->get();
        return view("admin.articles")->with("articles", $articles);
    }

    public function article($id){
        $article = Articles::find($id);
        $articles = Articles::orderBy("id", "desc")->get();
        return view("admin.article")->with("article", $article)->with("articles",$articles);
    }

    public function categories(){
        $categories = Categories::orderBy("nom", "asc")->get();
        return view('admin.categories')->with("categories", $categories);
    }

    public function add_category(){
        
        return view('admin.add-category');
    }

    public function create_category(Request $request){
        
        $request->validate([
            "nom" => "required|min:3|unique:Categories",
        ],
        [
            "nom.required" =>"Veuillez entrer le nom de la catégorie",
            "nom.min" =>"Le nom doit contenir au minimum 3 caractères",
            "nom.unique" =>"Cette catégorie existe déjà",
        ]

        );

            $nom_categorie = $request->nom;

        if(isset($nom_categorie)){
            
            $categorie = new Categories;

            $categorie->nom = htmlentities($nom_categorie);
            $categorie->save();
            
            return redirect("/admin/categories")->with("success", "Votre catégorie a été crée avec succès");
        }
        else
        {
            return redirect("/admin/add-category")->with("error", "Veuillez entrer correctement le nom de la catégorie !");
        }
    }

    public function stats(){
        return view("admin.stats");
    }

    public function category($nom_category){
        $articles = Articles::get()->where("nom_categorie", $nom_category);
        return view('admin.category')->with("articles", $articles);
        
    }

    public function add_article(){
        return view("admin.add-article");
    } 


    public function create_article(Request $request){

        $request->validate([
            "image" => "required|max: 2000",
            "titre" => "required",
            "description" => "required|min:10|max:52",
            "corps" => "min:12",
            "categorie" => "required",
            "auteur" => "required",
            "publication" => "required",
        ],
        [
            "titre.required" =>"Le nom de l'article est obligatoire",
            "image.required" =>"Veuillez uploder une image",
            "image.max" =>"La taille de l'image ne doit pas dépasser 2 Mo",
            "description.required" =>"Veuillez veuillez ajouter une description",
            "description.min" =>"Veuillez entrer au minimum 10 caractères",
            "description.max" =>"Vous ne devez pas dépasser plus de 42 caractères pour votre description",
            "corps.min" =>"L'article doit contenir minimum 12 caractères",
            "categorie.required" =>"Veuillez ajouter une catégorie",
            "auteur.required" =>"Veuillez ajouter un auteur",
            "publication.required" =>"Veuillez ajouter une date de publication"
        ]

        );

            $image = $request->file("image")->getClientOriginalName();
            $request->file("image")->move(public_path("img"), $image);
            $titre = $request->titre;
            $description = $request->description;
            $corps = $request->corps;
            $nom_categorie = $request->categorie;
            $auteur = $request->auteur;
            $date_publication = $request->publication;

        if(isset($image, $titre, $description, $nom_categorie, $corps, $auteur, $date_publication)){
            
            $article = new Articles;
            $article->image = htmlentities($image);
            $article->titre = htmlentities($titre);
            $article->description = htmlentities($description);
            $article->corps = htmlentities($corps);
            $article->nom_categorie = htmlentities($nom_categorie);
            $article->auteur = htmlentities($auteur);
            $article->date_publication = htmlentities($date_publication);
            $article->save();
            
            return redirect("/admin/articles")->with("success", "Votre article a été crée avec succès");
        }
        else
        {

            return redirect("/admin/add-article")->with("error", "Veuillez remplir tous les champs !");

        }

    }

    /* ----------------------Tuto------------------------ */

    public function tutos(){ 
        $categories = Categories::orderBy("nom", "asc")->get();
        $tutos = Tutos::orderBy("titre", "asc")->get();
        return view("admin.tutos")->with("categories", $categories)->with("tutos", $tutos);
    }

    public function tuto($id){
        $tuto = Tutos::find($id);
        $tutos = Tutos::orderBy("id", "desc")->get();
        return view("admin.article")->with("tuto", $tuto)->with("tutos", $tutos);
    }


    public function add_tuto(){
        return view("admin.add-tuto");
    }

    public function create_tuto(Request $request){

        $request->validate([
            "titre" => "min:6",
            "description" => "required|min:6",
            "video" => "required|file|max:10000|mimetypes:video/mp4",
            "categorie" => "required",
            "auteur" => "required",
            "publication" => "required",
            "temps" => "required",
            "prix" => "min:4",
        ],
        [
            "titre.required" =>"Le nom de l'article doit contenir au moins 6 caractères",
            "video.max" =>"La taille de la vidéo ne doit pas dépasser 10 Mo",
            "video.mimetypes" =>"Vous devez ajouter une vidéo au format mp4",
            "description.min" =>"Votre description doit contenir au minimum 6 cractères",
            "categorie.required" =>"Veuillez ajouter une catégorie",
            "auteur.min" =>"Le nom de l'auteur doit contenir au moins 3 caractères",
            "prix.min" =>"Le prix doit 1000",
            "temps.required" =>"Veuillez entrer la durée de la vidéo",
            "publication.required" =>"Veuillez ajouter une date de publication"
        ]

        );

            $video = $request->file("video")->getClientOriginalName();
            $request->file("video")->move(public_path("video"), $video);
            $titre = $request->titre;
            $description = $request->description;
            $prix = $request->prix;
            $nom_categorie = $request->categorie;
            $auteur = $request->auteur;
            $temps = $request->temps;
            $date_publication = $request->publication;

        if(isset($video, $titre, $description, $nom_categorie, $prix, $temps, $auteur, $date_publication)){
            
            $tuto = new Tutos;

            $tuto->video = htmlentities($video);
            $tuto->titre = htmlentities($titre);
            $tuto->description = htmlentities($description);
            $tuto->prix = htmlentities($prix);
            $tuto->temps = htmlentities($temps);
            $tuto->categorie = htmlentities($nom_categorie);
            $tuto->auteur = htmlentities($auteur);
            $tuto->date_publication = htmlentities($date_publication);

            $tuto->save();
            
            return redirect("/admin/tutos")->with("success", "Votre tuto a été crée avec succès");
        }
        else
        {

            return redirect("/admin/add-tuto")->with("error", "Veuillez remplir tous les champs !");

        }

    }

    public function edit_article(Request $request, $id){
        $article = Articles::find($id);
        return view("admin.edit-article")->with("article", $article);
        
    }

    public function editt_article(Request $request, $id){
        $article = Articles::find($request->id);

        $request->validate([
            "image" => "required|max:2000",
            "titre" => "required",
            "description" => "required",
            "corps" => "min:12",
            "categorie" => "required",
            "auteur" => "required",
            "publication" => "required",
        ],
        [
            "titre.required" =>"Le nom de l'article est obligatoire",
            "image.required" =>"Veuillez uploder une image",
            "image.max" =>"La taille de l'image ne doit pas dépasser 2Mo",
            "description.required" =>"Veuillez ajouter une description",
            "corps.min" =>"L'article doit contenir minimum 12 caractères",
            "categorie.required" =>"Veuillez ajouter une catégorie",
            "auteur.required" =>"Veuillez ajouter un auteur",
            "publication.required" =>"Veuillez ajouter une date de publication"
        ]
        );

        $image = $request->file("image")->getClientOriginalName();
        $request->file("image")->move(public_path("img"), $image);
        $titre = $request->titre;
        $description = $request->description;
        $corps = $request->corps;
        $nom_categorie = $request->categorie;
        $auteur = $request->auteur;
        $date_publication = $request->publication;
        
        if(isset($image, $titre, $description, $nom_categorie, $corps, $auteur, $date_publication)){
        $article->image = htmlentities($image);
        $article->titre = htmlentities($titre);
        $article->description = htmlentities($description);
        $article->corps = htmlentities($corps);
        $article->nom_categorie = htmlentities($nom_categorie);
        $article->auteur = htmlentities($auteur);
        $article->date_publication = htmlentities($date_publication);
        $article->update();
      
        return redirect("/admin/articles")->with("success", "Article modifié avec succes!");
        
        }
        else
        {

            return redirect("/admin/edit-article/$id")->with("error", "Veuillez remplir tous les champs !");

        }

    }

    public function delete_article($id){
        $article = Articles::find($id);

        return view("/admin/delete-article")->with("article", $article);
    }

    public function confirm_delete_article($id){
        $article = Articles::find($id);
        $article->delete();

        return redirect("/admin/articles")->with("success", "Article supprimé avec succès");
    }

    
}
