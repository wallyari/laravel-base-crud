@extends('layout.app')
@section('title', 'Create new Comic')

@section('content')

<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}"/>
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="price" class="form-control" id="price" name="price" value={{old('price')}}/>
        </div>
        
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="series" class="form-control" id="series" name="series"value={{old('series')}}/>
        </div>
        
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="thumb" class="form-control" id="thumb" name="thumb" value={{old('thumb')}}/>
        </div>
        
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="sale_date" class="form-control" id="sale_date" name="sale_date" value={{old('sale_date')}}/>
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-select">
            <option value={{(old('type')=='comic_book')?'selected':''}}>Comic Book</option>
            <option value={{(old('type')=='graphic_novel')?'selected':''}}>Graphic Novel</option>
            
        </select>
        </div>
        
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Save Comic</button>
        </form>

</div>

    
@endsection