<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


    // add on  10-03-2015
   

    private function encryptIt($q) {
        $cryptKey = 'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $q, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
        return( $qEncoded );
    }
    

    // decrypt password 


    private function decryptIt($q) {
        $cryptKey = 'qJB0rGtIn5UB1xG03efyCp';
        $qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($q), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
        return( $qDecoded );
    }
    

}
