<div class="banner">
	<img src="<?php echo base_url(); ?>asset/image/banner/banner1.jpg" id="image_banner">

	<h3>CARI PRODUK WAKASA</h3>
	<form class="form-inline" action="search_p" method="post">
	  	<div class="form-group">
	    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
	    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
			</div>
	  	<button type="button" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>
	</form>

	<input type="text" id="search_input1" name="search_input1" placeholder="Masukkan kata kunci">

	<div class="dropdown1" id="by_make">
	  	<button class="dropbtn1">By Make<span class="caret"></span></button>
	  	<div class="dropdown-content1">
		    <a href="#">Link 1</a>
		    <a href="#">Link 2</a>
		    <a href="#">Link 3</a>
	  	</div>
	</div>

	<div class="dropdown2" id="by_model">
	  	<button class="dropbtn2">By Model<span class="caret"></span></button>
	  	<div class="dropdown-content2">
		    <a href="#">Link 1</a>
		    <a href="#">Link 2</a>
		    <a href="#">Link 3</a>
	  	</div>
	</div>
	  
</div>