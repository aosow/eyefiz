<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    /**
     * Show homepage
     */
    public function index() {

        $products = Product::orderBy('id', 'desc')->limit(4)->get();
        $categories = Category::orderBy('id', 'desc')->get();
        $posts = Post::orderBy('id', 'desc')->limit(2)->get();

        return view('home', [
            'menu' => 'homepage',
            'products' => $products,
            'posts' => $posts,
            'categories' => $categories
        ]);
    }


    /**
     * Show product page
     */
    public function products() {

        $products = Product::all();

        return view('products', [
            'products' => $products,
            'menu' => 'products'
        ]);
    }


    /**
     * Show product page
     */
    public function posts() {

        $posts = Post::all();

        return view('posts', [
            'posts' => $posts,
            'menu' => 'posts'
        ]);
    }


    /**
     * Show search result page
     */
    public function search() {

        $title = request()->input('title');
        $category = request()->input('category');

        $posts = [];


        if ($title != null && $category == null ) {

            // If the category isn't selected, we search in products and posts

            $products = Product::where('title', 'like', '%'.$title.'%')->get();
            $posts = Post::where('title', 'like', '%'.$title.'%')->get();

        }

        elseif ($title == null && $category != null ) {

            //If it is only the category, we display the products of the category

            $products = Product::where('category_id', $category)->get();

            $category = Category::findOrFail($category);
        }

        elseif ($title != null && $category != null ) {


            // If the category and the name are entered, we search for the product in the category

            $products = Product::where('category_id', $category)
                                ->Where('title', 'like', '%'.$title.'%')->get();

            $category = Category::findOrFail($category);

        }

        return view('search', [
            'menu' => 'search',
            'products' => $products,
            'posts' => $posts,
            'title' => $title,
            'category' => $category
        ]);

    }
}
