@extends('AdminPages.Admin')

@section('content')
    <div >
        <form  id="div_add_item" action={{ route('items.updata',$data[0]->id) }} method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div id="form_add_itemL">
                <label id="label_add_item" for="">Name Item</label>
                <input id="input_add_item" type="text" name="name" placeholder="Name Item" value={{$data[0]->item_name}}>
                <label id="label_add_item" for="">price Item</label>
                <input id="input_add_item" type="number" name="price" placeholder="price item" value={{$data[0]->item_price}}>
                <label id="label_add_item" for="">Descrpiton</label> 
                <textarea  id="input_add_item" name="dec" cols="30" rows="10" >{{$data[0]->item_dec}}</textarea> 
                <label id="label_add_item" for="">Count Item</label>
                <input id="input_add_item" type="number" name="count" placeholder="price item" value={{$data[0]->item_count}}>
            </div>
            <div id="form_add_itemR"> 
                
              <center>
                <label id="label_add_item">Catogries</label>
        
                <select  name="cat" id="select_add_item" >
                    @foreach ($cat as $i)
                        <option value={{$i->id}}>{{$i->cat_name}}</option>
                    @endforeach
                </select>
              </center>
              <input type="file" id="file" name="img"  > 
                <label for="file" onclick="img_click()">
                    <div id="add_img_item">
                        <img src={{ asset($data[0]->item_img) }} id="img_new_item" width="170px">
                        <p id="p">Click Here for Updata Iamge </p>
                    </div>
                </label>
            
            </div>
            
            <script src={{ asset('js/jsadmin/Add_img_item.js') }}></script>
            {{-- <input type="file"> --}}
            <button id="btn_add_item" type="submit">Updata</button>
        </form>
    </div>
@endsection