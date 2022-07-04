<?php

@include("konek.php");

$nama = $_GET['d'];

$delete = mysqli_query($sqli, "DELETE FROM stock WHERE id = '$nama'");

header("Location:index.php");





?>