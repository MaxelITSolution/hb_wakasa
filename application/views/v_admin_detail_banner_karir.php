<script type="text/javascript">
	$('#setting').addClass('active_main');	
	$('#banner').addClass('active');
	$(document).ready(function () {
		$('#bannerTable').DataTable();
		$('#banner_img').change(function(){
			var image_url = document.getElementById('banner_img');
			banner_img.src = URL.createObjectURL(event.target.files[0]);
			$("#image1").attr("src", banner_img.src);
		});
	});
</script>

<div class="mycontent" style="overflow-x: hidden; ">
	<div class="container">
		<div class="col-sm-3" style="margin-top: 60px;"><a href="<?php echo base_url(); ?>Backend/setting_banner"><i class="fa fa-reply fa-lg"></i>  Kembali</a></div>
		<div class="col-sm-6" class="cop">
			<h3 style="text-align: center; font-weight: bold; font-size: 30px;">DETAIL BANNER</h3>
			
			<h4 style="text-align:center;">KARIR</h4>
			
			<br/>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<hr class="bold">
	<br/>
	<form class="form-horizontal" action="<?php echo base_url(); ?>Backend/update_banner_karir" method="POST" enctype="multipart/form-data">
		<?php foreach ($image->result() as $row) { ?>
		<div class="col-sm-4">
			<input type="hidden" id="img" name="img" >
			<script>
				$(document).ready(function () {
					$('#banner_img').change(function(){
						document.getElementById('img').value = "asset/image/banner/<?php echo $row->image; ?>";
					});
				});
			</script>
			<h4>Image 1 : </h4>
			<input type="file" id="banner_img" name="banner_img" />
			<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $row->image; ?>" id="image1" class="" style="width: 250px; height: 150px; margin-top:10px;" />
		</div>
		<?php } ?>
		<div class="row"></div>
		<br/>
			<hr class="bold">
		<br/>	

		<input type="submit" class="btn btn-default pull-right" id="btn_save_product"></input>

	</form>
</div>