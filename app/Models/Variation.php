<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    protected $guarded = ['id','product_id','created_at','updated_at'];

    //relacion uno a muchos inversa
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
