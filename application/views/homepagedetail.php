<?php 
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['iduser'];
    $username = $session_data['namauser'];
?>
<?php $this->load->view('layout/base_start');?>
<div class="container-fluid">
	<div class="jumbotron">
		<div class="container">
			<h1>Baca Komik Online </h1>
			<p>Website Manga - Anime | Terlengkap dan terpercaya</p>
			<p>
				<a class="btn btn-primary btn-lg">Learn more</a>
			</p>
		</div>
	</div>
</div>

<div class="container">
<div class="container-fluid">
<div class="row">
<div class="panel panel-success">
<div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Detail Manga</div>
	<div class="panel-body">
		<?php foreach ($komik as $key) { ;?>

			<div class="col-xs-6 col-sm-3">
				<div id="hover-cap-4col">
						<div class="caption">
							<img style="max-height: 500px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 350px;" src="<?php echo site_url()?>assets/images/cover/<?php echo $key->cover?>" class="img-responsive center" width="100%">
						</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>Nama Komik : <?php echo $key->namakomik?></h5>
				<h4>Pembuat : <?php echo $key->pengarang?></h5>
				<h4>Status : <?php echo $key->status?></h5>
				<p>Ringkasan : <?php echo $key->ringkasan?></p>
                <?php 
                if (! empty($id)) { ?>
				<a href="<?php echo site_url('subscribe/insert') ?>/<?=$key->idkomik?>/<?=$id?>"><button type="button" class="btn btn-success" aria-label="Left Align">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambahkan Favorit </button></a>
                <?php } ?>
			</div>
		<?php } ?>
	</div>
</div>
</div>
</div>

    <div class="container-fluid">
            <div class="row">
            <div class="panel panel-success">
            <div class="panel-heading"><span class="glyphicon glyphicon-book"></span> List Manga </div>
            <div class="panel-body">

      <table id="example" class="table table-responsive table-hover">
        <thead>
            <tr>
                <th>Chapter</th>
                <th>Judul</th>
                <th>Release date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chapter as $key) { ;?>
            <tr>
                <td><?php echo $key->volchapter?></td>
                <td><?php echo $key->judulchapter?></td>
                <td><?php echo $key->tanggalrilis?></td>
                <td><a href="<?php echo base_url()?>Baca/komik/<?php echo $key->fk_idkomik?>/<?php echo $key->volchapter?>"><button type="button" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-book" aria-hidden="true"></span> Baca Komik </button></a></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Chapter</th>
                <th>Release date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</div>
</div>
				
<?php $this->load->view('layout/footer');?>