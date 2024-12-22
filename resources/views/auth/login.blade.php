<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Laravel - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor')}}/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css')}}/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-gradient-primary {
            background-image: url('images/login1.jpeg');
            background-size: cover;
            background-position: center;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-card {
            width: 100%;
            max-width: 500px;
            background-color: #fff;
            padding: 2rem;
            border-radius: 15px; /* Radius untuk form */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .bg-register-image {
            text-align: center;
            margin-bottom: 2rem;
        }

        .bg-register-image img {
            max-width: 300px;
            height: auto;
        }

        .text-center p {
            margin-top: 1rem; /* Memberikan jarak antara tombol login dan tulisan */
            font-size: 0.9rem;
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container login-container">

        <div class="card o-hidden border-0 shadow-lg my-5 login-card">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-12 bg-register-image">
                        <!-- Place the logo image here -->
                        <img src="{{asset('images/logo.png')}}" alt="polinema" />
                    </div>
                    <div class="col-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>Login <br>SiRekap Nendra Print</b></h1>
                            </div>
                            <form action="{{ route('login') }}" method="POST" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail"
                                        placeholder="Email Address">

                                    @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="exampleInputPassword" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <p class="mt-3 text-center">Belum punya akun? <a href="/register" class="text-primary">Registrasi di sini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor')}}/jquery/jquery.min.js"></script>
    <script src="{{ asset('template/vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor')}}/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js')}}/sb-admin-2.min.js"></script>

</body>

</html>