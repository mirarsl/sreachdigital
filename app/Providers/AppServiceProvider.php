<?php

namespace App\Providers;

use App\Contact;
use App\Service;
use App\Social;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $Services = Service::where('status',1)->orderBy('ordering')->orderBy('id')->get();
        $Contact = Contact::find(1);
        $Social = Social::find(1);
        $sharedContent = [
            'Services' => $Services,
            'Contact' => $Contact,
            'Social' => $Social

        ];
        View::share("sharedContent",$sharedContent);
    }
}
