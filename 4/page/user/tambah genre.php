<?php 
if(isset($_POST['name_genre'])){
    $name_genre=$_POST['name_genre'];
    $query="INSERT INTO genre (name_genre) values('$name_genre')";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Menambahkan Genre');
        window.location.href='';
    </script>";
    }
}
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Nama Genre:</label>
        <input name='name_genre' class='form-control' required />
    </div>
    <button class='btn btn-primary btn-md'>Simpan</button>
</form>
<table class='table table-striped'>
    <thead>
        <tr>
            <th>ID Genre</th>
            <th>Nama Genre</th>
        </tr>
    </thead>
    <tbody>
    <?php
$query="select * from genre order by id_genre desc";
$res=mysqli_query(koneksi(),$query);
while($row=mysqli_fetch_object($res)){
    
    echo "
    <tr>
        <td>$row->id_genre</td>
        <td>$row->name_genre</td>
        <td>
            <a href='index.php?r=user/edit genre&id=$row->id_genre' class='btn btn-info'>EDIT</a>
            <a onclick='return confirm(\"Anda Akan Menghapus Data ini\")' href='index.php?r=user/hapus genre&id=$row->id_genre' class='btn btn-danger'>HAPUS</a>
        </td>
    </tr>
    ";
}
    ?>
    </tbody>
</table>