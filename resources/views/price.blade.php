@extends('layouts.layout', ['title' => 'Cennik na masaż'])

@section('content')

<div style="text-align: center;"><h2>Na tej stronie możecie sprawdzić aktualne ceny na wszystkie rodzaje usług które ja oferuję</h2></div>



<table class="table">
    <h2><strong>Masaż zwykly</strong></h2>
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Ilość godzin</th>
        <th scope="col">Cena</th>
    </tr>
    </thead>
    <tbody>
    <tr class="table-active">
        <th scope="row"></th>
        <td>1 godzina</td>
        <td><strong>70 złotych</strong></td>
    </tr>
    <tr>
        <th scope="row"></th>
        <td>2 godziny</td>
        <td><strong>130 złotych</strong></td>
    </tr>

    </tbody>
</table>

<table class="table">
    <h2><strong>Masaż niezwykly</strong></h2>
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Ilość godzin</th>
        <th scope="col">Cena</th>
    </tr>
    </thead>
    <tbody>
    <tr class="table-active">
        <th scope="row"></th>
        <td>1 godzina</td>
        <td><strong>70 złotych</strong></td>
    </tr>
    <tr>
        <th scope="row"></th>
        <td>2 godziny</td>
        <td><strong>130 złotych</strong></td>
    </tr>

    </tbody>
</table>

<p class="main-p"><a class="btn btn-secondary" href="{{route('home')}}">Powrót do strony głownej &raquo;</a></p>

@endsection
