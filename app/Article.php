<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{


    protected $fillable=['title', 'slug',  'description_short', 'description', 'image', 'image_show',
        'meta_title', 'meta_description','meta_keyword','published', 'created_by', 'modified_by', 'type'];

    //mutator
    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" .
            \Carbon\Carbon::now()->format('dmyHi'), '-');


    }

    public function setImageAttribute(){

        $this->attributes['image'] = "img/".$this->slug.".jpg";

    }


    public function categories(){

        return $this->morphToMany('App\Category', 'categoryable');

    }


    public function scopeLastArticles($query, $count){

        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function users(){

        return $this->belongsTo('App\User', 'created_by');
    }


}