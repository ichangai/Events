<?php

namespace App\Http\Controllers\Backend\Sponsor;

use App\Models\Sponsor;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class SponsorController extends Controller
{
    //
    public function apply(){
        return view('frontend.pages.becomeSponsor');
    }

    public function create(){
        return view('backend.admin.pages.sponsor.create');
    }

    public function index(){
        $sponsors = Sponsor::all();
        return view('backend.admin.pages.sponsor.index', compact('sponsors'));
    }

    public function storeApp(Request $request){
        $request->validate([
            "name" => "required|string",
            "email"=> "nullable|string",
            "phone" => "required|string",
            "level" => "required|in:platinum,gold,silver",
            "image" => "nullable",
            "message" => "nullable",
        ]);

        $data = $request->all();

        // return $data;

            $status = Sponsor::create([
                "name" => $request->input('name'),
                "email" => $request->input('email'),
                "phone" => $request->input('phone'),
                "level" => $request->input('level'),
                "message" => $request->input('message'),
                
            ]);

        if($status){
            Alert::success('Success', 'Thank you for applying.');
            return back()->with('success', 'You have successfully applied as a sponsor');
        }else {
            return redirect()->withErrors('error', 'Something went wrong');
        }

    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "email"=> "nullable|string",
            "phone" => "required|string",
            "level" => "required|in:platinum,gold,silver",
            "image" => "nullable",
            "message" => "nullable",
        ]);

        $data = $request->all();


                     // cloudinary
            if ($request->image == "") {
               return back()->with("error", "Please upload an image");
            } else {
                $imageUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                    'folder' => 'ForexArena Sponsors'
                ])->getSecurePath();
            }

            $status = Sponsor::create([
                "name" => $request->input('name'),
                "email" => $request->input('email'),
                "phone" => $request->input('phone'),
                "level" => $request->input('level'),
                "status" => "approved",
                "image" => $imageUrl,
                "message" => $request->input('message'),                
            ]);

        if($status){
            return redirect()->route('admin.sponsors.index')->with('success', 'You have successfully applied as a sponsor');
        }else {
            return redirect()->withErrors('error', 'Something went wrong');
        }
    }

    public function edit($id){
        $sponsor = Sponsor::find($id);
        return view('backend.admin.pages.sponsor.edit', compact('sponsor'));
    }
    
    public function update(Request $request, $id)
    {
        $sponsor = Sponsor::find($id);

        if($sponsor){
            $request->validate([
                "name" => "nullable|string",
                "email" => "nullable|string",
                "phone" => "nullable|string",
                "level" => "nullable|in:platinum,gold,silver",
                "message" => "nullable",
            ]);

            $data = $request->all();

            if ($request->image == "") {
                $imageUrl = $sponsor->image;
            } else {
                $imageUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                    'folder' => 'ForexArena Sponsors'
                ])->getSecurePath();
            }

            $status = $sponsor->fill([
                "name" => $request->input('name'),
                "email" => $request->input('email'),
                "phone" => $request->input('phone'),
                "status" => "approved",
                "image" => $imageUrl,
                "level" => $request->input('level'),
                "message" => $request->input('message'),
            ])->save();

            if ($status) {
                return redirect()->route('admin.sponsors.index')->with('success', 'You have successfully updated the sponsor');
            } else {
                return redirect()->withErrors('error', 'Something went wrong');
            }
        }
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);
        if ($sponsor) {
            $status = $sponsor->delete();
            if ($status) {
                return redirect()->route('admin.sponsors.index')->with('success', 'Successfully deleted sponsor');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }

   
}
