<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Naturviajes</title>
    <style>
        @font-face {
        font-family: "CustomFont";
        src: url('fuentes/shorelines_script_bold-webfont.woff') format("woff"),
        url('fuentes/Shorelines Script Bold.otf') format("opentype");
        }
        .cabecera{
            
            height: 0px;
            width: 100%;
        }
        #tarjeta{
           width: 60%;
           height: 550px;
           border-radius:5px;
           border:1px solid black;
           float:left;
           -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 10px;
            margin: 10px;
        }
        .fecha{
            font-size: 12px;
            position: relative;
            top: 20px;
            left:2px;
            float: right;
        }
        .novedades{
            float:right;
        }
        .seccion{
            margin-top: 20px;
        }
        .nombresec{
            margin-left: 30px;
            font-family:'CustomFont', Arial, sans-serif;
        }
    </style>
</head>
<body style="background-color:#F3B03E">

    <div class="cabecera"><img alt="naturviajes" src="imagenes/naturviajes1.bmp" width="100%"></div>

    <div class="container" style="background-color:white;">
        
        <div class="row" style="margin-top:240px">
            <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                  <a class="nav-link active" href="index.php">Longer nav link</a>
                </li>
                <li class="nav-item">
                <a href='uploads.php' class='nav-link' style='font-size: 17px;'>Subir viajes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
        </div>
            <div class="col-8"style=" margin-bottom:12px; margin-top:20px">

                <?php
                        $conexion = mysqli_connect("localhost","root","","naturviajes") or die("La conexión no se ha podido establecer");
                        $conexion -> set_charset("utf8");
                        $seccion = "SELECT * FROM secciones";
                        $consulta = "SELECT * FROM contenido JOIN secciones ON contenido.seccion = secciones.seccion ORDER BY contenido.seccion";
                        $resultado = MYSQLI_QUERY($conexion, $consulta);
                        $reseccion = MYSQLI_QUERY($conexion, $seccion);
                        while ($reg1 = mysqli_fetch_row($reseccion)) {
                            echo "<div class='seccion'>
                                    <img src='imagenes/separ1.jpg'>
                                    <div class='nombresec'>
                                      <h2>(" . $reg1[0] . ")</h2>
                                    </div>";
                        
                            $consulta_seccion = "SELECT * FROM contenido WHERE seccion = '".$reg1[0]."'ORDER BY contenido.fecha desc limit 2";
                            $resultado_seccion = mysqli_query($conexion, $consulta_seccion);
                            
                            echo "<div class='row' >";
                            while ($registro = mysqli_fetch_row($resultado_seccion)) {
                                echo "<div class='col-sm-6 col-md-6 col-lg-6'>
                                        <div class='card' style='width: 100%'>
                                            <img src='imagenes/" . $registro[0] . "' class='card-img-top' alt='...' >
                                            <div class='card-body'>
                                                <h5 class='card-title'>" . $registro[1] . "</h5>
                                                <p class='card-text'>" . $registro[2] . "</p>
                                                <a href='#' class='btn btn-primary' style='font-size: 17px;'>Mas información</a><div class='fecha'>".$registro[3]."</div>
                                            </div>
                                        </div>
                                      </div>";
                            }
                        
                            
                        }
                        
                    ?>

            </div>
        </div>
        <div class="upload">
            <a href='uploads.php' class='btn btn-primary' style='font-size: 17px;'>Subir viajes</a>
        </div>
    </div>

</body>
</html>