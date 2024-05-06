{{-- @include('Styl') --}}
<!DOCTYPE html >
<html dir="rtl">

<head >

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amop</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />


  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> 

  <link href="css/style.css" rel="stylesheet" />

  <link href="css/responsive.css" rel="stylesheet" />

  <link rel="stylesheet" href={{ asset("style/Admin.css") }}>
  @yield('css')

</head>


<body>
    <header class="header_section">
       
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href={{ route('show.index') }}>
                        <span>
                            Amop
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link " href={{ route('show.index') }}>الرئيسية <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> عنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">المنتجات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="why.html"> لماذا نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">اراء الجمهور</a>
                            </li>

                            <form class="search_form"  action={{ route('serch.index') }} method='post'>
                              @csrf
                                <input type="text" class="form-control" name="search" placeholder="Search here...">
                                <button class="" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>

                            <div class="user_option_box">
                                <a href="" class="account-link">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>
                                        الملف الشخصي
                                    </span>
                                </a>
                                <a href={{route('cardcount.cardcount')}} class="cart-link">
                                    {{-- @if(auth()->check())
                                    @if(count($asdf)>0)
                                          <div class="zzxas">
                                    {{count($asdf)}}
                                    </div>
                                    @endif
                                    @endif --}}
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span>
                                        عربة التسوق
                                      
                                    </span>

                                  
                                </a>
                            </div>

@auth
    <span class="zzas">Welcome :{{auth()->user()->name}}</span>

        <form action={{ route('logout') }} method="post">
            @csrf
            <div class="user_option_box">
                <button href={{ route('login') }} class="btn bbn" id="signUpqq" type="submit">Loguot</button>
            </div>
        </form>
 
@else
<div class="user_option_box">
    <a href={{ route('login') }} class="btn bbn" id="signUpqq">Sign Up</a>
    <a href={{ route('login') }} class="btn bbn" id="signInqq">Login </a>
</div>
@endauth
                          
                        </ul>


                    </div>
                </nav>



            </div>
        </div>
    </header>



    @yield('content')









    <section class="info_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_contact">
                        <h5>
                            <a href="" class="navbar-brand">
                                <span>
                                    Amop
                                </span>
                            </a>
                        </h5>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            يرلبرسفيبللا
                        </p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            72676
                        </p>
                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            بلاؤلالا
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_info">
                        <h5>
                            معلومات
                        </h5>
                        <p>
                            ريلالفاىغعهةعهععهةىيلابليربسقيس
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_links">
                        <h5>
                            صفحات الموقع
                        </h5>
                        <ul>
                            <li>
                                <a href="index.html">
                                    الرئيسية
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    عنا
                                </a>
                            </li>
                            <li>
                                <a href="product.html">
                                    المنتجات
                                </a>
                            </li>
                            <li>
                                <a href="why.html">
                                    لماذا نحن
                                </a>
                            </li>
                            <li>
                                <a href="testimonial.html">
                                    اراء الجمهور
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            اشترك في الاخبار
                        </h5>
                        <form action="">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                متابعة
                            </button>
                        </form>
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> جميع الحقوق لدى
                <a href="#">عماد و مصطفى</a>
            </p>
        </div>
    </footer>


    <script src="/js/login.js"></script>

    <script src="js/jquery-3.4.1.min.js"></script>

    <script src="js/bootstrap.js"></script>

</body>

</html>
