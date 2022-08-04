<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Sponsor;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
        public function home(){
          $fields = [
            "live"=> "0",
            "oid"=> "112",
            "inv"=> "112020102292999",
            "ttl"=> "1",
            "tel"=> "254726582228",
            "eml"=> "simonnabuko@gmail.com",
            "vid"=> "tasl",
            "curr"=> "KES",
            "p1"=> "airtel",
            "p2"=> "020102292999",
            "p3"=> "mpesa",
            "p4"=> "900",
            "cbk"=> 'https://forexarenakenya.herokuapp.com',
            "cst"=> "1",
            "crl"=> "2"
      ];
      $datastring =  $fields['live'].$fields['oid'].$fields['inv'].$fields['ttl'].$fields['tel'].$fields['eml'].$fields['vid'].$fields['curr'].$fields['p1'].$fields['p2'].$fields['p3'].$fields['p4'].$fields['cbk'].$fields['cst'].$fields['crl'];
      $hashkey ='W3g8EaV8cxc$hfv%z7Vqu$Cz%2*jFJTQ';
      $generated_hash = hash_hmac('sha1', $datastring, $hashkey);


      $categories = Category::all();
      $past_events = Event::where('timeline', 'past')->get();
      $count_past = Event::where('timeline', 'past')->get()->count();
      $upcoming_events = Event::where('timeline', 'upcoming')->orderBy('id', 'Desc')->get();
      $count = Event::get()->count();

      // $competitions = Event::where('slug', 'competition')->get();

     $plat_sponsors = Sponsor::where('level', 'platinum')->where('status', 'approved')->get();
     $gold_sponsors = Sponsor::where('level', 'gold')->where('status', 'approved')->get();
     $silver_sponsors = Sponsor::where('level', 'silver')->where('status', 'approved')->get();

      return view("frontend.pages.home", 
      compact(
      'fields', 'generated_hash', 'past_events','count_past', 
      'categories','upcoming_events', 'count', 
      'plat_sponsors', 'gold_sponsors', 'silver_sponsors', 
      // 'awards', 'competitions','conferences', 'seminars', 'expos'
    ));
  }

  public function admin()
  {
    return view('backend.admin.login');
  }

  public function privacy()
  {
    return view('frontend.pages.privacy');
  }

  public function terms()
  {
    return view('frontend.pages.terms');
  }

  public function refund()
  {
    return view('frontend.pages.refund');
  }

}
