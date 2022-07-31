<?php

namespace App\Http\Controllers\Award;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AwardController extends Controller
{
    //
    public function list($slug)
    {
        $awards = Event::where('slug', 'awards')->get();
        return view('frontend.pages.awards.lists', compact('awards'));
    }

    public function showAwardForm(){
        return view('frontend.pages.awards.awardForm');
    }
}
