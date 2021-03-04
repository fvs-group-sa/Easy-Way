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
                    <a href="/">
                    <img src="{{ url('image/easy2-removebg-preview.png') }}" alt="">
                   </div>
        
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="{{ route('home') }}" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="{{ route('services') }}" class="nav__link">Our Services</a></li>
                        <li class="nav__item"><a href="#ourclients" class="nav__link">Our Clients</a></li>
                        <li class="nav__item"><a href="/post" class="nav__link">Blogs</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
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
                    <h1 class="home__title">EasyWay <span class="home__title-color">Transport</span><br>’’Easy Way of Your... Product’’</h1>

                    <a href="https://wa.me/601169766925" class="button">Lets chat on Whatsapp</a>
                    
                </div>

              <div class="home__img">    
                    <img src="{{ url('image/trackremovebg-preview.png') }}" alt="">
                </div>
               </section>
               
        </section>
 
         <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About Us</h2>

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
           
            </section>


            <section class="about section " id="about">
                <h2 class="section-title">Why Us</h2>
            
                <div class="about__container bd-grid">
                    
                    
                    <div>
                        <h2 class="about__subtitle">Our Mission</h2>
                        <p>
                            BUSINESS, COMMERCE, TRADE, INDUSTRY, TRAFFIC mean activity concerned with the supplying and distribution of commodities. 
                            BUSINESS may be an inclusive term but specifically designates the activities of those engaged in the purchase or sale of commodities or 
                            in related financial transactions. COMMERCE and TRADE imply the exchange and transportation of commodities. INDUSTRY applies 
                            to the producing of commodities, especially by manufacturing or processing, usually on a large scale.
                          </p>           
                    </div> 
                    
                    <div>
                        <h2 class="about__subtitle">Our Vision</h2>
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
            <h2 class="section-title">Our Services</h2>
            <div class="services__container bd-grid">          
            <div>
            <h2 class="services__subtitle">Profesional Skills</h2>
            <p class="services__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
            </section>
            </div>
            </div>

 
    
      <!-- <h1>My Services</h1> -->
      
    
    <a href="/services" class="nav__link">
    <div class="services-center container">
      <div class="service" data-aos="fade-down" data-aos-duration="2000">
        <span><i class="fab fa-accusoft"></i></span>
        
        <h2>Delivery</h2>
        
        <img src="{{ url('image/rsz_2شاحنة-removebg-preview.png') }}" alt="Paris" width="300" height="300">
      </div>
      </a>
      



      <a href="services.html" class="nav__link">
      <div class="service" data-aos="fade-up" data-aos-duration="2000">
        <span><i class="fas fa-chart-line"></i></span>
        <h2>Delivery</h2>
       
        <img src="{{ url('image/rsz_2شاحنة-removebg-preview.png') }}" alt="Paris" width="300" height="300">
       
      </div>
      </a>


      <a href="services.html" class="nav__link"> 
      <div class="service" data-aos="fade-down" data-aos-duration="2000">
        <span><i class="fas fa-blender-phone"></i></span>
        <h2>Delivery</h2>
     
        <img src="{{ url('image/rsz_2شاحنة-removebg-preview.png') }}" alt="Paris" width="300" height="300">
       
      </div>
      </a>


      <a href="services.html" class="nav__link">
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
                <h2 class="section-title">Our Clients</h2>
            <div class="clientsimage">

                <img class="cn" src="{{ url('image/c1.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="i{{ url('image/c2.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c3.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c4.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c5.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c6.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c7.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c8.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c9.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c10.png') }}" alt="Trulli" width="300" height="200">
                <img class="cn" src="{{ url('image/c11.png') }}" alt="Trulli" width="300" height="200">
                
                </div>


                 </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="" class="contact__form">
                        <input type="text" placeholder="Name" class="contact__input">
                        <input type="mail" placeholder="Email" class="contact__input">
                        <input type="phone" placeholder="Phone" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="button" value="Submit" class="contact__button button">
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