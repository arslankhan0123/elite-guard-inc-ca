<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'order',
    ];

    /**
     * Get the services for the category.
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get the products that belong to the category.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
