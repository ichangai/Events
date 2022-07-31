<?php

namespace App\Http\Controllers\Backend\Admin;

use Carbon\Carbon;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function login(){
        return view('backend.admin.login');
    }
    //
    public function check(Request $request)
    {
        //  validate inputs
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => "This email does not exist in Admnistrator table"
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('Error', 'Incorrect credentials');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', "Successfully logged out");
    }


    public function forgot(){
        return view('backend.admin.adminForgot');
    }

    public function sendAdminLink(Request $request){
        $request->validate([
            'email'=>'required|email|exists:admins,email'
        ], [
            'email.exists' => "The admin email does not exist"
        ]);

        $email = $request->input('email');

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            "email" => $email,
            "token" => $token,
            "created_at" => Carbon::now(),
        ]);

      
        $action_link = route('admin.reset.password.form', ['token'=>$token, 'email'=>$email]);
        $body = "We have received a request to reset the password for <b> Forex Arena </b> account associated with ". $email . " You can reset your passowrd with the link below";

        Mail::send('email-forgot', ['action_link' => $action_link, 'body'=>$body], function($message) use ($request){
            $message->from('forexarenakenya@gmail.com', 'Forex Arena');
            $message->to($request->email, 'Your name')
                    ->subject('Reset Password');
        });

        return back()->with('success', 'We have emailed your password reset link');
    }

    public function showResetForm(Request $request, $token = null){
        return view('backend.admin.adminReset')->with(['token'=>$token, 'email'=>$request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email' => 'nullable|email|exists:admins,email',
            'password' => 'required',
            'password_confirm' => 'required'
        ]);

        $check_token = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{
            Admin::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

        DB::table('password_resets')->where([
                'email' => $request->email,
            ])->delete();

        return redirect()->route('admin.login')->with('info', 'Your password has been changed! You can login now')
        ->with('verifiedEmail', $request->email);
        }
        // else{
        //     return back()->withInput()->with('error', 'Passwords do not match');
        // }
    }
}
