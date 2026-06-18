<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_registrasi"
);

if (!$conn) {
    die("Koneksi database gagal");
}
?>