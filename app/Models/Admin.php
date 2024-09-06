<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'IdUser',
        'NomAdmin',
        'PrenomAdmin',
        'GenreAdmin',
        'AgeAdmin',
        'RoleAdmin',
        'EmailProfessionnelAdmin',
        'TelAdmin',
    ];

}
