<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <span>
    <center>
    <img src="lgsmk9.png" alt="logo1" width="100" height="125 "> 
    <img src="uny.png" alt="logo3" width="100" height="125 ">

    <h1> PENDAFTARAN MAHASISWA BARU</h1> 
    <h1> UNIVERSITAS NEGERI YOGJAKARTA</h1>
    <h1> TAHUN 2023/2024</h1>
    
    <a href="daftar.php">[+] Tambah Baru</a>
    </center>
</span>
<hr> 
<center>
<table border="mahasiswa">
    
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>WA</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
</tr>
<tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
</tr>
</table
        <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $row["nama"] . "</td>
                            <td>" . $row["alamat"] . "</td>
                            <td>" . $row["wa"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["jenis_kelamin"] . "</td>
                            <td>" . $row["agama"] . "</td>
                            <td>" . $row["sekolah_asal"] . "</td>
                            <td class='action-links'>
                                <a href='update.php?id=" . $row["id"] . "'>Edit</a> | 
                                <a href='pendaftar.php?delete=" . $row["id"] . "' onclick='return confirm(\"Apakah anda yakin?\")'>Hapus</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>Tidak ada data pendaftar</td></tr>";
            }
        ?>
    </center>
</body>
</html>
<?php
$conn->close();
?>
</center>

<?php
$servername = "localhost"; //Nama server database
$username = "root";        //Nama pengguna MySQL
$password = "";             //Nama sandi MySQL
$dbname = "db_mahasiswa"; //Nama database

//Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

//Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>