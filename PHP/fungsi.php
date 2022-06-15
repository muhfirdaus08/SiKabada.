<?php 

// connect database
$conn = mysqli_connect("localhost", "root", "", "Sikabada");

function query($query) {
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($hasil) ){
        $hasil[] = $row;
    }
    return $rows;
}

?>