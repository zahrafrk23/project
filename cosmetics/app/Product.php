<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;
    protected $fillable = [
        'title',
        'price',
        'category',
        'description',
        'thumbnail',
        'special',
        'slider'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $casts = [
        'category' => 'array',
        'thumbnail' => 'array'
    ];

    public function path()
    {
        return "/product/$this->slug";
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeSearch($query, $keyWord)
    {
        $query->where('title', 'LIKE', '%' . $keyWord . '%');
        $category = request('category');
        if (is_array($category)) {
            $category = implode(',', $category);
        }
        if (isset($category) && $category != 'all') {
            $query->whereHas('category', function ($query) use ($category) {
                $query->whereId($category);
            });
        };
        return $query;
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
