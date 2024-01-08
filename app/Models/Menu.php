<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image_path', 'price', 'special', 'category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

// when menu added without image , it not being deleted cuz the image dont existe and not deleted -> redirect with error