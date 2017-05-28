<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    //


//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function authenticate(Request $request )
    {

        $email=$request->input('email');
        $password=$request->input('password');

//        print_r($email);
//        print_r($password);
//        die();

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('lami');
        }else{

            return view('lami.login')->with(['errormsz' => 'Sorry !!! No such users are registered']);


//            echo "not logged in";die();
//            return redirect()->route('home');
//            return redirect()->intended('home');
        }
    }

    public function showRegister(){
        return view('lami.reg');
    }

    public function registerUser(Request $request)
    {
        $regObj=new User();
        $regObj->username=$request->get('name');
        $regObj->email=$request->get('email');
        $regObj->password=bcrypt($request->get('password'));
        $regObj->save();


    }


    public function logout(){
        \Auth::logout();
        return redirect()->route('login');
    }
}
