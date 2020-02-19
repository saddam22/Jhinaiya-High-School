<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Menu;
use App\frontend_latest_school_news;
use App\Frontend_upcoming_events;
use App\FrontendIncludeSchools;
use App\FrontendLearnShares;
use App\FrontendPracticeWishs;
use App\FrontendStudentReviews;
use App\FrontendNotice;
use App\AdmissionOrientations;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
       View::composer('front.home.home', function($view){
            $menus = Menu::all();
            $view->with('menus', $menus);
        });
        View::composer('front.home.home', function($view){
            $latestNews = frontend_latest_school_news::all();
            $view->with('latestNews', $latestNews);
        });
        View::composer('front.home.home', function($view){
            $upcoming_events = Frontend_upcoming_events::all();
            $view->with('upcoming_events', $upcoming_events);
        });
         View::composer('front.home.home', function($view){
            $include_school = FrontendIncludeSchools::all();
            $view->with('include_school', $include_school);
        });
        View::composer('front.home.home', function($view){
            $learn_share = FrontendLearnShares::all();
            $view->with('learn_share', $learn_share);
        });
        View::composer('front.home.home', function($view){
            $practice_wish = FrontendPracticeWishs::all();
            $view->with('practice_wish', $practice_wish);
        }); 
         View::composer('front.home.home', function($view){
            $student_review = FrontendStudentReviews::all();
            $view->with('student_review', $student_review);
        }); 
          View::composer('front.home.home', function($view){
            $notices = FrontendNotice::all();
            $view->with('notices', $notices);
        }); 
           View::composer('front.home.home', function($view){
            $admission = AdmissionOrientations::all();
            $view->with('admission', $admission);
        }); 
    }
}
