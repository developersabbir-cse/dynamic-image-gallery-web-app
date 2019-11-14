<?php

namespace App\Providers;

use App\Gallery;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Author;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function($view){
            $view->author=Author::find(1);
        });
        View::composer('front-end.footer.footer',function($view){
            $view->galleries=Gallery::where('publication_status',1)->orderBy('id','desc')->get();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
