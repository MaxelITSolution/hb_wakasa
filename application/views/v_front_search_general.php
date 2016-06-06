<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/searchgeneral.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/modal.css" type="text/css" />

	</head>
	<body>
		<?php include('TestBanner.php'); ?>
		<input type="button" id="btn_tes_notifikasi" name="btn_tes_notifikasi" value="Notifikasi"></body>
		
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_register">
		  	Register
		</button>

		<input type="button" id="btn_tes_login" name="btn_tes_login" value="Login"></body>
		
		<div class="m_notifikasi" id="m_notifikasi">
			<div class="m_notifikasi_content">
				<span class="close_notifikasi">X</span>
				<p>Terimakasih telah mendaftar di website kami. Kami perlu memverifikasi terlebih dahulu data-data Anda. Anda akan diberikan notifikasi melalui e-mail setelah disetujui.</p>
			</div>
		</div>
		
		<div class="m_login" id="m_login">
			<div class="m_login_content">
				<span class="close_login">X</span>
				<p>Already have and account? Log In now to see more</p>
				<div class="form-group">
				    <label for="email_login" class="sr-only">Email</label>
				    <input type="email" class="form-control" id="email_login" name="email_login" placeholder="Email">
				</div>
				<div class="form-group">
				    <label for="password_login" class="sr-only">Password</label>
				    <input type="password" class="form-control" id="password_login" name="password_login" placeholder="Password">
				</div>
				<button type="button" class="btn" id="login_button">Login</button>
			</div>
		</div>

		<div class="modal fade" id="m_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog modal-lg" role="document">
		    	<div class="modal-content">
		     		<div class="modal-header">
			        	<span class="close_register" data-dismiss="modal" aria-label="Close">X</span>
		        		<h4 class="modal-title" id="myModalLabel">DAFTAR MENJADI RESELLER</h4>
			      	</div>
			      	<div class="modal-body">
				        <p id="m_p1">Hanya reseller terdaftar yang dapat melihat katalog lengkap kami.</p>
				        <p id="m_p2">Silahkan mendaftar untuk menjadi reseller dengan mengisi form dibawah ini.</p>
				        <div class="form-group">
						    <label for="uname_reg" class="sr-only">Username</label>
						    <input type="text" class="form-control reg_input" id="uname_reg" name="uname_reg" placeholder="Username*">
						</div>
						<div class="form-group">
						    <label for="upass_reg" class="sr-only">Password</label>
						    <input type="password" class="form-control reg_input" id="upass_reg" name="upass_reg" placeholder="Password*">
						</div>
						<div class="form-group">
						    <label for="upass_conf_reg" class="sr-only">Password</label>
						    <input type="password" class="form-control reg_input" id="upass_conf_reg" name="upass_conf_reg" placeholder="Konfirmasi Password*">
						</div>
						<div class="form-group">
						    <label for="uname_full_reg" class="sr-only">Nama Lengkap</label>
						    <input type="text" class="form-control reg_input" id="uname_full_reg" name="uname_full_reg" placeholder="Nama Lengkap*">
						</div>
						<div class="form-group">
						    <label for="nama_toko_reg" class="sr-only">Nama Toko / Badan Usaha</label>
						    <input type="text" class="form-control reg_input" id="nama_toko_reg" name="nama_toko_reg" placeholder="Nama Toko / Badan Usaha*">
						</div>
						<div class="form-group">
						    <label for="alamat_toko_reg" class="sr-only">Alamat Toko / Badan Usaha</label>
						    <input type="text" class="form-control reg_input" id="alamat_toko_reg" name="alamat_toko_reg" placeholder="Alamat Toko / Badan Usaha*">
						</div>
						<div class="form-group">
						    <label for="kota_reg" class="sr-only">Kota</label>
						    <input type="text" class="form-control reg_input" id="kota_reg" name="kota_reg" placeholder="Kota*">
						</div>
						<div class="form-group">
						    <label for="provinsi_reg" class="sr-only">Provinsi</label>
						    <input type="text" class="form-control reg_input" id="provinsi_reg" name="provinsi_reg" placeholder="Provinsi*">
						</div>
						<div class="form-group">
						    <label for="phone_reg" class="sr-only">Telepon Kantor</label>
						    <input type="text" class="form-control reg_input" id="phone_reg" name="phone_reg" placeholder="Telepon Kantor*">
						</div>
						<div class="form-group">
						    <label for="handphone_reg" class="sr-only">Handphone</label>
						    <input type="text" class="form-control reg_input" id="handphone_reg" name="handphone_reg" placeholder="Handphone*">
						</div>
						<div class="form-group">
						    <label for="email_reg" class="sr-only">Email</label>
						    <input type="email" class="form-control reg_input" id="email_reg" name="email_reg" placeholder="E-mail*">
						</div>
						<p id="m_p3">Dari mana anda mengetahui Wakasa?</p>
						<div class="radio">
						  	<label><input type="radio" name="opt1" class="from_where">Teman / Rekan</label>
						</div>
						<div class="radio">
						  	<label><input type="radio" name="opt1" class="from_where">Internet</label>
						</div>
						<div class="radio">
						  	<label><input type="radio" name="opt1" class="from_where">Salesman</label>
						</div>
						<div class="radio">
						  	<label><input type="radio" name="opt1" class="from_where">Lainnya : <span><input type="text" id="lainnya_reg" class="input_line"></span></label>
						</div>
						<p id="m_p4">Apakah anda pernah membeli produk Wakasa sebelumnya?</p>
						<div class="radio">
						  	<label><input type="radio" name="opt_yn" class="yes_no">Yes</label>
						</div>
						<div class="radio">
						  	<label><input type="radio" name="opt_yn" class="yes_no">No</label>
						</div>
						<p id="m_p5">Sudah berapa lama usaha anda berdiri? <span><input type="text" id="time_reg" class="input_line"></span></p>
						<div class="footer_register">
							<div class="col-sm-6">
								<p id="m_p6" class="pull-right">*by register, I agree with Terms & Policies</p>
							</div>
							<div class="col-sm-6">
								<button type="button" class="btn" id="register_button">Daftar Sekarang</button>
							</div>
						</div>
						<div class="row" id="end_register"></div>
			      	</div>
		    	</div>
		  	</div>
		</div>

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