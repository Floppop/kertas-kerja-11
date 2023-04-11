<?php

include ('config.php');

//sila lengkapkan kod aturacara
include("config.php");
$id_pelajar = $_GET['id_pelajar'];

$result = mysqli_query($connect , "DELETE FROM maklumat WHERE id_pelajar='$id_pelajar'");
echo "<script>alert('Hapus maklumat berjaya')";
header("Location:index.php");

?>




