<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\HasTranslations;
class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
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
