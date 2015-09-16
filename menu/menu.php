<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">DISTC </a>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  VENDEDOR: <?php echo $_SESSION['nombre_global']." "; ?><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="home.php"><i class="fa fa-user fa-fw"></i> Mi Perfil</a>
                        </li>
                        <li><a href="ModificarUsuario.php?id=<?php echo $_SESSION['idusuario_global'];?>"><i class="fa fa-gear fa-fw"></i> Modificar Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="cerrarsesion.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

                



            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        

                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> Inicio<span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-truck"></i> Pedidos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
            
                                <li>
                                    <a href="CrearPedido.php">Crear</a>
                                </li>
                                <li>
                                    <a href="ModificarPedido.php">Modificar</a>
                                </li>
                                <li>
                                    <a href="ConsultarPedido.php">Consultar</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-cubes"></i> Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="TransformadorIntegradoDeMedicion.php">Agregar</a>
                                </li>
                                <li>
                                    <a href="EquipoCompactoDeMedicion.php">Modificar</a>
                                </li>

                                 <li>
                                    <a href="TransformadorDePotencial.php">Consultar</a>
                                </li>

                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-building-o"></i> Negocios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="CrearNegocio.php">Crear</a>
                                </li>
                                <li>
                                    <a href="ModificarNegocio.php">Modificar</a>
                                </li>
                                <li>
                                    <a href="ConsultarNegocio.php">Consultar</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-group"></i> Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="CrearCliente.php">Crear</a>
                                </li>
                                <li>
                                    <a href="ModificarCliente.php">Modificar</a>
                                </li>
                                <li>
                                    <a href="ConsultarCliente.php">Consultar</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                         

                        <li>
                            <a href="#"><i class="fa fa-user"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="AgregarUsuario.php">Agregar</a>
                                </li>
                                <li>
                                    <a href="ConsultarUsuario.php">Consultar</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>



            
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>