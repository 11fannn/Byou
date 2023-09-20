@extends('layout.master')

@section('title', 'Deleted Category')
{{-- @section('title', 'Dashboard') --}}

{{-- @section('page-name', 'dashboard') --}}

@section('content')
    <h1>Deleted Category List</h1>
    <div class="mt-3 d-flex justify-content-end">
        <a href="/categories" class="btn btn-secondary" style="width: 150px"> Back</a>
    </div>

    <div class="my-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        @endif
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>

                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($deletedCategories as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="/category-restore/{{ $item->slug }}" class="btn btn-secondary">Restore</a>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
