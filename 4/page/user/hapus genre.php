<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id = mysqli_real_escape_string(koneksi(), $id);

$query = "DELETE FROM genre where id_genre=$id ";
if (mysqli_query(koneksi(), $query)) {
 echo "<script>
        alert('Berhasil Dihapus');
        window.location.href='index.php?r=user/tambah genre';
    </script>";
}
