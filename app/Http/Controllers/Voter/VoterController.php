<?php

namespace App\Http\Controllers\Voter;

use App\Models\Voter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class VoterController extends Controller
{
    //
    public function store(Request $request)
    {
        $email_exist_db = Voter::where('email', $request->email)->exists();
        if(!$email_exist_db ){
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:voters'],
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
            ]);

            $data = $request->all();

            // return $data;
            $status = Voter::create($data);
            if ($status) {
                Alert::success('success', 'You have successfully been registered!');
                Session::put('voter_email', $request->email);
                return redirect()->route('brokers.list')->with('success', 'You have successfully been registered');
            } else {
                Alert::toast('error', 'Something went wrong');
                return back()->withErrors('error', 'Something went wrong');
            }
        }else{
            Alert::error('error', 'Email already exists in database, please sign in as voter');
            return back()->with('error', 'Email already exists in database');
        }
    //    return $request->all();

    }

    public function showLogin(){
        return view('frontend.pages.awards.signIn');
    }

    public function signIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:voters,email',
        ], [
            'email.exists' => "This email does not exist in voters table"
        ]);

        if ($request->email) {
            Session::put('voter_email', $request->email);
            //  return Session::get('event_id');
            Alert::toast('success', 'You have successfully logged in');
            return redirect()->route('brokers.list')->with('success', 'You have successfully logged in as a voter');
        }else {
            Alert::toast('error', 'Invalid email!');
            return back()->with('error', 'Invalid email!');
        }
    }

    public function showRegForm()
    {
        return view('frontend.pages.awards.awardForm');
    }
}
