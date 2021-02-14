<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        $data = [ 'articles' => $articles, 'categories' => $categories];
        return view('HomePage', compact('data' ));
    }

    public function getUserArticle($id)
    {
        $articles = Article::where('user_id', '=', $id)->get();
        $categories = Category::all();
        $data = [ 'articles' => $articles, 'categories' => $categories];
        return view('User.ManageArticle', compact('data' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('User.InsertArticle', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $article = new Article();
        $article->title = $request->title;
        $article->category_id = $request->categories;

        $article->user_id = Auth::id();
        $image = $request->file('image');

        $image_name = Uuid::uuid() . '.' . $image->getClientOriginalExtension();
        $dest = storage_path('/app/public/images/');
        $image->move($dest, $image_name);

        $article->image = 'images/'.$image_name;

        $article->description = $request->description;

        $article->save();

        $categories = Category::all();
        return view('User.InsertArticle', compact('categories'))->with('success', 'Create Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $categories = Category::all();
        $data = ['article' => $article, 'categories' => $categories ];
        return view('ArticlePage', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $userId = $article->user_id;
        $image_name = substr($article->image, 7);

        Storage::disk('public')->delete($article->image);
        $article->delete();

        $articles = Article::where('user_id', '=', $userId)->get();
        $categories = Category::all();
        $data = ['articles' => $articles, 'categories' => $categories ];

        return view('User.ManageArticle', compact('data'))->with('success', "Success delete article");
    }
}
