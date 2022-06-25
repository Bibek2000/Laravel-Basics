<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='brands';
    protected $fillable = ['title','slug','status','rank','image','meta_title','meta_keyword','meta_description','created_by','updated_by'];
    protected $filltable = ['title','slug','status','rank','image','meta_title','meta_keyword','meta_description','created_by','updated_by'];

    function createdBy(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updateddBy(){
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
