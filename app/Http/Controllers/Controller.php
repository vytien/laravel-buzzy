<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){

        $lang = \Session::get ('locale');
        if ($lang == null){
            $lang = \App::getLocale();
            \Session::put('locale', $lang);
        }

        Carbon::setLocale($lang);
        \App::setLocale($lang);


        \View::share(['DB_PLUGIN_NEWS' => getcong('p-buzzynews'),
            'DB_PLUGIN_LISTS' => getcong('p-buzzylists'),
            'DB_PLUGIN_POLLS' => getcong('p-buzzypolls'),
            'DB_PLUGIN_VIDEOS' =>  getcong('p-buzzyvideos'),
            'DB_PLUGIN_QUIZS' => getcong('p-buzzyquizzes'),
            'DB_USER_LANG' => $lang
        ]);

    }

}
