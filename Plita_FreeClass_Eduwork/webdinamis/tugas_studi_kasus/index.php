<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .col-md-3 a{

            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        .col-md-3 a:hover {
            color: yellow;
        }

        body{
            background-color: grey;
        }
        .col-md-12 a:hover {
            background-color: black;
            color: yellow;
        }
        
    </style>

    <title>Data Buku</title>
</head>
<body>

<?php
    @include("conncet.php");
    $book= mysqli_query($sqli, "SELECT buku. *, katalog.nama as nama_katalog, penerbit.nama_penerbit, pengarang.nama_pengarang FROM buku
                            LEFT JOIN katalog ON katalog.id_katalog = buku.id_katalog
                            LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
                            LEFT JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang 
                            ORDER BY judul ASC");

?>

<div class="container">
    <div class="row text-center fw-bold" style="margin: 50px;">
    <div class="col-md-3">
        <a href="index.php">BUKU</a>
    </div>
    <div class="col-md-3">
        <a href="katalog.php">KATALOG</a>
    </div>
    <div class="col-md-3">
        <a href="penerbit.php">PENERBIT</a>
    </div>
    <div class="col-md-3">
        <a href="pengarang.php">PENGARANG</a>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <a href="add.php" class="btn btn-primary">Add New Buku</a>
            <table class="table text-center bg-light" border="2">
                <thead class="bg-danger fw-bold">
                    <tr>
                    <td>NO</td>
                    <td>ISBN</td>
                    <td>JUDUL</td>
                    <td>TAHUN</td>
                    <td>PENERBIT</td>
                    <td>PENGARANG</td>
                    <td>KATALOG</td>
                    <td>STOCK</td>
                    <td>HARGA PINJAM</td>
                    <td>ACTION</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $s=0;
                        while($books= mysqli_fetch_array($book)) {
                            $s++;
                            echo "
                    <tr>
                        <td>$s</td>
                        <td>".$books['isbn']."</td>
                        <td>".$books['judul']."</td>
                        <td>".$books['tahun']."</td>
                        <td>".$books['nama_penerbit']."</td>
                        <td>".$books['nama_pengarang']."</td>
                        <td>".$books['nama_katalog']."</td>
                        <td>".$books['qty_stok']."</td>
                        <td>".$books['harga_pinjam']."</td>
                        <td>
                        <a href='edit.php?isbn=".$books['isbn']." 'class=' btn btn-warning'>Edit</a>
                        <a href='#' class=' btn btn-danger' onclick='confirmation(`".$books['isbn']."`)' >Delete</a>
                        </td>
                    </tr>";
                        }
                    ?>
                    
                </tbody>


            </table>
        </div>
    </div>
</div>
    
</body>
</html>

<script type="text/javascript">

function confirmation(isbn) {
    if (confirm('Apakah anda yakin ingin menghapus data ini ?')) {
        window.location.href = 'delete.php?isbn='+isbn;
    }
}

</script>