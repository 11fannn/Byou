@extends('layout.master')

@section('title', 'Edit Category')


{{-- @section('page-name', 'Add Category') --}}

@section('content')
    <h1>Edit Category</h1>

    <div class="mt-5 w-75">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                 <li>{{ $error }}</li>

                @endforeach
            </ul>

        @endif
        <form action="/category-edit/{{ $category->slug }}" method="post">
            @csrf
            @method('put')

            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}"
                placeholder="Category Name" required autocomplete="off">
            </div>
            <div class="mt-4" >
                <button class="btn btn-primary" type="submit" style="width: 150px">Update</button>
            </div>
        </form>
    </div>
@endsection
