<?php

use Faker\Generator as Faker;


$autoIncrement = autoIncrement();

$factory->define(App\Category::class, function () use ($autoIncrement) {
    $category = new \App\Category;
    $autoIncrement->next();
    return [
        'title' => $autoIncrement->current(),
        'parent_id' => 0,
        'published' => 1,
        'slug' => $category->setSlugAttribute()
    ];

});

function autoIncrement()
{
    for ($i = 0; $i <= 6; $i++) {
        $arr = [0, 'Politics', 'Business', 'Culture', 'World', 'Sport', 'Science and Technology'];
        yield $arr[$i];
    }
}