<?php 
$id=isset($_GET['id'])?$_GET['id']:'';
$id=mysqli_real_escape_string(koneksi(),$id);
if(isset($_POST['title'])){
    $title=$_POST['title'];
    $durasi=$_POST['durasi'];
    $id_genre=$_POST['id_genre'];
    $id_singers=$_POST['id_singers'];
    $deskripsi=$_POST['deskripsi'];
    $query="UPDATE music set title='$title', id_genre ='$id_genre', id_singers='$id_singers', deskripsi='$deskripsi' where id_music=$id ";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Mengubah Data');
        window.location.href='index.php?r=user/tampil';
    </script>";
    }
}
$query="select * from music JOIN genre using(id_genre) JOIN singers using(id_singers) where id_music=$id";
$res=mysqli_query(koneksi(),$query);
$row=mysqli_fetch_object($res);
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Judul Lagu:</label>
        <input name='title' value="<?=$row->title?>" class='form-control' required />
    </div>
    <div class='from-group'>
        <label>Durasi:</label>
        <input name='durasi' value="<?=$row->durasi?>" class='form-control' required />
    </div>
    <div class='from-group'>
        <label>Jenis Genre:</label>
        <select name="id_genre" id="id_genre">
          <option value="<?=$row->id_genre?>"><?=$row->name_genre?></option>
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
          <option value="<?=$row->id_singers?>"><?=$row->name_singers?></option>
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
        <label>Deskripsi:</label>
        <input name='deskripsi' value="<?=$row->deskripsi?>" class='form-control' required />
    </div>
    <button class='btn btn-primary btn-lg btn-block' name="tombol" value="tombol">Simpan</button>
</form>