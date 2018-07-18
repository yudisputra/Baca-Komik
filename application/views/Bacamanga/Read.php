
<?php $this->load->view('Bacamanga/baca_base_start');?>

<?php $no = 0; foreach ($komik as $key) {
	$no = $key->jum;
}
 
	for($i = 1; $i <= $no; $i++)
	{ ?>

	<center>
    <img class="img img-responsive" src="<?php echo site_url()?>assets/images/Manga/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $i?>.jpg">
	</center>
	<br>
 
	<?php } ?>

<?php $this->load->view('Bacamanga/baca_base_end');?>
