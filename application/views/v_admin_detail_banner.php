<script type="text/javascript">
	$('#setting').addClass('active_main');	
	$('#banner').addClass('active');
	$(document).ready(function () {
		$('#bannerTable').DataTable();
	});
</script>

<div class="mycontent" style="overflow-x: hidden; ">
	<div class="container">
		<div class="col-sm-3" style="margin-top: 60px;"><a href="dashboard"><i class="fa fa-reply fa-lg"></i>  Kembali</a></div>
		<div class="col-sm-6" class="cop">
			<h3 style="text-align: center; font-weight: bold; font-size: 30px;">DETAIL BANNER</h3>
			
			<h4 style="text-align:center;">Home</h4>
			
			<br/>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<hr class="bold">
	<br/>
	<form class="form-horizontal" action="<?php echo base_url(); ?>Backend/update_banner_home" method="POST" enctype="multipart/form-data">
	<?php $img = array(); $ctr_ = 0; ?>
	<?php foreach ($image->result() as $row) {
		$img[$ctr_] = $row->image;
		$ctr_ = $ctr_ + 1;
    } ?>	
	<div class="col-sm-4">
		<h4>Image 1 : </h4>
		<?php echo form_upload('upImage1'); ?>
		<img src="<?php echo base_url(); ?>asset/image/Banner/<?php echo $img[0]; ?>" class="" style="width: 250px; height: 150px; margin-top:10px;" />
	</div>
	<?php if ($page=="home") { ?>
		<div class="col-sm-4">
			<h4>Image 2 : </h4>
			<?php echo form_upload('upImage2'); ?>
			<img src="<?php echo base_url(); ?>asset/image/Banner/<?php echo $img[1]; ?>" class="" style="width: 250px; height: 150px; margin-top:10px;" />
		</div>
		<div class="col-sm-4">
			<h4>Image 3 : </h4>
			<?php echo form_upload('upImage3'); ?>
			<img src="<?php echo base_url(); ?>asset/image/Banner/<?php echo $img[2]; ?>" class="" style="width: 250px; height: 150px; margin-top:10px;" />
		</div>
		<div class="col-sm-4">
			<h4>Image 4 : </h4>
			<?php echo form_upload('upImage4'); ?>
			<img src="<?php echo base_url(); ?>asset/image/Banner/<?php echo $img[3]; ?>" class="" style="width: 250px; height: 150px; margin-top:10px;" />
		</div>
		<div class="col-sm-4">
			<h4>Image 5 : </h4>
			<?php echo form_upload('upImage5'); ?>
			<img src="<?php echo base_url(); ?>asset/image/Banner/<?php echo $img[4]; ?>" class="" style="width: 250px; height: 150px; margin-top:10px;" />
		</div>

		<div class="container"></div>
	<?php } ?>

	<br/>
		<hr class="bold">
	<br/>	

	<input type="submit" class="btn btn-default pull-right" id="btn_save_product"></input>

	</form>
</div>