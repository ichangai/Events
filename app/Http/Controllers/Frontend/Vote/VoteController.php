<?php

namespace App\Http\Controllers\Frontend\Vote;

use App\Models\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class VoteController extends Controller
{
    //
    function save_votes(Request $request)
    {
        
        $data = new Vote();
        $data->broker_id = $request->broker;
        $data->voter_email = $request->email;
        $data->event_id = $request->event;
        if ($request->type == 'upvote') {
            $data->upvote = 1;
        }
        $data->save();
        return response()->json([
            'bool' => true
        ]);
    }

    public function change(){
        $vote = Vote::where('voter_email', Session::get('voter_email'))->first();
        if ($vote) {
            $status = $vote->delete();
            if ($status) {
                return back()->with('success', 'You can now vote again');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }

}
