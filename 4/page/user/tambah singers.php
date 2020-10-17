<?php 
if(isset($_POST['name_singers'])){
    $name_singers=$_POST['name_singers'];
    $query="INSERT INTO singers (name_singers) values('$name_singers')";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Menambahkan Singers');
        window.location.href='index.php?r=user/tambah singers';
    </script>";
    }
}
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Nama Singers:</label>
        <input name='name_singers' class='form-control' required />
    </div>
    <button class='btn btn-primary btn-md'>Simpan</button>
</form>
<table class='table table-striped'>
    <thead>
        <tr>
            <th>ID Singers</th>
            <th>Nama Singers</th>
        </tr>
    </thead>
    <tbody>
    <?php
$query="select * from singers order by id_singers desc";
$res=mysqli_query(koneksi(),$query);
while($row=mysqli_fetch_object($res)){
    
    echo "
    <tr>
        <td>$row->id_singers</td>
        <td>$row->name_singers</td>
        <td>
            <a href='index.php?r=user/edit singers&id=$row->id_singers' class='btn btn-info'>EDIT</a>
            <a onclick='return confirm(\"Anda Akan Menghapus Data ini\")' href='index.php?r=user/hapus singers&id=$row->id_singers' class='btn btn-danger'>HAPUS</a>
        </td>
    </tr>
    ";
}
    ?>
    </tbody>
</table>