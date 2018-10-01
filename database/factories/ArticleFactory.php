<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $article = new \App\Article;
    return [
        'title' => $faker->word . ' ' . $faker->word . ' ' . $faker->word,
        'description_short' => $faker->text(150),
        'description' => $faker->text(1000),
        'slug' => $article->setSlugAttribute(),
        'meta_title' => 'meta_title',
        'meta_description' => 'meta_description',
        'meta_keyword' => 'meta_keyword',
        'published' => 1,
        'type' => $faker->randomElement(array('mainNew', 'popularNew', 'fakeNew', 'goodNew')),
        'created_by' => $faker->numberBetween($min = 1, $max = 10)
    ];
});

