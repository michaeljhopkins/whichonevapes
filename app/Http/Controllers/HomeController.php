<?php

namespace Vape\Http\Controllers;

use Illuminate\Http\Request;

use Vape\Celeb;
use Vape\Http\Requests;

class HomeController extends Controller
{
    public function top()
    {
        $top = Celeb::orderBy('score','DESC')->limit(5)->get();

        $view['top'] = $top;

        return view('pages.top',$view);
    }
}
