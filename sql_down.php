<?php
$koneksi = mysql_connect('localhost','root', '');
if (!$koneksi)
    die("belum konek ke server");
$db = mysql_select_db("ssodb");
if (!$db)
    die("belum konek ke database");
 
$ sql = mysql_query "(ALTER TABLE `tabel1` ADD COLUMN `nama`)";
$ hasil = mysql_query ($ sql);


?>