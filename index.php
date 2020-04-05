<?php
session_start();
define('ucbeyi', 'true');
include 'ayarlar.php';
include 'fonksiyonlar.php';

($_POST['cikisFormu']) ? session_destroy() : null;

$sayfa = $_GET['sayfa'];


$arrSayfalar = array();
$arrSayfalar[] = 'anasayfa';
$arrSayfalar[] = 'kategoriler';
$arrSayfalar[] = 'iletisim';
$arrSayfalar[] = 'giris';
$arrSayfalar[] = 'cikis';
$arrSayfalar[] = 'deneme';
$arrSayfalar[] = 'ayarlar';

in_array($sayfa, $arrSayfalar) ? $goster = $sayfa : $goster = 'anasayfa' ;

include '_ust-bolum.php';
include $goster.'.php';
include '_alt-bolum.php';
?>