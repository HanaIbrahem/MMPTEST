<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\HasTranslations;

class Webinar extends Model
{
    /** @use HasFactory<\Database\Factories\WebinarFactory> */
    use HasFactory;
    use HasTranslations;
    protected $guarded = [];

      protected $casts = [

        'title'=>'array',
        'content'=>'array',
        'is_active' => 'boolean',
        'date'=>'date'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
  
     public function scopeFilterByYear($query, $year)
    {
        if ($year) {
            return $query->whereYear('date', $year);
        }
        return $query;
    }

    public function scopeFilterByBranch($query, $branchId)
    {
        if ($branchId) {
            return $query->where('branch_id', $branchId);
        }
        return $query;
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query->where(function($q) use ($search) {
                $q->whereRaw("JSON_EXTRACT(title, '$.en') LIKE ?", ["%{$search}%"])
                  ->orWhereRaw("JSON_EXTRACT(title, '$.ku') LIKE ?", ["%{$search}%"]);
            });
        }
        return $query;
    }
    

}
