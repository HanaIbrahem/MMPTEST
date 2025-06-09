<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\HasTranslations;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;
    use HasTranslations;
    protected $guarded=[];

    // app/Models/Question.php

protected $casts = [
    'title' => 'array',
    'content' => 'array',
    'is_active'=>'boolean'
];


}
