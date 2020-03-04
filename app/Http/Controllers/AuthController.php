<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class AuthController extends Controller
{
    public $successStatus = 200;
  
    /** 
    * login api 
    * 
    * @return \Illuminate\Http\Response 
    */ 
    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] = $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    /** 
    * Register api 
    * 
    * @return \Illuminate\Http\Response 
    */ 
    public function signup(Request $request){ 
        $validator = Validator::make($request->all(), [ 
            'nombre' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['nombre'] =  $user->nombre;
        return response()->json(['success'=>$success], $this-> successStatus); 
    }

    /** 
    * details api 
    * 
    * @return \Illuminate\Http\Response 
    */ 
    public function details(){ 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 

    /**
     * Logout api (Revoke the token)
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}