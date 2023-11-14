<?php
require_once('config.php');
if(isset($_POST['simpan'])){
    extract($_POST);
    $insert = mysqli_query($conn,"insert into tbsiswa values(null,'$nis','$nisn','$nama','$alamat','$hp','$agama','$jk')");
    if($insert){
        ?>
        <script>
            alert('simpan berhasil');
            location.href='?hal=tampil';
            </script>
            <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <a href="?hal=tampil">kembali ke home</a>
    <br>
    <br>
    <form action="?hal=tambah" method="post">
        <table>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" placeholder="Nomor induk siswa" maxlength="20"></td>
</tr>
<tr>
    <td>NISN</td>
             <td><input type="text" name="nisn" placeholder="Nomor induk siswa nasional" maxlength="10"></td>
             
</tr>
<tr>
    <td>Nama siswa</td>
             <td><input type="text" name="nama" placeholder="Nama siswa" maxlength="50"></td>
</tr>
<tr>
    <td>Alamat</td>
             <td><input type="text" name="alamat" placeholder="Alamat" maxlength="10"></td>
</tr>
<tr>
    <td>Hp</td>
             <td><input type="text" name="hp" placeholder="Hp" maxlength="15"></td>
</tr>
<tr>
    <td>Agama</td>
    <td>
        <select name="agama">
            <option value="">==pilih agama==</option>
            <option value="Islam">islam</option> <option>
            <option value="Kristen">kristen</option>
            <option value="Katholik">katholik</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
</select>
</td>
<tr>
    <td>Jenis kelamin</td>
    <td>
        <input type="radio"name="jk" value="L">Laki-laki
        <input type="radio"name="jk" value="L">Peremepuan
</td>
<tr>
    <td><button type="submit"name="simpan" value="simpan">simpan</button></td>
    <td><button type="resett" name="reset">reset</button></td>
</tr>
</tr>
</tr>
</table>
</form>
</body>
</html>