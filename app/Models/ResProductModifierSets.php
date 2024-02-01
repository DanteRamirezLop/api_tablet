<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResProductModifierSets extends Model
{
    use HasFactory;
    protected $table = 'res_product_modifier_sets';
    protected $fillable = [ "modifier_set_id","product_id"];

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
