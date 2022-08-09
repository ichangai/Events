<?php

namespace App\Http\Controllers\backend\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function create()
    {
        return view('backend.admin.pages.users.create');
    }

    public function index()
    {
        $users = User::all();
        return view('backend.admin.pages.users.index', compact('users'));
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // return $data;
        $request->validate([
            "name" => "required|string",
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "phone" => "required|string",
            "password" => "required|string",
        ]);

        $data = $request->all();
 
        $status = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

        if($status){
            // Alert::success('Success Title', 'Success Message');
            return redirect()->route('home')->with('success', 'Successfully registered');
        }else {
               Alert::success('Error', 'Something went wrong');
            return redirect()->withErrors('error', 'Something went wrong');
        }
        
    }

    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('backend.admin.pages.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findorFail($id);
        if($user){
            $request->validate([
                "name" => "required|string",
                "email"=> "nullable|string",
                "password" => "required|string",
                "phone" => "required|string",
            ]);
    
            $data = $request->all();

            $status = $user->fill([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
            ])->save();
    
            if($status){
                return redirect()->route('admin.user.index')->with('success', 'Successfully updated the User');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        }else{
            return "Could not find the id of the User";
        }
    }

    public function destroy($id)
    {
        $user = User::findorFail($id);
        if($user){
            $status = $user->delete();
            if($status){
                return redirect()->route('admin.user.index')->with('success', 'Successfully deleted user');
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        } else{
            return back()->with('error', 'Data not found');
        }
    }

    public function  userLogin(Request $request){
        $this->validate($request, [
         'email'=> 'required|email|exists:users,email',
         'password'=>'required|min:4',
        ], [
             'email.exists' => "This email does not exist in users table"
        ]);
 
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
             Session::put('user', $request->email);
             Alert::toast('success', 'You have successfully logged in');
             return redirect()->route('home')->with('success','You have successfully logged in');
        }
        else{
            Alert::toast('error', 'Invalid email & password!');
            return back()->with('error', 'Invalid email & password!');
        }
     }

     public function showPage(Request $request){
        return view('backend.user.login');
     }

     public function userLogout()
     {
         Session::forget('user');
         Auth::logout();
         return back()->with('success', 'Successfully Logged out');
     }
}
