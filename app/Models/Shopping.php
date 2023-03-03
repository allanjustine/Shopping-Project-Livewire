<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $terms)
    {
        collect(explode(" ", $terms))
            ->filter()
            ->each(function ($term)use ($query) {
                $term= '%' .$term . '%';
                $query->where('product_name', 'like', $term)
                ->orWhere('id', 'like', $term);
            });
    }
}
