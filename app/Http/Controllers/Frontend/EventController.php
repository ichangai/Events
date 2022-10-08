<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    //
    public function eventDetails()
    {
        // return auth()->user()->email;
        if (auth()->user()) {
            $email = auth()->user()->email;
            $phone = auth()->user()->phone;

            $fields = [
                "live" => "1",
                "oid" => "112",
                "inv" => "112020102292999",
                "ttl" => "1",
                "tel" => $phone,
                "eml" =>  $email,
                "vid" => "tasl",
                "curr" => "KES",
                "p1" => "airtel",
                "p2" => "020102292999",
                "p3" => "mpesa",
                "p4" => "900",
                "cbk" => 'https://forexarenakenya.herokuapp.com',
                "cst" => "1",
                "crl" => "2"
            ];

            $datastring =  $fields['live'] . $fields['oid'] . $fields['inv'] . $fields['ttl'] . $fields['tel'] . $fields['eml'] . $fields['vid'] . $fields['curr'] . $fields['p1'] . $fields['p2'] . $fields['p3'] . $fields['p4'] . $fields['cbk'] . $fields['cst'] . $fields['crl'];
            $hashkey = 'W3g8EaV8cxc$hfv%z7Vqu$Cz%2*jFJTQ';
            $generated_hash = hash_hmac('sha1', $datastring, $hashkey);

            return view('frontend.components.events.eventDetails', compact('fields', 'generated_hash'));
        } else {
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


    public function load_data(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id > 0) {
                $data = Event::where('id', '<', $request->id)
                    ->orderBy('id', 'DESC')
                    ->limit(4)
                    ->get();
            } else {
                $data = Event::orderBy('id', 'DESC')
                    ->limit(6)
                    ->get();
            }

            $output = '';
            $last_id = '';

            if (!$data->isEmpty()) {
                foreach ($data as $event) {
  
                    $output .= '          
                 <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-delay="600">
                    <div class="event-item">
                        <div class="event-wrap">
                             <div class="mega-bg-color purple-bg"></div>
                                <div class="event-img">
                                    <img src="' . $event->image . '" style="height: 300px; width: 500px; object-fit:cover;" alt="Event">
                                </div>
                                <div class="content-info">
                                    <h2 class="title"><a href="#">' . $event->name . '</a></h2>
                                    <ul class="event-specs">
                                        <li>
                                            <i class="fa fa-calendar-check-o"></i>
                                            ' . $event->start_date . '
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                             ' . $event->location . '
                                        </li>
                                    </ul>
                                    <div class="date">
                                        <div class="post-time">
                                            <i class="fa fa-clock-o"></i>
                                            ' . $event->start_time . ' - ' . $event->end_time . '
                                        </div>
                                    </div>
                                    <ul class="specs-btn">
                                        <li>
                                            <a class="readon regt purple-btn" href="/event-details/'.$event->id.') }}">
                                                <span>View More</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    ';
                    $last_id = $event->id;
                }
                $output .= '
                <div id="load_more" style="text-align:center;">
                    <button class="readon regt" style=" background: #ff0157; text-align:center;" href="" data-id="' . $last_id . '" id="load_more_button">
                        <span id="#btn-content">Load More Events</span>
                    </button>
                </div>
                ';
            } else {
                $output .= '
                <div class="load-more-content" style="text-align:center;">
                    <button class="readon regt" background: #ff0157; text-align:center;" href="">
                        <span id="#btn-content">No More Data Found</span>
                    </button>
                </div>
                ';
            }
            echo $output;
        }
    }
}
