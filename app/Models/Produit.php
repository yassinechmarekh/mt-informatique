<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'slug',
        'status',
        'ParametreStatus',
        'ImagePrincipale',
        'ImageDashboard',
        'AncienPrix',
        'NouveauPrix',
        'DescriptionModal',
        'DescriptionPlus',
        'IdDetails',
        'IdTags',
        'IdImages',
        'IdCategorie'
    ];
}
