<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullArticleController extends Controller
{
    public function index() {
        return view('full_article');
    }
}
