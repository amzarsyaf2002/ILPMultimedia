<?php

$servername = "localhost";
$dBusername = "root";
$dBpassword = "";
$dB_name = "tpm_database";

// Create connection
$connection = mysqli_connect($servername, $dBusername, $dBpassword, $dB_name );

// mesej jika gagal
if (!$connection) {
  die("Gagal Berhubung: " . mysqli_connect_error());
}
echo "Berjaya Berhubung <br>";
?>