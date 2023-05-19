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
        @font-face {
        font-family: "fuente2";
        src: url('fuentes/EasyRider.ttf') format("opentype");
        }
        @font-face {
        font-family: "fuente3";
        src: url('fuentes/A little sunshine.ttf') format("opentype");
        }
        .cabecera{
            
            height: 0px;
            width: 100%;
        }

        .container{
            
            position: relative;
            top: 280px;
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

        }
        .card{
            text-align: justify;
            display:inline-block;
            width:60%;
            height: 500px;
            margin:5% auto;
            border-radius: 255px 15px 225px 15px/15px 225px 15px 255px;
            padding:1em;
            line-height:1.5em;
            background:rgb(240, 226, 205);
            border:solid 5px rgb(216, 193, 157);
        }
        .card-title{
            font-size: 24px;
            margin-bottom: 20px;
        }
        .card-img-top{
            height: 200px;
            border: 2px solid rgb(202, 182, 148);
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
            position: absolute;
            bottom: 20px;
            left: 10px;
        }

        button:hover{
            box-shadow:2px 8px 4px -6px hsla(0,0%,0%,.3);
        }

        .novedades{
            float:right;
        }
        .seccion{
            margin-top: 20px;
            
        }
        #separador{
            margin: auto;
            width: 90%;
        }
        .nombresec{
            margin-top: 10px;
            text-align: center;
            font-family:'CustomFont', Arial, sans-serif;
        }
        .nombresec{
            font-size: 2e;
        }

        button {
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

            border-top-left-radius: 25px 15px;
            border-top-right-radius: 15px 225px;
            border-bottom-right-radius: 225px 15px;
            border-bottom-left-radius:15px 255px;
            border:solid 3px #41403E;
            background: #291600;
        }
        #novedad{
            margin-top: 20px;
            margin-left: 20px;
        }
        .nov{
            font-family: 'fuente3';
            text-align: center  ;
            border:dotted 3px #41403E;
            padding:0.5rem 0.5rem;
            margin-top: 10px;
            font-size:1rem;

            border-top-left-radius: 25px 15px;
            border-top-right-radius: 15px 225px;
            border-bottom-right-radius: 225px 15px;
            border-bottom-left-radius:15px 255px;
            background:#fbdaa2;

        }
        .rotate{
            transform: rotate(180deg);
        }
        #decolink{
            text-decoration: none;
            color:black;
        }
        #tarjeta{
           width: auto;
           height: 300px;
           border-radius:5px;
           border:1px solid black;
           float:left;
           -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 10px;
            margin: 10px;
        }
        .dropzone {
position: relative;
border: 10px dotted #FFF;
border-radius: 20px;
color: white;
font: bold 24px/200px arial;
height: 400px;
margin: 100px auto;
text-align: center;
width: 400px;
}

.dropzone:hover {
border: 10px dotted #0C3;
}
.dropzone.dropped {
background: #222;
border: 10px dotted #444;
}

.dropzone.in {
width: 600px;
height: 200px;
line-height: 200px;
font-size: larger;
}

.dropzone img {
border-radius: 10px;
vertical-align: middle;
max-width: 95%;
max-height: 95%;
}
        
    </style>
</head>
<body style="background-color:#F3B03E">

    <div class="cabecera"><img alt="naturviajes" src="otros/naturviajes1.bmp" width="100%"></div>

        <div class="container" style="background-color:white;">
        
            <div class="row">
                <div class="menu">
                    <ul class="nav nav-pills nav-fill">  
                        <a class="nav-link" href="index.php">
                            <li class="nav-item-active">Principal</li>
                        </a>
                        <a href='uploads.php' class='nav-link' style='font-size: 17px;'>
                            <li class="nav-item">Subir viajes</li>
                        </a>
                        <a href='galeria.php' class='nav-link' style='font-size: 17px;'>
                            <li class="nav-item">Galeria</li>
                        </a>
                        <a class="nav-link disabled" href="#">
                            <li class="nav-item">Disabled</li>
                        </a>
                     </ul>
                </div>
                <div class="col-8"style=" margin-bottom:12px; margin-top:20px">

        <div class="col">

        <div class="row">
            


            
            <div class="col-6">
            <form action="/otros" class="dropzone" id="my-awesome-dropzone"></form>
            </div>
            
        
            
        </div>
        <hr>
        <div class="row">
            <div class="col">
                
                <?php
                    $dir=opendir("./imagenes");
                    while($imagenes = readdir($dir)) {

                        
                        $extension = pathinfo($imagenes,PATHINFO_EXTENSION);
                        $nombre_solo = strtoupper(basename($imagenes,'.'.$extension));
                        
                        if($imagenes!= "." && $imagenes!= "..") {
                            echo "<div  id='tarjeta'>";
                            echo "<img src='imagenes/$imagenes' style='width:20vw;height:250px;'>
                            <h4 style='text-align:center'>$nombre_solo<h4>";
                            echo "</div>";
                        
                        }
                    
                    }


                ?>

            </div>
        </div>


</div>
                   
            </div>
        </div>
    </div>

</body>
</html>