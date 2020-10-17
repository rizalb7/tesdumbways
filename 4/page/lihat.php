<?php 
$id=isset($_GET['id'])?$_GET['id']:'';
$id=mysqli_real_escape_string(koneksi(),$id);
$query="select * from music JOIN genre using(id_genre) JOIN singers using(id_singers) where id_music=$id";
$res=mysqli_query(koneksi(),$query);
$row=mysqli_fetch_object($res);
echo "
<main role='main' class='inner cover'>
<div class='pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center'>
  <h1 class='cover-heading'>$row->title</h1>
  <h4 class='cover-heading'>by $row->name_singers</h4>
  <h5 class='cover-heading'>Genre: $row->name_genre</h5>
  <img class='cover-heading' src='page/user/gambar/".$row->photo."' width='300px' height='300px'>
  <p class='lead'>Deskripsi: <br> $row->deskripsi</p>
</div>
  </main>
  ";
?>