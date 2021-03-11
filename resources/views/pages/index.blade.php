<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/app.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>{{ __('dectionary.easyway') }}</title>
    </head>
    <body class="verflow-x-hidden">
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                
                <div class="logo">
                    <!-- <h1>EasyWay<span>Transport</span></h1> -->
                    <a href="{{ route('home') }}">
                    <img class="brand" src="{{ url('image/websitelogo1.png') }}" alt="">
                   </div>
        
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="{{ route('home') }}" class="nav__link active">{{ __('dectionary.home') }}</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">{{ __('dectionary.about_us') }}</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">{{ __('dectionary.our_services') }}</a></li>
                        <li class="nav__item"><a href="#ourclients" class="nav__link">{{ __('dectionary.our_clients') }}</a></li>
                        <li class="nav__item"><a href="{{route('blog')}}" class="nav__link">{{ __('dectionary.blog') }}</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">{{ __('dectionary.contact_us') }}</a></li>
                    </ul>
                </div>

                <div>
                    <a href="{{ route('locale.setting', 'en') }}" class="">EN</a>
                    /
                    <a href="{{ route('locale.setting', 'ar') }}" class="">AR</a>
                </div>
               
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
            
        </header>

        <main class="l-main">
      
           <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">{{ __('dectionary.easyway') }} <span class="home__title-color">{{ __('dectionary.transport') }}</span><br>’’{{ __('dectionary.easyway_your_product') }}’’</h1>

                    <a href="https://wa.me/601169766925" class="button">{{ __('dectionary.lets_chat_on_whatsapp') }}</a>
                    
                </div>

                <div class="home__img">    
                    <img src="{{ url('image/heroimage.png') }}" alt="">
                </div>
            </section>
 
         <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">{{ __('dectionary.about_us') }}</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="{{ url('image/about_easy-removebg-preview.png') }}" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle"></h2>
                        <p class="about__text">We at Easyway believe that the Customer is the greatest Asset of the Company since Establishment by an ambitious and promising
                             Saudi Administration that aspires continuous Development which fit the needs of refrigerated and dry transport services customers. 
                             Therefore, we adhere Services Improvements based on the Opinions, Suggestions and Feedback of our customers and create Opportunities 
                             among difficulties for them. As a result, we gained great Reputation and Impressions in our Customers particularly as well as in Transport 
                             Industry Generally. However, we haven't stopped at this Point. We have become one of the most Important Destinations in Saudi Arabia for 
                             Refrigerated and dry Transport Services in terms of Experience and Excellence by exploiting all our Resources and expertise to achieve success 
                             for your Business and meet your desires and aspirations of your Customers to serve them better always.</p>           
                    </div>                                   
                </div>
           
            </section>


            <section class="about section " id="about">
                <h2 class="section-title">{{ __('dectionary.why_easyway') }}</h2>
            
                <div class="about__container bd-grid">
                    
                    
                    <div>
                        <h2 class="about__subtitle">{{ __('dectionary.our_mission') }}</h2>
                        <p>
                        Our mission is to be the first destination for refrigerated and dry transport services in Saudi Arabia by creating a milestone in development
                         and excellence at ever growing and competitive refrigerated and dry transport industry. For delivering quality, service and speed by utilizing 
                         the best experiences and resources to exploit them to meet the needs and aspirations of our customers to serve them better always.
                          </p>           
                    </div> 
                    
                    <div>
                        <h2 class="about__subtitle">{{ __('dectionary.our_vision') }}</h2>
                        <p>
                            BUSINESS, COMMERCE, TRADE, INDUSTRY, TRAFFIC mean activity concerned with the supplying and distribution of commodities. 
                            BUSINESS may be an inclusive term but specifically designates the activities of those engaged in the purchase or sale of commodities or 
                            in related financial transactions. COMMERCE and TRADE imply the exchange and transportation of commodities. INDUSTRY applies 
                            to the producing of commodities, especially by manufacturing or processing, usually on a large scale.
                          </p>           
                    </div> 
                    
                   
                </div>
            </section>


<!-- images slides -->

<div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="{{ url('image/img/شاحنة.jpg') }}" style="width:100%">
      
    </div>
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="{{ url('image/about_easy-removebg-preview.png') }}" style="width:100%">
    
    </div>
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="{{ url('image/easyservices-removebg-preview.png') }}" style="width:100%">
      
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
 
<!--===== services =====-->
            <section class="services section" id="services">
            <h2 class="section-title">{{ __('dectionary.our_services') }}</h2>
            <div class="services__container bd-grid">          
            <div>
            <h2 class="services__subtitle">Profesional Skills</h2>
            <p class="services__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
            </section>
            </div>
            </div>

 
    
      <!-- <h1>My Services</h1> -->
      
    
    <a href="{{ route('services') }}" class="nav__link">
    <div class="services-center justify-center p-9">
      <div class="service" data-aos="fade-down" data-aos-duration="2000">
        <span><i class="fab fa-accusoft"></i></span>
        
        <h2>Delivery</h2>
        
        <img src="{{ url('image/rsz_2شاحنة-removebg-preview.png') }}" alt="Paris" width="300" height="300">
      </div>
      </a>
      



      <a href="{{ route('services') }}" class="nav__link">
      <div class="service" data-aos="fade-up" data-aos-duration="2000">
        <span><i class="fas fa-chart-line"></i></span>
        <h2>Delivery</h2>
       
        <img src="{{ url('image/rsz_2شاحنة-removebg-preview.png') }}" alt="Paris" width="300" height="300">
       
      </div>
      </a>


      <a href="{{ route('services') }}" class="nav__link"> 
      <div class="service" data-aos="fade-down" data-aos-duration="2000">
        <span><i class="fas fa-blender-phone"></i></span>
        <h2>Delivery</h2>
     
        <img src="{{ url('image/rsz_2شاحنة-removebg-preview.png') }}" alt="Paris" width="300" height="300">
       
      </div>
      </a>


      <a href="{{ route('services') }}" class="nav__link">
      <div class="service" data-aos="fade-down" data-aos-duration="2000">
        <span><i class="fas fa-blender-phone"></i></span>
        <h2>Delivery</h2>
      
        <img src="{{ url('image/rsz_2شاحنة-removebg-preview.png') }}" alt="Paris" width="300" height="300">
       
      </div>
      </a>
     
      
     
    </div>
    </section>

  <!-- srevices button -->
  
             <!--===== Our Clients =====-->
            <section class="ourclients section" id="ourclients">
                <h2 class="section-title">{{ __('dectionary.our_clients') }}</h2>
            <div class="clientsimage">

                <img class="cn" src="{{ url('image/alyosra.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/arla.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/coffee.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/dawajen.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/etaa.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/forsan.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/nsk.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/pilatos.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/pomegranate.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/suwidi.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/uw.png') }}" alt="Trulli" width="300" height="200">
                
                </div>


                 </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">{{ __('dectionary.contact_us') }}</h2>

                <div class="contact__container bd-grid">
                    <form action="" class="contact__form">
                        <input type="text" placeholder="Name" class="contact__input">
                        <input type="mail" placeholder="Email" class="contact__input">
                        <input type="phone" placeholder="Phone" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="button" value="{{ __('dectionary.send') }}" class="contact__button button">
                    </form>
                </div>
            </section>
        
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
