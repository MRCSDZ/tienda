<?php

session_start();
if (isset($_SESSION["rpe_global"]))
{

    header("location: home.php");

}

else {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
    div#diferente{

    margin-top: 111px;
    margin-left: 91px;


    }


    #diferente >img{
    
    display: block;
    margin-bottom: 25px;


    
    }
    #diferente > span#titulo
    {

    position: relative;
    margin-top: 20px;
    font-family: helvetica;
    font-size: 40px;
    color: white;


    }

     #diferente > span#subtitulo
    {

    position: relative;
    display: block;
     font-family: helvetica;
    font-size: 20px;
    color: gray;

    }

    #diferente > div.col-md-4.col-md-offset-4
    {

    position: relative;
    display: block;
    margin-left: 0 !important;
    padding-left: 0 !important;
    margin-top: -160px;
    width: 76%;
    }

    #diferente > div.col-md-4.col-md-offset-4 > div.login-panel.panel.panel-default
    {

        background-color: transparent;
        border-color: transparent;

    }


    #diferente > div.col-md-4.col-md-offset-4 > div.login-panel.panel.panel-default >div.panel-heading
    {

      background-color: transparent; 
      border-color: transparent; 
}

    }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISEH- Sistema de Control de Equipos y Herramientas</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body background="Imagenes/fondo.png">
    
   

    <div class="container">
        <div class="row">
            <div id="diferente">
            <img src="imagenes/cfeintro.png" alt="">
            <span id="titulo">Sistema de control de equipos y herramientas </span>
                
            <span id="subtitulo">ISC Oriente</span>
            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Favor de Iniciar Sesion :)</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="redireccion.php" method="POST">
                            <fieldset>
                               


                                <div class="form-group">
                                    <input class="form-control" id="1" placeholder="RPE" name="rpe" type="text"  required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="2" placeholder="Contraseña" name="pwd" type="password" required>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                 <input class="form-control" name="boton" type="submit" >
                            
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php 

}
?>