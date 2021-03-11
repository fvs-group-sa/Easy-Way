@extends('layouts.app')

@section('content')

        <section class="about section " id="about">
            <h2 class="section-title">{{ __('dectionary.our_services') }}</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="{{ url('image/about_easy-removebg-preview.png') }}" alt="">
                </div>
                
                <div>
                    <h2 class="about__subtitle">{{ __('dectionary.our_services_page') }}</h2>
                    <p class="about__text">{{ __('dectionary.our_services_page_discrebtion') }}</p>           
                </div>    
                
                 </div>
            
            
                
                <!-- whatsapp icon -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <a href="https://api.whatsapp.com/send?phone=00966535237505&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
                </a>
            </section>

@endsection