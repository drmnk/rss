<?php

namespace App\Models;

use App\Models\Scopes\PostNoBodyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function booted()
    {
        static::addGlobalScope(new PostNoBodyScope);
    }
}
