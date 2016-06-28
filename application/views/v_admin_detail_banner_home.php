<script type="text/javascript">
	$('#setting').addClass('active_main');	
	$('#banner').addClass('active');
	$(document).ready(function () {
		$('#bannerTable').DataTable();
		$('#banner_home_1').change(function(){
			var image_url = document.getElementById('banner_home_1');
			banner_home_1.src = URL.createObjectURL(event.target.files[0]);
			$("#image1").attr("src", banner_home_1.src);
		});
		$('#banner_home_2').change(function(){
			var image_url = document.getElementById('banner_home_2');
			banner_home_2.src = URL.createObjectURL(event.target.files[0]);
			$("#image2").attr("src", banner_home_2.src);
		});
		$('#banner_home_3').change(function(){
			var image_url = document.getElementById('banner_home_3');
			banner_home_3.src = URL.createObjectURL(event.target.files[0]);
			$("#image3").attr("src", banner_home_3.src);
		});
		$('#banner_home_4').change(function(){
			var image_url = document.getElementById('banner_home_4');
			banner_home_4.src = URL.createObjectURL(event.target.files[0]);
			$("#image4").attr("src", banner_home_4.src);
		});
		$('#banner_home_5').change(function(){
			var image_url = document.getElementById('banner_home_5');
			banner_home_5.src = URL.createObjectURL(event.target.files[0]);
			$("#image5").attr("src", banner_home_5.src);
		});
	});
</script>

<div class="mycontent" style="overflow-x: hidden; ">
	<div class="container">
		<div class="col-sm-3" style="margin-top: 60px;"><a href="<?php echo base_url(); ?>Backend/setting_banner"><i class="fa fa-reply fa-lg"></i>  Kembali</a></div>
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
    <input type="hidden" id="img1" name="img1" >
    <input type="hidden" id="img2" name="img2" >
    <input type="hidden" id="img3" name="img3" >
    <input type="hidden" id="img4" name="img4" >
    <input type="hidden" id="img5" name="img5" >
    <script type="text/javascript">
		$(document).ready(function () {
			$('#banner_home_1').change(function(){
				document.getElementById('img1').value = "asset/image/banner/<?php echo $img[0]; ?>";
			});
			$('#banner_home_2').change(function(){
				document.getElementById('img2').value = "asset/image/banner/<?php echo $img[1]; ?>";
			});
			$('#banner_home_3').change(function(){
				document.getElementById('img3').value = "asset/image/banner/<?php echo $img[2]; ?>";
			});
			$('#banner_home_4').change(function(){
				document.getElementById('img4').value = "asset/image/banner/<?php echo $img[3]; ?>";
			});
			$('#banner_home_5').change(function(){
				document.getElementById('img5').value = "asset/image/banner/<?php echo $img[4]; ?>";
			});
		});
	</script>
	<div class="col-sm-4">
		<h4>Image 1 : </h4>
		<input type="file" id="banner_home_1" name="banner_home_1" />
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $img[0]; ?>" id="image1" class="" style="width: 250px; height: 150px; margin-top:10px;" />
	</div>
	<div class="col-sm-4">
		<h4>Image 2 : </h4>
		<input type="file" id="banner_home_2" name="banner_home_2" />
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $img[1]; ?>" id="image2" class="" style="width: 250px; height: 150px; margin-top:10px;" />
	</div>
	<div class="col-sm-4">
		<h4>Image 3 : </h4>
		<input type="file" id="banner_home_3" name="banner_home_3" />
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $img[2]; ?>" id="image3" class="" style="width: 250px; height: 150px; margin-top:10px;" />
	</div>
	<div class="col-sm-4">
		<h4>Image 4 : </h4>
		<input type="file" id="banner_home_4" name="banner_home_4" />
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $img[3]; ?>" id="image4" class="" style="width: 250px; height: 150px; margin-top:10px;" />
	</div>
	<div class="col-sm-4">
		<h4>Image 5 : </h4>
		<input type="file" id="banner_home_5" name="banner_home_5" />
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $img[4]; ?>" id="image5" class="" style="width: 250px; height: 150px; margin-top:10px;" />
	</div>

	<div class="container"></div>

	<br/>
		<hr class="bold">
	<br/>	

	<input type="submit" class="btn btn-default pull-right" id="btn_save_product"></input>

	</form>
</div>