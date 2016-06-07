<div class="header">
	<div class="col-xs-6">
		<img src="<?php echo base_url(); ?>asset/image/logo.png" id="logo_image">
	</div>
	<div class="col-xs-6" id="right_header">
		<p id="lang"> <a href=""><i>ENG</i></a> | <a href=""><i>ID</i></a></p>
		<p id="log_reg"><a href="">log in</a> | <a href="">register</a></p>

		<div class="dropdown">
		  	<button class="dropbtn" id="menu_1"><img src="<?php echo base_url(); ?>asset/image/menu/menu1.png" id="menu1"></button>
		  	<div class="dropdown-content">
		    	<a href="">TENTANG KAMI</a>
		  	</div>
		</div>
		<div class="dropdown">
		  	<button class="dropbtn" id="menu_2"><img src="<?php echo base_url(); ?>asset/image/menu/menu2.png" id="menu2"></button>
		  	<div class="dropdown-content">
		    	<a href="">TEMUKAN WAKASA</a>
		  	</div>
		</div>
		<div class="dropdown">
		  	<button class="dropbtn" id="menu_3"><img src="<?php echo base_url(); ?>asset/image/menu/menu3.png" id="menu3"></button>
		  	<div class="dropdown-content">
		    	<a href="">KONTAK KAMI</a>
		  	</div>
		</div>
		<div class="dropdown">
		  	<button class="dropbtn" id="menu_4"><img src="<?php echo base_url(); ?>asset/image/menu/menu4.png" id="menu4"></button>
		  	<div class="dropdown-content">
		    	<a href="" id="cari">CARI</a>
		    	<a href="">CARI PRODUK</a>
		  	</div>
		</div>
		<p id="btn_menu">MENU</p>

	</div>

	<div class="m_menu" id="m_menu">
		<div class="m_menu_content">
			<p id="close_menu" class="menu_list">CLOSE</p>
			<a href="tentangkami"><p id="tentang_kami" class="menu_list">TENTANG KAMI</p></a>
			<a href=""><p id="temukan_wakasa" class="menu_list">TEMUKAN WAKASA</p></a>
			<a href=""><p id="kontak_kami" class="menu_list">KONTAK KAMI</p></a>
			<a href=""><p id="cari_menu" class="menu_list">CARI</p></a>
			<a href=""><p id="cari_produk_menu" class="menu_list">CARI PRODUK</p></a>
		</div>
	</div>



	<script type="text/javascript">
		var modal_menu = document.getElementById('m_menu');
		var btn_menu = document.getElementById("btn_menu");
		var btn_close_menu = document.getElementById("close_menu");
		btn_menu.onclick = function() {
		    modal_menu.style.display = "block";
		}
		btn_close_menu.onclick = function(){
			modal_menu.style.display = "none";
		}
		window.onclick = function(event) {
		    if (event.target == modal_menu) {
		        modal_menu.style.display = "none";
		    }
		}
	</script>

</div>