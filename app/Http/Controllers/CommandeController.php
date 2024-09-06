<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandeController extends Controller
{
    public function effectuerCommande(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idclient = $_POST['idclient'];

            $panier = session('panier');

            foreach($panier as $p){
                $commande = new Commande();

                $commande->idproduit = $p['idproduit'];
                $commande->idclient = $idclient;
                $commande->Prenom = $request->Prenom;
                $commande->Nom = $request->Nom;
                $commande->Adresse = $request->Ville.', '.$request->Adresse;
                $commande->ProduitTitre = $p['titre'];
                $commande->Prix = $p['prix'];
                $commande->Quantite = $p['quantite'];

                // Calculer le prix total
                $prix = str_replace([' ', ' ', ','], ['', '', '.'], $p['prix']);
                $prixFloat = (float) $prix;
                $prixTotal = intval($p['quantite']) * $prixFloat;

                $commande->Total = $prixTotal;
                $commande->Tel = $request->Tel;

                $commande->save();
            }

            session()->forget('panier');

            return redirect()->back()->with('success','Votre commande est passé avec succes');
        }

    }

    public function confirmerCommande($idcommande){
        $commande = Commande::find($idcommande);

        $commande->status = 'Confirmée';
        $commande->save();

        return redirect()->back();
    }

    public function AnnulerCommande($idcommande){
        $commande = Commande::find($idcommande);

        $commande->status = 'Annulée';
        $commande->save();

        return redirect()->back();
    }
}
