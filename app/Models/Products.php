<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'price',
        'status',
    ];

    public function customers()
    {
        return $this->belongsTo('App\Models\Customers');
    }
}
