<?php

    $servername = 'localhost';
    $database = 'adidas';
    $username = 'root';
    $password = '';


    $sqli = mysqli_connect($servername,$username,$password,$database);

    // if(!$sqli) {
    //     die("connection failed: " .mysqli_connect_error());
    // }
    
    // echo "sukses terkoneksi";
    // mysqli_close($sqli);
    // $sql = "SELECT * FROM stock";
    // $result = $sqli->query($sql);
    
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_array()) {
    //         echo "stock : " .$row ["nama"]. " " .$row["harga"]. "<br>";
    //     }
    // }else {
    //     echo "0 results";
    // }
    // $sqli->close();


?>