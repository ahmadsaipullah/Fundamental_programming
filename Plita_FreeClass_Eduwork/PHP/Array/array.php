<?php
//    $array = array(
//         array (
//             'nama' => 'pelita',
//             'kelas' => 'laravel',
//             'alamat' => 'bandung',
//             'tanggal_lahir' => '1997-12-27',
//             'nilai' => 90
//             ),
//         array (
//             'nama' => 'najmina',
//             'kelas' => 'venu js',
//             'alamat' => 'jakarta',
//             'tanggal_lahir' => '1998-10-07',
//             'nilai' => 55
//         ),
//         array (
//             'nama' => 'anita',
//             'kelas' => 'desain',
//             'alamat' => 'semarang',
//             'tanggal_lahir' => '1999-08-20',
//             'nilai' => 80
//         ),
//         array (
//             'nama' => 'bayu',
//             'kelas' => 'digital marketing',
//             'alamat' => 'bandung',
//             'tanggal_lahir' => '1990-01-01',
//             'nilai' => 65
//         ),
//         array (
//             'nama' => 'nasa',
//             'kelas' => 'ui/ux desainer',
//             'alamat' => 'bandung',
//             'tanggal_lahir' => '1995-04-10',
//             'nilai' => 70
//         ),
//         array (
//             'nama' => 'rahma',
//             'kelas' => 'node js',
//             'alamat' => 'yongyakarta',
//             'tanggal_lahir' => '1993-09-15',
//             'nilai' => 85
//         ),
//     );


        $array = file_get_contents('data.json');
        $data = json_decode($array, true);



    foreach ($data as $key => $value) {
        echo "Nama : ".$value ['nama'].
        ", tanggal_lahir : ".$value ['tanggal_lahir'].
        ", umur : ".$value ['umur'].
        ", alamat : ".$value ['alamat'].
        ", kelas : ".$value ['kelas'].
        ", nilai : ".$value ['nilai'].
        ", hasil : ".$value ['hasil'];
        echo "<br> <br>";
    } 








   



?>

