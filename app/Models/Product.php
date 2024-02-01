<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ "id","name","business_id","type","unit_id","secondary_unit_id","sub_unit_ids","brand_id","category_id","sub_category_id","tax",
    "tax_type",
    "enable_stock",
    "sku",
    "image",
    "product_description",
    "created_by",
    "preparation_time_in_minutes",
    "is_inactive",
    "repair_model_id"];

    protected static function booted()
    {
        static::addGlobalScope('only_bussines',function(Builder $builder){
            $builder->where('business_id',8);
        });
    }

    //relacion uno a muchos
    public function variation(){
        return $this->hasMany(Variation::class);
    }

    public function resProductModifierSets(){
        return $this->belongsTo(ResProductModifierSets::class);
    }
}
