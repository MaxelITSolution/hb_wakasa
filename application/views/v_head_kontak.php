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
		 right:33%;
		 top:11%;
		 font-size:8pt;
	 }
	 #tulisanBawahLogo
	 {
		 top:9%;
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
.MenuMobile
{
	position:absolute;
	font-size:16pt;
	z-index:5;
	display:none;
}
</style>


</head>
<body>
<div class="MenuMobile" id="MenuMobile">
MENU
</div>

<div class="headerBG">
	<img class="logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
			<div class="margl6 f_size1" id="kanan1"><Strong style="color:yellow;font-family:Ubuntu"><i>ENG</i>|<i>ID</i></strong></div>
			<button id="kanan2" style="border-radius:10px;border:2px solid yellow;background-color:#008ae6;color:yellow;font-family:Ubuntu">Login| Register</button>
		</div>
	</div>
</div>

<div>
	<img src="<?php echo base_url("asset/image/kontak.jpg")?>" class="GambarBanner"/>
</div>

<div class="menuBanner" id="menuBanner" >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="dropdown" >
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/gearIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;">Tentang Kami</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/boxIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;font-size:8pt">Temukan Wakasa</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:yellow;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/callHover.png')?>);"></div>
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


</body>
</html>

