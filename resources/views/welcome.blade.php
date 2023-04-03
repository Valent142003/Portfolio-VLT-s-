@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Home</h1>
            <p>This is the home page.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/home.png') }}" alt="Home Image" class="img-fluid">
        </div>
    </div
