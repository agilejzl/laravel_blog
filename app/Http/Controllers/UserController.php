<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\User;

class UserController extends Controller{
    public function logout(Request $request){
        $request->session()->forget('user');
        $request->session()->flash('notice', 'Logout succeed!');
        return redirect('/posts');
    }

    public function signin(Request $request){
        $email = $request->get('user')['email'];
        $password = $request->get('user')['password'];
        $user = User::where('email', $email)->first();
        Log::info('By email:'.$email);

        if (empty($user) || password_verify($user->password, $password)){
            $request->session()->flash('error', 'Wrong account!');
            print json_encode(['error_code'=>404, 'msg'=>'Wrong account!']);
        } else {
            session(['user' => $user]);
            $request->session()->flash('notice', 'Login succeed!');
            print json_encode(['user'=>$user]);
        }
    }

    public function store(Request $request){
        $password = $request->get('user')['password'];
        $exist = User::where('email', $request->get('user')['email'])->first();

        if (empty($exist)){
            $hash_user = array_merge($request->get('user'), ['password' => password_hash($password, PASSWORD_DEFAULT)]);
            $user = User::create($hash_user);
            session(['user' => $user]);
            $request->session()->flash('notice', 'Register succeed!');
            print json_encode(['user'=>$user]);
        } else {
            print json_encode(['error_code'=>400, 'msg'=>'Email has been taken!']);
        }
        
    }
}

