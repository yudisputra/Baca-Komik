<?php 
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['iduser'];
    $username = $session_data['namauser'];
?>

<?php $this->load->view('user/u_base_start'); ?>

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
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('user/') ?>">Home</a></li>
                <li><a href="<?php echo base_url('subscribe/') ?>">Subscribe Komik</a></li>
            </ul>
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
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <h1>Selamat Datang <?php echo $username; ?></h1>
        <p>Silahkan menikmati content Baca Komik</p>
        <p>
            <a class="btn btn-primary btn-lg">Learn more</a>
        </p>
    </div>
</div>

<div class="container">
<div class="container-fluid">
<div class="row">
<div class="panel panel-success">
<div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Detail Manga</div>
    <div class="panel-body">
        <?php foreach ($profile as $key) { ?>

            <div class="col-xs-6 col-sm-3">
                <div id="hover-cap-4col">
                        <div class="caption">
                            <img style="max-height: 500px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 350px;" src="<?php echo base_url("assets/images/users.png") ?>" class="img-responsive center" width="100%">
                        </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h4>Nama Anda &nbsp;&nbsp;: <?php echo $key->namauser?></h5>
                <h4>Nickname &nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $key->nickname?></h5>
                <h4>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: <?php echo $key->email?></h5>
                <h4>Jenis Kelamin : <?php echo $key->gender?></h5>
                <?php 
                    $tglLahirinput = $key->tanggalLahir;
                    $tglLahir = new DateTime($tglLahirinput);
                    $date=$tglLahir->format('d M Y');
                ?>
                <h4>Tanggal Lahir : <?php echo $date; ?></h4>
                <br>
                <a href="<?php echo site_url('')."user/update/".$key->iduser?>"><button type="button" class="btn btn-default">Update Profile</button></a>
            </div>
        <?php } ?>
    </div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="panel panel-success">
<div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Manga Favorite</div>
    <div class="panel-body">
        <?php foreach ($favorit as $key) { ;?>

            <div class="col-xs-6 col-sm-3">
                <div id="hover-cap-4col">
                        <div class="caption">
                            <a href="<?php echo base_url()?>welcome/detail/<?php echo $key->idkomik_favorite ?>">
                            <center><img style="max-height: 300px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 350px;" src="<?php echo site_url()?>assets/images/cover/<?php echo $key->cover?>" class="img-responsive center" width="100%"></center>
                            <br>
                        </div>
                </div>
            </div>
                        <?php } ?>
    </div>
</div>
</div>
</div>
</div>