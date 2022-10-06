<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Models\User;
use App\Models\Event;
use App\Models\Voter;
use App\Models\Broker;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
   public function index(){
    $events = Event::orderBy('id', 'desc')->limit(6)->get();
    $brokers = Broker::orderBy('id', 'desc')->limit(5)->get();
    $voters = Voter::orderBy('id', 'desc')->limit(5)->get();
    $users = User::orderBy('id', 'desc')->limit(5)->get();
    // $category_name = Category::where($category->id == $event->category_id)->

    return view("backend.admin.pages.dashboard", compact('events', 'brokers', 'voters', 'users'));
   }
}
