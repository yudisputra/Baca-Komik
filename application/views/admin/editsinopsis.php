<?php $this->load->view('admin/admin_base_start');?>
			
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
			<?php echo form_open_multipart('Admin/ambiljudulsinopsis'); ?>
  			<label for="sel1">Pilih Judul Komik</label>
  				<select class="form-control" id="judulkomik" name="judulkomik">
  				<?php foreach ($judulkomik as $key) { ;?>
   		    	<option value="<?php echo $key->namakomik?>"><?php echo $key->namakomik?></option>
   		     	<?php } ?> 
  				</select>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
			</form>
		</div>
		<br>
		<br>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<?php foreach ($sinopsis as $key) 
			{
				$cover		= $key->cover;
				$ringkasan 	= $key->ringkasan;
				$idkomik	= $key->idkomik;
			} ?>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<br>
			<br>
			<img style="max-height: 600px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 400px;" src="<?php echo site_url()?>assets/images/cover/<?php echo $cover?>" class="img-responsive center" width="100%">	
			<br>
			<br>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<br>
				<br>
				<?php echo form_open_multipart('Admin/gantisinopsis/'.$idkomik); ?>
				<textarea name="ringkasan" id="ringkasan" class="form-control" rows="20"><?php echo $ringkasan ?></textarea>
				<br>
				<br>
				<div class="form-group">
				<label for="">Ubah Cover Komik</label>
				<input type="file" name="cover" size="20"/>
				<?php echo validation_errors(); ?>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
			</div>
		</div>
            
<?php $this->load->view('admin/admin_base_end');?>
