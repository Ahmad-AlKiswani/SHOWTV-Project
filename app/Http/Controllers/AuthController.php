<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{



    public function postRegistration(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($request->hasFile('user_picture')){
            $uploadedImage = $request->file('user_picture');
            $imageName = self::generate_random_string(). '.' . $uploadedImage->getClientOriginalExtension();
            $destinationPath = public_path('/user_file');
            $uploadedImage->move($destinationPath, $imageName);
            $uploadedImage->imagePath = $destinationPath . $imageName;

        }

        $password =  bcrypt($request->password);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$password ,
            'user_picture'=>$imageName,
            'rule' => 2 ,
        ];

        User::create($data);
        $credentials = $request->only('email' , 'password');
        Auth::attempt($credentials);
        $request->session()->put('userid', auth()->user()->id);
        $request->session()->put('user_name', auth()->user()->user_name);
        $request->session()->put('rule', 2);

        return redirect("/")->with('success' ,'Great! You have Successfully loggedin');
    }

    public function postLogin(Request $request){

        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email' , 'password');
        if(Auth::attempt($credentials)){
            $request->session()->put('userid', auth()->user()->id);
            $request->session()->put('user_name', auth()->user()->user_name);
            $request->session()->put('rule', 2);
            return redirect()->intended('index');

        }
        return redirect("/")->with('error' , 'Oppes! You have entered invalid credentials');
    }


    public function loginAdmin(Request $request){

        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email' , 'password');
        if(Auth::attempt($credentials)){
            $request->session()->put('userid', auth()->user()->id);
            $request->session()->put('user_name', auth()->user()->user_name);
            $request->session()->put('rule', auth()->user()->rule);
            if(auth()->user()->rule == 1 || auth()->user()->rule == 3){
                return redirect()->intended('userList');
            }
            return redirect("/login")->with('error' , 'Oppes! You have entered invalid credentials');

        }
        return redirect("/login")->with('error' , 'Oppes! You have entered invalid credentials');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function logoutAdmin(){
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }

    public function generate_random_string()
    {
        return rand(11111111,99999999);
    }


}
