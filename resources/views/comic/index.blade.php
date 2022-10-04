@extends('layout.app')

@section('title', 'Comic List')
@section('content')
<div class="container">
    <a href="{{route('comics.create')}}" class="btn btn-primary">Add Comics</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->thumb}}</td>
            
        </tr>
            
        @endforeach
        </tbody>
    </table>
</div>


@endsection