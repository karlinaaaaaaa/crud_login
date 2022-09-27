<?php

$nis = $_GET['nis'];

$db = new PDO("mysql:host=localhost;dbname=sekolahmd", 'root', '');
$query = $db->query("DELETE FROM siswa WHERE nis='$nis'");

if($query){
    header("location:index.php");
}