<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/reseller.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerreseller.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/bootstrap/css/bootstrap.css")?>">

		<script src="<?php echo base_url("asset/bootstrap/js/jquery.min.js")?>"></script>
		<script src="<?php echo base_url("asset/bootstrap/js/bootstrap.js")?>"></script>
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
	<?php include('v_header.php'); ?>
	<?php include('v_banner_reseller.php'); ?>
		<div class="content">
		<button type="button" id="btn_register_" class="btn btn-primary" data-toggle="modal" data-target="#m_register_" style="display: none;">
		  	Register
		</button>
			<div class="container">
				<div class="col-sm-6" id="content_left">
					<h2><?php echo $lang_array[23]; ?></h2>
					<h4><?php echo $lang_array[24]; ?></h4>
				</div>
				<div class="col-sm-6" id="content_right">
					<p id="p1"><?php echo $lang_array[25]; ?></p>
					<p id="p2"><?php echo $lang_array[26]; ?></p>
					<p id="p3"><?php echo $lang_array[27]; ?></p>
				</div>
			</div>

			<div class="modal fade" id="m_register_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  	<div class="modal-dialog modal-lg" role="document">
			    	<div class="modal-content">
			     		<div class="modal-header">
				        	<span class="close_register" data-dismiss="modal" aria-label="Close">X</span>
			        		<h4 class="modal-title" id="myModalLabel"><?php echo $lang_array[74]; ?></h4>
				      	</div>
				      	<div class="modal-body">
				      		<form action="Backend/user_register" method="post">
					        <p id="m_p1"><?php echo $lang_array[75]; ?></p>
			        		<p id="m_p2"><?php echo $lang_array[76]; ?></p>
					        <div class="form-group">
							    <label for="uname_reg" class="sr-only">Username</label>
							    <input type="text" class="form-control reg_input" id="uname_reg" name="uname_reg" placeholder="Username*" required>
							</div>
							<div class="form-group">
							    <label for="upass_reg" class="sr-only">Password</label>
							    <input type="password" class="form-control reg_input" id="upass_reg" name="upass_reg" placeholder="Password*" required>
							</div>
							<div class="form-group">
							    <label for="upass_conf_reg" class="sr-only">Password</label>
							    <input type="password" class="form-control reg_input" id="upass_conf_reg" name="upass_conf_reg" placeholder="Konfirmasi Password*" required>
							</div>
							<div class="form-group">
							    <label for="uname_full_reg" class="sr-only">Nama Lengkap</label>
							    <input type="text" class="form-control reg_input" id="uname_full_reg" name="uname_full_reg" placeholder="Nama Lengkap*" required>
							</div>
							<div class="form-group">
							    <label for="nama_toko_reg" class="sr-only">Nama Toko / Badan Usaha</label>
							    <input type="text" class="form-control reg_input" id="nama_toko_reg" name="nama_toko_reg" placeholder="Nama Toko / Badan Usaha*" required>
							</div>
							<div class="form-group">
							    <label for="alamat_toko_reg" class="sr-only">Alamat Toko / Badan Usaha</label>
							    <input type="text" class="form-control reg_input" id="alamat_toko_reg" name="alamat_toko_reg" placeholder="Alamat Toko / Badan Usaha*" required>
							</div>
							<div class="form-group">
							    <select class="selectpicker" id="kota_reg" name="kota_reg" onchange="setKota();">
							    	<option value="">Kota</option>
									<?php foreach ($city->result() as $row) { ?>
										<option value="<?php echo $row->city; ?>"><?php echo $row->city; ?></option>
							        <?php } ?>
								</select>
							</div>
							<div class="form-group">
							    <select class="selectpicker" id="provinsi_reg" name="provinsi_reg" onchange="setProvinsi();">
							    	<option value="">Provinsi</option>
								  	<?php foreach ($provinsi->result() as $row) { ?>
										<option value="<?php echo $row->provinsi; ?>"><?php echo $row->provinsi; ?></option>
							        <?php } ?>
								</select>
							</div>
							<div class="form-group">
							    <label for="phone_reg" class="sr-only">Telepon Kantor</label>
							    <input type="text" class="form-control reg_input" id="phone_reg" name="phone_reg" placeholder="Telepon Kantor*" required>
							</div>
							<div class="form-group">
							    <label for="handphone_reg" class="sr-only">Handphone</label>
							    <input type="text" class="form-control reg_input" id="handphone_reg" name="handphone_reg" placeholder="Handphone">
							</div>
							<div class="form-group">
							    <label for="email_reg" class="sr-only">Email</label>
							    <input type="email" class="form-control reg_input" id="email_reg" name="email_reg" placeholder="E-mail*" required>
							</div>
							<p id="m_p3"><?php echo $lang_array[77]; ?></p>
							<div class="radio">
							  	<label><input type="radio" name="opt1" class="from_where" value="1"><?php echo $lang_array[85]; ?></label>
							</div>
							<div class="radio">
							  	<label><input type="radio" name="opt1" class="from_where" value="2"><?php echo $lang_array[86]; ?></label>
							</div>
							<div class="radio">
							  	<label><input type="radio" name="opt1" class="from_where" value="3"><?php echo $lang_array[87]; ?></label>
							</div>
							<div class="radio">
							  	<label><input type="radio" name="opt1" class="from_where" value="4"><?php echo $lang_array[88]; ?> : <span><input type="text" id="lainnya_reg" name="lainnya_reg" class="input_line"></span></label>
							</div>
							<p id="m_p4"><?php echo $lang_array[78]; ?></p>
							<div class="radio">
							  	<label><input type="radio" name="opt_yn" class="yes_no" value="y"><?php echo $lang_array[89]; ?></label>
							</div>
							<div class="radio">
							  	<label><input type="radio" name="opt_yn" class="yes_no" value="n"><?php echo $lang_array[90]; ?></label>
							</div>
							<p id="m_p5"><?php echo $lang_array[79]; ?> <span><input type="text" id="time_reg" name="time_reg" class="input_line" required></span></p>
							<p id="m_p7"><input type="checkbox" id="ckBox" name="ckBox" value="1">&nbsp;&nbsp;<?php echo $lang_array[84]; ?></p>
							<div class="footer_register">
								<div class="col-sm-6">
									<p id="m_p6" class="pull-right"><?php echo $lang_array[80]; ?></p>
								</div>
								<div class="col-sm-6">
									<button type="button" class="btn" id="register_button"><?php echo $lang_array[91]; ?></button>
								</div>
							</div>
							<button type="submit" class="btn" id="btn_reg_now" style="display: none;">Daftar Sekarang</button>
							<div class="row" id="end_register"></div>
				      		</form>
				      	</div>
			    	</div>
			  	</div>
			</div>

			

		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>

		<script type="text/javascript">
		$(document).ready(function(){
				$('#btn_reg').click(function(){
					$('#btn_register_').click();
				});
				$('#register_button').click(function(){
					$o1 = $('input[name="opt1"]:checked').val();
					$o2 = $('input[name="opt_yn"]:checked').val();
					$p1 = document.getElementById('upass_reg').value;
					$p2 = document.getElementById('upass_conf_reg').value;
					if($o1==null){
						sweetAlert("Error", "Field 'Dari mana anda mengetahui WAKASA' harus diisi.", "error");
					}
					if($o2==null){
						sweetAlert("Error", "Field 'Apakah Anda pernah membeli produk WAKASA' harus diisi.", "error");
					}
					if($p1!=$p2){
						sweetAlert("Error", "Password Tidak Sesuai", "error");	
					}
					if ($o1!=null && $o2!=null){
						if ($p1==$p2){
							$('#btn_reg_now').click();
						}
					}
				});
			});
		</script>

	</body>
</html>