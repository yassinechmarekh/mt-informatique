<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Commande;
use App\Models\User;
use Hash;

class ClientController extends Controller
{
    public function dashboard(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $client = Client::where('idUser',$id_user)->first();
        $commandes = Commande::where('idClient',$client->id)->latest()->get();
        return view('dashboards.dashboard-client.dashboard-client', ['user' => $user,'client' => $client,'commandes' => $commandes]);
    }

    public function changerInformations(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idUser = $_POST['idUser'];

            $user = User::find($idUser);
            $client = Client::where('idUser',$idUser)->first();

            $client->NomClient = $request->NomClient;
            $client->PrenomClient = $request->PrenomClient;
            $client->VilleClient = $request->VilleClient;
            $client->AdresseClient = $request->AdresseClient;
            $client->TelClient = $request->TelClient;

            $client->save();

            return redirect()->back()->with('changeInfo','Vos informations sont bien modifié !!');
        }
    }

    public function changerPassword(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idUser = $_POST['idUser'];
            $user = User::find($idUser);

            // Vérifier si l'ancien mot de passe correspond
            if (Hash::check($request->input('AncienPass'), $user->password)) {
                // Mettre à jour l'email si fourni
                $user->email = $request->emailClient;
                // Vérifier la confirmation du nouveau mot de passe
                if ($request->input('NouveauPass') === $request->input('confirm_NouveauPass')) {
                    // Mettre à jour le mot de passe
                    $user->password = Hash::make($request->input('NouveauPass'));
                    $user->save();

                    return redirect()->back()->with('changePass', 'Vos informations ont été modifiées avec succès !');
                } else {
                    return redirect()->back()->with('passNotEq', 'Veuillez entrer le même mot de passe !');
                }
            } else {
                if ($request->input('NouveauPass') !== $request->input('confirm_NouveauPass')){
                    return redirect()->back()->with(['passNotEq' => 'Veuillez entrer le même mot de passe !','passIncorrect' => 'L\'ancien mot de passe est incorrect !']);
                }
                return redirect()->back()->with('passIncorrect', 'L\'ancien mot de passe est incorrect !');
            }
        }
    }
}
