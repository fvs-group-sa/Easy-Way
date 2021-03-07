@extends('layouts.admin')

@section('content')


    <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
        <h1 class="font-bold text-center text-2xl mb-5">EASYWAY</h1>
        <form action="{{ route('login') }}" method="post" class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
            @csrf
            <div class="px-5 py-7">
                @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{session('status')}}
                </div>
                    
                @endif

                <div class="">
                    <label for="Email" class="font-semibold text-sm text-gray-600 pb-1 block">Email</label>
                    <input type="text" name="email" id="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full
                    @error('email') border-red-500 @enderror" value="{{old('email')}}">

                    @error('email')
                    <div class="text-red-500 text-sm mb-4">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="">
                    <label for="password" class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                    <input type="password" name="password" id="password"
                    class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full
                    @error('password') border-red-500 @enderror" value="">
                
                    @error('password')
                    <div class="text-red-500 text-sm mb-4">
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
            </div>
        </form>
      <div class="py-5">
          <div class="grid grid-cols-2 gap-1">
            <div class="text-center sm:text-left whitespace-nowrap">
              <a href="{{ route('home') }}" class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                  </svg>
                  <span class="inline-block ml-1">Back to your website</span>
              </a>
            </div>
          </div>
        </div>
    </div>
@endsection