@extends('layout.app')

@section('content')
<div class="container bg-primary p-3">
    <div class="mb-3 col-3">
        <label for="exampleFormControlInput1" class="form-label text-white">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3 col-8">
        <label for="exampleFormControlTextarea1" class="form-label  text-white">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3 col-3">
        <label for="exampleFormControlInput1" class="form-label  text-white">Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3 col-4">
        <label for="exampleFormControlInput1" class="form-label text-white">Type</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3 col-4">
        <label for="exampleFormControlInput1" class="form-label text-white">Series</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <button class="btn btn-outline-light"> Save </button>
</div>
@endsection