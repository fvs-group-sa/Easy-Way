{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/app.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>EasyWay</title>
    </head>
    <body> --}}
        
@extends('layouts.app')

@section('content')

        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-wrap px-6">

              {{-- Begining of Post 1 --}}
              @if ($blogs->count())
                @foreach($blogs as $blog)
                  <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                    <div class="bg-white hover:shadow-xl">  
                      <div class="">
                          <img src="{{asset('image/'.$blog->image)}}" alt="" class="h-96 w-full border-white border-8">
                      </div>
                      
                      <div class="px-4 py-4 md:px-10">
                        <h1 class="font-bold text-lg">
                            {{$blog->title}}
                        </h1>
                        <p class="py-4">
                          {{$blog->body}}
                        </p>
                        
                        <div class="flex flex-wrap pt-8">
                            <div class="w-full md:w-1/3 text-sm font-medium">
                              {{$blog->created_at->diffForHumans()}}
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                {{-- End of Post 1 --}}
              @else
                  There is no post
                  
                @endif
    </div>
</div>
@endsection
        {{-- <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
            
                <div class="logo">
                    <!-- <h1>EasyWay<span>Transport</span></h1> -->
                    <a href="index.html">
                    <img class="brand" src="{{ url('image/websitelogo1.png') }}" alt="">
                    
                   </div>
        
                  <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.html" class="nav__link active">Home</a></li>
                        
                         </ul>
                         </div>
               
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
            
        </header>
  

        


        <section class="header">
            <h2>الأخبار والأحداث</h2>
          
          
          <div class="row">
            <div class="leftcolumn">
              <div class="card">
                <h2>الدرب السهل للنقليات</h2>
                <h5>Title description, Dec 7, 2017</h5>
                <img src="{{ url('image/rsz_2شاحنة-removebg-preview.png') }}" alt="">
                
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
              
            </div>
            

        

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
        <script src="js/app.js"></script> --}}

        
    {{-- </body> --}}
{{-- </html>  --}}