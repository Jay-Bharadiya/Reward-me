<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){

        $user=User::updateOrCreate([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),],
            [

            'app_version'=>$request->input('app_version'),


            'device_token'=>$request->input('device_token'),

            'created_by'=>$request->input('created_by'),
            'updated_by'=>$request->input('updated_by'),
            ]);
            $response=[
                'status'=>'true',



                ];


                return response($response,201);
    }
    public function logout(Request $request,User $user){
        $user=User::find($request->name);
        return $user;
        $user->device_token->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
