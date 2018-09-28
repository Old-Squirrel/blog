<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use function mb_substr;

class Category extends Model
{


    protected $fillable=['title','slug', 'parent_id', 'published', 'created_by', 'modified_by'];

    //mutator
    public function setSlugAttribute(){

        $this->attributes['slug']= Str::slug(mb_substr($this->title, 0, 40) . "-" .
            \Carbon\Carbon::now()->format('dmyHi'), '-' );

    }

    //get children category
    public function children(){

        return $this->hasMany(self::class, 'parent_id');
    }


    public function articles(){

        return $this->morphedByMany('App\Article', 'categoryable');

    }

    public function scopeLastCategories($query, $count){

        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }



}

