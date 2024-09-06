<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\DetailsDescription;
use App\Models\DetailsImages;
use App\Models\CategorieProduit;
use App\Models\TagCategorieProduit;
use App\Models\TagProduit;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Commande;
use App\Models\Review;
use App\Models\Admin;
use App\Models\Employe;
use App\Models\User;
use Hash;

class EmployeController extends Controller
{
    public function dashboard(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $categories = CategorieProduit::count();
        $admins = Admin::count();
        $employes = Employe::count();
        $produits = Produit::count();
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        return view('dashboards.dashboard-employe.pages.dashboard')->with(['user' => $user,'categories' => $categories,'admins' => $admins,'employe' => $employe,'employes' => $employes,'produits' => $produits]);
    }

    public function categories(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $categories = CategorieProduit::paginate(4);
        $tags = TagCategorieProduit::all();
        return view('dashboards.dashboard-employe.pages.categories', ['user' => $user, 'categories' => $categories,'tags' => $tags,'employe' => $employe]);
    }

    public function commandes(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $commandes = Commande::latest()->paginate(10);
        return view('dashboards.dashboard-employe.pages.commandes', ['user' => $user,'employe' => $employe,'commandes' => $commandes]);
    }

    public function nosProduits(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $produits = Produit::orderbyDesc('id')->paginate(9);
        return view('dashboards.dashboard-employe.pages.nos-produits', ['user' => $user,'employe' => $employe,'produits' => $produits]);
    }

    public function produitDetails($slug){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $produit = Produit::where('slug',$slug)->first();
        $images = DetailsImages::find($produit->IdImages);
        $produits = Produit::all();
        $reviews = Review::where('product_id',$produit->id)->get();
        return view('dashboards.dashboard-employe.pages.produit-details', ['user' => $user,'employe' => $employe,'produit' => $produit,'images' => $images, 'produits' => $produits,'reviews' => $reviews]);
    }

    public function ajouterProduit(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $categories = CategorieProduit::all();
        return view('dashboards.dashboard-employe.pages.ajouter-produit', ['user' => $user,'employe' => $employe,'categories' => $categories]);
    }

    public function modifierProduit($slug){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $categories = CategorieProduit::all();
        $produit = Produit::where('slug',$slug)->first();
        $tags = TagProduit::find($produit->IdTags);
        $description = DetailsDescription::find($produit->IdDetails);
        $images = DetailsImages::find($produit->IdImages);
        return view('dashboards.dashboard-employe.pages.modifier-produit', ['user' => $user,'employe' => $employe,'categories' => $categories,'produit' => $produit,'tags' => $tags,'description' => $description,'images' => $images]);
    }

    public function nosBlogs(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $blogs = Blog::paginate(4);
        return view('dashboards.dashboard-employe.pages.nos-blogs', ['user' => $user,'employe' => $employe,'blogs' => $blogs]);
    }

    public function ajouterBlog(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        return view('dashboards.dashboard-employe.pages.ajouter-blog', ['user' => $user,'employe' => $employe]);
    }

    public function modifierBlog($slug){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $blog = Blog::where('slug',$slug)->first();
        $tags = BlogTag::find($blog->IdTag);
        return view('dashboards.dashboard-employe.pages.modifier-blog', ['user' => $user,'employe' => $employe,'blog' => $blog,'tags' => $tags]);
    }

    public function profile(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $employe = Employe::where('idUser',$id_user)->first();
        $employes = Employe::count();
        return view('dashboards.dashboard-employe.pages.profile-employe', ['user' => $user,'employe' => $employe,'employes' => $employes]);
    }

    public function changerInformations(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idUser = $_POST['idUser'];

            $user = User::find($idUser)->first();
            $employe = Employe::where('idUser',$idUser)->first();

            $employe->NomEmploye = $request->NomEmployee;
            $employe->PrenomEmploye = $request->PrenomEmployee;
            if($request->GenreEmploye === 'Male'){
                $employe->GenreEmploye = 'Male';
            }elseif($request->GenreEmploye === 'Femelle'){
                $employe->GenreEmploye = 'Femelle';
            }
            $employe->EmailProfessionnelEmploye = $request->EmailProfesionnelEmploye;

            $employe->save();

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
                $user->email = $request->EmailEmployee;
                // Mettre à jour le mot de passe
                $user->password = Hash::make($request->input('NouveauPass'));
                $user->save();

                return redirect()->back()->with('changePass', 'Vos informations ont été modifiées avec succès !');
            } else {
                return redirect()->back()->with('error', 'L\'ancien mot de passe est incorrect.');
            }
        }
    }

    public function ajouterEmploye(Request $request){
        $request->validate([
            'NomEmploye' => ['required', 'string','max:255'],
            'PrenomEmploye' => ['required', 'string','max:255'],
            'GenreEmploye' => ['required', 'string','max:255'],
            'SalaireEmploye' => ['required', 'string','max:255'],
            'RoleEmploye' => ['required', 'string','max:255'],
            'EmailEmploye' => ['required', 'string','max:255'],
            'PassEmploye' => ['required', 'string','max:255']
        ]);

        $employe = new Employe();
        $user = new User();

        $user->email = $request->EmailEmploye;
        $user->password = Hash::make($request->PassEmploye);
        $user->role = 'Employe';

        $user->save();

        $employe->IdUser = $user->id;
        $employe->NomEmploye = $request->NomEmploye;
        $employe->PrenomEmploye = $request->PrenomEmploye;
        $employe->GenreEmploye = $request->GenreEmploye;
        $employe->SalaireEmploye = $request->SalaireEmploye;
        $employe->RoleEmploye = $request->RoleEmploye;
        $employe->EmailProfessionnelEmploye = $request->EmailEmploye;

        $employe->save();

        return redirect()->back()->with('success','L\'employe a été ajouter avec succes !!');
    }

    public function modifierEmploye(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $id_employe = $_POST['idUser'];

            $employe = Employe::find($id_employe);
            $user = User::find($employe->IdUser);

            $employe->NomEmploye = $request->NomEmploye;
            $employe->PrenomEmploye = $request->PrenomEmploye;
            $employe->GenreEmploye = $request->GenreEmploye;
            $employe->SalaireEmploye = $request->SalaireEmploye;
            $employe->RoleEmploye = $request->RoleEmploye;
            $employe->EmailProfessionnelEmploye = $request->EmailEmploye;

            $user->email = $request->EmailEmploye;

            $user->save();
            $employe->save();

            return redirect()->back()->with('changeInfo','Informations ont été bien modifié !!');
        }
    }

    public function supprimerEmploye(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $id_employe = $_POST['idUser'];
            $employe = Employe::find($id_employe);

            Employe::destroy($id_employe);
            User::destroy($employe->IdUser);

            return redirect()->back()->with('success','L\'employe est supprimer avec succes !!');
        }
    }
}
