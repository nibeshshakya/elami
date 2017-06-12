<?php

namespace App\Http\Controllers;

use App\lami;
use App\Models\Carrer;
use App\Models\Socialstatus;
use App\Models\Userinfo;
use App\User;
use App\Success;
use DB;
use Illuminate\Support\Facades\Auth;
use Input;
use Illuminate\Http\Request;
use Mail;
use App\Mail\partnersearch;
//use Auth;

use Validator;
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

//            $validator = Validator::make($request->all(), [
//                'name' => 'required|min:6',
//                'firstname' => 'required',
//                'surname' => 'required',
//                'lastname' => 'required',
//
//                'password' => 'required'
//
//            ]);
//
//            if ($validator->fails()) {
////                echo 'inside validation fail'; die();
//                return redirect('/home')
//                    ->withErrors($validator, 'register')
//                    ->withInput();
//            }

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
            $UserinfoObj->middlename = $request->input('middlename');
            $UserinfoObj->surname = $request->input('surname');
            $UserinfoObj->DOB = $request->input('dob');
            $UserinfoObj->password = $request->input('password');

            $UserinfoObj->email = $request->input('email');
            $UserinfoObj->contact = $request->input('contact');
            $UserinfoObj->address = $request->input('address');
            $UserinfoObj->height = $request->input('height');
            $UserinfoObj->sex = $request->input('sex');
            $UserinfoObj->age = $request->input('age');
            $UserinfoObj->user_id = $user_id;


//            print_r($request->all());die();
//            print_r($UserinfoObj->name());die();
            $picture = $request->file('picture');

            if ($picture->isValid()) {
//                echo "this is image";die();
                $ext = $picture->getClientOriginalExtension(); //jpg
                $path = public_path() . '/uploads/user/avatar/';
                $filename = rand(111111, 999999) . '.' . $ext;
                $picture->move($path, $filename);
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
            $user_id = Auth::user()->id;//currently logged in user ko id
            $CarrerObj = new Carrer();

            $CarrerObj->jobtitle = $request->input('jobtitle');
            $CarrerObj->edutitle = $request->input('edutitle');
            $CarrerObj->salary = $request->input('salary');
            $CarrerObj->usersid = $user_id;
            $CarrerObj->save();


            $SocialstatusObj=new Socialstatus();
            $SocialstatusObj->mothertongue=$request->input('mothertongue');
            $SocialstatusObj->religion=$request->input('religion');

            $SocialstatusObj->user_id=$user_id;
//            $Socialstatus->caste=$request->input('mothertongue');

            $SocialstatusObj->save();



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
//              print_r($picture);die();

//                echo $picture;die();
                $gender=$userinfo->sex;
            }
            else
            {
                $gender='';
            }
            $picture = Userinfo::select('picture')->where('user_id', '=', Auth::user()->id)->get();
//                 print_r($picture[0]->picture);die();

            $result=Userinfo::Where('sex','<>',$gender)->paginate(5);
            $picturelink = public_path().'/uploads/users/avatar/'.$picture[0]->picture;
//            print_r($picturelink);die();

            if (count($result) == 0) {
                return view('lami.dashboard')->with(['message' => 'Database is empty']);
            } else {
//                return view('lami.dashboard')->with(['userinfos' => $result]);
                return view('lami.dashboard')->with(['userinfos' => $result, 'picture' => $picture]);

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
                ->select('users.email', 'userinfo.name', 'userinfo.height', 'userinfo.age', 'userinfo.sex', 'userinfo.surname', 'userinfo.firstname','userinfo.picture')
                ->join('userinfo', 'userinfo.user_id', '=', 'users.id')
//            ->select('users.*', 'users.email', 'userinfo.name','userinfo.height')
                ->whereBetween('userinfo.age', array($startage, $endage))
                ->where('userinfo.sex', '=', $searchsex)
                ->where('userinfo.surname', 'LIKE', $searchsurname.'%')
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
//        try {
//
//            $searchsex = $request->input('sex');
//            $startage = $request->input('startage');
//            $endage = $request->input('endage');
//
//            $searchsurname = $request->input('surname');
////            $searchedutitle = $request->input('edutitle');
////            $searchjobtitle = $request->input('jobtitle');
////            $searchaddress = $request->input('address');
////            $searchreligion = $request->input('religion');
//            $user = DB::table('users')
//                ->select(
//                    'users.email', 'userinfo.name', 'userinfo.height', 'userinfo.age', 'userinfo.sex', 'users.id as user_id',
//                        'userinfo.surname', 'userinfo.firstname'
////                    'carrer.jobtitle','carrer.edutitle'
////                    'socialstatus.religion'
////                    'carrer.jobtitle','carrer.edutitle'
//                )
//                ->join('userinfo', 'users.id', '=', 'userinfo.id')
////                ->join('socialstatus', 'users.id', '=', 'socialstatus.user_id')
//                ->join('carrer', 'users.id', '=', 'carrer.usersid')
//
////                ->where('users.id', '=', 27)
////            ->select('users.*', 'users.email', 'userinfo.name','userinfo.height')
//
//                ->whereBetween('userinfo.age', array($startage, $endage))
//                ->orwhere('userinfo.sex', '=', $searchsex)
//                ->orwhere('userinfo.surname', 'LIKE', '%'.$searchsurname.'%')
//
//        //            where('name', 'like', $match .'%');
////                where($field, 'LIKE', "%$value%");
////                ->orwhere('carrer.jobtitle', '=', $searchjobtitle)
////                ->orwhere('socialstatus.religion', '=', $searchreligion)
////                ->orwhere('userinfo.address', '=', $searchaddress)
//
//                ->get();
////    print_r($user);  die();
//            //last ma gareko
//
//            if (count($user) == 0) {
////                return view('lami.search')->with(['message' => 'no related search']);
//                return view('lami.searchresult')->with(['errormsz' => 'Sorry !!! No result found']);
//            } else {
//                return view('lami.advanceresult')->with(['users' => $user, 'successmsz' => 'match found for your search query']);
//            }
////            print_r($user);
//
//
//        } catch (\Exception $e) {
//            print_r($e);
//        }

        try {
//            $searchage = $request->input('age');
            $searchsex = $request->input('sex');
//            echo $searchsex;die();
            $startage = $request->input('startage');
            $endage = $request->input('endage');

            $searchsurname = $request->input('surname');

            $user = DB::table('users')
                ->select('users.email','userinfo.id as users_id', 'userinfo.name','userinfo.address', 'userinfo.surname', 'userinfo.height', 'userinfo.age', 'userinfo.sex', 'userinfo.surname', 'userinfo.firstname','userinfo.picture')
                ->join('userinfo', 'userinfo.user_id', '=', 'users.id')
//            ->select('users.*', 'users.email', 'userinfo.name','userinfo.height')

                ->where('userinfo.sex', '=', $searchsex)
                ->where('userinfo.surname', 'LIKE', $searchsurname.'%')
                ->whereBetween('userinfo.age', array($startage, $endage))
                ->get();

//                print_r($user);die();
            //last ma gareko

            if (count($user) == 0) {
//                return view('lami.search')->with(['message' => 'no related search']);
                return view('lami.searchresult')->with(['errormsz' => 'Sorry !!! No result found']);
            } else {
                return view('lami.advanceresult')->with(['users' => $user, 'successmsz' => 'match found for your search query']);
            }
//            print_r($user);


        } catch (\Exception $e) {
            print_r($e);
        }





    }




    public function showDetail($id)
    {


//        print_r($picture);die();
        $result = Userinfo::select('*')->where('user_id', '=', $id)->first(); //app/model ko name rakhney
//        print_r($result);die();
        $carrerresult = Carrer::select('*')->where('usersid', '=', $id)->first();
        $socialresult = Socialstatus::select('*')->where('user_id', '=', $id)->first();


        return view('lami.viewdetail')->with(['profiledata' => $result, 'carrerdata' => $carrerresult, 'socialdata' => $socialresult]);

    }


    public function showEdit()
    {
        return view('lami.editprofile');

    }


    public function showUserProfile($id){
        $result = Userinfo::find($id);
//        print_r($result); die();

        return view('lami.user.profile')->with(['userdata' => $result]);
    }


    public function showSuccess()
    {

        return view('lami.successstory');
    }

    public function insertSuccess(Request $request){
        try{
            $successObj = new Success();

            $successObj->name = $request->input('name');
            $successObj->phone = $request->input('phone');
            $successObj->email = $request->input('email');
            $successObj->message = $request->input('message');

           $picture = $request->file('picture');

            if ($picture->isValid()) {
//                echo "this is image";die();
                $ext = $picture->getClientOriginalExtension(); //jpg
                $path = public_path() . '/uploads/user/avatar/';
                $filename = rand(111111, 999999) . '.' . $ext;
                $picture->move($path, $filename);
            }

//            print_r($filename);die();

            $successObj->picture = $filename;
            $successObj->save();

            if($successObj->save()){
//                return redirect()->route('listproduct')->with(['message' => 'Your Data is been added successfully']);
                return redirect('/lami/success')->with(['message'=>"successfully inserted"]);
            }

        }catch(\Exception $e){
            return $e;
        }
    }
    public function showStory()
    {
        try {

            $result = Success::all();
//            print_r($result);die();

            if (count($result) == 0) {
                return view('lami.success')->with(['message' => 'Database is empty']);
            } else {
                return view('lami.home')->with(['stories' => $result]);

            }
        }
        catch (\Exception $e) {

        }

    }

    public function email ($id)
    {
//            echo "inside mail"; die();
//        Mail::to(Auth::user()->email)

        $user=User::select('users.email')->where('users.id','=',$id)->get();
//        print_r($user); die();
            Mail::to($user[0]->email)
            ->cc('elami455@gmail.com')
            ->send(new partnersearch());


        return redirect('/lami')->with(['message' => '']); ;

    }

}

