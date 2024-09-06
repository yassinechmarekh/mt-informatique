<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Models\Client;
use App\Models\CategorieProduit;
use App\Models\TagProduit;
use App\Models\DetailsDescription;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Produit;
use App\Models\DetailsImages;
use App\Models\Review;
use Illuminate\Support\Str;
use App\Events\UserCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function masterDashboard(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        return view('dashboards.layouts.master', ['user' => $user]);
    }


    public function acceuil(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $blogs = Blog::take(3)->get();
        $produits_affaire = Produit::where('status','Affaire du jour')->get();
        $produits_nouveau = Produit::where('status','Nouveau Arrivage')->take(8)->get();
        $produits_populaire = Produit::where('status','Meilleures Ventes')->take(8)->get();
        $produits_solde = Produit::where('status','Articles Soldés')->take(8)->get();
        $produits = Produit::all();
        return view('pages.acceuil', ['user' => $user,'blogs' => $blogs,'produits_affaire' => $produits_affaire,'produits_nouveau' => $produits_nouveau,'produits_populaire' => $produits_populaire,'produits_solde' => $produits_solde,'produits' => $produits]);
    }

    public function boutique(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $categories = CategorieProduit::all();
        $produits = Produit::inRandomOrder()->paginate(12); //orderByDesc('id')
        $nbr_produits = count(Produit::all());
        return view('pages.boutique', ['user' => $user, 'categories' => $categories,'produits' => $produits,'nbr_produits' => $nbr_produits]);
    }

    public function nosServices(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        return view('pages.nos-services', ['user' => $user]);
    }

    public function blog(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $blogs = Blog::paginate(6);
        return view('pages.blog', ['user' => $user,'blogs' => $blogs]);
    }

    public function blogDetails($slug){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $blog = Blog::where('slug', $slug)->first();
        $nombre_blogs = Blog::count();
        // Récupérer le blog précédent
        $blog_precedent = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();

        // Récupérer le blog suivant
        $blog_suivant = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();

        // Si le blog actuel est le premier blog, récupérer le dernier blog comme précédent
        if (!$blog_precedent) {
            $blog_precedent = Blog::orderBy('id', 'desc')->first();
        }

        // Si le blog actuel est le dernier blog, récupérer le premier blog comme suivant
        if (!$blog_suivant) {
            $blog_suivant = Blog::orderBy('id', 'asc')->first();
        }
        $blogs_lasted = Blog::latest()->take(3)->get();
        $tags = BlogTag::find($blog->IdTag);
        return view('pages.blog-details', ['user' => $user,'blog' => $blog,'tags' => $tags,'blog_precedent' => $blog_precedent,'blog_suivant' => $blog_suivant,'blogs_lasted' => $blogs_lasted]);
    }

    public function apropos(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        return view('pages.apropos', ['user' => $user]);
    }

    public function contact(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        return view('pages.contact', ['user' => $user]);
    }

    public function listeDenvies(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        return view('pages.liste-d-envies', ['user' => $user]);
    }

    public function checkout(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        if(auth()->check()){
            $client = Client::where('idUser',$user->id)->first();
            return view('pages.checkout', ['user' => $user,'client' => $client]);
        }else{
            return redirect()->route('login');
        }
    }

    public function panierDetails(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        return view('pages.panier-details', ['user' => $user]);
    }

    public function produitDetails($slug){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $produit = Produit::where('slug',$slug)->first();
        $images = DetailsImages::find($produit->IdImages);
        $categorie = CategorieProduit::find($produit->IdCategorie);
        $tags = TagProduit::find($produit->IdTags);
        $description = DetailsDescription::find($produit->IdDetails);
        $produits_connexes = Produit::where('IdCategorie',$produit->IdCategorie)->limit(4)->get();
        $produits = Produit::all();
        $reviews = Review::where('product_id',$produit->id)->get();
        if(auth()->check()){
            $client = Client::where('IdUser',$user->id)->first();
            return view('pages.produit-details', ['user' => $user,'produit' => $produit,'produits' => $produits,'images' => $images,'categorie' => $categorie,'tags' => $tags,'description' => $description,'produits_connexes' => $produits_connexes,'client' => $client,'reviews' => $reviews]);
        }
        return view('pages.produit-details', ['user' => $user,'produit' => $produit,'produits' => $produits,'images' => $images,'categorie' => $categorie,'tags' => $tags,'description' => $description,'produits_connexes' => $produits_connexes,'reviews' => $reviews]);
    }

}
