<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index($slug){
        $page = Page::where('slug', $slug)->firstOrFail();
        $seo = array('description' => $page->seo_desc,'title' => $page->seo_title);
        return view('pages.page',['page' => $page,'seo' => $seo]);
    }
    public function contact(){
        $page = Page::where('id', 11)->firstOrFail();
        $seo = array('description' => $page->seo_desc,'title' => $page->seo_title);
        return view('pages.contact',['page' => $page,'seo' => $seo]);
    }
}
