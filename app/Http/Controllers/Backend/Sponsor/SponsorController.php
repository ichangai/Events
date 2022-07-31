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

        if($request->image){
            // cloudinary
            $imageUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'ForexArena Sponsors'
            ])->getSecurePath();
            // dd($uploadedFileUrl);

            $status = Sponsor::create([
                "name" => $request->input('name'),
                "email" => $request->input('email'),
                "phone" => $request->input('phone'),
                "level" => $request->input('level'),
                "image" => $imageUrl,
                "message" => $request->input('message'),
                
            ]);
        }else{
            $status = Sponsor::create([
                "name" => $request->input('name'),
                "email" => $request->input('email'),
                "phone" => $request->input('phone'),
                "level" => $request->input('level'),
                "message" => $request->input('message'),
                
            ]);
        }

        // return $data;

        if($status){
            Alert::success('Success', 'Thank you for applying.');
            return back()->with('success', 'You have successfully applied as a sponsor');
        }else {
            return redirect()->withErrors('error', 'Something went wrong');
        }
    }
    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);
        if ($sponsor) {
            $status = $sponsor->delete();
            if ($status) {
                return redirect()->route('admin.sponsor.index')->with('success', 'Successfully deleted sponsor');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }

   
}
