<?php
include_once ("controller/nhanThongTin.php");

$getThongtin = new Thongtin();
$ID = "ANDANH";
$IDsanpham = "CHUNG";
if (isset($_POST['IDacc'])) $ID = $_POST['IDacc'];
if (isset($_POST['IDprod'])) $IDsanpham = $_POST['IDprod'];
$Ten = $_POST['name'];
$Email = $_POST['email'];
$Review = $_POST['review'];

$getThongtin->nhanThongtin($ID,$IDsanpham,$Ten,$Email,$Review);





?>