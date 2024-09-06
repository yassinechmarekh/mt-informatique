<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Produit;
use Illuminate\Support\Facades\Cookie;

class PanierController extends Controller
{
    public function ajouterPanier(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idproduit = $_POST['idProduit'];
            $quantite = $_POST['quantite'];
            $produit = Produit::find($idproduit);

            $panier = session()->get ('panier', []);
            if(isset($panier[$idproduit])){
                $panier[$idproduit]['quantite'] += $quantite;
            }
            else {
                $panier[$idproduit] = [
                    'idproduit' => $idproduit,
                    'slug' => $produit->slug,
                    'image' => $produit->ImagePrincipale,
                    'titre' => $produit->titre,
                    'quantite' => $quantite,
                    'prix' => $produit->NouveauPrix,
                ];
            }

            session()->put('panier',$panier);
        }

        return redirect()->back();
    }

    public function supprimerPanier($idproduit){
        $panier = session('panier');
        // Vérifier si le produit est présent dans le panier
        if(count($panier) > 0){
            if(isset($panier[$idproduit])){
                // Supprimer le produit du panier
                unset($panier[$idproduit]);
                // Mettre à jour le panier dans la session
                session()->put('panier', $panier);
            }
        }
        return redirect()->back();
    }

    public function viderPanier(){
        if(session('panier')){
            session()->forget('panier');
        }
        return redirect()->back();
    }
}
