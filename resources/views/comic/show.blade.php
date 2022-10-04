@extends('layout.app')
@section('title','Show single comic')

@section('content')
<div class="container">
  <h2>Details for comic:</h2>
  <h3>{{$comic->title}}</h3>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}">
  <div><strong>Decription:</strong> {{$comic->description}}</div>
  <div><strong>Price:</strong> {{$comic->price}}</div>
  <div><strong>Series:</strong> {{$comic->series}}</div>
  <div><strong>Sale Date:</strong> {{$comic->sale_date}}</div>
  <div><strong>Tipe:</strong> {{$comic->type}}</div>

</div>
    
@endsection