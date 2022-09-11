<?php
define('ISIM', 'Edanur'); //Sabit değişken tanımlama, küçük harflede tanımlanabilir ama tavsiye edilmez.
echo ISIM; //_ISIM şeklindede kullanılır

$deger="Eda";

echo "<br/>";
echo gettype($deger); //değişkenin veri tipini gösterir

echo "<br/>";
var_dump($deger); //DEğişken hakkındaki bilgileri verir



$a = 3;
$b = 4;

echo $a == $b; // Sonuç: false
echo $a === $b; // Sonuç: false  //Aynıdır demek. Yani veri tipleri vs hepsi aynı.
echo $a != $b; // Sonuç: true
echo $a !== $b; // Sonuç: true
echo $a < $b; // Sonuç: true
echo $a > $b; // Sonuç: false
echo $a <= $b; // Sonuç: true
echo $a >= $b; // Sonuç: false
echo $a <=> $b; // Sonuç: -1 //

echo "<br/>";
$isim = 'Edanur';
$soyisim = 'Özdemir';
$yas = 25;
echo 'Merhaba, benim ismim '. $isim.' soyismim '.$soyisim.'. Şuan '.$yas.' yaşımdayım.';
// Ekrana "Merhaba, benim ismim Edanur soyismim Özdemir. Şuan 25 yaşımdayım." sonucunu yazar.
$html  = '<div>';
$html .=    '<h1>DENEME.PHP</h1>';
$html .= '</div>';
echo $html; // Ekrana "Patika.dev" olarak basar.

//Ternary operatörü:if-else yapısının kısa kulanımıdır
echo $a==3 ? 'Dogru'  : 'Yanlis';
