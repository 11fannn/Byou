@extends('layout.master')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')
    <h1>Books List</h1>

    <div class="my-5 d-flex justify-content-end">

        <a href="/book-add" class="btn btn-primary ">Add Data </a>



    </div>
     @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    <div class="my-5 ">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->book_code }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    @foreach ($item->categories as $category )

                        {{ $category->name }} <br>

                    @endforeach
                </td>
                <td>{{ $item->status }}</td>
                <td>
                        <a href="book-edit/{{ $item->slug }}" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </td>
                </tr>



                @endforeach
            </tbody>
        </table>
@endsection
