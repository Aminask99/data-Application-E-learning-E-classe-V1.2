<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e_classe_db";
    // Create connection
    $connect =mysqli_connect($servername, $username, $password,$dbname);

    $id = $_GET['id'];
    $req = "DELETE FROM courss where id = '$id' ";
    $connect -> query($req);
    header('location: courss.php');
?>