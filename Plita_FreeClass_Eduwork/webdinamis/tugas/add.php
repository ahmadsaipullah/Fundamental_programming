<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Upload</title>
</head>
<body>

<?php
        @include("konek.php");

?>

    <div class="container">
    <div class="row" style="margin: 50px;">
        <div class="col-md-12 text-center">
            <h4>ADD ITEM</h4>
        </div>
    </div>


        <div class="row">
            <div class="col-md-12">
                <form action="add.php" method="post" name="form1">
                     <table width="100%" class="table-bordered" cellpadding="10" border="0">
                         <tr>
                            <td>NAMA</td>
                            <td><input type="text" class="form-control" name="nama" required></td>
                         </tr>
                         <tr>
                            <td>GAMBAR</td>
                            <td> <input class="form-control" type="file" id="formFile" name="gambar" required></td> 
  
                         </tr>
                         <tr>
                            <td>HARGA</td>
                            <td><input type="number" class="form-control" name="harga" required></td>
                         </tr>
                         <tr>
                            <td>STOK</td>
                            <td><input type="number" class="form-control" name="qty" required></td>
                         </tr>
                         <tr>
                             <td></td>
                             <td><input type="submit" class="form-control btn btn-primary" name="submit" value="Add"></td>
                         </tr>
                </table>
                </form>

            </div>
        </div>
    </div>

</body>
</html>

<?php
    if ( isset($_POST['submit'])) {
         $nama = $_POST['nama'];
         $gambar = $_POST['gambar'];
         $harga = $_POST['harga'];
         $qty = $_POST['qty'];

        // print_r($_POST);
       $insert = mysqli_query($sqli, "INSERT INTO `stock` (`nama`, `gambar`, `harga`, `qty`) VALUE ('$nama' ,'$gambar', '$harga', '$qty');");

       if(isset($_POST)===true){
        echo '<script>alert("Item Berhasil Di Tambah");
                 document.location.href = "index.php";
        </script>';
         
        }else {
        '<script>alert("Item Gagal Di Tambah");
                 document.location.href = "index.php";
        </script>';
    }
       

    }   
 

?>

