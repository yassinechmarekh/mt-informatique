<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class WishlistController extends Controller
{
    public function ajouterWishlist(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idproduit = $_POST['idProduit'];
            $produit = Produit::find($idproduit);

            $wishlist = session()->get ('wishlist', []);

            // verifier si le produit est deja dans la liste
            if(!isset($wishlist[$idproduit])) {
                $wishlist[$idproduit] = [
                    'idproduit' => $idproduit,
                    'slug' => $produit->slug,
                    'image' => $produit->ImagePrincipale,
                    'titre' => $produit->titre,
                    'prix' => $produit->NouveauPrix,
                ];
            }

            session()->put('wishlist',$wishlist);
        }

        return redirect()->back();
    }

    public function supprimerWishlist($idproduit){
        $wishlist = session('wishlist');
        // Vérifier si le produit est présent dans wishlist
        if(count($wishlist) > 0){
            if(isset($wishlist[$idproduit])){
                // Supprimer le produit du wishlist
                unset($wishlist[$idproduit]);
                // Mettre à jour wishlist dans la session
                session()->put('wishlist', $wishlist);
            }
        }
        return redirect()->back();
    }

    public function ajouterWishlistId($idproduit){
        $produit = Produit::find($idproduit);

        $wishlist = session()->get ('wishlist', []);

        // verifier si le produit est deja dans la liste
        if(!isset($wishlist[$idproduit])) {
            $wishlist[$idproduit] = [
                'idproduit' => $idproduit,
                'slug' => $produit->slug,
                'image' => $produit->ImagePrincipale,
                'titre' => $produit->titre,
                'prix' => $produit->NouveauPrix,
            ];
        }

        session()->put('wishlist',$wishlist);

        return redirect()->back();
    }
}
