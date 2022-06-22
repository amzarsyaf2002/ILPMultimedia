<?php

/* user melalui jalan betul */
if(isset($_POST['hantar'])){

    /* perlu hubung database */
    require_once 'database.connect.php';
    $Pnama = $_POST['nama'];
    $Pndp = $_POST['ndp'];
    $Pprogram = $_POST['program'];


    /* masuk data dlm database */
    $query="INSERT INTO data_pelajar (nama, ndp, program)
    VALUES ( '$Pnama', '$Pndp' ,'$Pprogram')";

    /* semak dapat masuk ke dlm database */
    if (mysqli_query($connection,$query)){
        echo"Rekod disimpan";
    }else{
        echo"Rekod TIDAK disimpan";
    }
}
