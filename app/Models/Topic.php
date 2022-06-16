<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Topic extends Model
{
    use HasFactory, HasTags;

    protected $fillable = [
        'name', 'slug', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
