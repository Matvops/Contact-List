@extends('layouts.main_layout')
@section('content')

@include('layouts.top_bar')

<div class="absolute top-30 left-6 z-20 ">
    <a href="{{ route('home') }}" class="mr-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-14 fill-purple-600 hover:size-15.5 hover:fill-purple-500 transition-fill transition-size duration-200">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
        </svg>
    </a>
</div>

<div class="m-0 p-0 flex bg-gray-700 rounded-sm shadow-lg shadow-gray-950 w-5/10">
        <div class="w-full">
        <div class="relative w-full ml-4 my-4">
            <label for="username" class="uppercase text-purple-400 font-semibold text-2xl inline-block mb-2">username</label>
            <input type="text" name="username" id="username" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-md border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-400 focus:outline-none focus:ring-0 focus:border-blue-600 peer uppercase" value="{{ $contact->username }}" disabled/>
            @error('username')
            <div class="text-red-500 font-light text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="relative w-full ml-4 my-4">
            <label for="username" class="uppercase text-purple-400 font-semibold text-2xl inline-block mb-2">email</label>
            <input type="email" name="email" id="floating_outlined2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-md border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-400 focus:outline-none focus:ring-0 focus:border-blue-600 peer uppercase" value="{{ $contact->email }}" disabled/>
            @error('email')
            <div class="text-red-500 font-light text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="pl-40 my-auto w-6/10">
        <a href="{{ route('update', ['id' => Crypt::encrypt($contact->id)]) }}">
            <button type="button" class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-colors duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                <span class="sr-only">Update</span>
            </button>
        </a>
    </div>
</div>

@if(session('accountError'))
<div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 absolute top-8/10 left-auto" role="alert">
    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
        </svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ms-3 text-sm font-normal">
        {{ session('accountError') }}
    </div>
</div>
@endif
@endsection