<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/
require('Conexiones/conexion.php');

    $idnegocio = $_GET["id"];
    //Consulta General Negocio
    $query= "SELECT * FROM negocio WHERE idnegocio = '$idnegocio' ";
  
    $resultado=$mysqli->query($query);
    $row=$resultado->fetch_assoc();
    
   
    //Consulta Telefonos del Negocio
    $query2= "SELECT telefono, ext, idtelefononegocio FROM telefononegocio INNER JOIN negocio ON negocio.idnegocio = telefononegocio.idnegocio_fk  ";
  
    $resultado2=$mysqli->query($query2);

    /*
    //Consulta Clientes Asociados al Negocio
    $query= "SELECT * FROM negocio";

    $resultado=$mysqli->query($query);

   
    //Consulta Pedidos o Facturas del Negocio
    $query= "SELECT * FROM negocio";

    $resultado=$mysqli->query($query);
    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="shortcut icon" type="image/png" href="/imagenes/favicon.png" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DISTC- Distribuidora de Chamoy</title>

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

<body>

    <div id="wrapper">

        <!-- NAVEGACION -->
         <?php require('menu/menu.php'); ?>
        <!-- NAVEGACION -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><p class="fa fa-building-o"></p> <?php echo $row["nombre"]; ?></h1>
                    </div>


                    <div class="col-lg-12">

                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-truck fa-5x"></i>
                                    </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Cantidad de Facturas Realizadas</div>
                                </div>
                            </div>
                        </div>   
                    </div>


                    <div class="col-lg-6">
                

                        <div class="panel panel-green">
                            <div class="panel-heading">
                                Informacion General Empresa
                            </div>
                            <div class="panel-body">
                                <a href="ModificarNegocio.php?id=<?php echo $row['idnegocio'];?>"> <p class="fa fa-minus-circle"></p> Modificar Datos</a> <br>
                                <?php 
                                    echo "<b>Nombre de la empresa: </b>".$row["nombre"]."<br>";
                                    echo "<b>Direccion: </b>".$row["calle"]." ".$row["colonia"]." ".$row["numero"]."<br>";
                                    echo "<b>Ciudad: </b>".$row["ciudad"]."<br>";
                                 ?>
                            </div>
                        
                        </div>
                    </div>
                        
                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                Telefonos de la Empresa
                            </div>
                            <div class="panel-body">
                                <a href="AgregarTelefono.php?id=<?php echo $row['idnegocio'];?>"> <p class="fa fa-plus-circle"></p> Agregar Telefono</a>
                                <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Ext.</th>
                                            <th>Modificar/Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row2=$resultado2->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $row2['telefono'];?></td>
                                            <td><?php echo $row2['ext'];?></td>
                                            <td>  <a href="ModificarTelefono.php?id=<?php echo $row2['idtelefononegocio'];?>"> Modificar</a> </td>

                                        </tr>
                                    <?php } ?>     
                                    </tbody>
                                </table>
                            </div>

                                
                            </div>
                                
                        
                        </div>
                    </div>

                    <div class="col-lg-12">

                        <div class="panel panel-green">
                            <div class="panel-heading">
                                Clientes Asociados a la Empresa
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        
                        </div>


                        <div class="panel panel-green">
                            <div class="panel-heading">
                                Pedidos o Facturas de la empresa
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        
                        </div>
                        
                    </div>

                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
