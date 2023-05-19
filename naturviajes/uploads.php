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
        src: url('fuentes/ShorelinesScriptBold.woff') format("opentype");
        }
        .cabecera{
            
            height: 0px;
            width: 100%;
        }

        .container{ 
           
            position: relative;
            top: 300px;
            border-radius: 255px 15px 225px 15px/15px 225px 15px 255px;
            padding:1em;
            line-height:1.5em;
            background:hsla(67, 95%, 95%, 1);
            border:solid 5px #bf7e00;
            background-color: #e5e5f7;
            opacity: 0.8;
            background-image:  radial-gradient(#444cf7 0.5px, transparent 0.5px), radial-gradient(#444cf7 0.5px, #e5e5f7 0.5px);
            background-size: 20px 20px;
            background-position: 0 0,10px 10px;
            margin-bottom: 20px;
        }
        #formulario{
            display:inline-block;
            width:60%;
            height: 500px;
            border-radius: 255px 15px 225px 15px/15px 225px 15px 255px;
            padding:1em;
            line-height:1.5em;
            background:hsla(67, 95%, 95%, 1);
            border:solid 5px #bf7e00;
            margin-bottom:12px;
            margin-top:100px;
            margin-left:36px;
        }
        .card-title{
            font-size: 24px;
            margin-bottom: 20px;
        }
        .card-img-top{
            height: 200px;
            border: 2px #41403E;
            border-radius: 255px 15px 225px 15px/55px 225px 15px 255px;
        }
        .fecha{
            font-family: Arial, Helvetica, sans-serif;
            font-weight:600;
            font-size: 15px;
            position: absolute;
            bottom: 26px;
            right: 16px;
        }

        button.lined.thick{
            border:solid 3px #41403E;
            background:#F3B03E;
            
        }

        button:hover{
            box-shadow:2px 8px 4px -6px hsla(0,0%,0%,.3);
        }
        #novimg{
            width: 360px;
            margin-left:30px;
        }
        .rotate{
            transform: rotate(180deg);
            margin-left:32px;
            margin-top:5px;
        }
        #novedad{
            position: absolute;
            top:100px;
            right: 36px;
            margin-left:60px;
            width:420px;

        }
        .nov{
            font-family: 'fuente3';
            text-align: center  ;
            border:dotted 3px #41403E;
            margin-top: 10px;
            font-size:1rem;
            border-top-left-radius: 25px 15px;
            border-top-right-radius: 15px 225px;
            border-bottom-right-radius: 225px 15px;
            border-bottom-left-radius:15px 255px;
            background:#fbdaa2;
            
        }
        .nov p{
            margin:2px;
        }
        .novtit{
            background:#DEB887;
            border-top-left-radius: 25px 15px;
            border-top-right-radius: 30px 300px;
            width:99.5%;
        }
        .seccion{
            margin-top: 20px;
            
        }
        #separador{
            position: absolute;
            top:120px;
            left: 36px;
            margin: auto;
            width: 60%;
            
        }
        .nombresec{
            text-align: center;
            font-family:'CustomFont', Arial, sans-serif;
            
        }

        button {
            float:right;
          background:transparent;
          padding:0.5rem 0.5rem;
          margin:0 0.5rem;
          font-size:1rem;

          border-top-left-radius: 255px 15px;
          border-top-right-radius: 15px 225px;
          border-bottom-right-radius: 225px 15px;
          border-bottom-left-radius:15px 255px;
        }
        
        .nav-item{
            padding:0.5rem 0.5rem;
            
            font-size:1rem;

            border-top-left-radius: 255px 15px;
            border-top-right-radius: 15px 225px;
            border-bottom-right-radius: 225px 15px;
            border-bottom-left-radius:15px 255px;
            border:solid 3px #41403E;
            background:#F3B03E;
        }
        .nav-item-active{
            padding:0.5rem 0.5rem;
            
            font-size:1rem;

            border-top-left-radius: 255px 15px;
            border-top-right-radius: 15px 225px;
            border-bottom-right-radius: 225px 15px;
            border-bottom-left-radius:15px 255px;
            border:solid 3px #41403E;
            background: #291600;
        }

        .radio-toolbar input[type="radio"] {
          opacity: 0;
          position: fixed;
          width: 0;
            float:left; 
        }
        .radio-toolbar label {
            display: inline-block;
            background-color: #ddd;
            padding: 10px 20px;
            font-family: sans-serif, Arial;
            font-size: 16px;
            border-top-left-radius: 255px 15px;
            border-top-right-radius: 15px 225px;
            border-bottom-right-radius: 225px 15px;
            border-bottom-left-radius:15px 255px;
            border:solid 3px #41403E;
        }
        .radio-toolbar input[type="radio"]:checked + label {
            background-color:#bfb;
            border-color: #4c4;
        }

        .radio-toolbar input[type="radio"]:focus + label {
            border: 2px dashed #444;
        }
        .radio-toolbar label:hover {
            background-color: #dfd;
        }
        .tarjeta{
          
            border-radius:5px;
            border:1px solid black;
            float:left;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 10px;
            margin: 10px;
            background-color: rgb(240, 226, 205);
        }
        .imagenes{
            width:60%;
            margin-left:70px;
            margin-top:16px;
        }
        .tarjeta img{
            width:28vw;
            height:360px;
        }
        :target.tarjeta{
            transform: scale(1.15);
            background-color:#DEB887;
            
        }
        a{
            text-decoration: none;
            color:black;
        }
        

button.dotted.thick{
   border:dotted 3px #41403E;
}
button.dashed.thick{
  border:dashed 3px #41403E;
}
button.lined.thin{
   border:solid 2px #41403E;
}
button.dotted.thin{
   border:dotted 2px #41403E;
}
button.dashed.thin{
  border:dashed 2px #41403E;
}
    </style>
</head>
<body style="background-color:#F3B03E">

    <div class="cabecera"><img alt="naturviajes" src="otros/naturviajes1.bmp" width="100%"></div>

        <div class="container">
        
            <div class="row">
                <div class="menu">
                    <ul class="nav nav-pills nav-fill">  
                        <a class="nav-link" href="index.php">
                            <li class="nav-item">Principal</li>
                        </a>
                        <a href='uploads.php' class='nav-link' style='font-size: 17px;'>
                            <li class="nav-item-active">Subir viajes</li>
                        </a>
                        <a href='galeria.php' class='nav-link' style='font-size: 17px;'>
                            <li class="nav-item">Galeria</li>
                        </a>
                        <a class="nav-link disabled" href="#">
                            <li class="nav-item">Disabled</li>
                        </a>
                     </ul>
                </div>
           
                <img id='separador' src='otros/separador.png'>
                    
                <div class="col-8" id="formulario">
                    <form method="POST" action="insertar.php" enctype="multipart/form-data">
                        <label for="exampleInputEmail1" class="form-label">Título</label>
                        <div class="mb-3" id="title">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tit" required>
                       </div>

                       <div class="mb-3" id="title">
                            <label for="floatingTextarea2" class="form-label">Descripción</label>
                            <textarea class="form-control" placeholder="Descripción del viaje" id="floatingTextarea2" style="height: 100px" name="res"></textarea>
                        </div>
                        <div class="mb-3" id="title">
                            <label class="form-label">Imagen</label>
                            <input type="file" class="form-control" accept="image/png,image/jpg,image/jpeg,image/jpg,image/bmp" name="file">
                            <div id="emailHelp" class="form-text">Selecciona un archivo de imagen para subirlo al servidor.</div>
                        </div>
                        <div class="radio-toolbar" id="chkbox">
                            <input type="radio" id="España" name="sec" value="España">
                            <label for="España">España</label>
                            <input type="radio" id="Europa" name="sec" value="Europa">
                            <label for="Europa">Europa</label>
                            <input type="radio" id="Mundo" name="sec" value="Mundo">
                            <label for="Mundo">Mundo</label>
                        </div>
                       <button type="submit" class='lined thick'>Enviar</button>
                       <button type="reset" class='lined thick'>Borrar</button>
                    </form>
                </div>
                <div class="col-4">
                    <div id="novedad">
                        <img src="otros/newup.png" id="novimg">
                        <div class="nombresec">
                            <h1>(Recientes)</h1>
                        </div>
                        <?php
                            $conexion = mysqli_connect("sql7.freemysqlhosting.net","sql7619463","XbX53VwYqW","sql7619463") or die("La conexión no se ha podido establecer");
                            $conexion -> set_charset("utf8");
                            $consulta = "SELECT * FROM contenido ORDER BY contenido.fecha desc limit 20";
                            $resultado = MYSQLI_QUERY($conexion, $consulta);
                            $num=1;
                            while ($reg1 = mysqli_fetch_row($resultado)) {
                                echo "  <a href='#".$reg1[2]."'>
                                            <div class='nov'>
                                                <div class='novtit'><h2>".$num.". " . $reg1[2   ] . "</h2></div>
                                             <p>". $reg1[3] ."<p>
                                            </div>
                                        </a>";
                                        $num=$num+1;
                                };
                            ?>
                        <img src="otros/newup.png" width="320" id="novimg" class="rotate">
                    </div>
                </div>     
                <div class="imagenes">
                        <?php
                                $conexion = mysqli_connect("sql7.freemysqlhosting.net","sql7619463","XbX53VwYqW","sql7619463") or die("La conexión no se ha podido establecer");
                                $conexion -> set_charset("utf8");
                                $consulta = "SELECT * FROM contenido ORDER BY contenido.fecha desc limit 20";
                                $resultado = MYSQLI_QUERY($conexion, $consulta);
                                $num=1;
                                while ($reg1 = mysqli_fetch_row($resultado)) {
                                        echo "  
                                                    <div  class='tarjeta' id=".$reg1[2].">
                                                        <h2 style='text-align:center'>$num</h2>
                                                        <img src='imagenes/" . $reg1[1] . "' >
                                                    </div>
                                                ";
                                        $num=$num+1;
                                    };

                                
                            
                            
                            ?>
                </div>
                
            </div>
        </div>
    </div>

</body>
</html>