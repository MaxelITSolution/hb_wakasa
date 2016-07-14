<html>
<head>
<title>Codelgniter pagination</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<style type="text/css">
			.content_slider{
				height: 400px;
			}
			.content_slider img{
				height: 220px;
			}
			.content_slider .desc_body{
				height: 90px;
			}
			ul.pagination li a{
				font-family: Ubuntu;
				color: #636363;	
			}
			ul.pagination li.active a{
				background: transparent;
				border: none;
				color: #636363;
			}
			ul.pagination li.active a:hover{
				background: transparent;
				border: none;
				color: #636363;
			}
			ul.pagination li#prev a{
				background: transparent;
				border: none;
			}
			ul.pagination li#next a{
				background: transparent;
				border: none;
			}
			#page_num a{
				background: transparent;
				border: none;
			}
			#paging_info{
				font-family: Ubuntu;
				color: #636363;	
				margin-left: 920px;
				margin-top: 27px;
				position: absolute;
			}
			ul.pagination{
				margin-right: 130px;
			}
			ul.pagination li#first a{
				background: transparent;
				border: none;
			}
			ul.pagination li#last a{
				background: transparent;
				border: none;
			}
		</style>
</head>
<body>
<div class="main">
<div id="content">
<h3 id='form_head'>Codelgniter Pagination Example </h3><br/>
<hr>
<div id="form_input">
<?php

// Show data
foreach ($results as $data) { ?>
	<span>nama = </span> <?php echo $data->nama; ?> SERTA <span>make = </span> <?php echo $data->make; ?>
	<hr/>
<?php }
?>
</div>
<div id="pagination">
<ul class="tsc_pagination">

<!-- Show pagination links -->
<?php foreach ($links as $link) {
echo "<li>". $link."</li>";
} ?>
</div>
</div>
</div>
</body>
</html>