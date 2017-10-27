@extends('layouts.main')
@section('styles')
@stop
@section('content')
<div class="jumbotron banner-shadow">
    <div class="container">
        <h1>Welcome to My Blog Page</h1>
        <p>Are you ready to read my absurd comments? If Yes, Kamooon !</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/no-picture-350x300.jpg') }}" height="300px">
            <h3>Content - 1</h3>
            <p>This is a test explanation.This is a test explanation.This is a test explanation.This is a test explanation.This is a test explanation.</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/no-picture-350x300.jpg') }}" height="300px">
            <h3>Content - 2</h3>
            <p>This is a test explanation.This is a test explanation.This is a test explanation.This is a test explanation.This is a test explanation.</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/no-picture-350x300.jpg') }}" height="300px">
            <h3>Content - 3</h3>
            <p>This is a test explanation.This is a test explanation.This is a test explanation.This is a test explanation.This is a test explanation.</p>
        </div>
    </div>
</div>
@stop