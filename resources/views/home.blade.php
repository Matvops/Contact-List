@extends('layouts.main_layout')
@section('content')
@include('layouts.top_bar')


<section class="w-4/10 mx-auto t">
    <ul class="m-0 p-0 flex flex-col bg-gray-700 rounded-sm shadow-lg shadow-gray-950">
        @foreach($contacts as $contact)
            @include('contacts')
        @endforeach
    </ul>
</section>

@endsection