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
                        <li class="nav__item"><a href="{{ route('home') }}" class="nav__link active">Home</a></li>
                        
                         </ul>
                         </div>
               
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
            
        </header>
       

        <section class="about section " id="about">
            <h2 class="section-title">Our Services</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="{{ url('image/about_easy-removebg-preview.png') }}" alt="">
                </div>
                
                <div>
                    <h2 class="about__subtitle">Business</h2>
                    <p class="about__text">BUSINESS, COMMERCE, TRADE, INDUSTRY, TRAFFIC mean activity concerned with the supplying and distribution of commodities. 
                        BUSINESS may be an inclusive term but specifically designates the activities of those engaged in the purchase or sale of commodities or 
                        in related financial transactions. COMMERCE and TRADE imply the exchange and transportation of commodities. INDUSTRY applies 
                        to the producing of commodities, especially by manufacturing or processing, usually on a large scale.</p>           
                </div>    
                
                 </div>
            
            
                 <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="{{ url('image/about_easy-removebg-preview.png') }}" alt="">
                </div>
                
                <div>
                    <h2 class="about__subtitle">Business</h2>
                    <p class="about__text">BUSINESS, COMMERCE, TRADE, INDUSTRY, TRAFFIC mean activity concerned with the supplying and distribution of commodities. 
                        BUSINESS may be an inclusive term but specifically designates the activities of those engaged in the purchase or sale of commodities or 
                        in related financial transactions. COMMERCE and TRADE imply the exchange and transportation of commodities. INDUSTRY applies 
                        to the producing of commodities, especially by manufacturing or processing, usually on a large scale.</p>           
                </div>    
                
                </div> 
                
                <!-- whatsapp icon -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <a href="https://api.whatsapp.com/send?phone=00966535237505&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
                </a>
            </section>

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
        <script src="assets/js/main.js"></script>
    </body>
</html>