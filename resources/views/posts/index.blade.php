@extends('layouts.layout', ['title' => 'Main page'])

@section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Result for "{{$_GET['search']}}"</h2>
            <p class="lead">Total found "{{count($posts)}}" posts</p>
        @else
            <h2>We didn't find any result for "{{$_GET['search']}}". Sorry</h2>
            <a href="{{route('post.index')}}" class="btn btn-outline-primary">Show all posts</a>
        @endif
    @endif
    <div class="row">
        @foreach($posts as $post)
            <div class="col-6">
                <div class="card">
                    <div class="card-header"><h2>{{$post->short_title}}</h2></div>
                    <div class="card-body">
                        <div class="card-img" style="background-image: url({{$post->img ?? asset('/img/default.jpg')}})"></div>
                        <div class="card-author"><h2>Author: {{$post->name}}</h2></div>
                       <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary">Show post</a>
                    </div>


                </div>
            </div>
        @endforeach
    </div>
    @if(!isset($_GET['search']))
        {{$posts->links('vendor.pagination.bootstrap-4')}}
    @endif
@endsection
