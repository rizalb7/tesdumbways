<main role='main'>

<div class='album py-5 bg-light'>

  <div class='container'>
    <div class='row'>
<?php
$query="select * from music JOIN genre using(id_genre) JOIN singers using(id_singers) order by id_music desc";
$res=mysqli_query(koneksi(),$query);
while($row=mysqli_fetch_object($res)){
echo"
      <div class='col-md-4'>
        <div class='card mb-4 shadow-sm'>
        <img src='page/user/gambar/".$row->photo."' width='100%' height='100%'>
          <div class='card-body'>
            <p class='card-text'>$row->title - $row->name_singers</p>
            <p class='card-text'>Genre: $row->name_genre</p>
            <div class='d-flex justify-content-between align-items-center'>
              <div class='btn-group'>
              <a href='index.php?r=lihat&id=$row->id_music' class='btn btn-sm btn-outline-secondary'>Lihat</a>
              </div>
              <small class='text-muted'>Durasi $row->durasi</small>
            </div>
          </div>
        </div>
      </div>
";
}
?>

    </div>
  </div>
  </div>
</main>