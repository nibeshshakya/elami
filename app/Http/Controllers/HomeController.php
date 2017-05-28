<?php

namespace App\Http\Controllers;

use App\lami;
use App\Models\Carrer;
use App\Models\Userinfo;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
//use Illuminate\Support\Facades\Input;
use Mockery\Exception;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    public function __construct()
     * {
     * $this->middleware('auth');
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

//    public $filename;

    public function index()
    {
        return view('home');
    }


    public function showHome()
    {

        return view('lami.home');
    }

    public function showRegister()
    {

        return view('lami.register');
    }

    public function showLogin()
    {

        return view('lami.login');
    }


    public function showAbout()
    {
        return view('lami.about');
    }

    public function advanceSearch()
    {
        return view('lami.advanced');
    }


    public function showContacts()
    {
        return view('lami.contacts');
    }


    public function addInfo()
    {

        return view('lami.addinfo');
    }


    public function insertName(Request $request)
    {
        try {
            $UserinfoObj = new Userinfo();

            //for user table
            $UserObj = new User();

            //for user
            $UserObj->username = $request->input('name');
            $UserObj->email = $request->input('email');
            $UserObj->password = bcrypt($request->input('password'));

            $UserObj->save();
            if ($UserObj->save()) {
                $user_id = $UserObj->id;
            }

//            $imageName = $request->input('picture');

            $UserinfoObj->name = $request->input('name');
            $UserinfoObj->firstname = $request->input('firstname');
            $UserinfoObj->surname = $request->input('surname');
            $UserinfoObj->DOB = $request->input('dob');
            $UserinfoObj->password = $request->input('password');
            $UserinfoObj->email = $request->input('email');
            $UserinfoObj->height = $request->input('height');
            $UserinfoObj->sex = $request->input('sex');
            $UserinfoObj->age = $request->input('age');
            $UserinfoObj->user_id = $user_id;

//            print_r($request->all());die();
            $picture = $request->file('picture');

            if($picture->isValid()){
//                echo "this is image";die();
                $ext = $picture->getClientOriginalExtension(); //jpg
                $path = public_path() .'/uploads/user/avatar/';
                $filename = rand(111111,999999).'.'.$ext;
                $picture->move($path , $filename);
            }

//            print_r($filename);die();

            $UserinfoObj->picture = $filename;

            $UserinfoObj->save();

            return redirect('/lami/login');

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function insertInfo(Request $request)
    {
        try {
            $CarrerObj = new Carrer();

            $CarrerObj->jobtitle = $request->input('jtitle');
            $CarrerObj->edutitle = $request->input('edutitle');
            $CarrerObj->salary = $request->input('salary');
            $CarrerObj->save();
            return redirect('/lami');


        } catch (\Exception $e) {
            return $e;
        }
    }
    public function showIndex()
    {
        try {
           // $result = Userinfo::paginate(7);
            if(Auth::user())
            {
                 //       print_r(Auth::user()->id);die();
                $userinfo=Userinfo::Where('user_id','=',Auth::user()->id)->first();
             // print_r($userinfo);die();
                $gender=$userinfo->sex;
            }
            else
            {
                $gender='';
            }
       //     print_r($gender);die();
            $result=Userinfo::Where('sex','<>',$gender)->paginate(7);
         //   print_r($result);die();

            if (count($result) == 0) {
                return view('lami.dashboard')->with(['message' => 'Database is empty']);
            } else {
//                return view('lami.dashboard')->with(['userinfos' => $result]);
                return view('lami.dashboard')->with(['userinfos' => $result]);

            }


        } catch (\Exception $e) {

        }

    }




    public function showSearch()
    {

        return view('lami.search');
    }


    public function viewProfile()
    {

        return view('lami.profile');
    }




//    public function search(Request $request)
//    {
//        $searchquery = $request->input('username');
//        $user = DB::table('users')->where('username','=', $searchquery)->first();
//
//        print_r($user);
//    }


    public function search(Request $request)
    {
        try {
//            $searchage = $request->input('age');
            $searchsex = $request->input('sex');
//            echo $searchsex;die();
            $startage = $request->input('startage');
            $endage = $request->input('endage');

            $searchsurname = $request->input('surname');

            $user = DB::table('users')
                ->select('users.email', 'userinfo.name', 'userinfo.height', 'userinfo.age', 'userinfo.sex', 'userinfo.surname', 'userinfo.firstname')
                ->join('userinfo', 'userinfo.user_id', '=', 'users.id')
//            ->select('users.*', 'users.email', 'userinfo.name','userinfo.height')
                ->whereBetween('age', array($startage, $endage))
                ->where('sex', '=', $searchsex)
                ->where('surname', '=', $searchsurname)
                ->get();

//                print_r($user);die();
            //last ma gareko

            if (count($user) == 0) {
//                return view('lami.search')->with(['message' => 'no related search']);
                return view('lami.searchresult')->with(['errormsz' => 'Sorry !!! No result found']);
            } else {
                return view('lami.searchresult')->with(['users' => $user, 'successmsz' => 'match found for your search query']);
            }
//            print_r($user);


        } catch (\Exception $e) {
            print_r($e);
        }

    }




    public function advance(Request $request)
    {
        try {
            $searchage = $request->input('age');
            $searchsex = $request->input('sex');
            $searchsurname = $request->input('surname');

            $user = DB::table('users')
                ->select('users.email', 'userinfo.name', 'userinfo.height', 'userinfo.age', 'userinfo.sex', 'userinfo.surname', 'userinfo.firstname')
                ->join('userinfo', 'userinfo.user_id', '=', 'users.id')
//            ->select('users.*', 'users.email', 'userinfo.name','userinfo.height')
                ->where('sex', '=', $searchsex)

                ->orwhere('age', '=', $searchage)

                ->where('surname', '=', $searchsurname)
                ->get();

            //last ma gareko

            if (count($user) == 0) {
//                return view('lami.search')->with(['message' => 'no related search']);
                return view('lami.searchresult')->with(['errormsz' => 'Sorry !!! No result found']);
            } else {
                return view('lami.searchresult')->with(['users' => $user, 'successmsz' => 'match found for your search query']);
            }
//            print_r($user);


        } catch (\Exception $e) {
            print_r($e);
        }

    }


}

