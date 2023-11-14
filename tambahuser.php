<?php
include_once('config.php');
if(isset($_POST['simpan'])){
    extract($_POST);
    if($password1 == $password2){
        //simpan data
        $pass = password_hash($password1,PASSWORD_DEFAULT);
        $insert = mysqli_query($conn, "insert into tbuser values(null,'$nama','$username','$pass')");
        if($insert){
            echo "<script>alert('password tidak sama!!!');location.href='?hal=tampiluser';</script>";

        }
    }else{
        //peringatan password tidak sama
        echo "<script>alert('password tidak sama!!!');location.href='?hal=tambahuser';</script>";

    }

    }
?>
<form action="?hal=tambahuser" method="post">
    <table>
        <tr>
            <td>Nama User</td>
            <td>
                <input type="text" name="nama" placeholder="Nama User" required>
</td>
</tr>
<tr>
    <td>Username</td>
    <td>
    <input type="text" name="username" placeholder="username" required>
</td>
</tr>
<tr>
   <td> password</td>
   <td>
   <input type="password" name="password1" placeholder="password" required>
</td> 
<tr>
    <td>konfirmasi password</td>
    <td>
    <input type="password" name="password2" placeholder="paswword" required>
</td>
</tr>
<tr>
    <td>
    <button type="submit" name="simpan">simpan</button>
</td>
<td>
    <button type="reset">Reset</button>
</td>
</tr>
</table>
</form>