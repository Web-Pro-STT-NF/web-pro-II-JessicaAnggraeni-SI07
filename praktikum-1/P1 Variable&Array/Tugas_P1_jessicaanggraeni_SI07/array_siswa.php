<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Aray</title>
</head>
<body>
<?php
 $ns1 = ['id'=>1,'nim'=>'01123','uts'=>70,'uas'=>97,'tugas'=>80];
 $ns2 = ['id'=>2,'nim'=>'01124','uts'=>69,'uas'=>80,'tugas'=>85];
 $ns3 = ['id'=>3,'nim'=>'01125','uts'=>90,'uas'=>92,'tugas'=>90];
 $ns4 = ['id'=>4,'nim'=>'01126','uts'=>97,'uas'=>98,'tugas'=>95];

 $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

 ?>
 <h3 class="text-center m-3">DAFTAR NILAI SISWA</h3>
 <table class="table table-secondary table-striped">
 <thead>
 <tr class="text-center">
 <th>No</th><th>NIM</th><th>UTS</th>
 <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody class="text-center">
 <?php
 $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nim'].'</td>';
 echo '<td>'.$ns['uts'].'</td>';
 echo '<td>'.$ns['uas'].'</td>';
 echo '<td>'.$ns['tugas'].'</td>';
 $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
 echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</body>
</html>