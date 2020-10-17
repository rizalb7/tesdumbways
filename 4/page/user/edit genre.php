<?php 
$id=isset($_GET['id'])?$_GET['id']:'';
$id=mysqli_real_escape_string(koneksi(),$id);
if(isset($_POST['name_genre'])){
    $name_genre=$_POST['name_genre'];
    $query="UPDATE genre set name_genre='$name_genre' where id_genre=$id ";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Mengubah Data');
        window.location.href='index.php?r=user/tambah genre';
    </script>";
    }
}
$query="Select * from genre where id_genre=$id";
$res=mysqli_query(koneksi(),$query);
$row=mysqli_fetch_object($res);
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Nama Genre:</label>
        <input name='name_genre' value="<?=$row->name_genre?>" class='form-control' required />
    </div>
    <button class='btn btn-primary btn-md'>Simpan</button>
</form>