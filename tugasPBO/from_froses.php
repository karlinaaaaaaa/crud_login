<?php
 session_start();

    $username = $_POST['usename'];
    $password = $_POST['password'];
    


 $koneksi = new PDO('mysql:host=localhost;dbname=sekolahmd','root','');

 $query = $koneksi->query("select * from user where usename='$username' AND password='$password'");
 $data = $query->fetch();
 if($query->rowCount() > 0){
      if($data['role']=="admin"){
      $_SESSION['username'] = $username;
      header("Location:index.php");
   }
   else if($data['role']=="user"){
      $_SESSION['username'] = $username;
      header("Location:index.php");
  }
}else{
  header("Location:from.php");
}