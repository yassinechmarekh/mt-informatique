<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\BlogTag;

class BlogController extends Controller
{

    public function ajouterBlog(Request $request){
        if($request->has('ImagePrincipaleBlog') && $request->has('BlogImage1') && $request->has('BlogImage2')){
            $imagePrincipale = $request->ImagePrincipaleBlog;
            $imageSecondaire1 = $request->BlogImage1;
            $imageSecondaire2 = $request->BlogImage2;
            $imagePrincipale_name = Str::slug($request->titre_min).'_'.'Principale'.time();
            $imageSecondaire1_name = Str::slug($request->titre_min).'_'.'Secondaire1'.time();
            $imageSecondaire2_name = Str::slug($request->titre_min).'_'.'Secondaire2'.time();
            $imagePrincipale->move(public_path('assets/store/images/blog/uploads'),$imagePrincipale_name);
            $imageSecondaire1->move(public_path('assets/store/images/blog/uploads'),$imageSecondaire1_name);
            $imageSecondaire2->move(public_path('assets/store/images/blog/uploads'),$imageSecondaire2_name);

            $blog = new Blog();
            $tag = new BlogTag();

            $tag->Tag1 = $request->TagBlog1;
            $tag->Tag2 = $request->TagBlog2;
            $tag->Tag3 = $request->TagBlog3;
            $tag->Tag4 = $request->TagBlog4;
            $tag->Tag5 = $request->TagBlog5;
            $tag->Tag6 = $request->TagBlog6;

            $tag->save();

            $blog->titre_min = $request->titre_min;
            $blog->slug = Str::slug($request->titre_min);
            $blog->titre = $request->TitreBlog;
            $blog->imagePrincipale370x250px = 'assets/store/images/blog/uploads/'.$imagePrincipale_name;
            $blog->imagePrincipale115x90px = 'assets/store/images/blog/uploads/'.$imagePrincipale_name;
            $blog->introduction = $request->IntroductionBlog;
            $blog->sousTitre1 = $request->soustitre1;
            $blog->paragraph1 = $request->paragraphe1;
            $blog->sousTitre2 = $request->soustitre2;
            $blog->paragraph2 = $request->paragraphe2;
            $blog->sousTitre3 = $request->soustitre3;
            $blog->paragraph3 = $request->paragraphe3;
            $blog->sousTitre4 = $request->soustitre4;
            $blog->paragraph4 = $request->paragraphe4;
            $blog->sousTitre5 = $request->soustitre5;
            $blog->paragraph5 = $request->paragraphe5;
            $blog->sousTitre6 = $request->soustitre6;
            $blog->paragraph6 = $request->paragraphe6;
            $blog->imageSecondaire1 = 'assets/store/images/blog/uploads/'.$imageSecondaire1_name;
            $blog->imageSecondaire2 = 'assets/store/images/blog/uploads/'.$imageSecondaire2_name;
            $blog->conclusion = $request->ConclusionBlog;
            $blog->IdTag = $tag->id;

            $blog->save();

            return redirect()->back()->with('success','Votre article a été ajouter avec succes !!');
        }else{
            return redirect()->back()->with('errorImage','Veuillez uploader les images du blog !!');
        }
    }

    public function modifierBlog(Request $request, $slug) {
        $blog = Blog::where('slug', $slug)->first();
        $tag = BlogTag::find($blog->IdTag);

        // Vérification et traitement des images
        if ($request->has('ImagePrincipaleBlog')) {
            $imagePrincipale = $request->file('ImagePrincipaleBlog');

            // Traitement et déplacement des images
            $imagePrincipale_name = Str::slug($request->titre_min) . '_' . 'Principale' . time();

            $imagePrincipale->move(public_path('assets/store/images/blog/uploads'),$imagePrincipale_name);

            // Mise à jour des informations d'image dans le modèle de blog
            $blog->imagePrincipale370x250px = 'assets/store/images/blog/uploads/' . $imagePrincipale_name;
            $blog->imagePrincipale115x90px = 'assets/store/images/blog/uploads/' . $imagePrincipale_name;
        }elseif ($request->has('BlogImage1')) {
            $imageSecondaire1 = $request->file('BlogImage1');

            // Traitement et déplacement des images
            $imageSecondaire1_name = Str::slug($request->titre_min) . '_' . 'Secondaire1' . time();

            $imageSecondaire1->move(public_path('assets/store/images/blog/uploads'), $imageSecondaire1_name);

            // Mise à jour des informations d'image dans le modèle de blog
            $blog->imageSecondaire1 = 'assets/store/images/blog/uploads/' . $imageSecondaire1_name;
        }elseif ($request->has('BlogImage2')) {
            $imageSecondaire2 = $request->file('BlogImage2');

            // Traitement et déplacement des images
            $imageSecondaire2_name = Str::slug($request->titre_min) . '_' . 'Secondaire2' . time();

            $imageSecondaire2->move(public_path('assets/store/images/blog/uploads'), $imageSecondaire2_name);


            // Mise à jour des informations d'image dans le modèle de blog
            $blog->imageSecondaire2 = 'assets/store/images/blog/uploads/' . $imageSecondaire2_name;
        }elseif ($request->has(['ImagePrincipaleBlog', 'BlogImage1', 'BlogImage2'])) {
            $imagePrincipale = $request->file('ImagePrincipaleBlog');
            $imageSecondaire1 = $request->file('BlogImage1');
            $imageSecondaire2 = $request->file('BlogImage2');

            // Traitement et déplacement des images
            $imagePrincipale_name = Str::slug($request->titre_min) . '_' . 'Principale' . time();
            $imageSecondaire1_name = Str::slug($request->titre_min) . '_' . 'Secondaire1' . time();
            $imageSecondaire2_name = Str::slug($request->titre_min) . '_' . 'Secondaire2' . time();

            $imagePrincipale->move(public_path('assets/store/images/blog/uploads'), $imagePrincipale_name);
            $imageSecondaire1->move(public_path('assets/store/images/blog/uploads'), $imageSecondaire1_name);
            $imageSecondaire2->move(public_path('assets/store/images/blog/uploads'), $imageSecondaire2_name);

            // Mise à jour des informations d'image dans le modèle de blog
            $blog->imagePrincipale370x250px = 'assets/store/images/blog/uploads/' . $imagePrincipale_name;
            $blog->imagePrincipale115x90px = 'assets/store/images/blog/uploads/' . $imagePrincipale_name;
            $blog->imageSecondaire1 = 'assets/store/images/blog/uploads/' . $imageSecondaire1_name;
            $blog->imageSecondaire2 = 'assets/store/images/blog/uploads/' . $imageSecondaire2_name;
        }

        // Mise à jour des informations du blog
        $blog->titre_min = $request->titre_min;
        $blog->slug = Str::slug($request->titre_min);
        $blog->titre = $request->TitreBlog;
        $blog->introduction = $request->IntroductionBlog;
        $blog->sousTitre1 = $request->soustitre1;
        $blog->paragraph1 = $request->paragraphe1;
        $blog->sousTitre2 = $request->soustitre2;
        $blog->paragraph2 = $request->paragraphe2;
        $blog->sousTitre3 = $request->soustitre3;
        $blog->paragraph3 = $request->paragraphe3;
        $blog->sousTitre4 = $request->soustitre4;
        $blog->paragraph4 = $request->paragraphe4;
        $blog->sousTitre5 = $request->soustitre5;
        $blog->paragraph5 = $request->paragraphe5;
        $blog->sousTitre6 = $request->soustitre6;
        $blog->paragraph6 = $request->paragraphe6;
        $blog->conclusion = $request->ConclusionBlog;

        // Mise à jour des tags
        $tag->update([
            'Tag1' => $request->TagBlog1,
            'Tag2' => $request->TagBlog2,
            'Tag3' => $request->TagBlog3,
            'Tag4' => $request->TagBlog4,
            'Tag5' => $request->TagBlog5,
            'Tag6' => $request->TagBlog6
        ]);

        $tag->save();
        $blog->save();

        return redirect()->back()->with('success', 'Votre article a été modifié avec succès !!');
    }

    public function supprimerBlog(Request $request) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer l'ID de la catégorie envoyé par le formulaire
            $idblog = $_POST['idblog'];
            $blog = Blog::find($idblog);
            $tag = BlogTag::find($blog->IdTag);

            Blog::destroy($blog->id);
            BlogTag::destroy($tag->id);

            return redirect()->back()->with('success', 'Votre article a été supprimer avec succès !!');

        }
    }

}
