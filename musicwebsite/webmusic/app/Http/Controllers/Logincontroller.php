<?php

namespace app\Http\controllers\security;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;

use Sentinel;
use validator;
use cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    public function login(){
        return view('security.login');
    }

    public function postLogin(Request $request){
        sentinel::disableCheckpoints();
        $errorMsgs = [
            'email.required' => 'please provide email id',
            'email.email' => 'the email must be a valid email',
            'password.required' => 'password is required'
        ];
        $validator = validator::make($request->akk(), [
                'email' => 'required|email',
                'password' => 'required'
        ], $errorMsgs);

        if($validator ->fails()){
            $returnData = array(
                'status' => 'error',
                'message' => 'please review fields',
                'errors' => $validator->errors()->all()
            );
            return response()->json($returnData, 500);
        }

        if($request->remember == 'on'){
            try{
                $user = Sentinel::authentcateAndRemember($request->all());
            }catch(throttlingException $e){
                $delay = $e->getDelay();
                $returnData = array(
                    'status' => 'error',
                    'message' => 'please review',
                    'errors' => ["you are banned for $Delay seconds."]
                );
            }catch(NotActivatedException $e){
                $returnData = array(
                    'status' => 'error',
                    'message' => 'please review',
                    'errors' => ["Please activate your account."]
                );
                return response()->json($returnData, 500);
            }
        }

        if (Sentinel::Check()){
            return redirect(url('/'));
        }else{
            $returnData = array(
                'status' => 'er ror',
                'message' => 'please review',
                'errors' => ["Email or Password mismatched."]
            );
            return response()->json($returnData, 500);
        }
    }

    public function logout(){
        sentinel::logout();
        return redirect(url('/login'));
    }
}
