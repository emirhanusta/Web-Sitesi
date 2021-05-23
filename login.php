<?php

$kullanici_adi="b201210023@gmail.com";
$sifre="b201210023";

if($kullanici_adi==$_POST['id'] && $sifre==$_POST['sifre'])
{
    echo "Hoşgeldiniz b101210023";
}
else{
    echo "Girilen bilgiler hatalıdır. 3 saniye içinde giriş ekranına yönelendirileceksiniz";
    header("Refresh: 3; url=login.html");
}

?>