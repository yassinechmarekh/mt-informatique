<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsDescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'sousTitre1',
        'paragraph1',
        'sousTitre2',
        'paragraph2',
        'sousTitre3',
        'paragraph3',
        'sousTitre4',
        'paragraph4',
        'sousTitre5',
        'paragraph5'
    ];
}
