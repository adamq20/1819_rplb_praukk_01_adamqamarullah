<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ticket Pedia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="hold-transition login-page">
    @include('layouts.app2')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <p class="h4">TICKET<b>PEDIA</b></p>
                        </div>
                        <br>
                        <form method="POST" action="">
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Masukan Email" value="" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <br>
                            <div>
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Masukan Username" value="" required autofocus>
                                <div class="invalid-feedback"></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Masukan Password" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="Password" class="form-control" id="inputPassword" name="password_confirmation" placeholder="Konfirmasi Password" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
