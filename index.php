<?php
include('app/config.php');
include('layout/sesion.php');

include('layout/parte1.php');
include('app/controllers/usuarios/listado_de_usuarios.php');
include('app/controllers/roles/listado_de_roles.php');
include('app/controllers/categorias/listado_de_categoria.php');
include('app/controllers/almacen/listado_de_productos.php');
include('app/controllers/proveedores/listado_de_proveedores.php');
include('app/controllers/clientes/listado_de_clientes.php');
include('app/controllers/compras/listado_de_compras.php');
include('app/controllers/ventas/listado_de_ventas.php');
include('app/controllers/servicios/listado_de_servicios.php');
include('app/controllers/ventser/listado_de_ventser.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Bienvenido al Sistema - <?php echo $rol_sesion; ?> </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <?php if (($rol_sesion == "ADMINISTRADOR") || ($rol_sesion == "GERENTE")) { ?>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Usuarios Registrados</span>
                                <?php
                                $contador_de_usuarios = 0;
                                foreach ($usuarios_datos as $usuarios_dato) {
                                    $contador_de_usuarios = $contador_de_usuarios + 1;
                                }
                                ?>
                                <span class="info-box-number"><?php echo $contador_de_usuarios; ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                <?php } ?>
                <?php if (($rol_sesion == "ADMINISTRADOR")) { ?>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-address-card"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Roles Registrados</span>
                                <?php
                                $contador_de_roles = 0;
                                foreach ($roles_datos as $roles_dato) {
                                    $contador_de_roles = $contador_de_roles + 1;
                                }
                                ?>
                                <span class="info-box-number">
                                    <?php echo $contador_de_roles; ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                <?php } ?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Clientes Registrados</span>
                            <?php
                            $contador_de_clientes = 0;
                            foreach ($clientes_datos as $clientes_dato) {
                                $contador_de_clientes++;
                            }
                            ?>
                            <span class="info-box-number">
                                <?php echo $contador_de_clientes; ?>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <!-- /.row -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Sales</h3>
                            <a href="javascript:void(0);">View Report</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">$18,230.00</span>
                                <span>Sales Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                </span>
                                <span class="text-muted">Since last month</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This year
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Last year
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include('layout/parte2.php'); ?>