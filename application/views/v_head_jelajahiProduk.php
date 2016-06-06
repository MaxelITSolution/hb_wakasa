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
<style>
.dropbtn {
	margin-right:5px;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	z-index :2;
	width:45px;
	height:45px;
	wordrap:word-break;
	background-size:100% 100%;
	border-radius:5px;
}

.dropdown {
    position: relative;
    display: inline-block;
	z-index :2;
	border-radius:5px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 45px;
	border-radius:5px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index :2;
}

.dropdown-content a {
    color: black;
    width:100%;
	height:50px;
    text-decoration: none;
    display: block;
	z-index :2;
	border-radius:5px;
	cursor:default;
}
.dropdown-content a:hover {background-color: #0099ff;color:white;}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<div class="headerBG">
	<img class="logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
		<br>
			<div class="margl5 f_size1" id="kanan1"><Strong style="color:yellow;font-family:Ubuntu"><i>ENG</i>|<i>ID</i></strong></div>
			<button id="kanan2" style="border-radius:10px;border:2px solid yellow;background-color:#005ce6;font-family:Ubuntu">Login| Register</button>
		</div>
	</div>
</div>
<div>
	<img src="<?php echo base_url("asset/image/business.jpg")?>" class="GambarBanner"/>
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

<div class="formBanner" id="formBanner">
<h2 class="margl1" id="judulForm" style="color:blue;font-family:Ubuntu">CARI TENTANG WAKASA</h2><br>
	<div class="tmptForm">
		<input placeholder="Masukkan Kata Kunci" type="text" class="margl05 inputFRM1" ></input><button id="buttonFRM" class="margl05 buttonFRM" style="font-family:Ubuntu">Search<img id="btnIMG" src="<?php echo base_url("asset/image/HasilSearchProduk/searchHover.png")?>" style="width:20px;height:auto;"></img></button>
	</div>
</div>
</body>
</html>
