@extends('layout.master')

@section('title', 'Category')
{{-- @section('title', 'Dashboard') --}}

{{-- @section('page-name', 'dashboard') --}}



@section('content')
    <h1>Category list</h1>
    {{-- @include('category-modal') --}}
    <div class="mt-5 d-flex justify-content-end">
        <a href="/category-deleted" class="btn btn-secondary me-3" style="width: 140px"> <b>View Delete </b></a>
        <a href="/category-add" class="btn btn-light" style="width: 140px"><b>Add Data</b></a>
    </div>

    <div class="my-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
        @endif
    </div>

    <table class="table" cellspacing="0"  >
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        @foreach ($categories as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td class="text-center">
                    <a href="/category-edit/{{ $item->slug }}" class="btn btn-light "><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/category-delete/{{ $item->slug }}" class="btn btn-secondary"><i class="fa-solid fa-trash"></i></a>
                    {{-- <button data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger"
                        data-bs-whatever="{{ $item->slug }}">delete</button> --}}
                </td>
            </tr>
        @endforeach
    </table>
    </div>

    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}

@endsection
