@extends('layout.app')
@section('title','Show single comic')

@section('content')
<div class="container">
  <h2>Details for comic:</h2>
  <h3>{{$comic->title}}</h3>
<img src="{{$comic->thumb}}" alt="{{$comic->thumb}}">
  <div><strong>Decription:</strong> {{$comic->description}}</div>
  <div><strong>Price:</strong> {{$comic->price}}</div>
  <div><strong>Series:</strong> {{$comic->series}}</div>
  <div><strong>Sale Date:</strong> {{$comic->sale_date}}</div>
  <div><strong>Tipe:</strong> {{$comic->type}}</div>
  <a class="btn btn-primary" href="{{route('comics.index', ['comic'=>$comic->id])}}">ALL COMICS</a>

</div>
    
@endsection