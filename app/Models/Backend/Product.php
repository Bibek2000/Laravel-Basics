<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='products';
    protected $fillable = ['categories_id','subcategories_id','brand_id','title','slug','specification','price','stock','quantity','flash_key','hot_key','discount','status','rank','image','meta_title','meta_keyword','meta_description','created_by','updated_by'];
    protected $filltable = ['categories_id','subcategories_id','brands_id','title','slug','specification','price','stock','quantity','flash_key','hot_key','discount','status','rank','image','meta_title','meta_keyword','meta_description','created_by','updated_by'];

    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
    function category(){
        return $this->belongsTo(Category::class,'categories_id','categories_id');
    }
}
