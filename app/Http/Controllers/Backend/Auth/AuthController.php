<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //
    public function forgot(){
        return view('backend.auth.forgot');
    }

    public function sendUsersLink(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email'
        ], [
            'email.exists' => "The user email does not exist"
        ]);

        $email = $request->input('email');

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            "email" => $email,
            "token" => $token,
            "created_at" => Carbon::now(),
        ]);

      
        $action_link = route('reset.password.form', ['token'=>$token, 'email'=>$email]);
        $body = "We have received a request to reset the password for <b> Forex Arena </b> account associated with ". $email . "You can reset your passowrd with the link below";

        Mail::send('email-forgot', ['action_link' => $action_link, 'body'=>$body], function($message) use ($request){
            $message->from('forexarenakenya@gmail.com', 'Forex Arena');
            $message->to($request->email, 'Your name')
                    ->subject('Reset Password');
        });

        return back()->with('success', 'We have emailed your password reset link');
    }

    public function showResetForm(Request $request, $token = null){
        return view('backend.auth.reset')->with(['token'=>$token, 'email'=>$request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email' => 'nullable|email|exists:users,email',
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
            User::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

        DB::table('password_resets')->where([
                'email' => $request->email,
            ])->delete();

        return redirect()->route('user.login')->with('info', 'Your password has been changed! You can login now')
        ->with('verifiedEmail', $request->email);
        }
        // else{
        //     return back()->withInput()->with('error', 'Passwords do not match');
        // }
    }
}
