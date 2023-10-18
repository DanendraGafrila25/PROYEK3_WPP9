<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
        }

        .card {
            width: 300px; 
            text-align: center;
        }

    </style>
    
<body>
    <div class="bodyLogin">
        <div class="d-flex justify-content-center">
            <div class="card">

                @include('errors.message')
                
                <div class="card-body text-center">
                    <form method="post" action="{{url('/login')}}">
                        @csrf
                        <h1>LOGIN</h1>
                        <div class="username p-form">
                            <div class="col-sm-10 offset-sm-2">
                                <input type="email" name="email" id="email" class="form-control sz-input" placeholder="Masukkan Email" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="password mt-3 mb-3 p-form">
                            <div class="col-sm-10 offset-sm-2">
                                <input type="password" name="password" class="form-control sz-input" placeholder="Masukkan Password" style="width: 100%;" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary mt-4">Log In</button>
                        </div>

                        <div class="register-link">
                            <p>Belum punya akun? <a href="#">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
