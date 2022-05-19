<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'code','title', 'description','price', 'slug', 'quantity'
    ];

    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class,'product_id');
    }
}
