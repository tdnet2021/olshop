<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    
    // protected $fillable = [
    //     'code','title','province_code'
    // ];

    protected $table = 'cities';

    public function Province()
    {
        return $this->belongsTo(Province::class, 'province_code','code');
    }

}
