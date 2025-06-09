<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\HasTranslations;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

    use HasTranslations;
      protected $guarded = [];

    // app/Models/Question.php

    protected $casts = [

         'title' => 'array',
    'content' => 'array',
        'is_active' => 'boolean'
    ];
}
