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
                        <a class="nav-link"  href="panel-page-users.html"><i class="icon icon-home2"></i>Todos los Cowokers</a>
                    </li>
                    <li>
                        <a class="nav-link active"  href="panel-page-users-create.html" ><i class="icon icon-plus-circle"></i> Agregar un nuevo coworker</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row my-3">
                <div class="col-md-12">
                    <form action="#">
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">Agregar Coworker</h5>
                                <div class="form-row">
                                
                                    <div class="col-md-8">
                                    <div class="form-row">
                                            <div class="form-group col-6  m-0">
                                                <label for="fullname" class="col-form-label s-12"><i class="icon-user"></i>Nombre</label>
                                                <input id="fullname" placeholder="Ingrese el nombre de coworker" class="form-control r-0 light s-12 " type="text">
                                            </div>
                                            <div class="form-group col-6  m-0">
                                                <label for="username" class="col-form-label s-12"><i class="icon-user"></i>Nombre de Usuario</label>
                                                <input id="username" placeholder="Nombre de Usuario" class="form-control r-0 light s-12 " type="text">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-6 m-0">
                                                <label for="cnic" class="col-form-label s-12"><i class="icon-fingerprint"></i>RTN</label>
                                                <input id="cnic" placeholder="ingrese el RTN" class="form-control r-0 light s-12 date-picker" type="text">
                                            </div>
                                            <div class="form-group col-6 m-0">
                                                <label for="birthday" class="col-form-label s-12"><i class="icon-calendar mr-2"></i>Fecha de nacimiento</label>
                                                <input id="birthday" placeholder="seleccione la fecha de cumpleaños" class="date-time-picker form-control r-0 light s-12 " 
                                                type="text"  data-options='{"timepicker":false, "format":"Y/m/d"}' value="2019/08/01">
                                            </div>
                                        </div>

                                        <div class="form-group m-0">
                                            <label for="dob" class="col-form-label s-12">Genero</label>
                                            <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="male" name="gender" class="custom-control-input">
                                                <label class="custom-control-label m-0" for="male">Masculino</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="female" name="gender" class="custom-control-input">
                                                <label class="custom-control-label m-0" for="female">Femenino</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-md-1">
                                        <input hidden id="file" name="file"/>
                                        <div class="dropzone dropzone-file-area pt-4 pb-4" id="fileUpload">
                                            <div class="dz-default dz-message">
                                                <span>Soltar una imagen de tamaño 64x64 para el usuario</span>
                                                <div>También puede hacer clic para abrir el navegador de archivos</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row mt-1">
                                    <div class="form-group col-4 m-0">
                                        <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                        <input id="email" placeholder="usuario@email.com" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <div class="form-group col-4 m-0">
                                        <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Teléfono</label>
                                        <input id="phone" placeholder="ej: 2222-2222" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col-4 m-0">
                                        <label for="mobile" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>Celular</label>
                                        <input id="mobile" placeholder="ej: 3333-3333" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-9 m-0">
                                        <label for="address"  class="col-form-label s-12">Dirección</label>
                                        <input type="text" class="form-control r-0 light s-12" id="address"
                                               placeholder="Ingrese una dirección">
                                    </div>

                                    <div class="form-group col-3 m-0">
                                        <label for="inputCity" class="col-form-label s-12">Ciudad</label>
                                        <input type="text" class="form-control r-0 light s-12" id="inputCity">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">ENROLLMENT</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label for="roll1" class="col-form-label s-12"># ID NUMBER</label>
                                        <input id="roll1" placeholder="Enter ID Number" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col m-0">
                                        <label for="roll2" class="col-form-label s-12">CLASS</label>
                                        <input id="roll2" placeholder="Select Class" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col m-0">
                                        <label for="roll4" class="col-form-label s-12">SECTION</label>
                                        <input id="roll4" placeholder="Select Class" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-4 m-0">
                                        <label for="joining" class="col-form-label s-12"><i class="icon-calendar mr-2"></i>DATE OF JOINING</label>
                                        <input id="joining" placeholder="user@email.com" class="form-control r-0 light s-12 datePicker" data-time-picker="false"
                                               data-format-date='Y/m/d' type="text">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">PARENT / GUARDIAN</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select A parent</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary bg-primary btn-sm mt-2">Add New Guardian</a>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
</div>