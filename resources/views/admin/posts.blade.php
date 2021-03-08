@extends('layouts.admin')

@section('content')

<div class="mt-6 p-6">
    <h1 class="text-2xl font-medium text-gray-800 dark:text-white">الــمــدونة</h1>
  </div>
        {{-- Begining of main content --}}
        
              <div class="mt-6">
                <a href="{{ route('post.new') }}" class="lg:w-1/6 bg-green-400 text-white block rounded-sm font-bold py-4 px-6 ml-2">اضف منشور جديد</a>
              </div>
                <div class="flex flex-wrap px-6">

                  {{-- Begining of Post 1 --}}
                  @if ($posts->count())
                    @foreach($posts as $post)
                      <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                        <div class="bg-white hover:shadow-xl">  
                          <div class="">
                              <img src="{{asset('image/'.$post->image)}}" alt="" class="w-full border-white border-8">
                          </div>
                          
                          <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-lg">
                                {{$post->title}}
                            </h1>
                            <p class="py-4">
                              {{$post->body}}
                            </p>
                            
                            <div class="flex flex-wrap pt-8">
                                <div class="w-full md:w-1/3 text-sm font-medium">
                                  {{$post->created_at->diffForHumans()}}
                                </div>
    
                                <div class="2/3">
                                    <div class="text-sm font-medium">
                                        <a href="{{route('editpost', $post)}}" class="text-blue-700 px-1 ">تعديل</a>

                                        <form action="{{route('post.destroy', $post)}}" class="mr-1" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="text-blue-500 px-1">مسح</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    {{-- End of Post 1 --}}
                  @else
                  <div class="container mx-auto px-6 py-8">
                    <div class="flex flex-wrap px-6">
                      لا توجد منشورات
                    </div>
                  </div>
                  @endif

                  
                  
                </div>


        {{-- End of main content --}}
      
@endsection