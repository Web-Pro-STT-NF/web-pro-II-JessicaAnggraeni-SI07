<?php
require_once 'class_account.php';

$atm1 = new account('0112', 7300000);
$atm2 = new account('0113', 4300000);

$atm1->cetak();
$atm1->deposit(2000000);
echo '<br/>';
$atm1->cetak();

?>