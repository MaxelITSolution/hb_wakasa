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
			<div class="margl6 f_size1" id="kanan1"><Strong style="color:yellow;font-family:Ubuntu"><i>ENG</i>|<i>ID</i></strong></div>
			<button id="kanan2" style="border-radius:10px;border:2px solid yellow;background-color:#008ae6;color:yellow;font-family:Ubuntu">Login| Register</button>
		</div>
	</div>
</div>

<div>
	<img src="<?php echo base_url("asset/image/Office-Business.jpg")?>" class="GambarBanner"/>
</div>

<div class="menuBanner" id="menuBanner">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:yellow;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/gearHover.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;">Tentang Kami</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn "  id="logoDropDown2"style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/boxIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;font-size:8pt">Temukan Wakasa</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/callIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;">Kontak Kami</a>
   
  </div>
</div>

<div class="dropdown" >
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/searchIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;">Cari</a>
    <a href="#" style="text-align:center;word-wrap: break-word;font-size:10pt;">Cari Produk</a>
  </div>
</div>
</div>
<div  style="width:100%;position:absolute;top:65%;">
	<div style="width:30%;height:25px;background-color:#ffe6e6">
		<div style="font-family:Ubuntu;text-align:center;color:white;margin-left:54%;width:50%;height:100%;background-color:#3366ff;border-top-right-radius:5px;border-bottom-right-radius:5px;">
		PRODUK UNGGULAN
		</div>
	</div>
	<div style="margin-top:1px;width:25%;height:25px;background-color:#005c99">
		<div style="font-family:Ubuntu;text-align:center;color:white;margin-left:50%;width:65%;height:100%;background-color:#33adff;border-top-right-radius:5px;border-bottom-right-radius:5px;">
		BAUT - BAUT(BOLTS)
		</div>
	</div>
	<div style="margin-top:1px;width:20%;height:25px;background-color:#da8b8b">
		<div style="font-family:Ubuntu;text-align:center;color:gray;margin-left:50%;width:75%;height:100%;background-color:#cccccc;border-top-right-radius:5px;border-bottom-right-radius:5px;">
		klik lihat semua kategori
		</div>
	</div>	
</div>

</body>
</html>

