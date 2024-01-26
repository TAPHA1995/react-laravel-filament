<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;

    protected $filiable=[

         'titre',
         'image',
         'checkbox',
         'radio',
         'reponseEcrite',
         'published_at',
];
}
