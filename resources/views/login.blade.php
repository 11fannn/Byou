<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
        background-color: white ;

    }

    .login-box {

        width: 300px;
        height: 380px;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 1px 2px 9px 1px#7091F5;
    }

    form div {
        margin-bottom: 22px;
    }
    h1{

        text-align: center;
    }
    .btn{
        background-color: #7091F5;
        border: none ;
    }
    .btn:hover{
        background: #82A0D8 ;
        transition; all 0.4s;
    }


</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">


        <div class="login-box" class="alert alert-danger">

            @if(session('status'))
             <div class="alert alert-danger">
                {{ session('password'.'username')  }}
                </div>
            @endif

            <form action="" method="post">
                @csrf
                <h1>Login</h1>

                <div>
                    <label for="username" class="form-label">username</label>
                    <input type="text" name="username" id="username" class="form-control" required
                        autocomplete="off">
                </div>
                <div >
                <label for="password" class="form-label">password</label>
                    <input type="password" name="password" id="password" class="form-control" required >



                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
                <div class="text-center ">
                    Don't have account? <a href="register ">Sign up</a>
                </div>
            </form>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
