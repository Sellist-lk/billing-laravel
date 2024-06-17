<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'product_service_id',
        'quantity',
        'unit_price',
        'total_price',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function productService()
    {
        return $this->belongsTo(Products_Service::class, 'product_service_id');
    }
}
