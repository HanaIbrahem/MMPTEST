<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\HasTranslations;

class Branch extends Model
{
    /** @use HasFactory<\Database\Factories\BranchFactory> */
    use HasFactory;
    use HasTranslations;
    protected $guarded=[];

      protected $casts = [

      'title' => 'array',
    ];
    
    public function webinars()
    {
        return $this->hasMany(Webinar::class);
    }

    /**
     * Scope to get only active branches
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
   
  

}
