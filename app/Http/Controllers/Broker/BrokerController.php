<?php

namespace App\Http\Controllers\Broker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrokerController extends Controller
{
    //
    public function show(){
        return view('frontend.pages.brokers.index');
    }

    public function create()
    {
        return view("");
    }
}
