<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'thumbnail'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function path()
    {
        return "/category/$this->slug";
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function parent() {
        return $this->belongsTo(Category::class);
    }
    public function file()
    {
        return $this->belongsToMany(Product::class);
    }
}
