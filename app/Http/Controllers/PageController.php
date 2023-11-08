<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index($slug) {
        $Page = Page::where('slug',$slug)->first();
        if(empty($Page)) abort(404);

        return view("pages.template", compact("Page"));
    }
}
