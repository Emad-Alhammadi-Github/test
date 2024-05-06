<?php

namespace App\Http\Controllers;


use App\Models\carditems;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function showall(){
        $data = DB::table('users')->get();
        // $data = Item::all();
        return view('AdminPages.userall.Get_All_userall', ['data' => $data]);
    }

    public function showindex(){

  \Illuminate\Support\Facades\DB::listen(function($query){
    logger($query->sql);
  });
        // $ala1 = DB::table('items')->latest()->get();   ,"ala1"=>$ala1
        // $d=DB::select()
        // $ala1 = DB::table('items')->orderBy('id', 'desc')->take(5)->get();
        // $ala1 = Item::orderBy('created_at', 'desc')->take(3)->get();
        //  $data = DB::table('items')->latest()->get();
    //    $data = Item::all();
    //    $data = Item::with()->get();
         $data = Item::latest()->get();

         if (auth()->check()) {
         $user = Auth::user();
         $userid= $user->id;
         $asdf = carditems::where('user_id', $userid)->get();

         return view('welcome', ['data' => $data,'asdf' => $asdf]);
         }

        return view('welcome', ['data' => $data]);


  
    }




    public function showuseritem($id)
    {
    
        $data = DB::table('items')->where("id",$id)->get();
        $cat = DB::table('cats')->where("id",$data[0]->item_cat)->get();

        // $data = Item::find($id);
        // $cat = Cat::find($data->item_cat);
        return view('Show_inform_Items',["data"=>$data,"cat"=>$cat]);
    }


    

    //     // DB::table('users')->insert([
    //     //     'name'=>$request->name,
    //     //     'email'=>$request->email,
    //     //     'password'=>Hash::make($request->password) 
    //     // ]);

      
    public function edit($id){
        $data = DB::table('users')->where('id',$id)->get();
        // $data = User::find($id);
        return view('AdminPages.userall.Edit_userall',["data"=>$data]);
    }

     public function updata(Request $req ,$id){

        // $user = User::find($id);
        // $user->name = $req->name;
        // $user->email = $req->email;
        // $user->save();


        DB::table('users')->where('id',$id)->update([
            'name'=>"$req->name",
            'email'=>"$req->email"
        ]);
        // return to_route('cat.index');
        return redirect()->route('userall.showall');
    }

    public function destroy($id){
        DB::table('users')->where('id',$id )->delete();
        // $user = User::find($id);
        // $user->delete();
        return redirect()->route('userall.showall');
    }


    public function Search(){
        // Request $req
        // return $req->name//;
        // $data = DB::select("select * from items where item_name like '%$req->name%'");
        // return view('page_Search',['data'=> $data]);

        $itemsearch=Item::latest();
        if(request('search')){
            $itemsearch->where('item_name','LIKE','%'. request('search') .'%');
        }
        return view('page_Search',['data'=> $itemsearch->get()]);
    }


    public function carduseritem($productid){
        $user = Auth::user();
        $product = Item::find($productid);
if($user->cart()->where("item_id",$productid)->exists()){
    return redirect()->back()->with('خطا','لايمكن اضافة نفس المنتج مرة اخرى الى عربة التسوق');
    // print("qqqqqqqqqqqqqqqqqqqqqqqqqq");  


}else{
            $card = new carditems();
            $card->user_id=$user->id;
            $card->item_id=$productid;
            $card->item_count=1;
            $card->save();
            return redirect('/');
    // print("zzzzzzzzz==========zzzzzzzzzzzzzzzzzzz");  

}
    }





    public function cardcount(){
//   if (auth()->check()) {
        $user = Auth::user();
        $userid= $user->id;

        $asdf = carditems::where('user_id', $userid)->get();
        $az=$asdf->toArray();
        $qwer =$asdf->count();

 $product=[] ;
 
for ($i=0; $i < $qwer; $i++) { 
  $qwe =$az[$i]['item_id'];
  $product[$i] = Item::where('id', $qwe)->get();
}

 return view('testl', ['product' => $product]);
 
    }

 
}


///////////////////////////////////////////////


// public function cardcount(){
//     $user = Auth::user();
//     $userid= $user->id;
//     // $data = carditems::where('user_id', $userid)->get();
//     $asdf = carditems::where('user_id', $userid)->get();
//     // return view('layout', ['asdf' => $asdf]);
//     return view('testl', ['asdf' => $asdf]);

//     // return view('welcome',["asdf"=>$asdf,"userid"=>$userid]);
// $asdf = carditems::where('user_id', $userid)->get();
// $az=$asdf->toArray();
// $qwer =$asdf->count();


// $poi=[];
// $product=[] ;
 

// // foreach($asdf as $itt){
// //     $qwe =$itt->item_id;
    
// //     // echo "<div>$qwe.</div>";
// //     $product = Item::where('id', $qwe)->get();

  
// // }

// // return view('testl', ['product' => $product]);



// for ($i=0; $i < $qwer; $i++) { 
// $qwe =$az[$i]['item_id'];
// $product[$i] = Item::where('id', $qwe)->get();
// }
// // dd($product);


// return view('testl', ['product' => $product]);
//     // $userid =  auth()->id();
//     // dd($data);
    
// }


///////////////////////////////////////////////////////////



//     public function carduseritem($id){
//         // $user = User::first();

//         // $data = Item::all();
//         $data = Item::get();
      

//         // $data = Item::where('id', $id)->get();
//         $dataqq = $data->id;
//         // $datauser = User::where('id', auth()->id())->get();
//         // $df=$datauser;
//         // foreach($data as $itt){

//         // }
//         // Auth::setUser($user);
//         // $user = Auth::user();
//         // $userid= $user->id;
//         // $data = Item::all();
//         $userid =  auth()->id();

//         dd($dataqq);
//         // foreach($dataqq as $itt){
//         if (auth()->check()) {
       
//             if($dataqq != $id){

//                 $card=carditems::create([
//                 'item_count'=>1,
//                  'item_user_id'=>$userid,
//                  'item_id'=>$id,
               
//             ]);
//             print("qqqqqqqqqqqqqqqqqqqqqqqqqq");  

//             }
//             else{
// //  return redirect("/");
        
//     print("hbyhyhuuuuuuuuuuuu");
//             }
       
//         } else {
//             print("hbyhyh");

//             // return redirect("/");
//         }
  

//     // }

//     }


/////////////////////////////////////////////////////////







    // public function index(){

    //     return view('users.login');
    // }
    // public function indexadmin(){

    //     return view('AdminPages.login');
    // }

    // public function login(Request $request)
    // {

    //     // $user = DB::table('users')->where('email', $request->email)->first();
    //     $user = User::where('email', $request->email)->first();

    //     if ($user && Hash::check($request->password, $user->password)) {
          
    //         return redirect()->route('show.index');
           
    //     }
    
    //  else{
    //     return redirect()->route('login');
        

    // }
    // }


    // public function admlogin(Request $request)
    // {
    //     $user = DB::table('users')->where('email', $request->email)->first();
    
    //     if ($user && Hash::check($request->password, $user->password)) {

    //         return redirect()->route('items.index');
          
    //        // return view('AdminPages.Items.Get_All_Items');
    //     }
    
    //  else{
    //     return redirect()->route('login.admin');
    //     // return view('AdminPages.login');

    // }
    // }






    

   
    //  public function login(Request $request)
    //  {
    //      $credentials = $request->validate([
    //                 'email'=>['required','email'],
    //                 'password'=>['required']
    //             ]);
 
    //      if (Auth::attempt($credentials)) {
    //          // تم التحقق من صحة بيانات المستخدم
    //          return view('posts.index');
    //      }
 
    //      // فشل التحقق من صحة بيانات المستخدم
    //      return redirect()->back()->withErrors(['message' => 'فشل تسجيل الدخول، يرجى المحاولة مرة أخرى']);
    //  }
