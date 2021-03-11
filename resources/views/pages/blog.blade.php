
        
@extends('layouts.app')

@section('content')

        <div dir="rtl" class="container mx-auto px-6 py-8">
            <div class="flex flex-wrap px-6">

              {{-- Begining of Post 1 --}}
              @if ($blogs->count())
                @foreach($blogs as $blog)
                    <a href="{{route('showblog', $blog)}}" class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                      <div class="bg-white hover:shadow-xl">  
                        <div class="">
                            <img src="{{asset('image/'.$blog->image)}}" alt="" class="h-96 w-full border-white border-8">
                        </div>
                        
                        <div class="px-4 py-4 md:px-10">
                          <h1 class="font-bold text-lg">
                              {{$blog->title}}
                          </h1>
                          <p class="py-4 dir=rtl">
                            {{Str::limit($blog->body, 230)}}
                          </p>
                          
                          <div class="flex flex-wrap pt-8">
                              <div class="w-full md:w-1/3 text-sm font-medium">
                                {{$blog->created_at->diffForHumans()}}
                              </div>
                          </div>
                        </div>
                      </div>
                    </a>
                @endforeach
                {{-- End of Post 1 --}}
              @else
                  There is no post
                  
           
           
                @endif


                <!-- whatsapp icon -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <a href="https://api.whatsapp.com/send?phone=00966535237505&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
                </a>
    </div>
</div>
@endsection
        