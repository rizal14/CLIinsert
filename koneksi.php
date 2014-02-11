<?php
$koneksi = mysql_connect('localhost','root', '');
if (!$konek)
    die("belum konek ke server");
	
$db = mysql_select_db("dbmanage");
if (!$db)
    die("belum konek ke database");
?>