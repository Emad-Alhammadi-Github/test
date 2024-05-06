{{-- <!DOCTYPE html >

{{-- <body > --}}

{{-- @foreach ($data as $al1)
  <div class="carousel-item  ">
  <div class="container ">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <h1>
        مرحبا بك 
          </h1>
          <p>
         ؤؤؤلالاىرىرلاى
          </p>
          <a href="">
           قراءة المزيد
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="" alt="">
        </div>
      </div>
    </div>
  </div>
</div> 
  @endforeach  {{ asset($al1->item_img) }} --}}


@extends('layout')
{{-- @include('layout') --}}
@section('content')
    <div class="hero_area">



        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    {{-- @dd(count($ala1)) --}}
                    @for ($i = 0; $i < 2; $i++)
                        @if ($i == 1)
                            <div class="carousel-item active">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="detail-box">
                                                <h1>
                                                    مرحبا بك
                                                </h1>
                                                <p>
                                                    
                                                </p>
                                                <a href="">
                                                    قراءة المزيد
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src={{ asset($data[$i]->item_img) }}  alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        @else
                            <div class="carousel-item  ">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="detail-box">
                                                <h1>
                                                    مرحبا بك
                                                </h1>
                                                <p>
                                                    ؤؤؤلالاىرىرلاى
                                                </p>
                                                <a href="">
                                                    قراءة المزيد
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src={{ asset($data[$i]->item_img) }} alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor



                </div>



                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">السابق</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">التالي</span>
                    </a>
                </div>
            </div>
        </section>

    </div>




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

                            {{-- <a class="" href={{ route('showit.showuser', $item->id) }}> --}}
                                <div class="img-box">

                                    
                                    <img src={{ asset($item->item_img) }} alt="E">

@if(auth()->check())
    {{-- <form action={{ route('cardusers.carduser', $item->id) }}  method="POST" >
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

<a href={{ route('login') }} class="add_cart_btn">
    <span>
        يجب تسجيل الدخول لإضافة المنتج إلى عربة التسوق.
    </span>
</a>
    {{-- <p>يجب تسجيل الدخول لإضافة المنتج إلى عربة التسوق.</p> --}}
@endif
                                   
                                </div>
                            {{-- </a> --}}
                                <div class="detail-box">
                               
                                        <h2 >
                                            اسم المنتج  <span>{{ $item->item_name }}</span>
                                        </h2>
                                       
                                        {{-- <div class="product_info"> --}}
                                    
                                    <h2>
                                        السعر <span>{{ $item->item_price }}$</span>


                                    </h2>
                                    <a href={{ route('cardcount.cardcount') }}>aaaasssss</a>
                               
                                    <div class="zzxas">
                                     
                                    </div>
                              

                                    <div class="star_container">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>

                                    </div>

                                    <div class="bt_b">
                                        <a href={{ route('showit.showuser', $item->id) }} class="bt_b_view">
                                            عرض معلومات المنتج
                                        </a>
                                    </div>

                                    {{-- </div> --}}
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





    <section class="about_section">
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-md-5 ml-auto">
                    <div class="detail-box pr-md-3">
                        <div class="heading_container">
                            <h2>
Lorem ipsum dolor, sit amet consectetur adipisicing.                            </h2>
                        </div>
                        <p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio soluta quas consequatur nulla reprehenderit beatae.                        </p>
                        <a href="">
                            قراءة المزيد
                        </a>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <img src="images/hg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="why_us_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    لماذا اخترتنا
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/w1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                توصيل اسرع
                            </h5>
                            <p>
                                ؤسببببببببببببببببببببببببببببببببببببببببببب
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/w2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                شحن مجاني
                            </h5>
                            <p>
                                رببللللالللللللللللللللللللللللللللل
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/w3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                افضل منتج
                            </h5>
                            <p>
                                رلبببببببببببببببببببببببببببببببببببببببب
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- </body> --}}

{{-- </html> --}}
