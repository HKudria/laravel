<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Undefined page'}}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script scr="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/general.css')}}">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <div class="container collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="col-6 navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="/">Glówna</a>
                </li>
                <li class="nav-item active offset-3">
                    <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Blog</a>
                </li>
                @auth()
                    @if(Auth::user()->role == 'admin')
                        <li class="nav-item active offset-3">
                            <a class="nav-link active" aria-current="page" href="{{route('post.create')}}">Create post</a>
                        </li>
                    @endif
                @endauth

            </ul>
            <form class="d-flex form-search" action="{{route('post.index')}}">
                <input class="form-control me-2" type="search" placeholder="Wyszukaj" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Wyszukaj</button>
            </form>
            @auth()
                @if(Auth::user()->role == 'admin')
                  <ul class="navbar-nav ms-auto ">
                <!-- Authentication Links -->

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                  </ul>
                @endif
            @endauth
        </div>
    </div>
</nav>

<div class="container">
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endforeach
    @endif
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
    @yield('content')

</div>
<footer class="py-3 my-4">
    <p class="text-center text-muted">© 2022 Powered by  <a href="https://www.linkedin.com/in/herman-kudria-10868b207/" target="_blank">Herman Kudria</a></p>

</footer>
</body>
</html>
