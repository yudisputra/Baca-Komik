<?php $this->load->view('admin/admin_base_start');?>

	<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open('Admin/create'); ?>

			<legend>Tambah Data Komik</legend>
			<?php echo validation_errors(); ?>
			<div class="form-group">
			<label for="">Nama Komik</label>
			<input type="text" class="form-control" id="namakomik" name="namakomik">
			<label for="">Nama Pengarang</label>
			<input type="text" class="form-control" id="pengarang" name="pengarang">
			<label for="">Status</label>
			<input type="text" class="form-control" id="status" name="status">
			<label for="">Ringkasan</label>
			<!-- <input type="text" class="form-control" id="ringkasan" name="ringkasan"> -->
			<textarea name="ringkasan" id="ringkasan" class="form-control" rows="3"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
	</div>	 
	</div>

<?php $this->load->view('admin/admin_base_end');?>
