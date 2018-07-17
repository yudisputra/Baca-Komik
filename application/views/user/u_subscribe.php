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
                <li class="active"><a href="<?php echo base_url('subscribe/') ?>">Subscribe Komik</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello , refly_ilham <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('welcome/index'); ?>">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <h1>Selamat Datang </h1>
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
<div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Manga Terbaru</div>
    <div class="panel-body">
        <?php foreach ($subscribe as $key) { ;?>

            <div class="col-xs-6 col-sm-3">
                <div id="hover-cap-4col">
                        <div class="caption">
                            <a href="<?php echo base_url()?>welcome/detail/<?php echo $key->idkomik_favorite ?>">
                            <center><img style="max-height: 300px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 350px;" src="<?php echo site_url()?>assets/images/cover/<?php echo $key->cover?>" class="img-responsive center" width="100%"></center>
                            <h5 align="center"><?php echo $key->namakomik ?></h5></a>
                        </div>
                </div>
            </div>
                        <?php } ?>
    </div>
</div>
</div>
</div>
</div>