<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/app.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>EasyWay</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                
                <div class="logo">
                    <!-- <h1>EasyWay<span>Transport</span></h1> -->
                    <a href="{{ route('home') }}">
                    <img src="{{ url('image/easy2-removebg-preview.png') }}" alt="">
                   </div>
        
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="{{ route('home') }}" class="nav__link active">{{ __('dictionary.home') }}</a></li>
                        <li class="nav__item"><a href="{{route('blog')}}" class="nav__link">{{ __('dictionary.blog') }}</a></li>
                    </ul>
                </div>
               
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
            
        </header>

        <main class="l-main">
            @yield('content')
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <!-- <p class="footer__title">Marlon</p> -->
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; Easyway 2021 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="js/app.js"></script>
    </body>
</html>