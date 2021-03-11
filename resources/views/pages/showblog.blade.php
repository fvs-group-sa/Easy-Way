
        
@extends('layouts.app')

@section('content')

        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-wrap px-6">

              {{-- Begining of Post 1 --}}
              @if ($blogs->count())
                @foreach($blogs as $blog)
                <div class="max-w-screen-xl mx-auto">
                
                    <main class="mt-10">
                
                      <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
                        <div class="absolute left-0 bottom-0 w-full h-full z-10"
                          style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                        <img src="{{asset('image/'.$blog->image)}}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                        <div class="p-4 absolute bottom-0 left-0 z-20">
                          {{-- <a href="#"
                            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Easyway</a> --}}
                          <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                            {{$blog->title}}
                          </h2>
                          <div class="flex mt-3">
                            <div>
                              <p class="font-semibold text-gray-200 text-sm">Easyway</p>
                              <p class="font-semibold text-gray-400 text-xs">{{$blog->created_at}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                
                      <div class="px-4 lg:px-0 mt-12 text-gray-700 text-justify max-w-screen-md mx-auto text-lg leading-relaxed">
                        <p class="pb-6">{{$blog->body}}</p>
                      </div>
                    </main>
                    <!-- main ends here -->
                  </div>
                @endforeach
                {{-- End of Post 1 --}}
              @else
                  There is no post
                  
                @endif
    </div>
</div>
@endsection
        