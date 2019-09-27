<div class="page has-sidebar-left  height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Coworker
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link"  href="<?php echo base_url();?>admin/users"><i class="icon icon-home2"></i>Todos los Cowokers</a>
                    </li>
                    <li>
                        <a class="nav-link active"  href="<?php echo base_url();?>admin/users/add" ><i class="icon icon-plus-circle"></i> Agregar un nuevo coworker</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row my-3">
                <div class="col-md-12">                            
                    <form action="<?php echo base_url();?>admin/users/store" method="POST">
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">Agregar Coworker</h5>
                                <div class="form-row">
                                
                                    <div class="col-md-8">
                                    <div class="form-row">
                                            <div class="form-group col-6  m-0">
                                                <label for="FullName" class="col-form-label s-12"><i class="icon-user"></i>Nombre</label>
                                                <input id="FullName" name="FullName" placeholder="Ingrese el nombre de coworker" class="form-control r-0 light s-12 " 
                                                type="text" value="<?php echo set_value("FullName")?>">
                                                <?php echo form_error("FullName", "<span class ='help-block' style='color: red;'>","</span>"); ?>      
                                            </div>
                                            <div class="form-group col-6  m-0">
                                                <label for="username" class="col-form-label s-12"><i class="icon-user"></i>Nombre de Usuario</label>
                                                <input id="username" name="Username" placeholder="Nombre de Usuario" class="form-control r-0 light s-12 " 
                                                type="text" value="<?php echo set_value("Username")?>">
                                                <?php echo form_error("Username", "<span class ='help-block' style='color: red;'>","</span>"); ?>     
                                            </div>
                                        </div>

                                        <div class="form-row">                                            
                                            <div class="form-group col-6 m-0">
                                                <label class="col-form-label s-12" for="inlineFormCustomSelectPref">Seleccione un Genero</label>
                                                <select class="custom-select form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="GenderId" >
                                                    <option selected>Escoge una Opción...</option>
                                                    <?php if(!empty($genders)):?>
                                                        <?php foreach($genders as $gender):?> 
                                                            <option value=<?php echo $gender->GenderId;?>><?php echo $gender->GenderName;?></option>    
                                                        <?php endforeach;?>
                                                    <?php endif;?>                                                    
                                                </select>
                                                <?php echo form_error("GenderId", "<span class ='help-block' style='color: red;'>","</span>"); ?>  
                                            </div>

                                            <div class="form-group col-6 m-0">
                                                <label for="birthday" class="col-form-label s-12"><i class="icon-calendar mr-2"></i>Fecha de nacimiento</label>
                                                <input id="birthday" name="Birthday" placeholder="seleccione la fecha de cumpleaños" class="date-time-picker form-control r-0 light s-12 " 
                                                type="text"  data-options='{"timepicker":false, "format":"Y/m/d"}' value="2019/08/01">
                                            </div>
                                        </div>                                        
                                        <div class="form-row">                                          
                                            <div class="form-group col-6 m-0">
                                                <label for="RTN" class="col-form-label s-12"><i class="icon-fingerprint"></i>RTN</label>
                                                <input id="RTN"  name="RTN" placeholder="ingrese el RTN" class="form-control r-0 light s-12 date-picker" type="text">
                                            </div>
                                            <div class="form-group col-6 m-0">
                                                <label for="CompanyName"  class="col-form-label s-12">Nombre de la empresa</label>
                                                <input type="text" name="CompanyName" class="form-control r-0 light s-12" id="CompanyName" placeholder="Ingrese nombre de la empresa">
                                            </div>
                                        </div>
                                        <div class="form-group m-0">                                      
                                            <label for="Email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                            <input id="Email" name="Email" placeholder="usuario@email.com" class="form-control r-0 light s-12 " type="text">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-md-1">
                                        <input hidden id="Image" name="Image"/>
                                        <div class="dropzone dropzone-file-area pt-4 pb-4" name="Image" id="fileUpload">
                                            <div class="dz-default dz-message">
                                                <span>Soltar una imagen de tamaño 64x64 para el usuario</span>
                                                <div>También puede hacer clic para abrir el navegador de archivos</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <hr>
                                <div class="card-body">
                                    <h5 class="card-title">información de Contacto</h5>
                                    <div class="form-row">                                        
                                        <div class="form-group col-4 m-0">
                                            <label for="Phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Teléfono</label>
                                            <input id="Phone" name="Phone" placeholder="ej: 2222-2222" class="form-control r-0 light s-12 " type="text">
                                        </div>
                                        <div class="form-group col-4 m-0">
                                            <label for="AlternativePhone" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>Celular</label>
                                            <input id="AlternativePhone" name="AlternativePhone" placeholder="ej: 3333-3333" class="form-control r-0 light s-12 " type="text">
                                        </div>
                                        <div class="form-group col-4 m-0">
                                                <label for="inputCity" class="col-form-label s-12">Ciudad Domicilio</label>
                                                <input type="text" name="City" class="form-control r-0 light s-12" id="inputCity">
                                        </div>
                                    </div>                              
                                    <div class="form-row">
                                         <div class="form-group col-9 m-0">
                                            <label for="Address"  class="col-form-label s-12">Dirección Domicilio</label>
                                            <input type="text" name="Address" class="form-control r-0 light s-12" id="Address"
                                                placeholder="Ingrese una dirección">
                                            </div>                                           
                                    </div>                      
                                    <div class="form-row">
                                        <div class="form-group col-9 m-0">
                                            <label for="AlternativeAddress"  class="col-form-label s-12">Dirección Oficina</label>
                                            <input type="text" name="AlternativeAddress" class="form-control r-0 light s-12" id="AlternativeAddress"
                                                placeholder="Ingrese una dirección">
                                        </div>                                            
                                    </div>                                    
                                </div>  

                            
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">Informacion interna</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label for="AccountId" class="col-form-label s-12"># Codigo Contable</label>
                                        <input id="AccountId" name="AccountId" placeholder="Ingrese el codigo de cliente de contabilidad" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col m-0">
                                        <label for="roll2" class="col-form-label s-12">Codigo de Impresora</label>
                                        <input id="roll2" name="PrinterCode"  placeholder="asignar Codigo de impresora" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col m-0">
                                        <label for="roll4" class="col-form-label s-12">Codigo Wifi</label>
                                        <input id="roll4"name="WifiCode" placeholder="Asignar Codigo Wifi" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                </div>                               
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">Tipo de Roles</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Seleccione un role</label>
                                            <select name="RoleId" class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                                <option selected>Escoge una Opción...</option>
                                                <?php if(!empty($roles)):?>
                                                    <?php foreach($roles as $rol):?> 
                                                        <option value=<?php echo $rol->RoleId;?>><?php echo $rol->RoleName;?></option>    
                                                    <?php endforeach;?>
                                                <?php endif;?>                                                    
                                            </select>
                                    </div>
                                </div>                                
                            </div>
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Guardar información</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
</div>