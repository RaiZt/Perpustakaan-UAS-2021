<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Register Akun</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <label for="">Register</label>
                        <hr>

                        <div class="form-group">
                            <label for="">Nama User</label>
                            <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Masukkan nama user...">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username..">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <!-- <div class="form-group">
                            <label for="">Level</label>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            </div>
                        </div> -->

                        <button class="btn btn-register btn-block btn-success">Register</button>
                    </div>
                </div>
                <div class="text-center" style="margin-top: 15px;">
                Sudah punya akun ? <a href="login.php">Silahkan Login</a></div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

</body>
</html>