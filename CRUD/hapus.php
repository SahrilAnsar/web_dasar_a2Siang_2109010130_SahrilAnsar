<?php
require "functions.php";
$id = $_GET["id"];
$delete = q("DELETE FROM prodi_umsu WHERE id = '$id'");
if ($delete) {
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    locations='prodi.php';
    </script>";
}
