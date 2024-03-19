<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Builder;

class Table extends Model
{
    use HasFactory;
    protected $fillable = ['id','business_id','name','description'];

    protected static function booted()
    {
        static::addGlobalScope('only_bussines',function(Builder $builder){
            $builder->where('business_id',8);
        });
    }
}
