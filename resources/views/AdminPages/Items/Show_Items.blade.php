@extends('AdminPages.Admin')

@section('content')
    <div id="show_item">
        <div id="img_show_item">
            <img width="300px" src={{ asset($data->item_img) }} >
        </div>
        <div id="propties_show_item">
            <h1  id="show_title">Name Item :</h1>
            <h1 id="show_data">{{$data->item_name}}</h1>

            <div id="div_show_price_cat">

             <div>
                <h1 id="show_titleD">Price</h1>
                <h1 id="show_dataD">{{$data->item_price}}</h1>
             </div>
                <div>
                    <h1 id="show_titleD">Catogries</h1>
                <h1 id="show_dataD">{{$cat->cat_name}}</h1>
                </div>

            </div>

            <h1 id="show_title">Description</h1>
            <div id="show_dataP">
                <p>{{$data->item_dec}}</p>
            </div>

            <div>
                <h1 id="show_titleD">Count Item</h1>
                <h1 id="show_dataD">{{$data->item_count}}</h1>
             </div>

            <div id="div_btn_show">
                <a id="btn_show_U" href={{ route('items.edit', $data->id) }}>Updata</a>
              <form action={{ route('items.destroy',$data->id) }} method="post">
                @csrf
                @method('delete')
                <button type="submit" id="btn_show_D">Delete</button>
              </form>
            </div>
        </div>
    </div>
@endsection