<?php
require_once 'class_dispenser.php';

$beli1 = new Dispenser('Greek Yogurt', 300, 15000);
$beli1->isi(300);
$beli1->transaksi(100000);
$beli1->cetak();
?>