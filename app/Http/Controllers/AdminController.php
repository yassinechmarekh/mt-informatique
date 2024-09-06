<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produit;
use App\Models\DetailsImages;
use App\Models\DetailsDescription;
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

class AdminController extends Controller
{
    public function dashboard(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $categories = CategorieProduit::count();
        $admins = Admin::count();
        $employes = Employe::count();
        $produits = Produit::count();
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        return view('dashboards.dashboard-admin.pages.dashboard')->with(['user' => $user,'categories' => $categories,'admins' => $admins,'admin' => $admin,'employes' => $employes,'produits' => $produits]);
    }

    public function commandes(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $commandes = Commande::latest()->paginate(10);
        return view('dashboards.dashboard-admin.pages.commandes', ['user' => $user,'admin' => $admin,'commandes' => $commandes]);
    }

    public function categories(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $categories = CategorieProduit::paginate(4);
        $tags = TagCategorieProduit::all();
        return view('dashboards.dashboard-admin.pages.categories')->with(['user' => $user, 'categories' => $categories,'tags' => $tags,'admin' => $admin]);
    }

    public function nosProduits(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $produits = Produit::orderbyDesc('id')->paginate(9);
        return view('dashboards.dashboard-admin.pages.nos-produits', ['user' => $user,'admin' => $admin,'produits' => $produits]);
    }

    public function produitDetails($slug){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $produit = Produit::where('slug',$slug)->first();
        $images = DetailsImages::find($produit->IdImages);
        $produits = Produit::all();
        $reviews = Review::where('product_id',$produit->id)->get();
        return view('dashboards.dashboard-admin.pages.produit-details', ['user' => $user,'admin' => $admin,'produit' => $produit,'images' => $images,'produits' => $produits,'reviews' => $reviews]);
    }

    public function ajouterProduit(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $categories = CategorieProduit::all();
        return view('dashboards.dashboard-admin.pages.ajouter-produit', ['user' => $user,'admin' => $admin,'categories' => $categories]);
    }

    public function modifierProduit($slug){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $categories = CategorieProduit::all();
        $produit = Produit::where('slug',$slug)->first();
        $tags = TagProduit::find($produit->IdTags);
        $description = DetailsDescription::find($produit->IdDetails);
        $images = DetailsImages::find($produit->IdImages);
        return view('dashboards.dashboard-admin.pages.modifier-produit', ['user' => $user,'admin' => $admin,'categories' => $categories,'produit' => $produit,'tags' => $tags,'description' => $description,'images' => $images]);
    }

    public function employes(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $employes = Employe::paginate(10);
        $users = User::all();
        return view('dashboards.dashboard-admin.pages.employes', ['user' => $user,'admin' => $admin,'employes' => $employes,'users' => $users]);
    }

    public function employeProfile($id){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $employe = Employe::find($id);
        $user_employe = User::find($employe->IdUser);
        return view('dashboards.layouts.pages.section.profile-employe')->with(['user' => $user,'admin' => $admin,'employe' => $employe,'user_employe' => $user_employe]);
    }

    public function blogs(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $blogs = Blog::paginate(4);
        return view('dashboards.dashboard-admin.pages.nos-blogs', ['user' => $user,'admin' => $admin,'blogs' => $blogs]);
    }

    public function ajouterBlog(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        return view('dashboards.dashboard-admin.pages.ajouter-blog', ['user' => $user,'admin' => $admin]);
    }

    public function modifierBlog($slug){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $blog = Blog::where('slug',$slug)->first();
        $tags = BlogTag::find($blog->IdTag);
        return view('dashboards.dashboard-admin.pages.modifier-blog', ['user' => $user,'admin' => $admin,'blog' => $blog,'tags' => $tags]);
    }

    public function profile(){
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $id_user = $user->id;
        $admin = Admin::where('idUser',$id_user)->first();
        $categories = CategorieProduit::count();
        $employes = Employe::count();
        $produits = Produit::count();
        return view('dashboards.dashboard-admin.pages.profile-admin')->with(['user' => $user,'admin' => $admin,'categories' => $categories,'employes' => $employes,'produits' => $produits]);
    }

    public function changerInformations(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idUser = $_POST['idUser'];

            $user = User::find($idUser)->first();
            $admin = Admin::where('idUser',$idUser)->first();

            $admin->NomAdmin = $request->NomAdmin;
            $admin->PrenomAdmin = $request->PrenomAdmin;
            if($request->GenreAdmin === 'Male'){
                $admin->GenreAdmin = 'Male';
            }elseif($request->GenreAdmin === 'Femelle'){
                $admin->GenreAdmin = 'Femelle';
            }
            $admin->AgeAdmin = $request->AgeAdmin;
            $admin->RoleAdmin = $request->RoleAdmin;
            $admin->EmailProfessionnelAdmin = $request->EmailProfesionnel;
            $admin->TelAdmin = $request->TelAdmin;


            $admin->save();

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
                $user->email = $request->EmailAdmin;
                // Mettre à jour le mot de passe
                $user->password = Hash::make($request->input('NouveauPass'));
                $user->save();

                return redirect()->back()->with('changePass', 'Vos informations ont été modifiées avec succès !');
            } else {
                return redirect()->back()->with('error', 'L\'ancien mot de passe est incorrect.');
            }
        }
    }
}
