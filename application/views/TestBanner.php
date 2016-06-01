<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
 @media only screen and (max-width: 360px)
 {
	.col1
	{
		position:absolute;
		top:0px;right:0px;
	}
	.f_size1
	{
		font-size:2em;
		}

	
        .emailImage{
			margin:2.5% 2% 2% 2%;
            height:auto !important;
            min-width:100px !important;
            width: 100% !important;
        }
		.headerBG
		{
			padding:0px;
			margin:0px;
			background-color:#005ce6;
			width:100%;
			min-height:85px;
		}
		.IsiPageBG
		{
			width:100%;height:auto;
			padding:0px;margin-left:10%;
		}

 }
 
 
 @media only screen and (min-width:400px)
 {
	 .IsiPageBG
	{
		margin-left:5%;
	}

 }
body
{
	padding:0px;
	margin:0px;
}
.headerBG
{
	padding:0px;
	margin:0px;
	background-color:#005ce6;
	width:100%;
	min-height:100px;
}
.logo
{
	margin:1.3% 2% 2% 2%;
	max-width: 250px;
    height: auto;
	float:left;
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
	<img class="emailImage logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
		<div class="margl7 f_size1"><Strong style="color:yellow"><i>ENG</i>|<i>ID</i></strong></div>
		<p class="col1_1">welcome back,&nbsp <span style="color:white;display:inline">Mr Vincent</span></p>
		<div class="margl6"><a href="#" style="color:yellow">[ Logout ]</a></div>
		</div>
	</div>
</div>

<div class="IsiPage">
	<div class="IsiPageBG">
	</div>
</div>

</body>
</html>

