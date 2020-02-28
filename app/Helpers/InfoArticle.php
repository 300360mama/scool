<?php

namespace App\Helpers;

use App\Article;
use App\Category;
use App\Subcategory;

class InfoArticle
{

    public static function getCategories()
    {
        return Category::get(["name", "id"])->toArray();
    }

    public static function getSubcategories()
    {
        return Subcategory::all();
    }

    public static function getCategoryId(string $category_name)
    {

        $category_isset = Category::where("name", $category_name)->exists();

        if ($category_isset) {
            $category_id = Category::where("name", $category_name)->get(["id"]);
            return $category_id[0]->id;
        }
        return 1;
    }

    public static function getLatestArticle($quantity)
    {
        $res = Article::orderBy("created_at", "desc'")->take($quantity)->get();
        return $res;
    }

    public static function getLikeArticle()
    {
        $article_count = count(Article::get(["id"]));
        $quantity_like_article = 3;
        $like_article_list = [];

        if ($article_count < 3) {
            $articles = Article::all();
            return $articles;
        }
        while (count($like_article_list) < $quantity_like_article) {
            $rand_id = mt_rand(1, $article_count);
            if (in_array($rand_id, $like_article_list)) {
                continue;
            }

            $like_article_list[] = $rand_id;
        }
        $articles = Article::whereIn("id", $like_article_list)->get();
        return $articles;

    }

}
