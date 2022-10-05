@extends('layout.app')
@section('title', 'Add new Comic')

@section('content')

<div class="container">
    <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}"/>
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="price" class="form-control" id="price" name="price" value="{{$comic->price}}"/>
        </div>
        
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="series" class="form-control" id="series" name="series" value="{{$comic->series}}"/>
        </div>
        
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="thumb" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}"/>
        </div>
        
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="sale_date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"/>
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-select">
                <option {{($comic->type=="comic book")?'selected':''}} value="comic book">Comic Book</option>
                <option {{($comic->type=="graphic novel")?'selected':''}} value="graphic novel">Graphic Novel</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{$comic->description}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-danger">Save Edit</button>
        </form>

</div>

    
@endsection