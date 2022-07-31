<?php

namespace App\Http\Controllers\backend\Event;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class EventsController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        return view('backend.admin.pages.events.create', compact('categories'));
    }

    public function index()
    {
        $events = Event::all();
        return view('backend.admin.pages.events.index', compact('events'));
    }

    public function store(Request $request)
    {    
        $request->validate([
            "name" => "required|string",
            // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            "location" => "required|string",
            "start_time" => "nullable",
            "end_time" => "nullable",
            "host" => "nullable|string",
            "amount" => "nullable|int",
            "summary" => "nullable",
            "start_date" => "nullable|date",
            "end_date" => "nullable|date",
            "type" => "nullable|in:free,paid",
            "timeline" => "nullable|in:past,upcoming",
            "category_id" => "required",
        ]);
        
        $data = $request->all();
        $imageUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
            'folder' => 'ForexArena Events'
        ])->getSecurePath();
        // dd($imageUrl);

        $status = Event::create([
            "name" => $request->name,
            "location" => $request->location,
            "start_time" => $request->start_time,
            "end_time" => $request->end_time,
            "host" => $request->host,
            "amount" => $request->amount,
            "summary" => $request->summary,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "type" => $request->type,
            "timeline" => $request->timeline,
            "category_id" => $request->category_id,
            "image" => $imageUrl,
        ]);
        if($status){
            return redirect()->route('admin.event.index')->with('success', 'You have successfully created an event');
        }else{
            return back()->withErrors("error", "Something went wrong");
        }
    }

    public function edit($id)
    {
        $event = Event::findorFail($id);
        return view('backend.admin.pages.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findorFail($id);
        if($event){
            $request->validate([
                "name" => "required|string",
                "photo"=> "nullable|string",
                "location" => "required|string",
                "start_time" => "nullable",
                "end_time" => "nullable",
                "host" => "nullable|string",
                "amount" => "nullable|int",
                "summary" => "nullable",
                "start_date" => "nullable|date",
                "end_date" => "nullable|date",
                "type" => "nullable|in:free,paid",
                "timeline" => "nullable|in:past,upcoming",
                "category_id" => "nullable",
            ]);
    
            $data = $request->all();
    
            $status = $event->fill($data)->save();
    
            if($status){
                return redirect()->route('admin.event.index')->with('success', 'Successfully updated the event');
            }
        }else{
            return "Could not find the id of the event";
        }
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        if($event){
            $status = $event->delete();
            if($status){
                return redirect()->route('admin.event.index')->with('success', 'Successfully deleted event');
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        } else{
            return back()->with('error', 'Data not found');
        }
    }

    public function comp()
    {
        $compes = Event::where('category_id', 5)->get();
        return view('backend.admin.pages.events.competition', compact('compes'));
    }

    public function conf()
    {
        $conferences = Event::where('category_id', 6)->get();
        return view('backend.admin.pages.events.conference', compact('conferences'));
    }

    public function webinar()
    {
        $webinars = Event::where('category_id', 8)->get();
        return view('backend.admin.pages.events.webinar', compact('webinars'));
        
    }

    public function expo()
    {
        $expos = Event::where('category_id', 9)->get();
        return view('backend.admin.pages.events.expo', compact('expos'));
    }    


    public function awards()
    {
        $awards = Event::where('category_id', 'awards')->get();
        return view('backend.admin.pages.events.awards', compact('awards'));
        
    }
}
