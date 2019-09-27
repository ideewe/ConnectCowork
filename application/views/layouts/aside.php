<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="assets/img/basic/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?= base_url()?>assets/img/dummy/u1.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h4 class="font-weight-light mt-2 mb-1"><?php echo $this->session->userdata("FullName")?> </h4>
                        <h6 class="font-weight-light mt-2 mb-1"><?php echo $this->session->userdata("CompanyName")?> </h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Perfil de Usuario
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Configuración</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Cambiar Password</a>
                        <a href="<?php echo base_url(); ?>auth/logout" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-red"></i>Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>Menu Principal</strong></li>
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="icon icon-folder5"></i>Inicio</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package blue-text s-18"></i>
                <span>Espacios para rentar</span>
                <span class="badge r-3 badge-primary pull-right">43</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="Espacios.html"><i class="icon icon-circle-o"></i>Espacios</a>
                    </li>
                    <li><a href="Crear-Espacio.html"><i class="icon icon-add"></i>Nuevo Espacio </a>
                    </li>
                </ul>
            </li>            
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Coworkers<i
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>admin/users"><i class="icon icon-circle-o"></i>Todos Coworker</a>
                    </li>
                    <li><a href="<?php echo base_url();?>admin/users/add"><i class="icon icon-add"></i>nuevo coworker</a>
                    </li>                    
                </ul>
            </li>          
            <li class="header light mt-3"><strong>GESTIONES</strong></li>
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-package text-lime s-18"></i> <span>Procesos</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="Facturas.html"><i class="icon icon-circle-o"></i>Facturacion</a>
                    </li>
                    <li><a href="Tareas.html"><i class="icon icon-circle-o"></i>Tareas o actividades</a>
                    </li>
                    <li><a href="Calendario.html"><i class="icon icon-date_range"></i>Calendario</a>
                    </li>               
                    <li><a href="Alquileres-Espacios.html"><i class="icon icon-circle-o"></i>Alquileres</a>
                    </li>
                </ul>
            </li>
            <li class="header light mt-3"><strong>Manteminientos o Catalogos</strong></li>
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-package text-lime s-18"></i> <span>Manteminientos o Catalogos</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>mantenimiento/usertype"><i class="icon icon-circle-o"></i>Tipos de Coworker</a>
                    </li>
                    <li><a href="Tareas.html"><i class="icon icon-circle-o"></i>Tareas o actividades</a>
                    </li>
                    <li><a href="Calendario.html"><i class="icon icon-date_range"></i>Calendario</a>
                    </li>               
                    <li><a href="Alquileres-Espacios.html"><i class="icon icon-circle-o"></i>Alquileres</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>