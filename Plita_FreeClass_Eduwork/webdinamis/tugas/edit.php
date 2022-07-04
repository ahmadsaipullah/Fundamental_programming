<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Edit</title>
</head>
<body>

<?php
        @include("konek.php");

        $nama = $_GET['n'];
        $stock = mysqli_query($sqli, "SELECT * FROM stock WHERE id='$nama'");
        
         while($data_stock = mysqli_fetch_array($stock)) {
             $nama = $data_stock['nama'];
             $gambar = $data_stock['gambar'];
             $harga = $data_stock['harga'];
             $qty = $data_stock['qty'];
      
         }
 
?>

    <div class="container">
    <div class="row" style="margin: 50px;">
        <div class="col-md-12 text-center">
            <h4>EDIT ITEM</h4>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <form action="edit.php?n" method="post" name="form1">
                     <table width="100%" class="table-bordered" cellpadding="10" border="0">
                         <tr>
                            <td>NAMA</td>
                            <td><input type="text" class="form-control" name="nama" value="<?php echo $nama;?>" required></td>
                         </tr>
                         <tr>
                            <td>GAMBAR</td>
                            <td> <input class="form-control" type="file" id="formFile" name="gambar" value="<?php echo $gambar ; ?>" required> </td> 
  
                         </tr>
                         <tr>
                            <td>HARGA</td>
                            <td><input type="number" class="form-control" name="harga" value="<?php echo $harga; ?>"></td>
                         </tr>
                         <tr>
                            <td>STOK</td>
                            <td><input type="number" class="form-control" name="qty" value="<?php echo $qty; ?>"></td>
                         </tr>
                         <tr>
                             <td></td>
                             <td><input type="submit" class="form-control btn btn-primary" name="submit" value="Add" ></td>
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

        //print_r($_POST);
        
       $result = mysqli_query($sqli, "UPDATE stock SET nama = '$nama', gambar = '$gambar' , harga = '$harga', qty = '$qty' WHERE nama = '$nama'; ");

       if(isset($_POST)===true){
           echo '<script>alert("Item Berhasil Di Ubah");
                    document.location.href = "index.php";
           </script>';
            
       }else{
          echo '<script>alert("Item Gagal Di Ubah");
                 document.location.href = "index.php";
            </script>'; 
       }



    }

   

?>