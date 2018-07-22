<?php 
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['iduser'];
    $username = $session_data['namauser'];
?>

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
			<a class="navbar-brand" href="#">Baca Komik</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url('welcome'); ?>">Home</a></li>
				<li><a href="<?php echo base_url('welcome/chapterTerbaru'); ?>">Chapter Terbaru</a></li>
				<li><a href="<?php echo base_url('welcome/daftarManga'); ?>">Daftar Manga</a></li>
			</ul>
			<?php 
			if (empty($id)) { ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('daftar_user/') ?>">Daftar</a></li>
				<li><a href="<?php echo base_url('login_user/'); ?>">Login</a></li>
			</ul>
			<?php }else{ ?>
			<ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello , <?php echo $username; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('user/'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Dashboard</a></li>
                        <li><a href="<?php echo site_url('user/profile') ?>/<?=$id?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a></li>
                        <li><a href="<?php echo base_url('login_user/logout'); ?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        <?php } ?>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

