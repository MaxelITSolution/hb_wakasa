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
		 right:40%;
		 top:13%;
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
}</style>

</head>
<body>
<div class="MenuMobile" id="MenuMobile">
MENU
</div>

<div class="headerBG">
	<img class="logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
		<div class="margl7 f_size1" id="kanan1"><Strong style="color:yellow"><i>ENG</i>|<i>ID</i></strong></div>
		<p class="col1_1 f_size1" id="tulisanBawahLogo">welcome back,&nbsp <span class="f_size1" style="color:white;display:inline">Mr Vincent</span></p>
		<div class="margl6 f_size1" id="kanan2"><a href="#" style="color:yellow">[Logout]</a></div>
		</div>
	</div>
</div>
<div>
	<img src="<?php echo base_url("asset/image/business.jpg")?>" class="GambarBanner"/>
</div>

<div class="menuBanner" id="menuBanner" style="position:absolute;top:100px;right:35px;" >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="dropdown">
  <div class="dropbtn" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/gearIdle.png')?>);"></div>
  <div class="dropdown-content">
    <a href="#" style="text-align:center;word-wrap: break-word;">Tentang Kami</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/boxIdle.png')?>);"></div>
  <div class="dropdown-content">
    <a href="#" style="text-align:center;word-wrap: break-word;font-size:8pt">Temukan Wakasa</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/callIdle.png')?>);"></div>
  <div class="dropdown-content">
    <a href="#" style="text-align:center;word-wrap: break-word;">Kontak Kami</a>
   
  </div>
</div>

<div class="dropdown" >
  <div class="dropbtn" style="background-color:yellow;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/searchHover.png')?>);"></div>
  <div class="dropdown-content">
    <a href="#" style="text-align:center;word-wrap: break-word;">Cari</a>
    <a href="#" style="text-align:center;word-wrap: break-word;font-size:10pt;">Cari Produk</a>
  </div>
</div>

</div>

<div class="formBanner" id="formBanner">
<h2 class="margl1" id="judulForm" style="color:blue;font-family:Ubuntu">Cari Produk Wakasa</h2>
	<div class="tmptForm">
		<input placeholder="Masukkan Kata Kunci" type="text" class="margl05 inputFRM1" ></input><button id="buttonFRM" class="margl05 buttonFRM" style="font-family:Ubuntu">Search<img id="btnIMG" src="<?php echo base_url("asset/image/HasilSearchProduk/searchHover.png")?>" style="width:20px;height:auto;"></img></button>
		<div class="tmptForm">
		<select class="inputFRM margl05" id="frmCombo">
			<option value="Bymake">Bymake</option>
		</select>
		<select class="inputFRM margl05" id="frmCombo">
			<option value="Bymodel">ByModel</option>
		</select>
		</div>
	</div>
</div>
</body>
</html>

