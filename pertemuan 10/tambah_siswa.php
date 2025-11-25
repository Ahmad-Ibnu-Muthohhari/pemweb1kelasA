<h2>Tambah Data Siswa</h2>

<form method="POST">
    Nama Siswa: <br>
    <input type="text" name="nama_siswa"><br><br>

    Alamat Siswa: <br>
    <textarea name="alamat_siswa"></textarea><br><br>

    Jenis Kelamin: <br>
    <select name="jk_siswa">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br><br>

    Agama: <br>
    <input type="text" name="agama_siswa"><br><br>

    Asal Sekolah: <br>
    <input type="text" name="asal_sekolah"><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama_siswa'];
    $alamat = $_POST['alamat_siswa'];
    $jk     = $_POST['jk_siswa'];
    $agama  = $_POST['agama_siswa'];
    $asal   = $_POST['asal_sekolah'];

    mysqli_query($koneksi, "INSERT INTO data_siswa VALUES ('', '$nama', '$alamat', '$jk', '$agama', '$asal')");

    echo "<script>alert('Data berhasil disimpan!'); window.location='data_siswa.php';</script>";
}
?>
