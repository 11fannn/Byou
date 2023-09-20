@extends('layout.master')

@section('title', 'Dashboard')

@section('content')

    <h1>Welcome, {{ Auth::user()->username }} !</h1>

    <div class="card " style="padding:0 20px 0 20px; border-radius:10px;">
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6"><ion-icon name="book"></ion-icon></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-name">Book</div>
                        <div class="card-no">{{ $book_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6"><ion-icon name="list-outline"></ion-icon></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-name">Category</div>
                        <div class="card-no">{{ $category_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><ion-icon name="people"></ion-icon></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-name">User</div>
                        <div class="card-no">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>#Rent Log</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Book Title</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Actual Return Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" style="text-align:center">No Data...</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
1