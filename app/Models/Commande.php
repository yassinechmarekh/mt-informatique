<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'idproduit',
        'idclient',
        'Prenom',
        'Nom',
        'Adresse',
        'ProduitTitre',
        'Prix',
        'Quantite',
        'Total',
        'Tel',
        'status'
    ];
}
