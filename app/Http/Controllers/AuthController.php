<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Session;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function customLogin(Request $request){
        $email = $request->data_post['email'];
        $password = $request->data_post['password'];
        $attempt = Auth::attempt(['email' => $email, 'password' => $password]);

        // if ($attempt) {
        //     $checkUser = User::select('teams.id', 'users.role', 'users.email')
        //     ->join('teams', 'teams.id_user', '=', 'users.id')
        //     ->where('users.email', $email)
        //     ->get();
        //     if(isset($checkUser[0])){
        //         Session::put('email',$checkUser[0]->email);
        //         Session::put('role',$checkUser[0]->role);
        //         Session::put('id',$checkUser[0]->id);
        //     }else{
        //         $checkUser = User::select('role', 'email')
        //         ->where('email', $email)
        //         ->get();
        //         if(isset($checkUser[0])){
        //             Session::put('email',$checkUser[0]->email);
        //             Session::put('role',$checkUser[0]->role);
        //             Session::put('id', 0);
        //         }else{
        //             return [
        //                 "status" => "403",
        //                 "message" => "Not Allowed"
        //             ];
        //         }
        //     }
        // }else{
        //     return [
        //         "status" => "403",
        //         "message" => "Not Allowed"
        //     ];
        // }
        // return [
        //     "status" => "200",
        //     "message" => "success"
        // ];


        // ===============================
        if( strpos($request->data_post['email'], '@' )){
            $tmp=explode("@", $request->data_post['email']);
            $user=$tmp[0];
            $domain=$tmp[1];//john.petra.ac.id


            $imap = false;
            $timeout = 15;

            $fp = fsockopen($domain, $port = 110, $errno, $errstr, $timeout);
            $errstr = fgets($fp);
            if(substr($errstr, 0, 1) == '+') {
                fputs($fp, "USER ".$user."\n");
                $errstr = fgets($fp);
                if(substr($errstr, 0, 1) == '+') {
                    fputs($fp, "PASS ".$request->data_post['password']."\n");
                    $errstr = fgets($fp);
                    if(substr($errstr, 0, 1) == '+') {
                        $imap = true;
                    }
                }
            }

            if($imap){
                $checkUser = Team::where('teams.nrp_leader', $user)
                ->where('teams.is_active', 1)
                ->get();
                if(isset($checkUser[0])){
                    Session::put('email',$request->data_post['email']);
                    Session::put('role',2);
                    Session::put('id',$checkUser[0]->id);
                }else{
                    Session::put('email', $request->data_post['email']);
                    Session::put('role', 3);
                    Session::put('id', 0);
                }
            }
        }else{
            if ($attempt) {
                $checkUser = User::select('teams.id', 'users.role', 'users.email')
                ->join('teams', 'teams.id_user', '=', 'users.id')
                ->where('users.email', $email)
                ->get();
                if(isset($checkUser[0])){
                    Session::put('email',$checkUser[0]->email);
                    Session::put('role',$checkUser[0]->role);
                    Session::put('id',$checkUser[0]->id);
                }else{
                    $checkUser = User::select('role', 'email')
                    ->where('email', $email)
                    ->get();
                    if(isset($checkUser[0])){
                        Session::put('email',$checkUser[0]->email);
                        Session::put('role',$checkUser[0]->role);
                        Session::put('id', 0);
                    }else{
                        return [
                            "status" => "403",
                            "message" => "Not Allowed"
                        ];
                    }
                }
            }else{
                return [
                    "status" => "403",
                    "message" => "Not Allowed"
                ];
            }
            return [
                "status" => "200",
                "message" => "success"
            ];
        }
    }

    public function customLogout(){
        try {
            Session::flush();
            Auth::logout();
        } catch(\Illuminate\Database\QueryException $ex){
            return [
                "status" => "403",
                "message" => $ex->getMessage()
            ];
        }
        return [
            "status" => "200",
            "message" => "success"
        ];
    }

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request){
        try {
            $user_google = Socialite::driver('google')->user();
            Session::put('email', $user_google->getEmail());
            Session::put('role', 4);
            Session::put('id', $user_google->getId());
            return Redirect::to(Session::get('url'));
        } catch (Exception $ex) {
            return View::make('errors.404');
        }
    }
}
