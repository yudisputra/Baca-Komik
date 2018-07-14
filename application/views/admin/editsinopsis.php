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
			} ?>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<br>
			<br>
			<img src="<?php echo site_url()?>assets/images/cover/<?php echo $cover?>">	
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $ringkasan ?>
			</div>
		</div>
            
<?php $this->load->view('admin/admin_base_end');?>
