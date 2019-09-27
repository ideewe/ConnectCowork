
<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Tipo de Coworkers
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>Todos tipos de Coworkers activos</a>
                    </li>      
                    <li class="float-right">
                        <a class="nav-link"  href="<?php echo base_url();?>admin/users/usertype/add" ><i class="icon icon-plus-circle"></i> Crear tipo de Coworker</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-renter-tab" data-toggle="pill" href="#v-pills-renter"
                           role="tab" aria-controls="v-pills-renter"><i class="icon icon-home2"></i>Todos tipos de Coworkers eliminados</a>
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
                                            <th>Tipo de Coworkers</th>                                           
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                            <tbody>
                                                <?php if(!empty($usertypesall)):?>
                                                    <?php foreach($usertypesall as $usertype):?>                                                    
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                                        id=<?php echo $usertype->UserTypeId;?> required><label
                                                                        class="custom-control-label" for=<?php echo $usertype->UserTypeId;?>></label>
                                                                </div>
                                                            </td>    
                                                            <td><?php echo $usertype->UserTypeId;?></td>                                                                                                               
                                                            <td><?php echo $usertype->UserTypeName;?></td>  
                                                            <?php   if($usertype->Deleted === '0'): ?>
                                                                <td><span class="icon icon-circle s-12  mr-2 text-success"></span> <?php echo "Activo";?></td> 
                                                            <?php else: ?>    
                                                                <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> <?php echo "Eliminado";?></td> 
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
            <div class="tab-pane animated fadeInUpShort" id="v-pills-renter" role="tabpanel" aria-labelledby="v-pills-renter-tab">
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
                                            <th>Tipo de Coworkers</th>                                           
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                            <tbody>
                                                <?php if(!empty($usertypesdeleted)):?>
                                                    <?php foreach($usertypesdeleted as $usertypedeleted):?>                                                    
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                                        id=<?php echo $usertypedeleted->UserTypeId;?> required><label
                                                                        class="custom-control-label" for=<?php echo $usertypedeleted->UserTypeId;?>></label>
                                                                </div>
                                                            </td>
    
                                                            <td><?php echo $usertypedeleted->UserTypeId;?></td>                                                                                                               
                                                            <td><?php echo $usertypedeleted->UserTypeName;?></td> 
                                                            <?php   if($usertypedeleted->delete === '1'): ?>
                                                                <td><span class="icon icon-circle s-12  mr-2 text-success"></span> <?php  echo "Eliminado";?></td> 
                                                            <?php else: ?>    
                                                                <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> <?php  echo "Activo";?></td> 
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
