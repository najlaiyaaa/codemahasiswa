<?php
$host = 'localhost';
$dbname = 'pendaftaranmahasiswa';
$username = 'root';
$password = '';

// membuat koneksi ke database
$conn new mysql( $host , $username , $password , $dbname);


//memeriksa koneksi
if ($conn->connect_error)(
    die("connection failed: " , $conn->connet_error);

)
?>