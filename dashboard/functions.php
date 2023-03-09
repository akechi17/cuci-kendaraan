<?php

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbcucikendaraan");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// Ambil data dari tabel genshinchars
// $result = mysqli_query($conn, "SELECT * FROM genshinchars");
// var_dump($result);
// if ( !result ) {
//     echo mysqli_error($conn);
// }

// Ambil data (fetch) genshinchars dari objek result
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() //mengembalikan array associative
// mysqli_fetch_array() //mengembalikan keduanya
// mysqli_fetch_object()

// while ($chars = mysqli_fetch_assoc($result) ) {
// var_dump($chars["name"]);
// };

function register($data) {
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // Cek username sudah ada atau belum
    $userAvailability = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if ( mysqli_fetch_assoc($userAvailability)) {
        echo "<script>
        alert('Username is not available');
      </script>";
      return false;
    }

    // Cek email sudah ada atau belum
    $emailAvailability = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    if ( mysqli_fetch_assoc($emailAvailability)) {
        echo "<script>
        alert('Email is already registered');
      </script>";
      return false;
    }

    // Cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
        alert('Confirm password does not match');
      </script>";
      return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // Tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$email', '$password')");
    return mysqli_affected_rows($conn);
}
?>