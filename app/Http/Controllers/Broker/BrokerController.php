<?php

namespace App\Http\Controllers\Broker;

use App\Models\Vote;
use App\Models\Event;
use App\Models\Broker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class BrokerController extends Controller
{
    //
    public function show(){
        $brokers = Broker::all();
        // return Session::get('voter_email'); 
        // return Session::get('event_id');
        $voter_email_exists = Vote::where('voter_email', Session::get('voter_email'))->where('event_id', Session::get('event_id'))->exists();
        // return  $voter_email_exists;
        $vote = Vote::where('voter_email', Session::get('voter_email'))->first();
        return view('frontend.pages.brokers.index', compact('brokers', 'voter_email_exists', 'vote'));
    }

    public function create()
    {
        $awards = Event::where('category_id', 1)->get();
        return view("backend.admin.pages.brokers.create", compact('awards'));
    }

    public function store(Request $request){
        // return $request->all();
        $request->validate([
            "name" => "required|string",
            "email" => "nullable|string",
            "event_id" => "nullable",
            "image" => "nullable",
        ]);

        $data = $request->all();

        // cloudinary
        $imageUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
            'folder' => 'ForexArena Brokers'
        ])->getSecurePath();

        $status = Broker::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "event_id" => $request->input('event_id'),
            "image" => $imageUrl,
        ]);

        if ($status) {
            Alert::success('Success', 'Thank you for applying.');
            return back()->with('success', 'You have successfully applied as a sponsor');
        } else {
            return redirect()->withErrors('error', 'Something went wrong');
        }
    }

    public function index(){
        $brokers = Broker::all();
        return view('backend.admin.pages.brokers.index', compact('brokers'));
    }

    public function edit($id)
    {
        $broker = Broker::findorFail($id);
        $awards = Event::where('category_id', 1)->get();

        return view('backend.admin.pages.brokers.edit', compact('broker', 'awards'));
    }



    public function update(Request $request, $id)
    {
        $broker = Broker::findorFail($id);
        if($broker){
                $request->validate([
                    "name" => "nullable|string",
                    "email" => "nullable|string",
                    "event_id" => "nullable",
                    "image" => "nullable",
                ]);

                $data = $request->all();

            if ($request->image == "") {
                $imageUrl = $broker->image;
            } else {
                $imageUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                    'folder' => 'ForexArena Events'
                ])->getSecurePath();
            }

                $status = $broker->fill([
                    "name" => $request->input('name'),
                    "email" => $request->input('email'),
                    "event_id" => $request->input('event_id'),
                    "image" => $imageUrl,
                ])->save();

                if ($status) {
                    Alert::success('Success', 'You have updated successfully.');
                    return redirect()->route('admin.broker.index')->with('success', 'You have successfully updated the broker');
                } else {
                    return back()->withErrors('error', 'Something went wrong');
                }
        }else{
            Alert::success('Error', 'Broker not Found.');
        }
    }

    public function destroy($id)
    {
        $broker = Broker::find($id);
        if ($broker) {
            $status = $broker->delete();
            if ($status) {
                return redirect()->route('admin.broker.index')->with('success', 'Successfully deleted broker');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }

}
