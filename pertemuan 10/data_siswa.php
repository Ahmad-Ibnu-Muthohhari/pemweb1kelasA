<?php 
include "koneksi.php";
$ambil = mysqli_query($koneksi, "SELECT * FROM data_siswa");
?>

<h2>Data Siswa</h2>
<a href="tambah_siswa.php">+ Tambah Siswa</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>JK</th>
        <th>Agama</th>
        <th>Asal Sekolah</th>
    </tr>

    <?php while($data = mysqli_fetch_array($ambil)): ?>
    <tr>
        <td><?= $data['id_siswa']; ?></td>
        <td><?= $data['nama_siswa']; ?></td>
        <td><?= $data['alamat_siswa']; ?></td>
        <td><?= $data['jk_siswa']; ?></td>
        <td><?= $data['agama_siswa']; ?></td>
        <td><?= $data['asal_sekolah']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
