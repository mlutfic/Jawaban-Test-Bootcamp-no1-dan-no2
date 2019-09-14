<?php  
$pass="pppdT8";
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

if(!$uppercase || !$lowercase || !$number || strlen($pass)<5){
    echo "password harus lebih dari 5 karakter, mengandung huruf BESAR, huruf kecil dan angka";
}else{
    echo "password memenuhi kriteria";
}//https://pusathosting.com/kb/php:codesnip:regex-cek-string-password

?> 