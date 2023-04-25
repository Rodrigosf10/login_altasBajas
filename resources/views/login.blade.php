<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <style>
        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h1 class="card-title text-center mb-4">Login</h1>
                        <form action="{{ route('logear') }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-pill border-dark" name="name" id="name" placeholder="Username here">
                                <label for="floatingInput">User here</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-pill border-dark" name="password" id="password" placeholder="Password here">
                                <label for="floatingPassword">Password here</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                            </div>
                            <div>
                                <div class="row text-center">
                                    <div class="col-sm-6 d-grid"><button class="btn btn-primary btn-lg text-uppercase fw-bold text-center border-dark">Login in</button></div>
                                    <div class="col-sm-6"><a class="small" href="#">Forgot password?</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>