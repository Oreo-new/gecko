<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageArticle;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage() {
        $page = Page::where('slug', 'home')->firstorFail();
        $page_article = PageArticle::where('page_id', $page->id)->take(3)->get();
        return view('pages.home')
        ->with('page', $page)
        ->with('page_article', $page_article);
    }
}
