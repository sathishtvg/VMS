<!DOCTYPE html>
<html lang="en">
    <head>
    <title>A-SAT VMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?=base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
    <link href="<?=base_url('assets/css/custom_style.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('assets/image/favicons.ico');?>" type="image/png" sizes="16x16">
        
    <!--Theme Components-->
    <!-- Fontfaces CSS-->
    <link href="<?=base_url('assets/css/font-face.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
   <link href="<?=base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css');?>" rel="stylesheet" media="all"> 

    <!-- Vendor CSS-->
    <link href="<?=base_url('assets/vendor/animsition/animsition.min.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/wow/animate.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/slick/slick.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css');?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/vendor/vector-map/jqvmap.min.css');?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url('assets/css/theme.css');?>" rel="stylesheet" media="all">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" media="all">
    <!--Theme Components-->    
    
    <script src="<?=base_url('assets/vendor/jquery-3.2.1.min.js');?>"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <style>
        .alignmenu{
            margin-top:10px;
        }
        .logo{
            font-size: xx-large;
        }
        .title{
            font-size: 34px;
            font-weight: 600;
        }
        .control-label{
            color: red;
        }
    </style>
    </head>
    
    <body class="animsition">
        <div class="container-fluid">
        <?php if(isset($_SESSION['user_name'])): 
           $this->load->view("aside"); 
        endif; ?>