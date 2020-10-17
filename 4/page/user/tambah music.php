<?php 
    if(isset($_POST['tombol'])){
        $title=$_POST['title'];
        $durasi=$_POST['durasi'];
        $id_genre=$_POST['id_genre'];
        $id_singers=$_POST['id_singers'];
        $deskripsi=$_POST['deskripsi'];
        $temp = $_FILES['photo']['tmp_name'];
        $name = $_FILES['photo']['name'];
        $size = $_FILES['photo']['size'];
        $type = $_FILES['photo']['type'];
        if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')) {
            move_uploaded_file($temp,'gambar/'.$name);
            mysqli_query(koneksi(), "insert into music (title, durasi, id_genre, id_singers, photo, deskripsi) VALUES ('$title', '$durasi', '$id_genre', '$id_singers', '$name', '$deskripsi')");
            echo "<script>
                        alert('Berhasil Menambahkan Data');
                        window.location.href='index.php?r=user/tampil';
                        </script>";
        }else{
            echo "<b>Gagal Upload File</b>";
        }
    }
?>
<form action='' method='post' enctype="multipart/form-data">
    <div class='from-group'>
        <label>Judul Lagu:</label>
        <input name='title' class='form-control' required />
    </div>
    <div class='from-group'>
        <label>Durasi:</label>
        <input name='durasi' class='form-control' required />
    </div>
    <div class='from-group'>
        <label>Jenis Genre:</label>
        <select name="id_genre" id="id_genre">
          <option disabled selected> Pilih Genre </option>
         <?php 
          $sql=mysqli_query(koneksi(), "SELECT * FROM genre");
          while ($data=mysqli_fetch_array($sql)) {
         ?>
           <option value="<?=$data['id_genre']?>"><?=$data['name_genre']?></option> 
         <?php
          }
         ?>
          </select>
    </div>
    <div class='from-group'>
        <label>Nama Singers:</label>
        <select name="id_singers" id="id_singers">
          <option disabled selected> Pilih Singers </option>
         <?php 
          $sql=mysqli_query(koneksi(), "SELECT * FROM singers");
          while ($data=mysqli_fetch_array($sql)) {
         ?>
           <option value="<?=$data['id_singers']?>"><?=$data['name_singers']?></option> 
         <?php
          }
         ?>
          </select>
    </div>
    <div class='from-group'>
        <label>Foto Album:</label>
        <input type='file' name='photo' class='form-control' required />
    <div class='from-group'>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" class='form-control'></textarea>
    </div>
    <button class='btn btn-primary btn-lg btn-block' name="tombol" value="tombol">Simpan</button>
</form>