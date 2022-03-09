<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Page,Leadership};

class LeadershipController extends Controller
{
    public function index(){
        $page = Page::where('id',9)->where('active',true)->firstOrFail();
        $seo = array('description' => $page->seo_desc,'title' => $page->seo_title);
        $leaderships = Leadership::where('active',true)->get();
        return view('pages.leadership',['page' => $page,'seo' => $seo, 'leaderships' => $leaderships]);
    }
}
