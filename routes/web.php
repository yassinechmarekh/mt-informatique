<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CategorieProduitController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();


Route::middleware('auth')->group(function () {
    Route::prefix('/admin/dashboard')->middleware('IsAdmin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/commandes', [AdminController::class, 'commandes'])->name('admin.dashboard.commandes');
        Route::get('/categories', [AdminController::class, 'categories'])->name('admin.dashboard.categories');
        Route::get('/produits/nos-produits', [AdminController::class, 'nosProduits'])->name('admin.dashboard.produits.nos-produits');
        Route::get('/produits/produit-details/{slug}', [AdminController::class, 'produitDetails'])->name('admin.dashboard.produits.produit-details');
        Route::get('/produits/ajouter-produit', [AdminController::class, 'ajouterProduit'])->name('admin.dashboard.produits.ajouter-produit');
        Route::get('/produits/modifier-produit/{slug}', [AdminController::class, 'modifierProduit'])->name('admin.dashboard.produits.modifier-produit');
        Route::get('/employes', [AdminController::class, 'employes'])->name('admin.dashboard.employes');
        Route::get('/employes/profile-employe/{id}', [AdminController::class, 'employeProfile'])->name('admin.dashboard.employes.profile');
        Route::get('/blogs/nos-blogs', [AdminController::class, 'blogs'])->name('admin.dashboard.blogs.nos-blogs');
        Route::get('/blogs/ajouter-blog', [AdminController::class, 'ajouterBlog'])->name('admin.dashboard.blogs.ajouter-blog');
        Route::get('/blogs/modifier-blog/{slug}', [AdminController::class, 'modifierBlog'])->name('admin.dashboard.blogs.modifier-blog');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.dashboard.profile');

        Route::put('/profile/modifier', [AdminController::class,'changerInformations'])->name('admin.dashboard.profile.modifier');
        Route::put('/profile/modifier-password', [AdminController::class,'changerPassword'])->name('admin.dashboard.profile.modifier.password');
        Route::post('/employes/ajouter-employe', [EmployeController::class,'ajouterEmploye'])->name('admin.dashboard.employes.ajouter');
        Route::put('/employes/modifier-employe', [EmployeController::class,'modifierEmploye'])->name('admin.dashboard.employes.modifier');
        Route::delete('/employes/supprimer-employe', [EmployeController::class,'supprimerEmploye'])->name('admin.dashboard.employes.supprimer');
    });


    Route::prefix('/employe/dashboard')->middleware('IsEmploye')->group(function () {
        Route::get('/', [EmployeController::class, 'dashboard'])->name('employe.dashboard');
        Route::get('/commandes', [EmployeController::class, 'commandes'])->name('employe.dashboard.commandes');
        Route::get('/categories', [EmployeController::class, 'categories'])->name('employe.dashboard.categories');
        Route::get('/produits/nos-produits', [EmployeController::class, 'nosProduits'])->name('employe.dashboard.produits.nos-produits');
        Route::get('/produits/produit-details/{slug}', [EmployeController::class, 'produitDetails'])->name('employe.dashboard.produits.produit-details');
        Route::get('/produits/ajouter-produit', [EmployeController::class, 'ajouterProduit'])->name('employe.dashboard.produits.ajouter-produit');
        Route::get('/produits/modifier-produit/{slug}', [EmployeController::class, 'modifierProduit'])->name('employe.dashboard.produits.modifier-produit');
        Route::get('/nos-blogs', [EmployeController::class, 'nosBlogs'])->name('employe.dashboard.blogs.nos-blogs');
        Route::get('/ajouter-blog', [EmployeController::class, 'ajouterBlog'])->name('employe.dashboard.blogs.ajouter-blog');
        Route::get('/modifier-blog/{slug}', [EmployeController::class, 'modifierBlog'])->name('employe.dashboard.blogs.modifier-blog');
        Route::get('/profile', [EmployeController::class, 'profile'])->name('employe.dashboard.profile');

        Route::put('/profile/modifier', [EmployeController::class,'changerInformations'])->name('employe.dashboard.profile.modifier');
        Route::put('/profile/modifier-password', [EmployeController::class,'changerPassword'])->name('employe.dashboard.profile.modifier.password');
        Route::post('/blogs/ajouter-blog', [BlogController::class, 'ajouterBlog'])->name('employe.dashboard.blogs.ajouter-blog.post');
        Route::put('/blogs/modifier-blog', [BlogController::class, 'modifierBlog'])->name('employe.dashboard.blogs.modifier-blog.put');
    });

    Route::prefix('/client/dashboard')->middleware('IsClient')->group(function () {
        Route::get('/', [ClientController::class, 'dashboard'])->name('client.dashboard');
        Route::put('/modifier-infos', [ClientController::class,'changerInformations'])->name('client.dashboard.modifier-infos');
        Route::put('/modifier-pass', [ClientController::class,'changerPassword'])->name('client.dashboard.modifier-pass');
    });
});


Route::group(['name' => 'mes-pages'],function () {
    Route::get('/', [Controller::class, 'acceuil'])->name('acceuil');
    Route::get('/boutique', [Controller::class, 'boutique'])->name('boutique');
    Route::get('/boutique/categories-details/{slug}', [CategorieProduitController::class, 'index'])->name('categories.details');
    Route::get('/nos-services', [Controller::class, 'nosServices'])->name('nos-services');
    Route::get('/blog', [Controller::class, 'blog'])->name('blog');
    Route::get('/blog/{slug}', [Controller::class, 'blogDetails'])->name('blog.blog-details');
    Route::get('/a-propos', [Controller::class, 'apropos'])->name('apropos');
    Route::get('/contact', [Controller::class, 'contact'])->name('contact');
    Route::get('/liste-d-envies', [Controller::class, 'listeDenvies'])->name('liste-d-envies');
    Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');
    Route::get('/panier-details', [Controller::class, 'panierDetails'])->name('panier-details');
    Route::get('/produit-details/{slug}', [Controller::class, 'produitDetails'])->name('produit-details');
});





Route::post('/dashboard/categories/ajouter', [CategorieProduitController::class,'store'])->name('categories.ajout');
Route::put('/dashboard/categories/modifier', [CategorieProduitController::class,'update'])->name('categories.update');
Route::delete('/dashboard/categories/supprimer', [CategorieProduitController::class,'delete'])->name('categories.delete');


Route::post('/panier/ajouter', [PanierController::class,'ajouterPanier'])->name('ajouter.panier');
Route::get('/panier/supprimer/{id}', [PanierController::class,'supprimerPanier'])->name('supprimer.panier');
Route::get('/vider-panier', [PanierController::class,'viderPanier'])->name('vider.panier');

Route::post('/effectuer-commande', [CommandeController::class,'effectuerCommande'])->name('effectuer.commande');

Route::get('/dashboard/confirmer-commande/{id}', [CommandeController::class,'confirmerCommande'])->name('confirmer.commande');
Route::get('/dashboard/annuler-commande/{id}', [CommandeController::class,'AnnulerCommande'])->name('annuler.commande');

Route::post('/dahsboard/produits/ajouter-produit', [ProduitController::class, 'ajouterProduit'])->name('dashboard.produits.ajouter-produit.post');
Route::put('/dahsboard/produits/modifier-produit', [ProduitController::class, 'modifierProduit'])->name('dashboard.produits.modifier-produit.put');
Route::delete('/dahsboard/produits/supprimer-produit', [ProduitController::class, 'supprimerProduit'])->name('dashboard.produits.supprimer-produit.delete');

Route::post('/blogs/ajouter-blog', [BlogController::class, 'ajouterBlog'])->name('dashboard.blogs.ajouter-blog.post');
Route::put('/blogs/ajouter-blog/{slug}', [BlogController::class, 'modifierBlog'])->name('dashboard.blogs.ajouter-blog.put');
Route::delete('/blogs/supprimer-blog', [BlogController::class, 'supprimerBlog'])->name('dashboard.blogs.ajouter-blog.delete');

Route::post('/liste-d-envies/ajouter', [WishlistController::class,'ajouterWishlist'])->name('ajouter.wishlist'); // method form
Route::get('/liste-d-envies/ajouter/{id}', [WishlistController::class,'ajouterWishlistId'])->name('ajouter.wishlist.id'); // method link
Route::get('/liste-d-envies/supprimer/{id}', [WishlistController::class,'supprimerWishlist'])->name('supprimer.wishlist');

Route::get('/boutique/search', [ProduitController::class, 'search'])->name('products.search');

Route::post('/boutique/categories-details/{slug}/filter-prices', [ProduitController::class, 'filter'])->name('filter.prices');

Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');


Route::post('/contact/envoyer-message', [ContactController::class, 'send'])->name('contact.send');

Route::fallback(function() {
    return view('pages.error404');
});

