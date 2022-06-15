<?php 


?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Masuk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

        <!-- LOGO TITLE -->
        <link rel="icon" href="../IMG/LOGO.svg" type="image/x-icon" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

        <!-- CSS -->
        <link rel="stylesheet" href="../CSS/style.css" />

        <!-- JS SWEET ALERT -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <div class="masuk-container p-5">
            <div class="row masuk-kembali">
                <div class="col-6" style="color: #16fcd2; font-weight: 700">
                    <h3>Masuk</h3>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <div class="logokembali d-flex align-items-center">
                        <div class="logo flex-shrink-0">
                            <a href="index-unlogin.html">
                                <img src="../IMG/Back Arrow.svg" alt="logo" style="width: 28px" />
                            </a>
                        </div>
                        <div class="tulisan flex-grow-1 ms-1">
                            <a href="index-unlogin.html">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-masuk">
                <form action="" method="">
                    <div class="form-floating mt-4 mb-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Nama pengguna</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Kata Sandi</label>
                    </div>
                    <div class="form-check mb-4 ms-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1">ingat saya</label>
                    </div>
                    <div class="tombol-masuk">
                        <button type="submit" onclick="myAlertMasuk()" class="masuk" name="">Masuk</button>
                    </div>
                    <div class="sudah-akun mt-3">
                        <p>Belum memiliki akun? <a href="daftar.html">Daftar</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!-- JS -->
        <script src="../JS/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
