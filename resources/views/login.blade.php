@extends('layouts.main_layout')
@section('content')

<div class="bg-gray-700 max-w-3/10 min-w-xs w-full h-100 rounded-sm shadow-lg shadow-gray-850">
    <form action="{{ route('authLogin') }}" method="post">
        @csrf
        <legend class="font-bold text-purple-600 text-4xl ml-5 mt-8 underline decoration-1 decoration-purple-400" style="text-shadow: 0px 2px 6px rgb(255,0,255, .5);">Login</legend>
        <div class="relative w-7/10 ml-4 mt-12">
            <input type="text" name="email" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-md border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-400 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined" class="absolute text-sm text-gray-300 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-purple-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-85 peer-focus:-translate-y-8 rtl:peer-focus:translate-x-2/4 rtl:peer-focus:left-auto">EMAIL</label>
            @error('email')
            <div class="text-red-500 font-light text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="relative w-7/10 ml-4 mt-8">
            <input type="password" name="pass" id="floating_outlined2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-md border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-400 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined2" class="absolute text-sm text-gray-300 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-purple-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-85 peer-focus:-translate-y-8 rtl:peer-focus:translate-x-2/4 rtl:peer-focus:left-auto">PASSWORD</label>
            @error('pass')
            <div class="text-red-500 font-light text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mt-16 ml-5">
            <button type="submit" class="cursor-pointer text-white bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 font-semibold">Login</button>
            <a href="#">
                <button type="button" class="cursor-pointer text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 font-semibold">SignIn</button>
            </a>
        </div>
    </form>
</div>

@if(session('loginError'))
            <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">
                    {{ session('loginError') }}
                </div>
            </div>
@endif
@endsection