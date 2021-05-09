<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <label for="">Login</label>
                        <hr>
                        <div class="form-group">
                            <label for="">Kode Anggota</label>
                            <input type="text" name="kode_anggota" id="kode_anggota" class="form-control" placeholder="Masukkan Kode Anggota..">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepon</label>
                            <input type="password" name="no_tlp" id="no_tlp" class="form-control" placeholder="Nomor telepon..">
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

                        <button class="btn btn-login btn-block btn-success">Login</button>
                    </div>
                </div>
                <div class="text-center" style="margin-top: 15px;">
                Belum punya akun ? <a href="register.php">Silahkan Register</a></div>
                <div class="text-center" style="margin-top: 15px;">
                Bukan Anggota ? <a href="../login.php">Silahkan ke halaman ini</a></div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {

            $(".btn-login").click(function() {
                var kode_anggota = $("#kode_anggota").val();
                var no_tlp = $("#no_tlp").val();

                if (kode_anggota.length == "") {
                    
                    Swal.fire({
                        type: 'warning',
                        title: 'Opps...',
                        text: 'Kode Anggota Wajib Diisi !'
                    });
                } else if(no_tlp.length == "") {
                    Swal.fire({
                        type: 'warning',
                        title: 'Opps...',
                        text: 'Nomor Telepon Wajib Diisi !'
                    });
                } else {
                    $.ajax({
                        url: "proses-login.php",
                        type: "POST",
                        data: {
                            "kode_anggota": kode_anggota,
                            "no_tlp": no_tlp
                        },

                        success:function(response){

                            if(response == "success") {
                                Swal.fire({
                                    type: 'success',
                                    title: 'Login Berhasil',
                                    text: 'Anda akan di arahkan dalam 3 Detik',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false
                                })
                                .then (function(){
                                    window.location.href = "index_anggota.php";
                                });
                            } else {

                                Swal.fire({
                                    type:'error',
                                    title: 'Login Gagal!',
                                    text: 'Silahkan Coba Lagi!'
                                });

                            }

                            console.log(response);
                        },
                        
                        error:function(response){
                           Swal.fire({
                               type: 'error',
                               title: 'Opps..',
                               text: 'server error!'
                           });

                           console.log(response);

                        }
                    });
                }
            });
        });
    </script>

</body>
</html>