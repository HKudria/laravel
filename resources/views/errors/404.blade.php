@extends('layouts.layout', ['title' => '404'])

@section('content')
    <div class="card">
        <img src="{{asset('/img/404.png')}}" alt="">
    </div>

    <a href="/" class="btn btn-outline-primary btn">Go to Home</a>
@endsection
