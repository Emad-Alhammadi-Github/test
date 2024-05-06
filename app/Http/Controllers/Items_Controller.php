<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Items_Controller extends Controller
{
    //
    public function index()
    {
        // $data = DB::table('items')->get();
        $data = Item::all();
        return view('AdminPages.Items.Get_All_Items', ['data' => $data]);
    }

    public function create()
    {
        // $data = DB::table("cats")->get();

        $data = Cat::all();
        return view('AdminPages.Items.Add_Items',['data'=>$data]);
    }

    public function store(Request $req)
    {

            // $img_name=$req->file('img')->getClientOriginalName(); // get name
            $img_path=$req->file('img')->store('','Images');

        // DB::table('items')->insert([
        //     'item_name'=>$req->name,
        //      'item_dec'=>$req->dec,
        //      'item_price'=>$req->price,
        //      'item_img'=>'/img_Items'.'/'.$img_path,
        //      'item_cat'=>$req->cat
        // ]);


        $product = Item::create([
            'item_name'=>$req->name,
             'item_dec'=>$req->dec,
             'item_price'=>$req->price,
             'item_img'=>'/img_Items'.'/'.$img_path,
             'item_cat'=>$req->cat,
             'item_count'=>$req->count
           
        ]);





        return redirect()->route('items.index');
    }


    public function show($id)
    {
        // $data = DB::table('items')->where("id",$id)->get();
        // $cat = DB::table('cats')->where("id",$data[0]->item_cat)->get();


        $data = Item::find($id);
        $cat = Cat::find($data->item_cat);
        return view('AdminPages.Items.Show_Items',["data"=>$data,"cat"=>$cat]);
    }

    public function edit($id)
    {
        // $data = DB::table('items')->where('id',$id)->get();
        // $cat = DB::table("cats")->get();

        $data = Item::where('id', $id)->get();
        $cat = Cat::all();
        return view('AdminPages.Items.Updata_items',["data"=>$data,'cat'=>$cat]);
    }

    public function updata(Request $req, $id)
    {
        if($req->img){
            
            $img_path=$req->file('img')->store('','Images');
            // DB::table('items')->where('id',$id)->update([
            //     'item_name'=>$req->name,
            //     'item_dec'=>$req->dec,
            //     'item_price'=>$req->price,
            //     'item_img'=>'/img_Items'.'/'.$img_path,
            //     'item_cat'=>$req->cat
            //  ]);


                $item = Item::find($id);

                $item->item_name = $req->name;
                $item->item_dec = $req->dec;
                $item->item_price = $req->price;
                $item->item_img = '/img_Items' . '/' . $img_path;
                $item->item_cat = $req->cat;
                $item->item_count = $req->count;

                $item->save();

        }else{
            
            // DB::table('items')->where('id',$id)->update([
            //     'item_name'=>$req->name,
            //     'item_dec'=>$req->dec,
            //     'item_price'=>$req->price,
            //     'item_cat'=>$req->cat
            //  ]);


            $item = Item::find($id);
            $item->item_name = $req->name;
            $item->item_dec = $req->dec;
            $item->item_price = $req->price;
            $item->item_cat = $req->cat;
            $item->item_count = $req->count;
            
            $item->save();
        }

    
        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        // DB::table('items')->where('id',$id)->delete();

        $item = Item::find($id);
        $item->delete();

        // return to_route('items.index');
        return redirect()->route('items.index');
    }

}
