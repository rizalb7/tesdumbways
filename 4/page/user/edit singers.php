<?php 
$id=isset($_GET['id'])?$_GET['id']:'';
$id=mysqli_real_escape_string(koneksi(),$id);
if(isset($_POST['name_singers'])){
    $name_singers=$_POST['name_singers'];
    $query="UPDATE singers set name_singers='$name_singers' where id_singers=$id ";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Mengubah Data');
        window.location.href='index.php?r=user/tambah singers';
    </script>";
    }
}
$query="Select * from singers where id_singers=$id";
$res=mysqli_query(koneksi(),$query);
$row=mysqli_fetch_object($res);
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Nama Genre:</label>
        <input name='name_singers' value="<?=$row->name_singers?>" class='form-control' required />
    </div>
    <button class='btn btn-primary btn-md'>Simpan</button>
</form>