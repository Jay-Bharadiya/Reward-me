<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $user=User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),

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
}
