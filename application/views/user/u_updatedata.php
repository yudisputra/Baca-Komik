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
			<?php foreach ($profil as $key) { ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo form_open("user/update/".$key->iduser); ?>
				<legend>Update Data Pegawai</legend>
				<?php 
					echo validation_errors(); 
										
				?>
				<div class="form-group">
					<label for="Username">Username</label>
					<input type="text" class="form-control" id="username" name="username" value="<?php echo $key->namauser ?>">
				</div>
				<div class="form-group">
					<label for="Nickname">Nickname</label>
					<input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo $key->nickname ?>">
				</div>
				<div class="form-group">
					<label for="Email">Email</label>
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $key->email ?>">
				</div>
				<div class="form-group">
					<label for="TanggalLahir">Tanggal Lahir</label>
					<?php 	$tglLahirinput = $key->tanggalLahir;
							$tglLahir = new DateTime($tglLahirinput);
							$date=$tglLahir->format('d-m-Y'); ?>
					<input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?php echo  $date ?>">
				</div>
				<?php } ?>
				<button type="submit" class="btn btn-primary">Update</button>
				<?php echo form_close(); ?>
			</div>
</div>

<br>
