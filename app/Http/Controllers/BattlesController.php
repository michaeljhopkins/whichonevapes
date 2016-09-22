<?php

namespace Vape\Http\Controllers;

use Vape\Battle;
use Vape\Celeb;
use Vape\Http\Requests;
use Vape\Phrase;

class BattlesController extends Controller
{
    public function index()
    {
        $celebs = Celeb::inRandomOrder()->limit(2)->get();
        $battle = Battle::create(['celeb1' => $celebs->first()->id,'celeb2' => $celebs->last()->id]);
        $phrase = Phrase::inRandomOrder()->first();

        $view['celebs'] = $celebs;
        $view['battle'] = $battle;
        $view['phrase'] = $phrase;

        return view('pages.index',$view);
    }

    public function response(Battle $battle, Celeb $celeb)
    {
        if(is_null($battle->winner)){
            $battle->update(['winner' => $celeb->id]);
            $celeb->update(['score' => $celeb->score+1]);
        }
        return redirect('/');
    }
}
