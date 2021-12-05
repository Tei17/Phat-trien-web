<?php
include 'VanDongVien.php';


$n = 0;
$arrten = array();
$arrtuoi = array();
$arrmonthidau = array();
$arrcannang = array();
$arrchieucao = array();


isset($_GET['n']) ? $n = $_GET['n'] : $n = 0;
isset($_GET['ten']) ? $arrten = $_GET['ten'] : $arrten = [];
isset($_GET['tuoi']) ? $arrtuoi = $_GET['tuoi'] : $arrtuoi = [];
isset($_GET['monthidau']) ? $arrmonthidau = $_GET['monthidau'] : $arrmonthidau = [];
isset($_GET['cannang']) ? $arrcannang = $_GET['cannang'] : $arrcannang = [];
isset($_GET['chieucao']) ? $arrchieucao = $_GET['chieucao'] : $arrchieucao = [];

echo '<h1>Danh sách sinh viên</h1>';
for ($i = 0; $i < $n; $i++) {
    $p = new VanDongVien();
    $p->Nhap($arrten[$i], $arrtuoi[$i], $arrmonthidau[$i], $arrcannang[$i], $arrchieucao[$i]);


    echo $p->Xuat();
    echo '-----------------------</br>';
}
echo '<a href="index.php">Quay lại</a>'
?>