@extends('layouts.layout', ['title' => 'Kontakt ze mną'])

@section('content')


<h2>Na tej stronie możesz zadać mnie pytnie: </h2>
<form class="form-floating" action="{{route('home.sendMassage')}}"  method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Imię*</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Telefon</label>
        <input type="text" class="form-control" name="phone" id="phone">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email adres*</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Wiadomość*</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="5"></textarea>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
        <label class="form-check-label" for="exampleCheck1">Zatwierdż mnie*</label>
    </div>
    <input type="text" value="{{$_SERVER['REMOTE_ADDR']}}" name="ip" hidden>
    <button type="submit" class="btn btn-primary">Wyslij</button>
</form>

<p><em>*Pola oznaczone gwiazdką muszą być wypelnione</em></p>

@endsection
