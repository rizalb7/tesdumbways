<div class="container">
    <a href='index.php?r=user/tambah genre' class='btn btn-success btn-sm'>Tambah Genre</a>
    <a href='index.php?r=user/tambah singers' class='btn btn-success btn-sm'>Tambah Singers</a>
    <a href='index.php?r=user/tambah music' class='btn btn-success btn-sm'>Tambah Music</a>
</div>
<table class='table table-striped'>
    <thead>
        <tr>
            <th>Judul Lagu</th>
            <th>Durasi</th>
            <th>Jenis Genre</th>
            <th>Nama Singers</th>
            <th>Photo Album</th>
            <th>Deskripsi</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
    <?php
$query="select * from music JOIN genre using(id_genre) JOIN singers using(id_singers) order by id_music desc";
$res=mysqli_query(koneksi(),$query);
while($row=mysqli_fetch_object($res)){
    
    echo "
    <tr>
        <td>$row->title</td>
        <td>$row->durasi</td>
        <td>$row->name_genre</td>
        <td>$row->name_singers</td>
        <td>$row->photo</td>
        <td>$row->deskripsi</td>
        <td>
            <a href='index.php?r=user/edit&id=$row->id_music' class='btn btn-info'>EDIT</a>
            <a onclick='return confirm(\"Anda Akan Menghapus Data ini\")' href='index.php?r=user/hapus&id=$row->id_music' class='btn btn-danger'>HAPUS</a>
        </td>
    </tr>
    ";
}
    ?>
    </tbody>
</table>