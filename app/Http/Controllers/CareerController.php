<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Career, Page,Leadership};

class CareerController extends Controller
{
    public function index(){
        $page = Page::where('id',10)->where('active',true)->firstOrFail();
        $seo = array('description' => $page->seo_desc,'title' => $page->seo_title);
        $careers = Career::where('active',true)->get();
        return view('pages.career',['page' => $page,'seo' => $seo, 'careers' => $careers]);
    }
}
