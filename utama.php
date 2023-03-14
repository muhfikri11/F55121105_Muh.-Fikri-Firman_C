<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="utama.css">
    <title>Data Anggota</title>
</head>
<body>
    <table border="2" width="100%" align="center">
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>jurusan</td>
            <td>Alamat</td>
        </tr>

        <?php
            include  "koneksi.php";
            $datanya = mysqli_query($koneksi,"SELECT * FROM mahasiswa") or die();
            $nomor = 1;
            while($data = mysqli_fetch_array($datanya)){
        ?>
        <tr>
            <td><?=$data['Nama']?></td>
            <td><?=$data['NIM']?></td>
            <td><?=$data['Jurusan']?></td>
            <td><?=$data['Alamat']?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <br>
    <input type="submit" id="submit" value="Tambah">
    <input type="submit" id="submit" value="Update">
    <input type="submit" id="submit" value="Hapus">
    
</body>
</html>