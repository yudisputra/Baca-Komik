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
		<?php foreach ($komik as $key) { ;?>

			<div class="col-xs-6 col-sm-3">
				<div id="hover-cap-4col">
						<div class="caption">
							<img style="max-height: 500px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 350px;" src="<?php echo site_url()?>assets/images/cover/<?php echo $key->cover?>" class="img-responsive center" width="100%">
						</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h5>Comic Name : <?php echo $key->namakomik?></h5>
				<h5>Author : <?php echo $key->pengarang?></h5>
				<h5>Status : <?php echo $key->status?></h5>
				<p>Ringkasan : <?php echo $key->ringkasan?></p>
			</div>
		<?php } ?>
		 <table id="example" class="table table-responsive table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Chapter</th>
                <th>Release date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>2008/11/28</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>2008/11/28</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>2008/11/28</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>2008/11/28</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>2008/11/28</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>2008/11/28</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>2008/11/28</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>2008/11/28</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Chapter</th>
                <th>Release date</th>
            </tr>
        </tfoot>
    </table>
	</div>
</div>
</div>
</div>
				
<?php $this->load->view('layout/footer');?>