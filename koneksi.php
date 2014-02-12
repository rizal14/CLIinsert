<?php
$koneksi = mysql_connect('localhost','root', '');
if (!$koneksi)
    die("belum konek ke server");
$db = mysql_select_db("ssodb");
if (!$db)
    die("belum konek ke database");
?>