@extends('layout.master')

@section('title', 'Add Category')


{{-- @section('page-name', 'Add Category') --}}

@section('content')
    <h1>Add New Category</h1>

    <div class="mt-5 w-75">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                 <li>{{ $error }}</li>

                @endforeach
            </ul>

        @endif
        <form action="/category-add" method="post">
            @csrf
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Category Name" required autocomplete="off">
            </div>
            <div class="mt-4" >
                <button class="btn btn-primary" type="submit" style="width: 150px">Save</button>
            </div>
        </form>
    </div>
@endsection
