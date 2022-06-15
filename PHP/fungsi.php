<?php 

// connect database
$conn = mysqli_connect("localhost", "root", "", "Sikabada");

//QUERY
function query($query) {
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($hasil) ){
        $hasil[] = $row;
    }
    return $rows;
}

// DAFTAR
function function_daftar($data) {
    global $conn;

    $namapengguna = strtolower(stripslashes($data["namapengguna"]));
    $katasandi = mysqli_real_escape_string($conn ,$data["katasandi"]);
    $katasandi2 = mysqli_real_escape_string($conn ,$data["katasandi2"]);

    // cek konfirmasi katasandi
    if($katasandi !== $katasandi2) {
        echo "<script>
                alert('konfirmasi kata sandi tidak sesuai');
            </script>";
        return false;
    }
}

?>