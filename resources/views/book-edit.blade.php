@extends('layout.master')

@section('title', 'edit Book')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


{{-- @section('page-name', 'Add Book') --}}

@section('content')
    <h1>Edit Book</h1>

    <div class="mt-5 w-75">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                 @foreach ($errors->all() as $errors)

                @endforeach
                </ul>
            </div>
        @endif
        <form action="/book-add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Code</label>
                <input type="text" name="book_code" id="code" class="form-control" placeholder="Kode Buku" required
                    autocomplete="off" value="{{ $book->book_code }}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title Buku" required
                    autocomplete="off" value="{{ $book->title }}">
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">Image</label>
                <input type="file" name="cover" required form autocomplete="off" class="form-control">
            </div>

            <div class="mb-3">
                <label for="currentImage" class="form-label" style="display:block">Current Image</label>
                <br>
                @if($book->cover!='')
                <img src="{{ asset('cover/'.$book->cover) }}" alt="">
                @else
                <img src="{{ asset('images/venom.jpg'.$book->cover) }}" alt="">
                @endif
            </div>

            <div class= "mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="categories[]" id="category" class="form-control select-multiple" multiple>

                 @foreach ($categories as $item)
                 <option value="{{ $item->id}}">{{ $item->name }}</option>
                 @endforeach
                </select>
            </div>

            <div class="mb-3">

            <label  for="currentCategory">Current Category</label>
        <ul>
            @foreach ( $book->categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
            </div>
            <div class="mt-4">
                <button class="btn btn-primary" type="submit" style="width: 150px">Save</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
    $('.select-multiple').select2();
    });
    </script>
@endsection
