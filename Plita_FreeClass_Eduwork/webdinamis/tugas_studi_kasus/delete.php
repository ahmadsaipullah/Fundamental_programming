<?php

@include("conncet.php");

$isbn = $_GET['isbn'];

$delete = mysqli_query($sqli, "DELETE FROM buku WHERE isbn = '$isbn'");


header("Location:index.php");




?>