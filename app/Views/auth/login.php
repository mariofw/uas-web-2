<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .login-container {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: #fff;
        }
        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
        }
        .side-image {
            background: url('/images/helmet.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
        .login-box {
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            padding: 30px;
            background: #fff;
        }
        .login-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .login-header img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 side-image"></div>
            <div class="col-md-6 d-flex align-items-center justify-content-center login-container">
                <div class="login-box">
                    <div class="login-header">
                        <img src="/images/university-logo.jpg" alt="Logo">
                        <div>
                            <h4>Fakultas Teknik</h4>
                            <p>Universitas Lambung Mangkurat</p>
                        </div>
                    </div>
                    <h2 class="text-center">Login ke Akun Anda</h2>
                    <form action="/auth/login" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                        </div>
                        <div class="form-group text-right">
                            <a href="/auth/forgotPassword">Lupa password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <div class="text-center mt-3">
                            <p>Belum Mempunyai Akun? <a href="/auth/register">Daftar</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Username: <strong>admin</strong></p>
                    <p>Password: <strong>password</strong></p>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Mulai</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#loginModal').modal('show');
        });
    </script>
</body>
</html>
