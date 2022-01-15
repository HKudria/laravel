@extends('layouts.layout', ['title' => 'Home page'])

@section('content')


    <div class="row">
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle rounded-circle-heading" src="{{asset('/img/omnie.jpg')}}" width="140" height="140"></img>
            <h2 class="main-h2">O mnie</h2>
            <p class="main-p">Nazywam się Nadiia Yahnych</p>
            <p class="main-p"><a class="btn btn-secondary" href="{{route('post.show', ['id'=>'26'])}}">Więcej informacji &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle rounded-circle-heading" src="{{asset('/img/price.png')}}" width="140" height="140"></img>
            <h2 class="main-h2">Cennik</h2>
            <p class="main-p">Cenny na massaże oferowane przez mnie</p>
            <p class="main-p"><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle rounded-circle-heading" src="{{asset('/img/contact.png')}}" width="140" height="140"></img>
            <h2 class="main-h2">Kontakt</h2>
            <p class="main-p">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            <p class="main-p"><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Masaż klasyczny</h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
            <img class="main-img" width="500" height="500" src="{{asset('/img/default.jpg')}}">

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Masaż sportowy</h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="main-img" width="500" height="500" src="{{asset('/img/sp.jpg')}}">

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Masaż relaksacyjny</h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <img class="main-img" width="500" height="500" src="{{asset('/img/relaxing_massage.jpeg')}}">

        </div>
    </div>

    <hr class="featurette-divider">

@endsection
