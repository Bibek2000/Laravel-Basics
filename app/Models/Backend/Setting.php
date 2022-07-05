<?php

namespace App\Models\Backend;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table='settings';
    protected $fillable = ['site_name','site_slogan','site_logo','site_favicon','email','phone','google_map_link','facebook_link','instagram_link','twitter_link'];
    protected $filltable = ['site_name','site_slogan','site_logo','site_favicon','email','phone','google_map_link','facebook_link','instagram_link','twitter_link'];

    function createdBy(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy(){
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
