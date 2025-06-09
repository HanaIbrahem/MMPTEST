<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


class Setting extends Model
{
    /** @use HasFactory<\Database\Factories\SettingFactory> */
    use HasFactory;
 
    protected $guarded = [];

    public function getValueTrAttribute($key)
    {
        $value = $this->value;

        // If it's a JSON string (not casted), decode it
        if (is_string($value)) {
            $value = json_decode($value, true);
        }

        return $value[$key] ?? null;
    }
    protected $casts = [
        'value' => 'array'
    ];

}
