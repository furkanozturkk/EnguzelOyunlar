<?php
$vt = mysqli_connect('localhost','root','');

if(!$vt) {
    echo 'Mysqli bağlantı hatası: ' . mysqli_connect_errno();
    exit;
}
mysqli_select_db($vt,'enguzeloyunlar');
mysqli_set_charset($vt, "utf8");
$durum=0;
/*
// üyeler tablosundan kullanıcı adını seç
$sorgu = mysqli_query($vt, 'select username from users');
// sonuçları ekrana yazdır
while($sonuc = mysqli_fetch_assoc($sorgu)) {
    echo $sonuc['username'].'<br />';
}
// satır sayısını ekrana yazdır
echo 'Sorgudan dönen satır sayısı: ' . mysqli_num_rows($sorgu);*/
 ?>