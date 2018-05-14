<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;


class AuthController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){
        $rules = array(
            'username'=>'required',
            'password'=>'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            Session::flash('fail', 'Semua fields harus di isi.');
            return redirect()->route('login');
        }
        else{
            $userdata = array(
                'username'=>$request->username,
                'password'=>$request->password
            );

            $user=User::where('Username', $request->username)->where('Password', $request->password)->count();

            if($user!=0){
                Session::flash('succes', 'login berhasil');
                return redirect()->route('pengajar');
            }
            else{
                Session::flash('fail', 'login gagal');
                $errors = new MessageBag(['password'=>['Email/Username atau Password salah']]);
                return redirect()->route('login')->withErrors($errors)
                    ->withInput(Input::except('password'));
            }
        }
    }

    public function showRegisterForm(){
        return view('register');
    }

    public function register(Request $request){
        if(User::where('NRP', $request->input('nrp'))->count() >0 ){
            Session::flash('message','NRP'. $request->input('nrp').'sudah digunakan silahkan login dengan akun tersebut.');
            return view('/register');
        }
        
        $user = new User;
        $user->NRP = $request->input('nrp');
        $user->Username =$request->input('username'); 
        $user->Password =$request->input('password');
        $user->Nama_Pengajar =$request->input('nama');
        $user->TTL =$request->input('ttl');
        $user->Alamat =$request->input('alamat');
        $user->No_HP =$request->input('handphone');
        $bool = $user->save();
        dd($request);
        return redirect('/');

    }
}
