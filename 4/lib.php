<?php
function koneksi(){
    $koneksi=mysqli_connect("localhost",'root','','dbmusic');
    return $koneksi;
}