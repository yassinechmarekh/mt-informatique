<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'smallImage1',
        'zoomImage1',
        'smallImage2',
        'zoomImage2',
        'smallImage3',
        'zoomImage3',
        'smallImage4',
        'zoomImage4',
        'smallImage5',
        'zoomImage5'
    ];
}
