<div class="banner">
<?php $banner_array = array(); $banner_ctr = 0; ?>
<?php foreach ($banner_home->result() as $row) {
	$banner_array[$banner_ctr] = $row->image;
	$banner_ctr = $banner_ctr + 1;
} ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="z-index: -1;">
	<div class="carousel-inner" role="listbox">
	    <div class="item active">
	      	<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $banner_array[0]; ?>" alt="..." id="image_banner">
	    </div>
	    <div class="item">
	      	<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $banner_array[1]; ?>" alt="..." id="image_banner">
	    </div>
	    <div class="item">
	      	<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $banner_array[2]; ?>" alt="..." id="image_banner">
	    </div>
	    <div class="item">
	      	<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $banner_array[3]; ?>" alt="..." id="image_banner">
	    </div>
	    <div class="item">
	      	<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $banner_array[4]; ?>" alt="..." id="image_banner">
	    </div>
  	</div>
</div>

<?php $islog = $_SESSION['user_login']; ?>
<?php if ($islog=="no"){ ?>
	<a href="menjadireseller">
<?php } else { ?> 
	<a href="jelajahproduct">
<?php } ?>
	<div id="banner_text1">
		<div id="banner_text1_"><?php echo $lang_array[18]; ?></div>
	</div>
</a>
<?php if ($islog=="no"){ ?>
	<a href="menjadireseller">
<?php } else { ?> 
	<a href="jelajahproduct">
<?php } ?>
	<div id="banner_text2">
		<div id="banner_text2_"><?php echo $lang_array[83]; ?></div>
	</div>
</a>
<?php if ($islog=="no"){ ?>
	<a href="menjadireseller">
<?php } else { ?> 
	<a href="jelajahproduct">
<?php } ?>
	<div id="banner_text3">
		<div id="banner_text3_"><?php echo $lang_array[19]; ?></div>
	</div>
</a>
</div>