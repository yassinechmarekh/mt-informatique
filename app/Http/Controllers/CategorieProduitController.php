<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieProduit;
use App\Models\TagCategorieProduit;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorieProduitController extends Controller
{
    public function index($slug= null){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $categorie = CategorieProduit::where('categorie_produits.slug', $slug)->first();
        $tags = TagCategorieProduit::find($categorie->IdTags);
        $categories = CategorieProduit::all();
        $produits = Produit::where('IdCategorie',$categorie->id)->inRandomOrder()->paginate(4);
        $nbr_produits = count(Produit::where('IdCategorie',$categorie->id)->get());

        return view('pages.categories-details')->with(['user' => $user, 'categorie' => $categorie, 'categories' => $categories, 'tags' => $tags, 'produits' => $produits,'nbr_produits' => $nbr_produits]);
    }

    public function store(Request $request){
        $request->validate([
            'nomCategorie' => ['required', 'string','max:255'],
            'tag1' => ['required', 'string','max:255'],
            'tag2' => ['required', 'string','max:255'],
            'tag3' => ['required', 'string','max:255'],
            'tag4' => ['required', 'string','max:255'],
            'tag5' => ['required', 'string','max:255'],
            'tag6' => ['required', 'string','max:255']
        ]);

        $tags = new TagCategorieProduit();
        $tags->Tag1 = $request->tag1;
        $tags->Tag2 = $request->tag2;
        $tags->Tag3 = $request->tag3;
        $tags->Tag4 = $request->tag4;
        $tags->Tag5 = $request->tag5;
        $tags->Tag6 = $request->tag6;

        $tags->save();


        $idtag = $tags->id;

        $categorie = new CategorieProduit();
        $categorie->IdTags = $idtag;
        $categorie->NomCategorie = $request->nomCategorie;
        $categorie->slug = Str::slug($request->nomCategorie);

        $categorie->save();

        return redirect()->back()->with('success','La catégorie a été bien ajouter !!');
    }

    public function update(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idCategorie = $_POST['idCategorie'];

            $categorie = CategorieProduit::find($idCategorie);
            $tag = TagCategorieProduit::find($categorie->IdTags);

            $categorie->NomCategorie = $request->nomCategorie;
            $categorie->slug = Str::slug($request->nomCategorie);

            $tag->Tag1 = $request->tag1;
            $tag->Tag2 = $request->tag2;
            $tag->Tag3 = $request->tag3;
            $tag->Tag4 = $request->tag4;
            $tag->Tag5 = $request->tag5;
            $tag->Tag6 = $request->tag6;

            $categorie->save();
            $tag->save();

            return redirect()->back()->with('success','La catégorie a été bien modifier !!');
        }
    }

    public function delete(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idCategorie = $_POST['idCategorie'];

            $categorie = CategorieProduit::find($idCategorie);
            $idtag = TagCategorieProduit::find($categorie->IdTags);

            CategorieProduit::destroy($idCategorie);
            TagCategorieProduit::destroy($idtag);

            return redirect()->back()->with('success','La catégorie a été bien supprimer !!');
        }
    }


}
