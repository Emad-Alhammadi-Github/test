@extends('AdminPages.Admin')

@section('content')
    <div id="div_content_Get_All_Items">
        {{-- <div id="row_content_Get_All_Items"> --}}

           @foreach ($data as $item)
           <a href={{ route('items.show',$item->id ) }}>
            <div class="card_items">
                <div id="img_items">
                    {{-- 207 243 --}}
                    <img src={{ asset($item->item_img) }} alt="E" >
                </div>
                <div id="div_name_price">
                    <h2>{{$item->item_name}}</h2>
                    <h2>{{$item->item_price}}$</h2>
                </div>
                </div>
           </a>
  
           @endforeach
     </div>
@endsection