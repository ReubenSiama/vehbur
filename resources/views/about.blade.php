@extends('layouts.master')
@section('header')
    <div class="w-full bg-[url('https://images.unsplash.com/photo-1562917127-52bfc7d186ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80')] text-center bg-no-repeat bg-cover bg-top sm:bg-center">
        <div class="text-4xl font-extrabold w-full bg-gray-900/60 backdrop-brightness-75 p-20 md:p-40 text-white">
            {{ __('About Us') }}
        </div>
    </div>
@endsection
@section('contents')
    About US
@endsection
