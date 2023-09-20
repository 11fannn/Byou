<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

</head>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-book-open"></i> Rent-Book </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    @if (Auth::user()->role_id == 1)
                        <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class="active" @endif>Dashboard</a>
                        <a href="/books" @if (request()->route()->uri == 'books') class="active" @endif>Books</a>
                        <a href="/categories" @if (request()->route()->uri == 'categories'|| request()->route()->uri == 'category-edit/{slug}'||request()->route()->uri == 'category-delete/{slug}'
                        ||request()->route()->uri == 'category-deleted'||request()->route()->uri == 'category-add') class="active" @endif>Categories</a>
                        <a href="/users" @if (request()->route()->uri == 'users') class="active" @endif>Users</a>
                        <a href="/rentlogs" @if (request()->route()->uri == 'rentlogs') class="active" @endif>Rent log</a>
                        <a href="/logout">logout</a>
                    @else
                        <a href="/profile" @if (request()->route()->uri == 'profile') class="active" @endif>Profile</a>
                        <a href="/logout">Logout</a>
                    @endif
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
