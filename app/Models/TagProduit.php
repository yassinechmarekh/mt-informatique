<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagProduit extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tag1',
        'Tag2',
        'Tag3',
        'Tag4'
    ];
}
