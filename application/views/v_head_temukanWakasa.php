<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/bootstrap/css/bootstrap.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/font.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/Headers.css")?>">
<script src="<?php echo base_url("asset/bootstrap/js/jquery.min.js")?>"></script>
<script src="<?php echo base_url("asset/bootstrap/js/bootstrap.js")?>"></script>
<script>
	
</script>
</head>
<body>
<div class="headerBG">
	<img class="logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
		<br>
			<div class="margl6 f_size1" id="kanan1"><Strong style="color:yellow;font-family:Ubuntu"><i>ENG</i>|<i>ID</i></strong></div>
			<button id="kanan2" style="border-radius:10px;border:2px solid yellow;background-color:#00b386;font-family:Ubuntu">Login| Register</button>
		</div>
	</div>
</div>
<div>
	<img src="<?php echo base_url("asset/image/Office-Business.jpg")?>" class="GambarBanner"/>
</div>

<div class="menuBanner" id="menuBanner">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/gearIdle.png")?>" class="logoDropDown" id="logoDropDown2" name="gambar1" >
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style="text-align: center; width:50px;"><span style="margin-top:50px;height:50px;width:50px;margin-left:5px;line-height:25px;">Tentang Kami</span></a>
		</div>
	</div>
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/boxIdle.png")?>" class="logoDropDown" id="logoDropDown2" name="gambar2" >
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style="text-align: center; width:50px;"><span style="word-wrap:break-word;margin-top:50px;height:50px;width:50px;margin-left:5px;line-height:20px;">Temukan wakasa</span></a>
		</div>
	</div>
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/callIdle.png")?>" class="logoDropDown" id="logoDropDown2" name="gambar3"  >
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style="text-align:center; width:50px"><span id="btnIMG" style="word-wrap:break-word;margin-top:50px;height:50px;width:50px;margin-left:5px;line-height:20px;">Kontak Kami</span></a>
		</div>
	</div>

	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/searchIdle.png")?>" class="logoDropDown" id="logoDropDown2" name="gambar4"  >
		<div class="dropdown-content"  id="dropdown-content1">
			<a href="#" class="f_size2" style="text-align: center; width:50px;height:50px;"><span style="margin-top:20px;height:50px;width:50px;margin-left:5px;line-height:50px;">cari</span></a>
			<a href="#" class="f_size2" style="text-align: center;width:50px;"><span style="font-family:ubuntu;margin-top:50%;height:50px;width:50px;margin-left:5px;line-height:100%;">cari produk</span></a>
		</div>
	</div>
</div>
<div class="isiContent" style="position:absolute;width:100%;left:0;top:45%;">
	<h3 class="margl4" style="font-size:22pt;font-family:Exo2;color:#1a75ff">CARI RESELLER WAKASA</h3>
	<br>
	<p style="font-size:12pt;margin-left:36%;font-family:Ubuntu">Produk Wakasa dapat Anda dapatkan di ribuan toko onderdil di berbagai<br> &nbsp&nbsp penjuru nusantara. Silahkan temukan peritel Wakasa di dekat Anda.</p>
	<br>
	<div  style="display:inline;margin-left:35%;">
		<select style="margin-left:20px;width:10%;border-radius:25px;">
			<option value="" default selected>Provinsi</option>
		</select>
		
		<select style="margin-left:20px;width:10%;border-radius:25px;">
			<option value="" default selected>Kabupaten</option>
		</select>

		<button style="margin-left:15px;font-family:Ubuntu;width:10%;border-radius:15px;background-color:yellow">
		Search
		<img style="width:20px;" src="<?php echo base_url("asset/image/HasilSearchProduk/searchHover.png")?>"/>
		</button>
	</div>
</div>

</body>
</html>

