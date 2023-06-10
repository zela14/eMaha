@extends('layouts.main')
@section('title', 'eMaha - Home')
@section('content')
    <h5>Selamat Datang, {{ Auth::user()->nama }}</h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sit porro, voluptatibus vitae odio officia. Similique, dicta? Perferendis dolorem ratione nulla, aperiam officiis ex aliquam alias cumque sed laudantium reprehenderit!</p>
@endsection