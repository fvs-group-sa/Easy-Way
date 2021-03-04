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
        
@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{route('post') }}" method="post" class="mb-4">
            @csrf
            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100
                border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                placeholder="Post something!"></textarea>

                @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror    
            </div>

            <div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
            </div>
        </form>


        @if ($posts->count())
            @foreach($posts as $post)

            <div class="mb-4">
                <a href="" class="font-bold">{{$post->title}}</a>
                <span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
            
                <p class="mb-2">{{$post->body}}</p>

            

                
            </div>
            @endforeach
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
                    <img src="{{ url('image/easy2-removebg-preview.png') }}" alt="">
                    
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

        
    </body>
</html>