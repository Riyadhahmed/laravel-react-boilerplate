@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <div class="container m-top-60">
        <div class="row">
            <div class="text-center">
                <img src="{{ asset('assets/images/logo/default.png') }}" width="30%"/>
                <h1>Laravel React Boilerplate</h1>
            </div>
        </div>
        <div id="app"></div>
    </div>
@endsection