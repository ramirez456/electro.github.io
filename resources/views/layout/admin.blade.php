<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="images/icons/icon.png"/>
    <title>@yield('titulo')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
    <!-- Theme style -->   
    <link rel="stylesheet" href="css/app.css">

    <link rel="stylesheet" href="css/AdminLTE.css">

    <link rel="stylesheet" href="css/_all-skins.css">

    <link href="https://fonts.googleapis.com/css?family=Hind:500" rel="stylesheet">

     <style>

        .alertas_notificaciones{
            padding-top:10px;
            padding-bottom: 10px;
            font-size: 14px;
            background-color: #557cc1;
            color: #ffffff;
        }

        .alertas_notificaciones .hover_notificaciones{
            color: #EEEEEE;
            width: 100%;
        }
        .alertas_notificaciones .hover_notificaciones:hover{
            background: #4569AB;
            color: #ffffff;
        }
        .alertas_notificaciones:hover{
            background: #4569AB;
            color: #ffffff;
        }
        .nav .open > a,
        .nav .open > a:hover,
        .nav .open > a:focus {
            background-color: #4569AB;
            border-color: #337ab7;
        }
        .nav > li > a:hover,
        .nav > li > a:focus {
            text-decoration: none;
            background-color: red;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0px;
            list-style: none;
            padding: 0px;
            min-width: 320px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }


        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content li a{
            padding-left: 10px;
        }
        .dropdown-content li a i{
            padding-right: 10px;
        }
    </style>

    @yield('estilos')
</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class='message-search hide'><i class='fa fa-question'></i></div>

    <!-- Site wrapper -->
    <div class="wrapper">

    <header class="main-header shadow-new">
        <!-- Logo -->
        <a href="<?=URL::to('/'); ?>" class="logo" style="background:  #4569ab;">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="<?=URL::to('img/gordo.png'); ?>" width="40" alt="IMAGINATICS"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="<?=URL::to('img/logo_mobil_01.png');?>" width="120"> </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" style="background:#4569ab;" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="hidden-xs hidden-md navbar-left" style="padding-top: 14px; font-size: 18px; color: #ffffff;">
                
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="user-current">
                        <a target="_self" class="  btn-help-content" >
                            <i id="help-toggle" class="fa fa-question  btn-help" aria-hidden="true"></i>
                        </a>
                    </li>                    
                    
                    <li class="dropdown user-current">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <p>&nbsp;&nbsp;NOmbre</p>
                        </a>
                        <ul class="dropdown-content">

                            <li class="alertas_notificaciones"><a class="hover_notificaciones" href="#" id="noti"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
                            
                            <li class="alertas_notificaciones">
                                <a class="hover_notificaciones" href="{{url('/logout')}}"  id="salir" ><i class="fa fa-power-off" aria-hidden="true"></i>Salir</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar bg-blue-gradient fix-nav scroll-menu-parent shadow-new" >
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar  scroll-menu">
            <br>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                
                <li class="treeview">
                    <a href="<?=URL::to('concesionaria'); ?>">
                        <i class="fa fa-file"></i> <span>Concesionarias</span>                        
                    </a>                    
                </li>
                
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-inbox"></i> <span>Procesos</span>
                         <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-indent"></i>Procesos</a></li>                        
                        <li><a href="#"><i class="fa fa-calendar-plus-o"></i>Asignar</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-plus"></i> <span>Usuarios</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-indent"></i>Nuevo</a></li>
                        <li><a href="#"><i class="fa fa-indent"></i>Listar</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-plus"></i> <span>Ordenes de Trabajo</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('subir')}}"><i class="fa fa-indent"></i>Subir</a></li>
                        <li><a href="{{url('listar')}}"><i class="fa fa-indent"></i>Ver OT</a></li>
                        <li><a href="#"><i class="fa fa-indent"></i>Asignar</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">


            @yield('contenido')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer footer-align footer-style">
        <div class="pull-right hidden-xs">
            Version <span class="accent-color">2.3.0</span>
        </div>
        Copyright &copy; 2016 <a href="http://imaginatics.info" target="_blank">Imaginatic's</a>. All rights reserved.
    </footer>
</div><!-- ./wrapper -->
<script src="js/app.js"></script>
<script src="<?=URL::to('js/main.js'); ?>"></script>



@yield('script')


</body>
</html>
