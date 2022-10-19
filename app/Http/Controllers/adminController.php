<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Articles;
use Illuminate\Http\Request;

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
        return view("admin.articles");
    }

    public function categories(){
        $categories = Categories::orderBy("nom", "asc")->get();
        return view('admin.categories')->with("categories", $categories);
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
            "image" => "required",
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
            
            $article = new Articles;
    
            $article->image = htmlentities($image);
            $article->titre = htmlentities($titre);
            $article->description = htmlentities($description);
            $article->corps = htmlentities($corps);
            $article->nom_categorie = htmlentities($nom_categorie);
            $article->auteur = htmlentities($auteur);
            $article->date_publication = htmlentities($date_publication);
            $article->save();
            
            return redirect("/admin/add-article")->with("success", "Votre article a été crée avec succès");
        }
        else
        {

            return redirect("/admin/add-article")->with("error", "Veuillez remplir tous les champs !");

        }

    }

    
}
