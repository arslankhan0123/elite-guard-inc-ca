<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_name',
        'email',
        'phone',
        'country',
        'product_id',
        'business_line',
        'equipment_condition',
        'quantity',
        'required_by',
        'service_id',
        'property_type',
        'message',
        'status',
    ];

    protected $casts = ['required_by' => 'date'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
