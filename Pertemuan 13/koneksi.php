<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lat_dbase"; 

// Lakukan koneksi dengan mysql
$connection = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$connection){
    echo "Tidak dapat terhubung dengan database";
    exit;
} 

// Pilih database 
$pilih_db = mysql_select_db($dbname);
if(!$pilih_db){
    echo "Tidak dapat memilih database";
    exit;
}
?>
```[cite: 1]