<?php

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->title = 'Smartphones';
        $category->slug = Str::slug($category->title, '-');
        $category->save();

        $category = new Category();
        $category->title = 'Ordinateurs';
        $category->slug = Str::slug($category->title, '-');
        $category->save();

        $category = new Category();
        $category->title = 'Jeux videos';
        $category->slug = Str::slug($category->title, '-');
        $category->save();

        $category = new Category();
        $category->title = 'Électroménager';
        $category->slug = Str::slug($category->title, '-');
        $category->save();
    }
}
