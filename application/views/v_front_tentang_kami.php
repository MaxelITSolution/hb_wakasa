<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/tentangkami.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerpolos.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/modal.css" type="text/css" />
	</head>
	<body id="body" style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_full.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_polos.php'); ?>
		<div class="content">
			<div class="history">
				<div class="col-sm-2"></div>
				<div class="col-sm-8" id="company_history">
					<h3><?php echo $lang_array[31]; ?></h3>
					<p id="p1"><?php echo $lang_array[32]; ?></p>
					<p id="p2"><?php echo $lang_array[33]; ?></p>
					<p id="p3"><?php echo $lang_array[34]; ?></p>
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="row"></div>
			<div class="biru">
				<div id="misi">
					<h3 id="misi_title"><?php echo $lang_array[35]; ?></h3>
					<p id="misi_desc"><i><?php echo $lang_array[36]; ?></i></p>
					<hr id="separator" />
					<h3 id="budaya_title"><?php echo $lang_array[37]; ?></h3>
					<p id="b_p1" class="b_p"><?php echo $lang_array[38]; ?></p>
					<p id="b_p2" class="b_p"><?php echo $lang_array[39]; ?></p>
					<p id="b_p3" class="b_p"><?php echo $lang_array[40]; ?></p>
					<p id="b_p4" class="b_p"><?php echo $lang_array[41]; ?></p>
					<p id="b_p5" class="b_p"><?php echo $lang_array[42]; ?></p>
				</div>
			</div>
			<div class="kuning">
				<h3 id="kuning_title"><?php echo $lang_array[43]; ?></h3>
				<p id="kuning_desc1"><?php echo $lang_array[44]; ?><br/><?php echo $lang_array[45]; ?></p>
			</div>

			<div class="row" id="prinsip">
				<div class="col-sm-4" id="prinsip_left">
					<div class="content_slider">
						<img src="<?php echo base_url(); ?>asset/image/content/baut.png" class="image_result"/>
						<div class="desc_title">
							<p><?php echo $lang_array[46]; ?></p>
						</div>
						<p class="desc_body" id="left_top"><?php echo $lang_array[49]; ?></p>
						<p class="desc_body" id="left_center"><?php echo $lang_array[50]; ?></p>
						<p class="desc_body" id="left_bottom"><?php echo $lang_array[51]; ?></p>
					</div>
				</div>
				<div class="col-sm-4" id="prinsip_center">
					<div class="content_slider">
						<img src="<?php echo base_url(); ?>asset/image/content/baut.png" class="image_result"/>
						<div class="desc_title">
							<p><?php echo $lang_array[47]; ?></p>
						</div>
						<p class="desc_body" id="center_top"><?php echo $lang_array[52]; ?></p>
						<p class="desc_body" id="center_center"><?php echo $lang_array[53]; ?></p>
						<p class="desc_body" id="center_bottom"><?php echo $lang_array[54]; ?></p>
					</div>
				</div>
				<div class="col-sm-4" id="prinsip_right">
					<div class="content_slider">
						<img src="<?php echo base_url(); ?>asset/image/content/baut.png" class="image_result"/>
						<div class="desc_title">
							<p><?php echo $lang_array[48]; ?></p>
						</div>
						<p class="desc_body" id="right_top"><?php echo $lang_array[55]; ?></p>
						<p class="desc_body" id="right_center"><?php echo $lang_array[56]; ?></p>
						<p class="desc_body" id="right_bottom"><?php echo $lang_array[57]; ?></p>
					</div>
				</div>
			</div>
		</div>




		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
		<script type="text/javascript">
			var modal_notif = document.getElementById('m_notifikasi');
			var modal_login = document.getElementById('m_login');

			var btn_notif = document.getElementById("btn_tes_notifikasi");
			var btn_login = document.getElementById("btn_tes_login");

			var span_notif = document.getElementsByClassName("close_notifikasi")[0];
			var span_login = document.getElementsByClassName("close_login")[0];
	
			span_notif.onclick = function(){
				modal_notif.style.display = "none";
			}
			span_login.onclick = function(){
				modal_login.style.display = "none";
			}

			btn_notif.onclick = function() {
			    modal_notif.style.display = "block";
			}
			btn_login.onclick = function() {
			    modal_login.style.display = "block";
			}

			window.onclick = function(event) {
			    if (event.target == modal_notif) {
			        modal_notif.style.display = "none";
			    }
			    if (event.target == modal_login) {
			        modal_login.style.display = "none";
			    }
			}
		</script>
	</body>
</html>