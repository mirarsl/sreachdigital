<?php

namespace App\Http\Controllers;

use App\Page;
use App\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $Page = Page::find(1);
        if(empty($Page)) abort(404);

        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setUrl(url()->full());
        SEOTools::opengraph()->addImage(url(asset(setting('site.logo'))));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::jsonLd()->addImage(url(asset(setting('site.logo'))));

        return view("pages.home", compact("Page"));
    }
}
