<?php $this->load->view('layout/base_start'); ?>

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
            <div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Chapter Terbaru </div>
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

<?php $this->load->view('layout/footer');