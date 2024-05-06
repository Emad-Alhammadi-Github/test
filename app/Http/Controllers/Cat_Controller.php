<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Cat_Controller extends Controller
{
    //
    public function index(){
        // $data=DB::table('cats')->get();
        $data=DB::select('select * from cats');
        return view('AdminPages.cat.Get_All_Cat',["data"=>$data]);
    }

    public function create(){
        return view('AdminPages.cat.Add_Cat');
    }

    public function store(Request $req){
        // $req->validatephp ([
        //    'name_cat'=>'require'
        // ]);
        DB::table('cats')->insert([
            'cat_name'=>$req->name_cat
        ]);
        return redirect()->route('cat.index');
    }

    public function destroy($id){
        // DB::table('cats')->where('id',$id)->delete();
        // return redirect()->route('cat.index');
        return $id;
    }

    public function edit($id){
        $data = DB::table('cats')->where('id',$id)->get();
        return view('AdminPages.cat.Edit_Cat',["data"=>$data]);
     
    }

     public function updata(Request $req ,$id){
        DB::table('cats')->where('id',$id)->update([
            'cat_name'=>"$req->name_cat"
        ]);
        // return to_route('cat.index');
        return redirect()->route('cat.index');
    }
}
