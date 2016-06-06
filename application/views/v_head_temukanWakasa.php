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
@media only screen and (max-width: 360px)
 {
	 #tulisan1
	 {
		 font-size:6pt;
	 }
	 #navigasi
	 {
		 top:27%;
	 }
	 #btnIMG
	 {
		 width:15px;
		 height:auto;
	 }
    #judulForm
	{
		padding:0px;
		font-size:14pt;
	}
	#formBanner
	{
		width:100%;
		top:16%;
	}
	#frmCombo
	{
		width:25%;
		height:10%;
	}
	#input1
	{
		width:35%;
	}
	#buttonFRM
	{
		width:20%;
		height:auto;
		font-size:12px;
	}
	 #kanan1
	 {
		 position:absolute;
		 top:8%;
		 right:40%;
		 font-size:8pt;
	 }
	 #kanan2
	 {
		 position:absolute;
		 right:30%;
		 top:11%;
		 font-size:8pt;
	 }
	 #logoDropDown2
	 {
		width:10%;
		height:auto;
	 }
	#menuBanner
	{
		display:none;
	}
	#dropdown-content1 
	{
		width:30px;
	}
	.col1
	{
		top:9%;
	}
    .logo
	{
	width: 220px;
	height:auto;
	left:30px;
	top:5px;
    }
	.headerBG
	{
			
		padding:0px;
		margin:0px;
		background-color:#005ce6;
		width:100%;
		height:160px;
	}
	.f_size1
	{text-align:center;}
	#MenuMobile
	{
		display:block;
		left:46%;
		color:yellow;
		text-decoration:none;
		top:15%;
	}
 }
 @media only screen and (min-width: 361px) and (max-width:1100px)
 {
	 #navigasi
	 {
		 top:35%;
	 }
 }
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
    background-color: #f4ebfe;
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
.MenuMobile
{
	position:absolute;
	font-size:16pt;
	z-index:5;
	display:none;
}
.navigasi
{
	width:100%;
	position:absolute;
	top:65%;
}
.tulisan1
{
	font-family:Ubuntu;
	text-align:center;
	color:gray;margin-left:50%;
	width:75%;
	height:100%;
	background-color:#cccccc;
	border-top-right-radius:5px;
	border-bottom-right-radius:5px;
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
			<button id="kanan2" style="border-radius:10px;border:2px solid yellow;background-color:#00b386;font-family:Ubuntu">Login| Register</button>
		</div>
	</div>
</div>
<div>
	<img src="<?php echo base_url("asset/image/Office-Business.jpg")?>" class="GambarBanner"/>
</div>

<div class="menuBanner" id="menuBanner" >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/gearIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="<?php echo site_url("frontend/tentangKami")?>" style="padding-top:6px;text-align:center;word-wrap: break-word;font-size:9pt;">Tentang Kami</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/boxIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="<?php echo site_url("frontend/temukanWakasa")?>" style="padding-top:7px;text-align:center;word-wrap: break-word;font-size:8pt">Temukan Wakasa</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/callIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="<?php echo site_url("frontend/contact")?>" style="padding-top:6px;text-align:center;word-wrap: break-word;">Kontak Kami</a>
   
  </div>
</div>

<div class="dropdown" >
  <div class="dropbtn" id="logoDropDown2" style="background-color:yellow;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/searchHover.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="<?php echo site_url("frontend/searchGeneral")?>" style="padding-top:10px;text-align:center;word-wrap: break-word;">Cari</a>
    <a href="<?php echo site_url("frontend/searchGeneral")?>" style="padding-top:5px;text-align:center;word-wrap: break-word;font-size:10pt;">Cari Produk</a>
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

