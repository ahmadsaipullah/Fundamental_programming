<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'himti';


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("connection failed: " .mysqli_connect_error());
}

// echo "sukses terkoneksi";
// mysqli_close($conn);


$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        echo "buku : " .$row ["isbn"]. " " .$row["judul"]. "<br>";
    }
}else {
    echo "0 results";
}
$conn->close();


?>
