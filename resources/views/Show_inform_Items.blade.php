@extends('layout')

<link rel="stylesheet" type="text/css" href={{ asset("css/bootstrap.css") }} />


<link href={{ asset("https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap") }} rel="stylesheet"> 

<link href={{ asset("css/style.css") }} rel="stylesheet" />

<link href={{ asset("css/responsive.css") }} rel="stylesheet" />

<link rel="stylesheet" href={{ asset("/css/admin/Admin.css") }}>
@yield('css')

@section('content')

    <div id="show_item">
        <div id="img_show_item">
            <img width="300px" src={{ asset($data[0]->item_img) }} >
        </div>
        <div id="propties_show_item">
            <h1  id="show_title">Name Item :</h1>
            <h1 id="show_data">{{$data[0]->item_name}}</h1>

            <div id="div_show_price_cat">

             <div>
                <h1 id="show_titleD">Price</h1>
                <h1 id="show_dataD">{{$data[0]->item_price}}</h1>
             </div>
                <div>
                    <h1 id="show_titleD">Catogries</h1>
                <h1 id="show_dataD">{{$cat[0]->cat_name}}</h1>
                </div>

            </div>

            <h1 id="show_title">Description</h1>
            <div id="show_dataP">
                <p>{{$data[0]->item_dec}}</p>
            </div>

            <div id="div_btn_show">
                {{-- <a id="btn_show_U" href={{ route('items.edit', $data[0]->id) }}>Updata</a> --}}
              <form action={{ route('items.destroy',$data[0]->id) }} method="post">
                @csrf
                @method('delete')

                <h1 id="show_title">Count Item</h1>
                <input id="input_add_item" type="number" name="count" placeholder="price item" required><br><br>
                <button type="submit" id="btn_show_U">اضافة الى سلة التسوق</button>
              </form>
            </div>
        </div>
    </div>
@endsection