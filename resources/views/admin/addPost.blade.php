@extends('layouts.admin')

@section('content')

<div class="heading text-center font-bold text-2xl m-5 text-gray-800">منــــــشـــــور جديــــــد</div>

 <form action="{{route('addpost') }}" method="post"  enctype="multipart/form-data" class="editor bg-white mx-auto w-8/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
        @csrf
        
            <input type="text" name="title" id="title" 
                class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none
                @error('title') border-red-500 @enderror" placeholder="العنوان">

                @error('title')
                <div class="text-red-500 text-sm mb-4">
                    {{$message}}
                </div>
                @enderror

        
            <input type="file" name="image" id="image"
                class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none
                @error('image') border-red-500 @enderror">

                @error('image')
                <div class="text-red-500 text-sm mb-4">
                    {{$message}}
                </div>
                @enderror

        
            <textarea name="body" id="body" 
            class="description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none
            @error('body') border-red-500 @enderror" placeholder="أكتب التفاصيل هنا"></textarea>

            @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror 
    
   
    <!-- buttons -->
    <div class="buttons flex mt-4">
        <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">
            <span class="inline-block mr-2">أنشر</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </button>
    </div>
</form>
@endsection