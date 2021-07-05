<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\pricing;
use App\Models\payment_type;
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
        $users=User::all();
        foreach($users as $user){
if($user->device_token==$request->device_token)
{
        $user->device_token=null;
        $user->save();

}
        }
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
    public function pricing(Request $request){
        $pricing=pricing::Create([
            'name'=>$request->input('name'),
            'currency'=>$request->input('currency'),


            'price'=>$request->input('price'),


            'active'=>$request->input('active'),

            'created_by'=>$request->input('created_by'),
            'updated_by'=>$request->input('updated_by'),
            ]);
            return response()->json([
                'Status' => 'True'
            ]);

    }
    public function payment_type(Request $request){
        $payment_type=payment_type::Create([
            'type'=>$request->input('type'),


            'active'=>$request->input('active'),

            'created_by'=>$request->input('created_by'),
            'updated_by'=>$request->input('updated_by'),
            ]);
            return response()->json([
                'Status' => 'True'
            ]);

    }

}
