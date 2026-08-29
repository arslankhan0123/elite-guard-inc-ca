<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'short_description',
        'long_description',
        'feature_image',
        'status',
    ];

    /**
     * Get the category that owns the service.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the galleries for the service.
     */
    public function galleries()
    {
        return $this->hasMany(ServiceGallery::class);
    }

    /**
     * Get the FAQs for the service.
     */
    public function faqs()
    {
        return $this->hasMany(ServiceFaq::class);
    }

    /**
     * Get the highlights for the service (max 3).
     */
    public function highlights()
    {
        return $this->hasMany(ServiceHighlight::class)->orderBy('sort_order');
    }
}
