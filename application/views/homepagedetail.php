<?php $this->load->view('layout/base_start');?>

				<?php foreach ($komik as $key) { ;?>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="hover-cap-4col">
						<div class="caption">
							<center><img src="<?php echo site_url()?>assets/images/cover/<?php echo $key->cover?>" class="img-responsive center"></center>
							<p><?php echo $key->namakomik?></p>
							<p><?php echo $key->pengarang?></p>
							<p><?php echo $key->status?></p>
						</div>
				</div>
				<?php } ?>
				</div>
				
<?php $this->load->view('layout/base_end');?>