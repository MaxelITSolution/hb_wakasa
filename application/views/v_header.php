<div class="header">
	<div class="col-xs-6">
		<a href="home"><img src="<?php echo base_url(); ?>asset/image/logo.png" id="logo_image"></a>
	</div>
	<div class="col-xs-6" id="right_header">
		<p id="lang"> <a href=""><i>ENG</i></a> | <a href=""><i>ID</i></a></p>
		<p id="log_reg"><a href="#" onclick="f_login();">log in</a> | <a href="menjadireseller">register</a></p>

		<div class="dropdown" id="drop1">
		  	<button class="dropbtn" id="menu_1"><img src="<?php echo base_url(); ?>asset/image/menu/menu1.png" id="menu1"></button>
		  	<div class="dropdown-content">
		    	<a href="tentangkami">TENTANG KAMI</a>
		  	</div>
		</div>
		<div class="dropdown"  id="drop2">
		  	<button class="dropbtn" id="menu_2"><img src="<?php echo base_url(); ?>asset/image/menu/menu2.png" id="menu2"></button>
		  	<div class="dropdown-content">
		    	<a href="temukanwakasa">TEMUKAN WAKASA</a>
		  	</div>
		</div>
		<div class="dropdown"  id="drop3">
		  	<button class="dropbtn" id="menu_3"><img src="<?php echo base_url(); ?>asset/image/menu/menu3.png" id="menu3"></button>
		  	<div class="dropdown-content">
		    	<a href="contact">KONTAK KAMI</a>
		  	</div>
		</div>
		<div class="dropdown"  id="drop4">
		  	<button class="dropbtn active" id="menu_4"><img src="<?php echo base_url(); ?>asset/image/menu/menu4_blue.png" id="menu4"></button>
		  	<div class="dropdown-content">
		    	<a href="searchgeneral" id="cari">CARI</a>
		    	<a href="jelajahproduct">CARI PRODUK</a>
		  	</div>
		</div>
		<p id="btn_menu">MENU</p>
		<p id="btn_login" style="display: none;">login</p>
		<p id="btn_register" style="display: none;">register</p>
		<p id="btn_notif" style="display: none;">notif</p>
	</div>



	<div class="m_menu" id="m_menu">
		<div class="m_menu_content">
			<p id="close_menu" class="menu_list">CLOSE</p>
			<a href="tentangkami"><p id="tentang_kami" class="menu_list">TENTANG KAMI</p></a>
			<a href="temukanwakasa"><p id="temukan_wakasa" class="menu_list">TEMUKAN WAKASA</p></a>
			<a href="contact"><p id="kontak_kami" class="menu_list">KONTAK KAMI</p></a>
			<a href="searchgeneral"><p id="cari_menu" class="menu_list">CARI</p></a>
			<a href="jelajahproduct"><p id="cari_produk_menu" class="menu_list">CARI PRODUK</p></a>
		</div>
	</div>

	<div class="m_notifikasi" id="m_notifikasi">
		<div class="m_notifikasi_content" id="m_notifikasi_content">
			<span class="close_notifikasi">X</span>
			<p>Terimakasih telah mendaftar di website kami. Kami perlu memverifikasi terlebih dahulu data-data Anda. Anda akan diberikan notifikasi melalui e-mail setelah disetujui.</p>
		</div>
	</div>

	<div class="m_login" id="m_login">
		<div class="m_login_content">
			<form action="Backend/login_user" method="post">
				<span class="close_login">X</span>
				<p>Already have an account? Log In now to see more</p>
				<div class="form-group">
				    <label for="email_login" class="sr-only">Email</label>
				    <input type="email" class="form-control" id="email_login" name="email_login" placeholder="Email">
				</div>
				<div class="form-group">
				    <label for="password_login" class="sr-only">Password</label>
				    <input type="password" class="form-control" id="password_login" name="password_login" placeholder="Password">
				</div>
				<button type="button" class="btn" id="login_button">Login</button>
			</form>
		</div>
	</div>

	<script type="text/javascript">
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
