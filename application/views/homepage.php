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
							<a href="<?php echo base_url()?>/welcome/detail/<?php echo $key->idkomik ?>">
							<center><img style="max-height: 300px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 350px;" src="<?php echo site_url()?>assets/images/cover/<?php echo $key->cover?>" class="img-responsive center" width="100%"></center>
							<p align="center"><?php echo $key->namakomik ?></p></a>
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
							<th>Kategori</th>
							<th>Judul</th>
							<th>Status</th>
							<th>Tanggal Rilis</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Komik</td>
							<td>Naruto Episode 12 Sub Indonesia</td>
							<td>Belum Tamat</td>
							<td>Hari ini</td>
						</tr>
					</tbody>
				</table>
			</div>
</div>
</div>
</div>
</div>

<?php $this->load->view('layout/base_end');?>