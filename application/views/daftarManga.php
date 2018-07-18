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

<?php $this->load->view('layout/footer'); ?>