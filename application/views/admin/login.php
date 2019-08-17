<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Connect Cowork</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
     <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<div class="page parallel">
    <div class="d-flex row">
        <div class="col-md-5 white">
            <div class="p-5 mt-5">
                <img src="assets/img/basic/logo.png" alt=""/>
            </div>
            <div class="p-5" >
                <h3>Bienvenido</h3>
                <p>Hola Coworker, ahora hay nuevas cosas esperando por ti.
                </p>
                <?php if($this->session->flashdata("Error")):?>
                    <div role="alert" class= "alert alert-danger">
                        <p><?php echo $this->session->flashdata("Error")?></p>
                    </div>
                <?php endif; ?>
                <form action="<?php echo base_url();?>auth/login" method="post">
                    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                        <input type="text" class="form-control form-control-lg"
                               placeholder="ingrese Usuario" name="username">
                    </div>
                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                        <input type="password" class="form-control form-control-lg"
                               placeholder="Password" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Ingresar">
                </form>
            </div>
        </div>
        <div class="col-md-7  height-full blue accent-3 align-self-center text-center" data-bg-repeat="false"
             data-bg-possition="center"
             style="background: url('assets/img/icon/avatar.png') #FFEFE4">
        </div>
    </div>
</div>

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>

<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>

