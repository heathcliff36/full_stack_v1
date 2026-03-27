<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestión</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

    <!-- Libreria Sweetallert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!-- apexcharts -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
        crossorigin="anonymous" />
    <!-- jsvectormap -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
        crossorigin="anonymous" />

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/AdminLTE-4.0.0-rc1/dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- jQuery -->
    <script src="<?php echo $URL; ?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">FERNÁNDEZ SERVICIO</a>
                </li>
            </ul>

            <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto">
                <!--begin::User Menu Dropdown-->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img
                            src="<?php echo $URL . "/usuarios/user_perfil/" . $perfil; ?>"
                            class="user-image rounded-circle shadow"
                            alt="User Image" />
                        <span class="d-none d-md-inline"><?php echo $nombre_sesion; ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <!--begin::User Image-->
                        <li class="user-header text-bg-primary">
                            <img
                                src="<?php echo $URL . "/usuarios/user_perfil/" . $perfil; ?>"
                                class="rounded-circle shadow"
                                alt="User Image" />
                            <p>
                                <?php echo $nombre_sesion; ?>
                                <small>Miembro desde, <?php echo $ingreso; ?></small>
                            </p>
                        </li>
                        <!--end::User Image-->
                        <!--begin::Menu Body-->
                        <!-- <li class="user-body">
                        begin::Row
                        <div class="row">
                            <div class="col-4 text-center"><a href="#">Followers</a></div>
                            <div class="col-4 text-center"><a href="#">Sales</a></div>
                            <div class="col-4 text-center"><a href="#">Friends</a></div>
                        </div> 
                        end::Row
                    </li> -->
                        <!--end::Menu Body-->
                        <!--begin::Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="btn btn-default btn-flat float-end">Cerrar sesion <i class="bi bi-box-arrow-right"></i></a>
                        </li>
                        <!--end::Menu Footer-->
                    </ul>
                </li>
                <!--end::User Menu Dropdown-->
            </ul>
            <!--end::End Navbar Links-->

            <!-- Right navbar links -->
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul> -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo $URL; ?>" class="brand-link">
                <img src="<?php echo $URL; ?>/public/images/flogob.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">GESTIÓN INTERNA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                        <?php if (($rol_sesion == "ADMINISTRADOR") || ($rol_sesion == "GERENTE")) { ?>
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Usuarios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/usuarios" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de usuarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/usuarios/create.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Creación de usuario</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if ($rol_sesion == "ADMINISTRADOR") { ?>
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-address-card"></i>
                                    <p>
                                        Roles
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/roles" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de roles</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/roles/create.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Creación de rol</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>



                        <?php if (($rol_sesion == "ADMINISTRADOR") || ($rol_sesion == "GERENTE")) { ?>
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tags"></i>
                                    <p>
                                        Categorías
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/categorias" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de categorías</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (($rol_sesion == "ADMINISTRADOR") || ($rol_sesion == "GERENTE") || ($rol_sesion == "VENDEDOR1")) { ?>
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>
                                        Almacen
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/almacen" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de productos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/almacen/create.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Creación de productos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                            <?php if (($rol_sesion == "ADMINISTRADOR") || ($rol_sesion == "GERENTE")) { ?>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link active">
                                        <i class="nav-icon fas fa-truck"></i>
                                        <p>
                                            Proveedores
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo $URL; ?>/proveedores" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Listado de proveedores</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php } ?>

                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-user-tag"></i>
                                    <p>
                                        Clientes
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/clientes" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de Clientes</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-cart-plus"></i>
                                    <p>
                                        Compras
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/compras" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de compras</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/compras/create.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Creación de la compra</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (($rol_sesion == "ADMINISTRADOR") || ($rol_sesion == "GERENTE") || ($rol_sesion == "VENDEDOR1")) { ?>
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-hand-holding-usd"></i>
                                    <p>
                                        Ventas
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/ventas" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de ventas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/ventas/create.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Generar Venta</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (($rol_sesion == "ADMINISTRADOR") || ($rol_sesion == "GERENTE") || ($rol_sesion == "VENDEDOR2")) { ?>
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-car"></i>
                                    <p>
                                        Servicios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/servicios" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de Servicios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/servicios/create.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Creación de Servicios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/servicios/ventser.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Facturación de Servicios</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>


                        <?php
                        /* 
                        if ($rol_sesion == "ADMINISTRADOR") { 
                        ?>
                            <li class="nav-item ">
                                <a href="<?php echo $URL; ?>/configuracion" class="nav-link active">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>Configuración</p>
                                </a>
                            </li>
                        <?php 
                        } 
                        */
                        ?>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>