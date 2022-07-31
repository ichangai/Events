<?php

namespace App\Http\Controllers\Voter;

use App\Models\Voter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class VoterController extends Controller
{
    //
    public function store(Request $request)
    {
    //    return $request->all();
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:voters'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ]);
        
        $data = $request->all();

        // return $data;
        
        $status = Voter::create($data);
        if($status){
            Alert::toast('success', 'You have successfully been registered!');
            return redirect()->route('brokers.list')->with('success', 'You have successfully been registered');
        }
        else{
            Alert::toast('error', 'Something went wrong');
            return back()->withErrors('error', 'Something went wrong');
        }
    }
}
