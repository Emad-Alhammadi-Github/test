<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){

        return view('users.login');
    }
    public function indexadmin(){

        return view('AdminPages.login');
    }

    public function login()
    {
        $inform= request()->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]) ;


        if(auth()->attempt($inform)){
            return redirect()->route('show.index');
        }

    }


    public function admlogin(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {

            return redirect()->route('items.index');
          
           
        }
    
     else{
        return redirect()->route('login.admin');

    }
    }

    public function create(){
        return view('welcome');
        
    }

    public function insert(){
      
       $inform= request()->validate([
            'name'=> 'required|max:200',
            'email'=> 'required|email',
            'password'=> 'required',
        ]) ;
        $inform['password']=bcrypt($inform['password']);
       $user= User::create($inform);
       auth()->login($user);
         return redirect("/");
    }
}
