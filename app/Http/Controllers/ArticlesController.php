<?php

namespace App\Http\Controllers;

use App\Article;
use App\Helpers\InfoArticle;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->route()->named("category")) {
            $category_name = $request->category ? $request->category : "items";
            $category_id = InfoArticle::getCategoryId($category_name);
            $articles = Article::where('category_id', $category_id)->paginate(10);
        } elseif ($request->route()->named("subcategory")) {
            $subcategory_id = $request->id ? $request->id : 1;
            $articles = Article::where('subcategory_id', $subcategory_id)->get()->toArray();
        }
        $like_articles = InfoArticle::getLikeArticle();
        $categories = InfoArticle::getCategories();
        $subcategories = InfoArticle::getSubcategories();
        $latest_post = InfoArticle::getLatestArticle(4);

        $response_list = [
            'articles' => $articles,
            "subcategories" => $subcategories,
            "latest_post" => $latest_post,
            "like_articles" => $like_articles,
            "categories" => $categories,
            "route" => $request->route()->getName(),
        ];

        return \json_encode($response_list);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $like_articles = InfoArticle::getLikeArticle();
        $article = Article::where("id", $request->id)->get()->toArray();
        $article = $article ? $article : [];
        $categories = InfoArticle::getCategories();

        $response_list = [
            'article' => $article,
            "subcategories" => InfoArticle::getSubcategories(),
            "latest_post" => InfoArticle::getLatestArticle(4),
            "like_articles" => $like_articles,
            "categories" => $categories,
        ];
        return \json_encode($response_list);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
