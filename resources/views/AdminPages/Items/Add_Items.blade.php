@extends('AdminPages.Admin')

@section('content')
    <div >
        <form  id="div_add_item" action={{ route('items.store') }} method="post" enctype="multipart/form-data">
            @csrf
            <div id="form_add_itemL">
                <label id="label_add_item" for="">Name Item</label>
                <input id="input_add_item" type="text" name="name" placeholder="Name Item" required>
                <label id="label_add_item" for="">price Item</label>
                <input id="input_add_item" type="number" name="price" placeholder="price item" required>
                <label id="label_add_item" for="">Descrpiton</label> 
                <textarea id="input_add_item" name="dec" cols="30" rows="10" required></textarea> 
                <label id="label_add_item" for="">Count Item</label>
                <input id="input_add_item" type="number" name="count" placeholder="price item" required>
               
            </div>
            <div id="form_add_itemR"> 
                
              <center>
                <label id="label_add_item">Catogries</label>
                <select name="cat" id="select_add_item">
                    @foreach ($data as $i)
                        <option value={{$i->id}}>{{$i->cat_name}}</option>
                    @endforeach
                </select>
              </center>
              <input type="file" id="file" name="img" required> 
                <label for="file" onclick="img_click()">
                    <div id="add_img_item">
                        <img src={{ asset('img/add-img.png') }} id="img_new_item" width="80px">
                        <p id="p">Click Here for Add Iamge </p>
                    </div>
                </label>
            
            </div>
            
          <script src={{ asset('js/jsadmin/Add_img_item.js') }}></script>
           
            {{-- <input type="file"> --}}
            <button id="btn_add_item" type="submit">Submit</button>
        </form>
    </div>
@endsection