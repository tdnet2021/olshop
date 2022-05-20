<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code','title'
    ];

    public function city()
    {
        return $this->hasMany(city::class,'province_code');
    }
}
