<?php
require_once 'class_bank.php';

$ab1 = new accountBank('0112', 7300000, 'Erick');
$ab2 = new accountBank('0113', 4300000, 'Joel');
$ab3 = new accountBank('0114', 2800000, 'Chris');

$ab1->cetak();
echo '<br>';
$ab2->cetak();
echo '<br>';
$ab1->transfer($ab2, 1000000);
echo 'Biaya Admin : '. accountBank::$biaya_admin;
echo '<hr>';
$ab1->cetak();
echo '<hr>';
$ab2->cetak();


$ar_bank = [$ab1, $ab2, $ab3];

?>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>no</th><th>No Account</th><th>Pemilik</th><th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($ar_bank as $acc) {
            
         ?>
        <tr>
            <td><?= $no?></td>
            <td><?= $acc->nomor?></td>
            <td><?= $acc->customer?></td>
            <td><?= $acc->saldo?></td>
        </tr>
        <?php
        $no++; 
        }
        ?>
    </tbody>
</table>