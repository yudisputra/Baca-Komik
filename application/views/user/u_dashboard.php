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
                <li class="active"><a href="<?php echo base_url('') ?>">Home</a></li>
                <li><a href="<?php echo base_url('subscribe/getIduser') ?>/<?=$id?>">Subscribe Komik</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello , <?php echo $username; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('welcome/index'); ?>">Homepage</a></li>
                        <li><a href="<?php echo base_url('user/profile'); ?>">Profile</a></li>
                        <li><a href="<?php echo base_url('login_user/logout'); ?>">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <h1>Selamat Datang <?php echo $username; ?> </h1>
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
            <div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Daftar Manga </div>
            <div class="panel-body">

      <table id="example" class="table table-responsive table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Genre</th>
                <th>Author</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftar as $key) { ;?>
            <tr>
                <td><?php echo $key->namakomik?></td>
                <td><?php echo $key->pengarang?></td>
                <td><?php echo $key->status?></td>
                <td><a href="<?php echo base_url()?>welcome/detail/<?php echo $key->idkomik ?>"><button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Detail Komik </button></a></td>
                
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Genre</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</div>
</div>