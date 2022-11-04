<?php

namespace App\Http\Controllers;
use App\Models\Uzers;
use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Categories;
use App\Models\Comments;
use App\Models\Replies;






class PagesController extends Controller
{
  
    public function index(){
        $articles = Articles::orderBy("titre", "asc")->limit(6)->get();
        return view("pages.index")->with("articles", $articles);
    }

    public function about(){
        return view("pages.about");
    }

    public function signup(){
        return view("pages.signup");  
    }

    public function user_signup(Request $request){

        $request->validate([
            "pseudo" => "required|min:3|unique:Uzers",
            "email" => "email|required|unique:Uzers",
            "password" => "required|min:4",

        ],
        [
            "pseudo.required" => "Veuillez entrer votre pseudo",
            "pseudo.unique" => "Ce pseudo a déjà été pris. Veuillez essayer avec un autre",
            "pseudo.min" => "Votre pseudo doit contenir au minimum 3 caractères",
            "email.email" => "Veuillez entrer votre adresse email valide",
            "email.unique" => "Cette adresse email existe dejà. Entrez-en une nouvelle svp",
            "password.required" => "Veuillez entrer un mot de passe",
            "password.min" => "Votre mot de passe doit contenir au minimum 4 caractères",
        ]
    );

        
        $pseudo = $request->pseudo;
        $email = $request->email;
        $password = $request->password;

        if(isset($pseudo, $email, $password)){

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                $user = new Uzers();

                $user->pseudo = htmlentities($pseudo);
                $user->email = htmlentities($email);
                $user->mot_de_passe = htmlentities(password_hash($password, PASSWORD_DEFAULT));

                $user->save();

                return back()->with("success", "Vous avez été inscrit avec succès");
            }
            else{
                return back()->with("error", "Veuillez remplir correctement tous les champs");
            }
   
        }
        
    }


    public function login(){
        return view("pages.login");
    }


    public function user_login(Request $request){

        $request->validate([
            "email" => "email|required",
            "password" => "required",

        ],
        [
            "email.email" => "Veuillez entrer une adresse email valide",
            "email.required" => "Veuillez entrer votre email",
            "password.required" => "Veuillez entrer votre mot de passe",
        ]
        );

        $email = $request->email;
        $password = $request->password;

        if(isset($email, $password)){

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                $uzer = Uzers::where('email', $email)->first();

                if($uzer->email == $email && password_verify($password, $uzer->mot_de_passe)){
                    $request->session()->put("uzer", $uzer->pseudo);
                    return redirect("/");
                }
                else{
                    return back()->with("error", "Email ou mot de passe incorrect");
                }

            }
            else{
                return back()->with("error", "Veuillez entrer une adresse email valide");
            }
   
        }
        
    }


    public function logout(){
        if(session()->has("uzer")){
            session()->pull('uzer');
        }
        return redirect("/");
    }

    /*-----------------------------Comments-----------------------------*/

    public function add_comment($id){
        $article = Articles::find($id);

        return view("pages.add-comment")->with("article", $article);
    }

    public function add_comment2($article_id, $comment_id){
        $article = Articles::find($article_id);
        $comment = Comments::find($comment_id);

        return view("pages.add-comment2")->with("article", $article)->with("comment", $comment);
    }


    public function create_comment(Request $request, $id){

        $request->validate([
            "comment" => "min:12",
            "auteur" => "min:3"
        ],
        [
            "comment.min" =>"Votre commentaire doit contenir minimum 12 caractères",
            "auteur.min" => "Le nom de l'auteur doit contenir au minimum 3 caractères"
        ]

        );

            $comment = $request->comment;
            $auteur = $request->auteur;
            $article_id = $id;

        if(isset($comment, $auteur)){

            if($auteur == session()->get("uzer")){

                $commentaire = new Comments;

                $commentaire->auteur = htmlentities($auteur);
                $commentaire->corps = htmlentities($comment);
                $commentaire->article_id = $article_id;
                $commentaire->save();

                return redirect("/article/$id")->with("success", "Votre commentaire a été posté");

            }
            else{
                return back()->with("error", "Le pseudo que vous avez entré n'est pas le votre");
            }
            
        }
        else
        {

            return redirect("/add-comment")->with("error", "Veuillez remplir tous les champs !");

        }

    }

    public function create_comment2(Request $request, $article_id, $comment_id){

        $request->validate([
            "comment" => "min:12",
            "auteur" => "min:3"
        ],
        [
            "comment.min" =>"Votre commentaire doit contenir minimum 12 caractères",
            "auteur.min" => "Le nom de l'auteur doit contenir au minimum 3 caractères"
        ]

        );

            $comment = $request->comment;
            $auteur = $request->auteur;
            $articleId = $article_id;
            $commentId = $comment_id;

        if(isset($comment, $auteur)){

            if($auteur == session()->get("uzer")){

                $commentaire = new Replies;

                $commentaire->auteur = htmlentities($auteur);
                $commentaire->corps = htmlentities($comment);
                $commentaire->comment_id = $commentId;
                $commentaire->article_id = $articleId;
                $commentaire->save();

                return redirect("/article/$article_id")->with("success", "Votre commentaire a été posté");

            }
            else{
                return back()->with("error", "Le pseudo que vous avez entré n'est pas le votre");
            }
            
        }
        else
        {

            return redirect("/add-comment")->with("error", "Veuillez remplir tous les champs !");

        }

    }

    /* Edit edit */
    public function edit_article(Request $request, $id){
        $article = Articles::find($id);
        return view("admin.edit-article")->with("article", $article);
        
    }

    public function editt_article(Request $request){
        $article = Articles::find($request->id);

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

        $name = $request->file("image")->getClientOriginalName();
        $request->file("image")->move(public_path("img"), $name);
        $titre = $request->titre;
        $description = $request->description;
        $corps = $request->corps;
        $nom_categorie = $request->categorie;
        $auteur = $request->auteur;
        $date_publication = $request->publication;
        
        if(isset($image, $titre, $description, $nom_categorie, $corps, $auteur, $date_publication)){
        $article->image = htmlentities($name);
        $article->titre = htmlentities($titre);
        $article->description = htmlentities($description);
        $article->corps = htmlentities($corps);
        $article->nom_categorie = htmlentities($nom_categorie);
        $article->auteur = htmlentities($auteur);
        $article->date_publication = htmlentities($date_publication);
        $article->update();
      
        return redirect("/admin/articles")->with("status", "Article modifié avec succes!");
        
        }
        else
        {

            return redirect("/admin/edit-article")->with("error", "Veuillez remplir tous les champs !");

        }

    }

    /* Delete comment */

    public function delete_comment($comment_id, $article_id){
        $article = Articles::where("comment_id", $comment_id)
                            ->where("article_id",$article_id);

        return view("/admin/delete-article")->with("article", $article);
    }

    public function confirm_delete_article($id){
        $article = Articles::find($id);
        $article->delete();

        return redirect("/admin/articles")->with("success", "Article supprimé avec succès");
    }


    public function article($id){
        $article = Articles::find($id);
        $comments = Comments::orderBy("id", "desc")->where("article_id", $id)->get();
        $replies = Replies::orderBy("id", "desc")->where("comment_id", $id)->get();
        $articles = Articles::inRandomOrder()->get()->where("id", "!=",$id);

        return view("pages.article")->with("article", $article)->with("articles",$articles)->with("comments", $comments)->with("replies", $replies);
    }


    public function articles(){ 
        $articles = Articles::orderBy("titre", "desc")
                    ->paginate(30);
        return view("pages.articles")->with("articles", $articles);
    }

    public function formations(){ 
        
        return view("pages.formations");
    }


      

    public function categories(){
        $categories = Categories::orderBy("nom", "asc")->get();
        return view('pages.categories')->with("categories", $categories);
    }

    public function category($nom_category){
        $articles = Articles::get()->where("nom_categorie", $nom_category);
        return view('pages.category')->with("articles", $articles);
        
    }

    public function contact(){
        return view("pages.contact");
    }

}
