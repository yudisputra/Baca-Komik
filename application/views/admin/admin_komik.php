<?php 
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['id'];
    $username = $session_data['username'];
?>

<?php $this->load->view('admin/admin_base_start');?>

<script type="text/javascript" src="<?php echo base_url()?>assets/custom/komik.js"></script>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		 <h1>Admin Komik</h1>
		 <div id="jsGrid"></div>
	</div>

<?php $this->load->view('admin/admin_base_end');?>
