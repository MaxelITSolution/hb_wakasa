<div class="header">
	<div class="col-xs-6">
		<a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>asset/image/logo.png" id="logo_image"></a>
	</div>
	<div class="col-xs-6" id="right_header">
		<p id="lang"> <a href="set_lang_eng"><i>ENG</i></a> | <a href="set_lang_ina"><i>ID</i></a></p>
		<?php $lang = $_SESSION["user_lang"]; $ctr=0; 
        	$lang_array = array(); $reg = $_SESSION["user_register"]; 
        	$log = $_SESSION["user_login"]; $reseller_uname = $_SESSION["user_name"]; ?>
		<?php 
			if ($lang=="ina"){
				foreach ($indo->result() as $row)  
		        {  
		        	$lang_array[$ctr] = $row->content_ina;
		        	$ctr = $ctr + 1;
		        }
			} else {
				foreach ($eng->result() as $row)  
		        {  
		        	$lang_array[$ctr] = $row->content_eng;
		        	$ctr = $ctr + 1;
		        }
			}


			if ($reg=="yes"){
				echo "<script type='text/javascript'>"
					, 	"$(document).ready(function(){ "
					, 		"$('#btn_notif').click();"
					, 	"});"
				   	, "</script>"
				;
			}


			/*if ($log=="no"){
				echo "<script type='text/javascript'>"
					, 	"$(document).ready(function(){ "
					, 		"document.getElementById('cari_produk_menu').style.display = 'none';"
					, 		"document.getElementById('cari_produk_menu_wakasa').style.display = 'none';"
					, 	"});"
				   	, "</script>"
				;
			} else {
				echo "<script type='text/javascript'>"
					, 	"$(document).ready(function(){ "
					, 		"document.getElementById('cari_produk_menu').style.display = 'block';"
					, 		"document.getElementById('cari_produk_menu_wakasa').style.display = 'block';"
					, 	"});"
				   	, "</script>"
				;
			}

			if($reseller_uname=="nn"){
				echo "<script type='text/javascript'>"
					, 	"$(document).ready(function(){ "
					, 		"document.getElementById('log_reg').style.display = 'block';"
					, 		"document.getElementById('uname_login').style.display = 'none';"
					, 	"});"
				   	, "</script>"
				;
			}else{
				echo "<script type='text/javascript'>"
					, 	"$(document).ready(function(){ "
					, 		"document.getElementById('log_reg').style.display = 'none';"
					, 		"document.getElementById('uname_login').style.display = 'block';"
					, 	"});"
				   	, "</script>"
				;
			}*/
		?>
		<?php if ($reseller_uname=="nn"){ ?>
			<p id="log_reg">
				<a href="#" onclick="f_login();"><?php echo $lang_array[0]; ?></a> | <a href="menjadireseller"><?php echo $lang_array[1]; ?></a>
			</p>
		<?php } else { ?>

		<?php } ?>
		<?php if ($reseller_uname=="nn"){ ?>

		<?php } else { ?>
			<p id="uname_login">Welcome back, <span id="user_login"><?php echo $_SESSION['user_name']; ?></span> | <a href="<?php echo base_url(); ?>user_logout" id="user_btn_logout">logout</a></p>
		<?php } ?>
		<div class="dropdown" id="drop1">
		  	<button class="dropbtn" id="menu_1"><img src="<?php echo base_url(); ?>asset/image/menu/menu1.png" id="menu1"></button>
		  	<div class="dropdown-content">
		    	<a href="<?php echo base_url(); ?>tentangkami"><?php echo $lang_array[2]; ?></a>
		  	</div>
		</div>
		<div class="dropdown"  id="drop2">
		  	<button class="dropbtn" id="menu_2"><img src="<?php echo base_url(); ?>asset/image/menu/menu2.png" id="menu2"></button>
		  	<div class="dropdown-content">
		    	<a href="<?php echo base_url(); ?>temukanwakasa"><?php echo $lang_array[3]; ?></a>
		  	</div>
		</div>
		<div class="dropdown"  id="drop3">
		  	<button class="dropbtn" id="menu_3"><img src="<?php echo base_url(); ?>asset/image/menu/menu3.png" id="menu3"></button>
		  	<div class="dropdown-content">
		    	<a href="<?php echo base_url(); ?>contact"><?php echo $lang_array[4]; ?></a>
		  	</div>
		</div>
		<div class="dropdown"  id="drop4">
		  	<button class="dropbtn active" id="menu_4"><img src="<?php echo base_url(); ?>asset/image/menu/menu4_blue.png" id="menu4"></button>
		  	<div class="dropdown-content">
		    	<!--<a href="<?php echo base_url(); ?>searchgeneral" id="cari"><?php echo $lang_array[5]; ?></a>-->
		    	<?php if ($log=="no"){ ?>
		    		<a href="<?php echo base_url(); ?>menjadireseller" id="cari_produk_menu_wakasa"><?php echo $lang_array[6]; ?></a>
		    	<?php } else { ?>
		    		<a href="<?php echo base_url(); ?>jelajahproduct" id="cari_produk_menu_wakasa"><?php echo $lang_array[6]; ?></a>
		    	<?php } ?>
		  	</div>
		</div>
		<p id="btn_menu">MENU</p>
		<p id="btn_login" style="display: none;">login</p>
		<p id="btn_register" style="display: none;">register</p>
		<p id="btn_notif" style="display: none;">notif</p>
		<p id="btn_red" style="display: none;">red</p>
	</div>

	<button type="button" id="btn_register_1" class="btn btn-primary" data-toggle="modal" data-target="#m_register_1" style="display: none;">
	  	Register
	</button>

	<div class="m_menu" id="m_menu">
		<div class="m_menu_content">
			<p id="close_menu" class="menu_list">CLOSE</p>
			<a href="tentangkami"><p id="tentang_kami" class="menu_list"><?php echo $lang_array[2]; ?></p></a>
			<a href="temukanwakasa"><p id="temukan_wakasa" class="menu_list"><?php echo $lang_array[3]; ?></p></a>
			<a href="contact"><p id="kontak_kami" class="menu_list"><?php echo $lang_array[4]; ?></p></a>
			<!--<a href="searchgeneral"><p id="cari_menu" class="menu_list"><?php echo $lang_array[5]; ?></p></a>-->
			<?php if ($log=="no"){ ?>
				<a href="menjadireseller"><p id="cari_produk_menu" class="menu_list"><?php echo $lang_array[6]; ?></p></a>
			<?php } else { ?> 
				<a href="jelajahproduct"><p id="cari_produk_menu" class="menu_list"><?php echo $lang_array[6]; ?></p></a>
			<?php } ?>
		</div>
	</div>

	<div class="m_notifikasi" id="m_notifikasi">
		<div class="m_notifikasi_content" id="m_notifikasi_content">
			<a href="set_reg_no"><span class="close_notifikasi">X</span></a>
			<p><?php echo $lang_array[72]; ?></p>
		</div>
	</div>

	<div class="m_login" id="m_login">
		<div class="m_login_content">
			<form action="Backend/login_user" method="post">
				<span class="close_login">X</span>
				<p><?php echo $lang_array[73]; ?></p>
				<div class="form-group">
				    <label for="email_login" class="sr-only">Email</label>
				    <input type="email" class="form-control" id="email_login" name="email_login" placeholder="Email">
				</div>
				<div class="form-group">
				    <label for="password_login" class="sr-only">Password</label>
				    <input type="password" class="form-control" id="password_login" name="password_login" placeholder="Password">
				</div>
				<button type="submit" class="btn" id="login_button">Login</button>
			</form>
		</div>
	</div>

	<div class="modal fade" id="m_register_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
					    <label for="kota_reg" class="sr-only">Kota</label>
					    <input type="text" class="form-control reg_input" id="kota_reg" name="kota_reg" placeholder="Kota*" required>
					</div>
					<div class="form-group">
					    <label for="provinsi_reg" class="sr-only">Provinsi</label>
					    <input type="text" class="form-control reg_input" id="provinsi_reg" name="provinsi_reg" placeholder="Provinsi*" required>
					</div>
					<div class="form-group">
					    <label for="phone_reg" class="sr-only">Telepon Kantor</label>
					    <input type="text" class="form-control reg_input" id="phone_reg" name="phone_reg" placeholder="Telepon Kantor*" required>
					</div>
					<div class="form-group">
					    <label for="handphone_reg" class="sr-only">Handphone</label>
					    <input type="text" class="form-control reg_input" id="handphone_reg" name="handphone_reg" placeholder="Handphone*" required>
					</div>
					<div class="form-group">
					    <label for="email_reg" class="sr-only">Email</label>
					    <input type="email" class="form-control reg_input" id="email_reg" name="email_reg" placeholder="E-mail*" required>
					</div>
					<p id="m_p3"><?php echo $lang_array[77]; ?></p>
					<div class="radio">
					  	<label><input type="radio" name="opt1" class="from_where" value="1">Teman / Rekan</label>
					</div>
					<div class="radio">
					  	<label><input type="radio" name="opt1" class="from_where" value="2">Internet</label>
					</div>
					<div class="radio">
					  	<label><input type="radio" name="opt1" class="from_where" value="3">Salesman</label>
					</div>
					<div class="radio">
					  	<label><input type="radio" name="opt1" class="from_where" value="4">Lainnya : <span><input type="text" id="lainnya_reg" name="lainnya_reg" class="input_line"></span></label>
					</div>
					<p id="m_p4"><?php echo $lang_array[78]; ?></p>
					<div class="radio">
					  	<label><input type="radio" name="opt_yn" class="yes_no" value="y">Yes</label>
					</div>
					<div class="radio">
					  	<label><input type="radio" name="opt_yn" class="yes_no" value="n">No</label>
					</div>
					<p id="m_p5"><?php echo $lang_array[79]; ?> <span><input type="text" id="time_reg" name="time_reg" class="input_line" required></span></p>
					<div class="footer_register">
						<div class="col-sm-6">
							<p id="m_p6" class="pull-right"><?php echo $lang_array[80]; ?></p>
						</div>
						<div class="col-sm-6">
							<button type="button" class="btn" id="register_button1">Daftar Sekarang</button>
						</div>
					</div>
					<button type="submit" class="btn" id="btn_reg_now1" style="display: none;">Daftar Sekarang</button>
					<div class="row" id="end_register"></div>
		      		</form>
		      	</div>
	    	</div>
	  	</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#qwe').click(function(){
				window.history.back();
			});
			$('#btn_reg1').click(function(){
				$('#btn_register_1').click();
			});
			$('#register_button1').click(function(){
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
						$('#btn_reg_now1').click();
					}
				}
			});
		});
		function f_login(){
			$('#btn_login').click();
		}
		function f_register(){
			$('#btn_register').click();
		}
		/*MENU*/
		var modal_menu = document.getElementById('m_menu');
		var btn_menu = document.getElementById("btn_menu");
		var btn_close_menu = document.getElementById("close_menu");
		btn_menu.onclick = function() {
		    modal_menu.style.display = "block";
		}
		btn_close_menu.onclick = function(){
			modal_menu.style.display = "none";
		}

		/*NOTIF*/
		var modal_notif = document.getElementById('m_notifikasi');
		var btn_notif = document.getElementById("btn_notif");
		var span_notif = document.getElementsByClassName("close_notifikasi")[0];
		span_notif.onclick = function(){
			modal_notif.style.display = "none";
		}
		btn_notif.onclick = function() {
		    modal_notif.style.display = "block";
		}

		/*LOGIN*/
		var modal_login = document.getElementById('m_login');
		var btn_notif = document.getElementById("btn_login");
		var span_login = document.getElementsByClassName("close_login")[0];
		span_login.onclick = function(){
			modal_login.style.display = "none";
		}
		btn_login.onclick = function() {
		    modal_login.style.display = "block";
		}

		/*REGISTER*/
		var modal_register = document.getElementById('m_register');
		var btn_register = document.getElementById("btn_regiter");
		var span_register = document.getElementsByClassName("close_register")[0];
		span_register.onclick = function(){
			modal_register.style.display = "none";
		}
		btn_register.onclick = function() {
		    modal_register.style.display = "block";
		}

		window.onclick = function(event) {
		    if (event.target == modal_menu) {
		        modal_menu.style.display = "none";
		    }
		    if (event.target == modal_notif) {
		        modal_notif.style.display = "none";
		    }
		    if (event.target == modal_login) {
		        modal_login.style.display = "none";
		    }
		    if (event.target == modal_register) {
		        modal_register.style.display = "none";
		    }
		}
	</script>
</div>
