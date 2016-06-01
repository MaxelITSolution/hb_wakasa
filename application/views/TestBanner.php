<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/")?>">
<style>
 @media only screen and (max-width: 360px)
 {
	 #tulisanBawahLogo
	 {
		 position:absolute;
		 display:inline;
		 width:150px;
		 top:130%;
		 left:20%
	 }
	 #kanan1
	 {float:right;
	 width:100px;margin-left:70px;}
		.col1
		{
			position:absolute;
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
.headerBG
{
	position:absolute;
	padding:0px;
	margin:0px;
	background-color:#005ce6;
	width:100%;
	height:100px;
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
	max-height:300px;
	background-color:red;
}
.IsiPageBG
{
	padding:0px;
	margin:0px;
	width:100%;
	height:300px;
	background-image:url("<?php echo base_url("asset/image/HasilSearchProduk/austin-fireworks.jpg")?>");
    background-size:100% 100%;
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
	</style>
</head>
<body>
<div class="headerBG">
	<img class="logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
		<div class="margl7 f_size1" id="kanan1"><Strong style="color:yellow"><i>ENG</i>|<i>ID</i></strong></div>
		<p class="col1_1 f_size1" id="tulisanBawahLogo">welcome back,&nbsp <span class="f_size1" style="color:white;display:inline">Mr Vincent</span></p>
		<div class="margl6 f_size1" id="kanan1"><a href="#" style="color:yellow">[ Logout ]</a></div>
		</div>
	</div>
</div>

<div class="IsiPage">
	<div class="IsiPageBG">
	</div>
</div>

</body>
</html>

