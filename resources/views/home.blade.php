@extends('layouts.layout', ['title' => 'Home page'])

@section('content')


    <div class="row">
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle rounded-circle-heading" src="{{asset('/img/omnie.jpg')}}" width="140" height="140"></img>
            <h2 class="main-h2">O mnie</h2>
            <p class="main-p">Nazywam się Nadiia Yahnych</p>
            <p class="main-p"><a class="btn btn-secondary" href="{{route('post.show', ['id'=>'1'])}}">Więcej informacji &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle rounded-circle-heading" src="{{asset('/img/price.png')}}" width="140" height="140"></img>
            <h2 class="main-h2">Cennik</h2>
            <p class="main-p">Cenny na massaże oferowane przez mnie</p>
            <p class="main-p"><a class="btn btn-secondary" href="{{route('home.price')}}">Więcej informacji &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle rounded-circle-heading" src="{{asset('/img/contact.png')}}" width="140" height="140"></img>
            <h2 class="main-h2">Kontakt</h2>
            <p class="main-p">Umów się na wizytę albo zadaj pytanie</p>
            <p class="main-p"><a class="btn btn-secondary" href="{{route('home.contact')}}">Więcej informacji &raquo;</a></p>
        </div>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Masaż klasyczny</h2>
            <p class="lead">Test description</p>
            <p class="lead"><a class="btn btn-secondary" href="{{route('post.show', ['id'=>'1'])}}">Więcej informacji &raquo;</a></p>
        </div>
        <div class="col-md-5">
            <img class="main-img" width="500" height="500" src="{{asset('/img/default.jpg')}}">
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Masaż sportowy</h2>
            <p class="lead">Test description</p>
            <p class="lead"><a class="btn btn-secondary" href="{{route('post.show', ['id'=>'1'])}}">Więcej informacji &raquo;</a></p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="main-img" width="500" height="500" src="{{asset('/img/sp.jpg')}}">
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Masaż relaksacyjny</h2>
            <p class="lead">Test description</p>
            <p class="lead"><a class="btn btn-secondary" href="{{route('post.show', ['id'=>'1'])}}">Więcej informacji &raquo;</a></p>
        </div>
        <div class="col-md-5">
            <img class="main-img" width="500" height="500" src="{{asset('/img/relaxing_massage.jpeg')}}">
        </div>
    </div>

    <hr class="featurette-divider">

@endsection
