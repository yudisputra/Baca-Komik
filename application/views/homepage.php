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
<div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Manga Terbaru</div>
	<div class="panel-body">
		    <form class="form-group has-feedback">
		         <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
		         <input type="text" class="form-control" id="inputSuccess5" placeholder="Search your manga ...">
		         <span class="glyphicon glyphicon-search form-control-feedback"></span>
		     </form>
		<?php foreach ($komik as $key) { ;?>

			<div class="col-xs-6 col-sm-3">
				<div id="hover-cap-4col">
						<div class="caption">
							<a href="<?php echo base_url()?>welcome/detail/<?php echo $key->idkomik ?>">
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

	<div class="container-fluid">
		<div class="row">
		<div class="panel panel-success">
		<div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Latest Manga Updates</div>
		<div class="panel-body">
				<table id="example" class="table table-responsive table-hover" style="width:100%">
					<thead>
						<tr>
							<th>Nama Komik</th>
							<th>Judul Chapter</th>
							<th>Volume Chapter</th>
							<th>Tanggal Rilis</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($chapter as $key) { ;?>
			            <tr>
			            	<td><?php echo $key->namakomik ?></td>
			                <td><?php echo $key->judulchapter?></td>
			                <td><?php echo $key->volchapter?></td>
			                <td><?php echo $key->tanggalrilis?></td>
			                <td><a href="#"><button type="button" class="btn btn-default" aria-label="Left Align">
								<span class="glyphicon glyphicon-book" aria-hidden="true"></span> Baca Komik </button></a></td>
			            </tr>
			            <?php } ?>
					</tbody>
				</table>
			</div>
</div>
</div>
</div>
</div>

<?php $this->load->view('layout/footer');?>