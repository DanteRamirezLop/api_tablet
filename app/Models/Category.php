<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','business_id','parent_id','created_by','category_type','slug'];

    protected static function booted()
    {
        static::addGlobalScope('only_bussines',function(Builder $builder){
            $builder->where('business_id',8);
        });
    }
}
