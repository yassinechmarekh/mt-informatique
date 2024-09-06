<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre_min',
        'slug',
        'titre',
        'imagePrincipale370x250px',
        'imagePrincipale115x90px',
        'introduction',
        'sousTitre1',
        'paragraph1',
        'sousTitre2',
        'paragraph2',
        'sousTitre3',
        'paragraph3',
        'sousTitre4',
        'paragraph4',
        'sousTitre5',
        'paragraph5',
        'sousTitre6',
        'paragraph6',
        'imageSecondaire1',
        'imageSecondaire2',
        'conclusion',
        'IdTag'
    ];
}
