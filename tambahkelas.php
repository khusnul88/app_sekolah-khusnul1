<?php
include_once('config.php');
if(isset($_POST['simpan'])){
    extract($_POST);
    $ins = mysqli_query($conn, "insert into tbkelas values(null,'$nama_kelas','$jurusan')");
    if($ins){
        ?>

        <script>
            alert('simpan berhasil');
            location.href = '?hal=tampilkelas';
            </script>
            <?php

    }

    }
    ?>
    <a href="?hal=tampilkelas">Kembali ke Tampil Kelas</a>
    <br>
    <br>
    <form action="?hal=tambahkelas" method="post">
        <table>
            <tr>
                <td>Nama kelas</td>
                <td>
                    <input type="text" name="nama_kelas" placeholder="Nama kelas" required>
</td>
</tr>
<tr>
    <td>Jurusan</td>
    <td>
   <select name="jurusan" required>
<option value="">==pilih jurusan==</option>
<option value="RPL">Rekayasa perangkat lunak</option>
<option value="DKV">Desain komunikasi visual</option>
<option value="MP">Manajemen perkantoran</option>
<option value="AK">Akuntansi</option>
<option value="BD">Bisnis Digital</option>
</select>
</td>
</tr>
</tr>
<tr>
    <td>
        <button type="submit" name="simpan" value="simpan">simpan</button>
</td>
</tr>
</table>

</form>

