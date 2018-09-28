<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use function redirect;
use Illuminate\Support\Facades\Input;
use function view;
use Illuminate\Http\Response;


class BlogController extends Controller
{


    public function category($slug)
    {


        $category = Category::where('slug', $slug)->first();


        return view('blog.category', [

            'category' => $category,
            'articles' => $category
                ->articles()
                ->where('published', 1)
                ->paginate(10),


        ]);
    }

    public function article($slug)
    {

        return view('blog.article', [

            'article' => Article::where('slug', $slug)->first(),



        ]);
    }

    public function blog()
    {

        $articles = Article::with('categories')
            ->orderBy('created_at', 'desc')
            ->where('published', 1);

        return view('blog.home', [
            'latest_articles' => $articles
                ->with('users')
                ->paginate(7),

            'popular_articles' => Article::where('type', 'popular')
                ->orderBy('created_at', 'desc')
                ->where('published', 1)
                ->with('categories')
                ->paginate(7),

            'main_articles' => Article::where('type', 'main')
                ->where('published', 1)
                ->orderBy('created_at', 'desc')
                ->with('categories')
                ->paginate(4),


            'good_articles' => Article::where('type', 'good')
                ->orderBy('created_at')
                ->where('published', 1)
                ->with('categories')
                ->paginate(3),

            'popular_main_news' => Article::where('type', 'popular_main')
                ->orderBy('created_at')
                ->where('published', 1)
                ->paginate(4),

        ]);


    }

    public function search()
    {

        $search_request=Input::get('search');

        $search_result=Article::where('title', 'LIKE', "%$search_request%")
            ->orWhere('description_short', 'LIKE', "%$search_request%")
            ->orWhere('description', 'LIKE', "%$search_request%")
            ->paginate(20);


        return view('blog.search', [
           'search_result'=>$search_result
        ]);


    }
}