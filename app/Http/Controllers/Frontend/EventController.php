<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    //
    public function eventDetails(){
    // return auth()->user()->email;
        if(auth()->user()){
            $email = auth()->user()->email;
            $phone = auth()->user()->phone;

            $fields = [
                "live"=> "1",
                "oid"=> "112",
                "inv"=> "112020102292999",
                "ttl"=> "1",
                "tel"=> $phone,
                "eml"=>  $email,
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

            return view('frontend.components.events.eventDetails', compact('fields', 'generated_hash'));
        }else{
            return view('frontend.components.events.eventDetails');

        }

    }

    public function singleEvent($id)
    {
        $event = Event::findorFail($id);
        $related_events = Event::where('category_id', $event->category_id)->get();
        Session::put('event_id', $event->id);
       
        return view('frontend.components.events.eventDetails', compact('event', 'related_events'));
    }
}
