<?php $this->load->view('admin/admin_base_start');?>

	<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open_multipart('Admin_chapter/insertchapter'); ?>

			<legend>Tambah Chapter Komik</legend>
			<?php echo validation_errors(); ?>
			<div class="form-group">
			<label for="sel1">Pilih Judul Komik</label>
  			<select class="form-control" id="judulkomik" name="judulkomik">
  			<?php foreach ($judulkomik as $key) { ;?>
   		    <option value="<?php echo $key->idkomik?>" name="fk_idkomik"><?php echo $key->namakomik?></option>
   		     <?php } ?> 
  			</select>
  			<br>
			<label for="">Volume Chapter</label>
			<input type="text" class="form-control" id="volchapter" name="volchapter">
			<br>
			<label for="">Judul Chapter</label>
			<input type="text" class="form-control" id="judulchapter" name="judulchapter">
			<br>
			<label for="">Tanggal Rilis</label>
			<input type="date" class="form-control" id="tanggalrilis" name="tanggalrilis">
			<br>
			<div class="form-group">
				<label for="">Upload Chapter</label>
				<input type="file" name="files[]" multiple />
			</div>

			</div>
			<br>
			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
	</div>	 
	</div>

<?php $this->load->view('admin/admin_base_end');?>
