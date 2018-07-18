<?php 
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['iduser'];
    $username = $session_data['namauser'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Baca Komik Online </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
   <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
            body {
                font-family: 'Segoe UI';
            }
        </style>
    
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Read Manga</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('Welcome/index'); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>/Welcome/detail/<?php echo $this->uri->segment(3)?>">Kembali ke Judul</a></li>
            </ul>
        <?php 
            if (empty($id)) { ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('welcome/index'); ?>">Log in</a></li>
            </ul>
        <?php }else{ ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello , <?php echo $username; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('welcome/index'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Homepage</a></li>
                        <li><a href="<?php echo site_url('user/profile') ?>/<?=$id?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a></li>
                        <li><a href="<?php echo base_url('login_user/logout'); ?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        <?php } ?>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>