<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
       
        $this->middleware('auth', ['except' => [
            'login'
        ]]);

    }



    public function login(Request $request)
    {
       if(!empty($request->username) &&  !empty($request->password)){

            $user = User::where([
                ['UserName' , '=', $request->username],
                ['Password' , '=', $request->password]
            ])->orWhere([
                ['EmailID' , '=', $request->username],
                ['Password' , '=', $request->password]
            ])->first();

            if($user){

                Auth::login($user, true);

                Activity::insert([
                    'TickleID' => $user->TickleID,
                    'activity_type'=>'login',
                    'message' => "Successfully login to your account",
                ]);

                return response()->json([ 
                    'status'=>1,
                    "message" => "success",
                    'userData'=> [
                        "token" => md5(rand(1, 10) . microtime())
                    ]
                ]);

            }else{
                return response()->json([ 
                    'status'=>0,
                    'message'=> "Your username or password is incorrect."
                ]);
            }

       }else{
             return response()->json([ 
                    'status'=>0,
                    'message'=> "Your username or password is incorrect."
                ]);
       }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home');
    }


    public function activity()
    {
        # code...
        $activities = Activity::where('TickleID',Auth::user()->TickleID)
                                ->orderBy('id','desc')
                                ->get();

        return view('user.activity',compact('activities'));
    }
    

}
