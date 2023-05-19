<?php
    $con = mysqli_connect("sql7.freemysqlhosting.net","sql7619463","XbX53VwYqW","sql7619463") or die("La conexión ha fallado");
    $con -> set_charset("utf8");
    $rutaimg = "imagenes/";
    $imgname = basename($_FILES['file']['name']);
    $rutaimg = $rutaimg . $imgname;
    move_uploaded_file($_FILES['file']['tmp_name'],$rutaimg);
    $consulta = "INSERT INTO contenido (imagen, resumen, titulo,seccion) VALUES ('".$imgname."','".$_POST['res']."','".$_POST['tit']."','".$_POST['sec']."')";

    mysqli_query($con,$consulta);

    mysqli_close($con);
?>