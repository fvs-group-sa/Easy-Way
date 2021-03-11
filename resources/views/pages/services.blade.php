@extends('layouts.app')

@section('content')

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
                    <h2 class="about__subtitle"></h2>
                    <p class="about__text">We at Easyway believe that the Customer is the greatest Asset of the Company since Establishment by an ambitious and promising Saudi Administration 
                        that aspires continuous Development which fit the needs of refrigerated and dry transport services customers. Therefore, we adhere Services Improvements based on the
                         Opinions, Suggestions and Feedback of our customers and create Opportunities among difficulties for them. As a result, we gained great Reputation and Impressions in
                          our Customers particularly as well as in Transport Industry Generally. However, we haven't stopped at this Point. We have become one of the most Important Destinations 
                        in Saudi Arabia for Refrigerated and dry Transport Services in terms of Experience and Excellence 
                        by exploiting all our Resources and expertise to achieve success for your Business and meet your desires and aspirations 
                        of your Customers to serve them better always.</p>           
                </div>    
                
                </div> 
                
                <!-- whatsapp icon -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <a href="https://api.whatsapp.com/send?phone=00966535237505&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
                </a>
            </section>

@endsection