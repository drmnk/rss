<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PostNoBodyScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->addSelect(['id', 'title', 'slug', 'before_cut', 'category_id', 'updated_at']);
    }
}
