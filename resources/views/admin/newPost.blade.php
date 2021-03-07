@extends('layouts.admin')

@section('content')
<div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
    <h1 class="font-bold text-center text-2xl mb-5">منــــــشـــــور جديــــــد</h1>
    <form action="{{route('post') }}" method="post" class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
        @csrf
        <div class="mb-4">
            <div class="">
                <label for="title" class="font-semibold text-sm text-gray-600 pb-1 block">Title</label>
                <input type="text" name="title" id="title"
                class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full
                @error('title') border-red-500 @enderror" value="">
            
                @error('title')
                <div class="text-red-500 text-sm mb-4">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="">
                <label for="image" class="font-semibold text-sm text-gray-600 pb-1 block">Image</label>
                <input type="text" name="image" id="image"
                class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full
                @error('image') border-red-500 @enderror" value="">
            
                @error('image')
                <div class="text-red-500 text-sm mb-4">
                    {{$message}}
                </div>
                @enderror
            </div>

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

        <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Login</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </button>
    </form>
</div>
@endsection