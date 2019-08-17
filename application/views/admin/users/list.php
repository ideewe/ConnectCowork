
<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Coworkers
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>Todos los usuarios</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-buyers-tab" data-toggle="pill" href="#v-pills-buyers" role="tab"
                           aria-controls="v-pills-buyers"><i class="icon icon-face"></i>Inquilinos</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-sellers-tab" data-toggle="pill" href="#v-pills-sellers" role="tab"
                           aria-controls="v-pills-sellers"><i class="icon  icon-face"></i> Flex</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-sellers-tab" data-toggle="pill" href="#v-pills-buyers" role="tab"
                           aria-controls="v-pills-sellers"><i class="icon  icon-face"></i> Oficina Virtual</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link"  href="Crear-Coworker.html" ><i class="icon icon-plus-circle"></i> Crear Coworker</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <br>
                                <table class="table table-bordered table-hover data-tables" data-options='{"searching":true}'>
                            
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="checkedAll" class="custom-control-input"><label
                                                        class="custom-control-label" for="checkedAll"></label>
                                                </div>
                                            </th>
                                            <th>Id</th> 
                                            <th>Coworkers</th> 
                                            <th>UserName</th>     
                                            <th>RTN</th>
                                            <th>Teléfono</th>           
                                            <th>Role</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                            <tbody>
                                                <?php if(!empty($users)):?>
                                                    <?php foreach($users as $user):?>                                                    
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                                        id="user_id_1" required><label
                                                                        class="custom-control-label" for="user_id_1"></label>
                                                                </div>
                                                            </td>
    
                                                            <td><?php echo $user->id;?></td>
                                                            <td>
                                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                                    <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                                                </div>
                                                                <div>
                                                                    <div>
                                                                        <strong><?php echo $user->FullName;?> </strong>
                                                                    </div>
                                                                    <small> <?php echo $user->Email;?></small>
                                                                </div>
                                                            </td>                                                        
                                                            <td><?php echo $user->Username;?></td>
                                                            <td><?php echo $user->RTN;?></td>                                                        
                                                            <td><?php echo $user->Phone;?></td>                                                   
                                                            <td><span class="r-3 badge badge-success "><?php echo $user->RoleId;?></span></td>
                                                            <?php   if($user->Status === 'Activo'): ?>
                                                                <td><span class="icon icon-circle s-12  mr-2 text-success"></span> <?php echo $user->Status;?></td> 
                                                            <?php else: ?>    
                                                                <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> <?php echo $user->Status;?></td> 
                                                            <?php endif; ?>   
                                                            <td>
                                                                <a href="Perfil-Coworker.html"><i class="icon-eye mr-3"></i></a>
                                                                <a href="Perfil-Coworker.html"><i class="icon-pencil"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            <div class="tab-pane animated fadeInUpShort" id="v-pills-buyers" role="tabpanel" aria-labelledby="v-pills-buyers-tab">
            <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <br>
                                <table class="table table-bordered table-hover data-tables" data-options='{"searching":true}'>
                            
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="checkedAll" class="custom-control-input"><label
                                                        class="custom-control-label" for="checkedAll"></label>
                                                </div>
                                            </th>
                                            <th>Id</th> 
                                            <th>Coworkers</th> 
                                            <th>UserName</th>     
                                            <th>RTN</th>
                                            <th>Teléfono</th>           
                                            <th>Role</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                            <tbody>
                                                <?php if(!empty($users)):?>
                                                    <?php foreach($users as $user):?>                                                    
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                                        id="user_id_1" required><label
                                                                        class="custom-control-label" for="user_id_1"></label>
                                                                </div>
                                                            </td>
    
                                                            <td><?php echo $user->id;?></td>
                                                            <td>
                                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                                    <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                                                </div>
                                                                <div>
                                                                    <div>
                                                                        <strong><?php echo $user->FullName;?> </strong>
                                                                    </div>
                                                                    <small> <?php echo $user->Email;?></small>
                                                                </div>
                                                            </td>                                                        
                                                            <td><?php echo $user->Username;?></td>
                                                            <td><?php echo $user->RTN;?></td>                                                        
                                                            <td><?php echo $user->Phone;?></td>                                                   
                                                            <td><span class="r-3 badge badge-success "><?php echo $user->RoleId;?></span></td>
                                                            <?php   if($user->Status === 'Activo'): ?>
                                                                <td><span class="icon icon-circle s-12  mr-2 text-success"></span> <?php echo $user->Status;?></td> 
                                                            <?php else: ?>    
                                                                <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> <?php echo $user->Status;?></td> 
                                                            <?php endif; ?>   
                                                            <td>
                                                                <a href="Perfil-Coworker.html"><i class="icon-eye mr-3"></i></a>
                                                                <a href="Perfil-Coworker.html"><i class="icon-pencil"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
            <div class="tab-pane animated fadeInUpShort" id="v-pills-sellers" role="tabpanel" aria-labelledby="v-pills-sellers-tab">
            <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <br>
                                <table class="table table-bordered table-hover data-tables" data-options='{"searching":true}'>
                            
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="checkedAll" class="custom-control-input"><label
                                                        class="custom-control-label" for="checkedAll"></label>
                                                </div>
                                            </th>
                                            <th>Id</th> 
                                            <th>Coworkers</th> 
                                            <th>UserName</th>     
                                            <th>RTN</th>
                                            <th>Teléfono</th>           
                                            <th>Role</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                            <tbody>
                                                <?php if(!empty($users)):?>
                                                    <?php foreach($users as $user):?>                                                    
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                                        id="user_id_1" required><label
                                                                        class="custom-control-label" for="user_id_1"></label>
                                                                </div>
                                                            </td>
    
                                                            <td><?php echo $user->id;?></td>
                                                            <td>
                                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                                    <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                                                </div>
                                                                <div>
                                                                    <div>
                                                                        <strong><?php echo $user->FullName;?> </strong>
                                                                    </div>
                                                                    <small> <?php echo $user->Email;?></small>
                                                                </div>
                                                            </td>                                                        
                                                            <td><?php echo $user->Username;?></td>
                                                            <td><?php echo $user->RTN;?></td>                                                        
                                                            <td><?php echo $user->Phone;?></td>                                                   
                                                            <td><span class="r-3 badge badge-success "><?php echo $user->RoleId;?></span></td>
                                                            <?php   if($user->Status === 'Activo'): ?>
                                                                <td><span class="icon icon-circle s-12  mr-2 text-success"></span> <?php echo $user->Status;?></td> 
                                                            <?php else: ?>    
                                                                <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> <?php echo $user->Status;?></td> 
                                                            <?php endif; ?>   
                                                            <td>
                                                                <a href="Perfil-Coworker.html"><i class="icon-eye mr-3"></i></a>
                                                                <a href="Perfil-Coworker.html"><i class="icon-pencil"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <a href="<?php echo base_url();?>admin/users/add" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>
</div>
