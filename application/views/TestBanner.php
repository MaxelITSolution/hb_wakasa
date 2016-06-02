<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/bootstrap/css/bootstrap.css")?>">
<script src="<?php echo base_url("asset/bootstrap/js/jquery.min.js")?>"></script>
<script src="<?php echo base_url("asset/bootstrap/js/bootstrap.js")?>"></script>
<style>

 @media only screen and (max-width: 360px)
 {
	
	 #tulisanBawahLogo
	 {
		 position:absolute;
		 width:200px;
		 top:7%;
		 left:20%
	 }
	 #kanan1
	 {
		 position:absolute;
		 left:8%;
		 font-size:8pt;
	 }
	 #kanan2
	 {
		 position:absolute;
		 left:17%;
		 top:5%;
		 font-size:8pt;
	 }
	 #logoDropDown2
	 {
		width:10%;
		height:auto;
	 }
		#menuBanner
		{
			right:-50px;
			top:90px;
		}
		#dropdown-content1
		{
			width:30px;
		}
		.col1
		{
			top:9%;
		}
        .logo{
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
			min-height:85px;
		}
		.f_size1
		{text-align:center;}
		

 }
 
body
{
	padding:0px;
	margin:0px;
}
.dropdown {
    position: relative;
    display: inline;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 44px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    
	left:0px;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.headerBG
{
	
	padding:0px;
	margin:0px;
	background-color:#005ce6;
	width:100%;
	height:125px;
}
.logo
{
	position:absolute;
	max-width: 250px;
	margin:1.3% 2% 2% 2%;
}
.col1
{
	
	float:right;
	margin-right:1%;
}
.col1_1
{
	margin:10px;
}
.IsiPage
{
	width:100%;
	height:auto;
}
.IsiPageBG
{
	padding:0px;
	margin:0px;
	width:100%;
	height:100%;
	background-image:url("<?php echo base_url("asset/image/HasilSearchProduk/austin-fireworks.jpg")?>");
    background-size:100% 100%;
}
.GambarBanner
{
	width:100%;
	height:auto;
}
.logoDropDown
{
	width:15%;
	height:auto;
}
.menuBanner
{
	position:absolute;
	right:-70px;
	top:100px;
}
.margl1
{margin-left:10%;}
.margl2
{margin-left:20%;}
.margl3
{margin-left:30%;}
.margl4
{margin-left:40%;}
.margl5
{margin-left:50%;}
.margl6
{margin-left:60%;}
.margl7
{margin-left:70%;}
.f_size1
{font-size:10pt}
.f_size2
{font-size:8pt}
	</style>
</head>
<body>
<div class="headerBG">
	<img class="logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
		<div class="margl7 f_size1" id="kanan1"><Strong style="color:yellow"><i>ENG</i>|<i>ID</i></strong></div>
		<p class="col1_1 f_size1" id="tulisanBawahLogo">welcome back,&nbsp <span class="f_size1" style="color:white;display:inline">Mr Vincent</span></p>
		<div class="margl6 f_size1" id="kanan2"><a href="#" style="color:yellow">[ Logout ]</a></div>
		</div>
	</div>
</div>
<div>
	<img src="<?php echo base_url("asset/image/HasilSearchProduk/austin-fireworks.jpg")?>" class="GambarBanner"/>
</div>

<div class="menuBanner" id="menuBanner">
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/gear.png")?>" class="logoDropDown" id="logoDropDown2">
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style=" word-wrap: break-word;">Tentang Kami</a>
		</div>
	</div>
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/box.png")?>" class="logoDropDown" id="logoDropDown2">
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style=" word-wrap: break-word;">Temukan wakasa</a>
		</div>
	</div>
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/call.png")?>" class="logoDropDown" id="logoDropDown2">
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style=" word-wrap: break-word;">Kontak Kami</a>
		</div>
	</div>

	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/search.png")?>" class="logoDropDown" id="logoDropDown2">
		<div class="dropdown-content"  id="dropdown-content1">
			<a href="#" class="f_size2" style=" word-wrap: break-word;">cari</a><br>
			<a href="#" class="f_size2" style=" word-wrap: break-word;">cari Konten</a>
		</div>
	</div>
</div>


</body>
</html>

