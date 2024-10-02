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
        <center><img src="lgsmk9.png" alt="" width="100" height="120">
        <img src="uny.png" alt="" width="100" height="120"></center>
    </span>
        <center>
        <h2>PENDAFTARAN MAHASISWA BARU</h2>
        <h2>UNIVERSITAS NEGERI YOGYAKARTA</h1>
        <h2>TAHUN 2023/2024</h2>
        </center>
    <hr>
    <style>
        form {
            width: 300px;
        }
        label {
            display: inline-block;
            width: 120px;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        textarea,
        select {
            width: 150px;
        }
        input[type="radio"] {
            margin-left: 5px;
        }
    </style>
</head>
<body>
        <center>
            <form action="proses_pendaftaran.php" method="POST">
                <table>
                    <tr>
                        <td><label for="nama">NAMA:</label></td>
                        <td><input type="text" id="nama" name="nama" required></td>
                    </tr>
                    <tr>
                        <td><label for="username">USERNAME:</label></td>
                        <td><input type="text" id="username" name="username" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">PASSWORD:</label></td>
                        <td><input type="password" id="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">EMAIL:</label></td>
                        <td><input type="email" id="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="jenis_kelamin">JENIS KELAMIN:</label></td>
                        <td>
                            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
                            <label for="laki_laki">Laki-laki</label>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                            <label for="perempuan">Perempuan</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="agama">AGAMA:</label></td>
                        <td>
                            <select name="agama" id="agama" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Aliran Kepercayaan">Aliran Kepercayaan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="asal_sekolah">ASAL SEKOLAH:</label></td>
                        <td><input type="text" id="asal_sekolah" name="asal_sekolah" required></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">ALAMAT:</label></td>
                        <td><textarea id="alamat" name="alamat" rows="2" cols="30" required></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Daftar">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
    </html>
    
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $wa = $_POST['wa'];  // Pastikan form input memiliki field 'wa'
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];    
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];  // Pastikan form input memiliki field 'sekolah_asal'

    // Query untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO pendaftaranmahasiswa (nama, alamat, wa, email, jenis_kelamin, agama, sekolah_asal)
    VALUES ('$nama', '$alamat', '$wa', '$email', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    // Menjalankan query dan memeriksa apakah berhasil
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran Berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi 
$conn->close();
?>

