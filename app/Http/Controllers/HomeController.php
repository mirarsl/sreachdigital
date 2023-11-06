<?php

namespace App\Http\Controllers;

use App\Page;
use App\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $Page = Page::find(1);
        if(empty($Page)) abort(404);

        return view("pages.home", compact("Page"));
    }
}
