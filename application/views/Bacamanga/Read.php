<?php $this->load->view('Bacamanga/baca_base_start');?>

<?php
 
	for($i = 1; $i <= 100; $i++)
	{ ?>

	<center>
    <img src="<?php echo site_url()?>assets/images/Manga/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $i?>.jpg">
	</center>
	<br>
 
	<?php } ?>

<?php $this->load->view('Bacamanga/baca_base_end');?>
