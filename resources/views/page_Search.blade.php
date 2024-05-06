@extends('layout')
{{-- @include('Styl') --}}

  @section('content')
  <section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                منتجاتنا
            </h2>
        </div>
        <div class="row">

            @foreach ($data as $item)
                <div class="col-sm-6 col-lg-4">


                    <div class="box">

                        <a class="img-box" href={{ route('showit.showuser', $item->id) }}>
                            <div class="">                             
                                <img src={{ asset($item->item_img) }} alt="E">

                                    @if(auth()->check())
                                    {{-- <form action={{ route('cardusers.carduser') }}  method="POST">
                                        @csrf
                                        <button type="submit"> --}}
                                        <a href={{ route('cardusers.carduser', $item->id) }}  class="add_cart_btn">
                                            <span>
                                                اضافة الى عربة التسوق
                                            </span>
                                        </a>
                                    {{-- </button>
                                    </form> --}}
                                    @else
                                    <p>يجب تسجيل الدخول لإضافة المنتج إلى عربة التسوق.</p>
                                    @endif
                               
                            </div>
                        </a>
                            <div class="detail-box">                         
                                    <h2 >
                                        اسم المنتج  <span>{{ $item->item_name }}</span>
                                    </h2>                                                           
                                    <h2>
                                        السعر <span>{{ $item->item_price }}$</span>
                                    </h2>                  
                                <div class="star_container">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="bt_b">
                                    <a href={{ route('showit.showuser', $item->id) }} class="bt_b_view">
                                        عرض معلومات المنتج
                                    </a>
                                </div>
                           </div>
                    </div>
                    
                </div>
            @endforeach

        </div>
        <div class="btn_box">
            <a href="" class="view_more-link">
                عرض جميع المنتجات
            </a>
        </div>
    </div>
</section>
  @endsection