<?php
$conn = mysqli_connect("localhost", "root", "", "billy");

if (!$conn) {
    die("koneksi gagal!: " . mysqli_connect_error());
}
?>