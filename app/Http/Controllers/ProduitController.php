<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produit;
use App\Models\DetailsDescription;
use App\Models\TagProduit;
use App\Models\CategorieProduit;
use App\Models\TagCategorieProduit;
use App\Models\DetailsImages;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProduitController extends Controller
{
    public function ajouterProduit(Request $request){
        if($request->has(['ImagePrincipale','ImageDashboard','smallImage1','zoomImage1','smallImage2','zoomImage2','smallImage3','zoomImage3','smallImage4','zoomImage4','smallImage5','zoomImage5'])){
            // Image Principale
            $ImagePrincipale = $request->ImagePrincipale;
            $ImagePrincipale_name = Str::slug($request->titre).time();
            $ImagePrincipale->move(public_path('assets/store/images/product'),$ImagePrincipale_name);

            // Image Dashboard
            $ImageDashboard = $request->ImageDashboard;
            $ImageDashboard_name = Str::slug($request->titre).'-228px-250px'.time();
            $ImageDashboard->move(public_path('assets/dashboard/images'),$ImageDashboard_name);

            // small Image 1
            $smallImage1 = $request->smallImage1;
            $smallImage1_name = Str::slug($request->titre).'-small-1'.time();
            $smallImage1->move(public_path('assets/store/images/product-details/small'),$smallImage1_name);

            // zoom Image 1
            $zoomImage1 = $request->zoomImage1;
            $zoomImage1_name = Str::slug($request->titre).'-zoom-1'.time();
            $zoomImage1->move(public_path('assets/store/images/product-details/zoom'),$zoomImage1_name);

            // small Image 2
            $smallImage2 = $request->smallImage2;
            $smallImage2_name = Str::slug($request->titre).'-small-2'.time();
            $smallImage2->move(public_path('assets/store/images/product-details/small'),$smallImage2_name);

            // zoom Image 2
            $zoomImage2 = $request->zoomImage2;
            $zoomImage2_name = Str::slug($request->titre).'-zoom-2'.time();
            $zoomImage2->move(public_path('assets/store/images/product-details/zoom'),$zoomImage2_name);

            // small Image 3
            $smallImage3 = $request->smallImage3;
            $smallImage3_name = Str::slug($request->titre).'-small-3'.time();
            $smallImage3->move(public_path('assets/store/images/product-details/small'),$smallImage3_name);

            // zoom Image 3
            $zoomImage3 = $request->zoomImage3;
            $zoomImage3_name = Str::slug($request->titre).'-zoom-3'.time();
            $zoomImage3->move(public_path('assets/store/images/product-details/zoom'),$zoomImage3_name);

            // small Image 4
            $smallImage4 = $request->smallImage4;
            $smallImage4_name = Str::slug($request->titre).'-small-4'.time();
            $smallImage4->move(public_path('assets/store/images/product-details/small'),$smallImage4_name);

            // zoom Image 4
            $zoomImage4 = $request->zoomImage4;
            $zoomImage4_name = Str::slug($request->titre).'-zoom-4'.time();
            $zoomImage4->move(public_path('assets/store/images/product-details/zoom'),$zoomImage4_name);

            // small Image 5
            $smallImage5 = $request->smallImage5;
            $smallImage5_name = Str::slug($request->titre).'-small-5'.time();
            $smallImage5->move(public_path('assets/store/images/product-details/small'),$smallImage5_name);

            // zoom Image 5
            $zoomImage5 = $request->zoomImage5;
            $zoomImage5_name = Str::slug($request->titre).'-zoom-5'.time();
            $zoomImage5->move(public_path('assets/store/images/product-details/zoom'),$zoomImage5_name);
        }


        $detailDescription = new DetailsDescription();

        $detailDescription->sousTitre1 = $request->soustitre1;
        $detailDescription->paragraph1 = $request->paragraphe1;
        $detailDescription->sousTitre2 = $request->soustitre2;
        $detailDescription->paragraph2 = $request->paragraphe2;
        $detailDescription->sousTitre3 = $request->soustitre3;
        $detailDescription->paragraph3 = $request->paragraphe3;
        $detailDescription->sousTitre4 = $request->soustitre4;
        $detailDescription->paragraph4 = $request->paragraphe4;
        $detailDescription->sousTitre5 = $request->soustitre5;
        $detailDescription->paragraph5 = $request->paragraphe5;

        $detailDescription->save();

        $tags = new TagProduit();

        $tags->Tag1 = $request->Tag1;
        $tags->Tag2 = $request->Tag2;
        $tags->Tag3 = $request->Tag3;
        $tags->Tag4 = $request->Tag4;

        $tags->save();

        $images = new DetailsImages();
        $images->smallImage1 = $smallImage1_name;
        $images->zoomImage1 = $zoomImage1_name;
        $images->smallImage2 = $smallImage2_name;
        $images->zoomImage2 = $zoomImage2_name;
        $images->smallImage3 = $smallImage3_name;
        $images->zoomImage3 = $zoomImage3_name;
        $images->smallImage4 = $smallImage4_name;
        $images->zoomImage4 = $zoomImage4_name;
        $images->smallImage5 = $smallImage5_name;
        $images->zoomImage5 = $zoomImage5_name;

        $images->save();

        $produit = new Produit();

        $produit->titre = $request->titre;
        $produit->slug = Str::slug($request->titre);
        $produit->status = $request->status;
        $produit->ImagePrincipale = $ImagePrincipale_name;
        $produit->ImageDashboard = $ImageDashboard_name;
        if($request->status === "Affaire du jour"){
            $reduction = $request->AncienPrix - $request->NouveauPrix;
            $produit->ParametreStatus = "-".$reduction.",00 Dh";
        }elseif($request->status === "Nouveau Arrivage"){
            $produit->ParametreStatus = "Nouveau";
        }elseif($request->status === "Meilleures Ventes"){
            $produit->ParametreStatus = "Populaire";
        }elseif($request->status === "Articles Soldés"){
            $produit->ParametreStatus = "Solde";
        }else{
            $produit->ParametreStatus = null;
        }
        $produit->AncienPrix = $request->AncienPrix.",00 DH";
        $produit->NouveauPrix = $request->NouveauPrix.",00 DH";
        $produit->DescriptionModal = $request->Description;
        $produit->DescriptionPlus = $request->Description;
        $produit->IdDetails = $detailDescription->id;
        $produit->IdTags = $tags->id;
        $produit->IdImages = $images->id;

        // Récupération de la catégorie et sauvegarde du produit
        $categorie = CategorieProduit::where('NomCategorie', $request->categorie)->first();
        if($categorie){
            $produit->IdCategorie = $categorie->id;
            $produit->save();
            return redirect()->back()->with('success', 'Produit ajouté avec succès');
        } else {
            return redirect()->back()->with('error', 'La catégorie spécifiée est introuvable.');
        }

    }

    public function modifierProduit(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idproduit = $_POST['idproduit'];
            $produit = Produit::find($idproduit);
            $tags = TagProduit::find($produit->IdTags);
            $images = DetailsImages::find($produit->IdImages);
            $description = DetailsDescription::find($produit->IdDetails);



            if($request->has('ImagePrincipale')){
                // Image Principale
                $ImagePrincipale = $request->ImagePrincipale;
                $ImagePrincipale_name = Str::slug($request->titre).time();
                $ImagePrincipale->move(public_path('assets/store/images/product/'),$ImagePrincipale_name);
                unlink(public_path('assets/store/images/product/') . $produit->ImagePrincipale);
                $produit->ImagePrincipale = $ImagePrincipale_name;
            }

            if($request->has('ImageDashboard')){
                // Image Dashboard
                $ImageDashboard = $request->ImageDashboard;
                $ImageDashboard_name = Str::slug($request->titre).'-228px-250px'.time();
                $ImageDashboard->move(public_path('assets/dashboard/images/'),$ImageDashboard_name);
                unlink(public_path('assets/dashboard/images/') . $produit->ImageDashboard);
                $produit->ImageDashboard = $ImageDashboard_name;
            }

            if($request->has(['ImagePrincipale','ImageDashboard'])){
                // Image Principale
                $ImagePrincipale = $request->ImagePrincipale;
                $ImagePrincipale_name = Str::slug($request->titre).time();
                $ImagePrincipale->move(public_path('assets/store/images/product/'),$ImagePrincipale_name);
                unlink(public_path('assets/store/images/product/') . $produit->ImagePrincipale);
                $produit->ImagePrincipale = $ImagePrincipale_name;

                // Image Dashboard
                $ImageDashboard = $request->ImageDashboard;
                $ImageDashboard_name = Str::slug($request->titre).'-228px-250px'.time();
                $ImageDashboard->move(public_path('assets/dashboard/images/'),$ImageDashboard_name);
                unlink(public_path('assets/dashboard/images/') . $produit->ImageDashboard);
                $produit->ImageDashboard = $ImageDashboard_name;
            }

            if($request->has(['smallImage1','zoomImage1'])){
                // small Image 1
                $smallImage1 = $request->smallImage1;
                $smallImage1_name = Str::slug($request->titre).'-small-1-'.time();
                $smallImage1->move(public_path('assets/store/images/product-details/small'),$smallImage1_name);
                unlink(public_path('assets/store/images/product-details/small/' . $images->smallImage1));
                $images->smallImage1 = $smallImage1_name;

                // zoom Image 1
                $zoomImage1 = $request->zoomImage1;
                $zoomImage1_name = Str::slug($request->titre).'-zoom-1-'.time();
                $zoomImage1->move(public_path('assets/store/images/product-details/zoom'),$zoomImage1_name);
                unlink(public_path('assets/store/images/product-details/zoom/' . $images->zoomImage1));
                $images->zoomImage1 = $zoomImage1_name;

                $images->save();
            }

            if($request->has(['smallImage2','zoomImage2'])){
                // small Image 2
                $smallImage2 = $request->smallImage2;
                $smallImage2_name = Str::slug($request->titre).'-small-2-'.time();
                $smallImage2->move(public_path('assets/store/images/product-details/small/'),$smallImage2_name);
                unlink(public_path('assets/store/images/product-details/small/') . $images->smallImage2);
                $images->smallImage2 = $smallImage2_name;

                // zoom Image 2
                $zoomImage2 = $request->zoomImage2;
                $zoomImage2_name = Str::slug($request->titre).'-zoom-2-'.time();
                $zoomImage2->move(public_path('assets/store/images/product-details/zoom/'),$zoomImage2_name);
                unlink(public_path('assets/store/images/product-details/zoom/') . $images->zoomImage2);
                $images->zoomImage2 = $zoomImage2_name;

                $images->save();
            }

            if($request->has(['smallImage3','zoomImage3'])){
                // small Image 3
                $smallImage3 = $request->smallImage3;
                $smallImage3_name = Str::slug($request->titre).'-small-3-'.time();
                $smallImage3->move(public_path('assets/store/images/product-details/small/'),$smallImage3_name);
                unlink(public_path('assets/store/images/product-details/small/') . $images->smallImage3);
                $images->smallImage3 = $smallImage3_name;

                // zoom Image 3
                $zoomImage3 = $request->zoomImage3;
                $zoomImage3_name = Str::slug($request->titre).'-zoom-3-'.time();
                $zoomImage3->move(public_path('assets/store/images/product-details/zoom/'),$zoomImage3_name);
                unlink(public_path('assets/store/images/product-details/zoom/') . $images->zoomImage3);
                $images->zoomImage3 = $zoomImage3_name;

                $images->save();
            }

            if($request->has(['smallImage4','zoomImage4'])){
                // small Image 4
                $smallImage4 = $request->smallImage4;
                $smallImage4_name = Str::slug($request->titre).'-small-4-'.time();
                $smallImage4->move(public_path('assets/store/images/product-details/small/'),$smallImage4_name);
                unlink(public_path('assets/store/images/product-details/small/') . $images->smallImage4);
                $images->smallImage4 = $smallImage4_name;

                // zoom Image 4
                $zoomImage4 = $request->zoomImage4;
                $zoomImage4_name = Str::slug($request->titre).'-zoom-4-'.time();
                $zoomImage4->move(public_path('assets/store/images/product-details/zoom/'),$zoomImage4_name);
                unlink(public_path('assets/store/images/product-details/zoom/') . $images->zoomImage4);
                $images->zoomImage4 = $zoomImage4_name;

                $images->save();
            }

            if($request->has(['smallImage5','zoomImage5'])){
                // small Image 5
                $smallImage5 = $request->smallImage5;
                $smallImage5_name = Str::slug($request->titre).'-small-5-'.time();
                $smallImage5->move(public_path('assets/store/images/product-details/small/'),$smallImage5_name);
                unlink(public_path('assets/store/images/product-details/small/') . $images->smallImage5);
                $images->smallImage5 = $smallImage5_name;

                // zoom Image 5
                $zoomImage5 = $request->zoomImage5;
                $zoomImage5_name = Str::slug($request->titre).'-zoom-5-'.time();
                $zoomImage5->move(public_path('assets/store/images/product-details/zoom/'),$zoomImage5_name);
                unlink(public_path('assets/store/images/product-details/zoom/') . $images->zoomImage5);
                $images->zoomImage5 = $zoomImage5_name;

                $images->save();
            }

            $description->sousTitre1 = $request->soustitre1;
            $description->paragraph1 = $request->paragraphe1;
            $description->sousTitre2 = $request->soustitre2;
            $description->paragraph2 = $request->paragraphe2;
            $description->sousTitre3 = $request->soustitre3;
            $description->paragraph3 = $request->paragraphe3;
            $description->sousTitre4 = $request->soustitre4;
            $description->paragraph4 = $request->paragraphe4;
            $description->sousTitre5 = $request->soustitre5;
            $description->paragraph5 = $request->paragraphe5;

            $description->save();

            $tags->Tag1 = $request->Tag1;
            $tags->Tag2 = $request->Tag2;
            $tags->Tag3 = $request->Tag3;
            $tags->Tag4 = $request->Tag4;

            $tags->save();

            $produit->titre = $request->titre;
            $produit->slug = Str::slug($request->titre);
            $produit->status = $request->status;
            if($request->status === "Affaire du jour"){
                $reduction = $request->AncienPrix - $request->NouveauPrix;
                $produit->ParametreStatus = "-".$reduction.",00 Dh";
            }elseif($request->status === "Nouveau Arrivage"){
                $produit->ParametreStatus = "Nouveau";
            }elseif($request->status === "Meilleures Ventes"){
                $produit->ParametreStatus = "Populaire";
            }elseif($request->status === "Articles Soldés"){
                $produit->ParametreStatus = "Solde";
            }else{
                $produit->ParametreStatus = null;
            }
            $produit->AncienPrix = $request->AncienPrix.",00 DH";
            $produit->NouveauPrix = $request->NouveauPrix.",00 DH";
            $produit->DescriptionModal = $request->Description;
            $produit->DescriptionPlus = $request->Description;
            $produit->IdDetails = $description->id;
            $produit->IdTags = $tags->id;
            $produit->IdImages = $images->id;

            // Récupération de la catégorie et sauvegarde du produit
            $categorie = CategorieProduit::where('NomCategorie', $request->categorie)->first();
            if($categorie){
                $produit->IdCategorie = $categorie->id;
            }

            $produit->save();
            return redirect()->back()->with('success', 'Produit modifié avec succès !!');
        }
        return redirect()->back()->with('error', 'Erreur a été produite !!');
    }

    public function supprimerProduit(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idproduit = $_POST['idproduit'];
            $produit = Produit::find($idproduit);
            $tags = TagProduit::find($produit->IdTags);
            $images = DetailsImages::find($produit->IdImages);
            $description = DetailsDescription::find($produit->IdDetails);

            if($produit->ImagePrincipale){
                unlink(public_path('assets/store/images/product/') . $produit->ImagePrincipale);
            }

            if($produit->ImageDashboard){
                unlink(public_path('assets/dashboard/images/') . $produit->ImageDashboard);
            }

            if($images->smallImage1){
                unlink(public_path('assets/store/images/product-details/small/' . $images->smallImage1));
            }

            if($images->zoomImage1){
                unlink(public_path('assets/store/images/product-details/zoom/' . $images->zoomImage1));
            }

            if($images->smallImage2){
                unlink(public_path('assets/store/images/product-details/small/' . $images->smallImage2));
            }

            if($images->zoomImage2){
                unlink(public_path('assets/store/images/product-details/zoom/' . $images->zoomImage2));
            }

            if($images->smallImage3){
                unlink(public_path('assets/store/images/product-details/small/' . $images->smallImage3));
            }

            if($images->zoomImage3){
                unlink(public_path('assets/store/images/product-details/zoom/' . $images->zoomImage3));
            }

            if($images->smallImage4){
                unlink(public_path('assets/store/images/product-details/small/' . $images->smallImage4));
            }

            if($images->zoomImage4){
                unlink(public_path('assets/store/images/product-details/zoom/' . $images->zoomImage4));
            }

            if($images->smallImage5){
                unlink(public_path('assets/store/images/product-details/small/' . $images->smallImage5));
            }

            if($images->zoomImage5){
                unlink(public_path('assets/store/images/product-details/zoom/' . $images->zoomImage5));
            }

            Produit::destroy($idproduit);
            TagProduit::destroy($tags->id);
            DetailsImages::destroy($images->id);
            DetailsDescription::destroy($description->id);

            return redirect()->back()->with('success', 'Produit supprimé avec succès !!');
        }
        return redirect()->back()->with('error', 'Erreur a été produite !!');
    }

    public function search(Request $request)
    {
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $categories = CategorieProduit::all();
        $query = $request->input('query');

        $produits = Produit::where('titre', 'LIKE', "%$query%")
                            ->orWhere('DescriptionPlus', 'LIKE', "%$query%")
                            ->paginate(12);

        $nbr_produits = count($produits);

        return view('pages.boutique', compact(['produits','categories','user','nbr_produits','query']));
    }

    public function filter(Request $request,$slug= null)
    {
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        $categorie = CategorieProduit::where('categorie_produits.slug', $slug)->first();
        $tags = TagCategorieProduit::find($categorie->IdTags);
        $categories = CategorieProduit::all();
        $products = Produit::where('IdCategorie',$categorie->id)->get();
        $produits = [];
        $min = $request->get('min', 0);
        $max = $request->get('max', 30000);

        foreach($products as $product){
            $prix = intval(str_replace([' ', ' ', ','], ['', '', '.'], $product->NouveauPrix));
            if($prix >= $min && $prix <= $max){
                $produits[] = $product;
            }
        }

        $nbr_produits = count($produits);

        // Paginer le tableau avec 4 éléments par page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 4;
        $currentItems = array_slice($produits, ($currentPage - 1) * $perPage, $perPage);
        $paginatedProducts = new LengthAwarePaginator($currentItems, count($produits), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view('pages.categories-details', ['produits' => $paginatedProducts,'nbr_produits' => $nbr_produits,'user' => $user, 'categorie' => $categorie, 'categories' => $categories, 'tags' => $tags,'max' => $max,'min' => $min]);
    }
}
