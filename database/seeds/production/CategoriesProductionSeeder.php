<?php

use Illuminate\Database\Seeder;

class CategoriesProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        createCategory(['name' => 'New']);
        createCategory(['name' => 'Music']);
        createCategory(['name' => 'Albums']);
        createCategory(['name' => 'Reviews']);
        $featured = createCategory(['name' => 'Featured']);

        //add only one post to featured

        //the latest post(???)
        $featured->posts()->attach(\App\Post::latest()->first());

    }
}
