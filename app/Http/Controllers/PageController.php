<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Message;
use App\Page;
use App\Project;
use App\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


class PageController extends Controller
{
    function index($slug) {
        $Page = Page::where('slug',$slug)->first();
        if(empty($Page)) abort(404);

        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOTools::setCanonical(url()->full());
        SEOMeta::addKeyword(explode(',',$Page->meta_tags));
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        SEOTools::opengraph()->addImage(url(asset($Page->image)));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        
        return view("pages.template", compact("Page"));
    }

    function detail($slug){
        $route_name = \Route::currentRouteName();
        if(method_exists($this,$route_name)){
            $Re = $this->$route_name($slug);
            $Page = $Re["list"];
            $Other = $Re["other"];
            $Route = $Re["route"];
        }
        if(empty($Page)) abort(404);

        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',',$Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        SEOTools::opengraph()->addImage(url(asset($Page->image)));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->addImage(url(asset($Page->image)));

        return view("pages.details", compact("Page","Other",'Route'));
    }
    function service($slug){
        $Service = Service::where("slug",$slug)->first();
        $Others = Service::where("slug",'!=',$slug)->orderBy('ordering')->limit(6,0)->get();
        return ['list' => $Service,'other' => $Others,'route' => 'service'];
    }
    function project($slug){
        $Project = Project::where("slug",$slug)->first();
        $Others = Project::where("slug",'!=',$slug)->orderBy('ordering')->limit(6,0)->get();
        return ['list' => $Project,'other' => $Others,'route' => 'project'];
    }
    function blog($slug){
        $Blog = Blog::where("slug",$slug)->first();
        $Others = Blog::where("slug",'!=',$slug)->orderBy('ordering')->limit(6,0)->get();
        return ['list' => $Blog,'other' => $Others,'route' => 'blog'];

    }

    function store(Request $request){
        $validator = Validator::make($request->all(),[
            "type" => "required",
            "json.email" => "required|email",
            "json.name" => "required",
            "json.phone" => "required",
            "json.company" => "required",
            "json.message" => "required",
        ],
        [
            "json.name.required" => "İsim alanı zorunludur. Lütfen zorunlu alanı doldurunuz",
            "json.email.required" => "E-posta alanı zorunludur. Lütfen zorunlu alanı doldurunuz",
            "json.email.email" => "Lütfen geçerli bir e-posta adresi giriniz",
            "json.phone.required" => "Telefon alanı zorunludur. Lütfen zorunlu alanı doldurunuz",
            "json.company.required" => "Firma alanı zorunludur. Lütfen zorunlu alanı doldurunuz",
            "json.message.required" => "Mesaj alanı zorunludur. Lütfen zorunlu alanı doldurunuz",
        ]);

        if($validator->fails()){
            return redirect()->route('page','iletisim')->withErrors($validator)->withInput(request()->all());
        }

        $validated = $validator->validate();

        $Store = new Message();
        $Store->type = $validated['type'];
        $Store->json = json_encode($validated['json']);

        if($Store->save()){
            if(setting('site.mail') !== null){
                // SMTP Ayarları
                Mail::send('mail.default', $validated, function ($msg) use ($validated){
                    $msg->from(env('MAIL_USERNAME'),setting('site.title'));
                    $msg->to(setting('site.mail'), setting('site.title'));
                    $msg->subject($validated['type']);
                });
            }


            return redirect()->route('page','iletisim')->with('status', 'success')->with('message', 'Mesajınız başarılı bir şekilde tarafımıza iletilmiştir');
        }else{
            return redirect()->route('page','iletisim')->with('status' , 'danger')->with('message' , 'Mesajınız iletilirken bir hata ile karşılaşmıştır.');
        }

    }

    function sitemap(){
        $Page = Page::all();
        $Services = Service::all();
        $Projects = Project::all();
        $Blogs = Blog::all();

        $content = view('sitemap.index',compact('Page','Services','Projects','Blogs'));
        return response($content)->header('Content-Type', 'application/xml');
    }
}
