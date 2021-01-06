<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'document',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($customer) {
            $customer->user_id = Auth::id();
        });
    }

    public function products()
    {
        return $this->hasMany('App\Models\Products');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Users');
    }
}
