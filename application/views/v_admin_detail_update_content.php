<script type="text/javascript">
	$('#master').addClass('active_main');
	$('#administrator').addClass('active');
	$(document).ready(function () {
		$('#administratorTable').DataTable();
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>DETAIL / UPDATE CONTENT</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"><a href="setting_content"><i class="fa fa-reply fa-lg"></i> Kembali</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div class="container"></div>
	<br/>
	<hr class="bold">
	<br/>
	<form action="update_content" method="post">
		<?php foreach ($content->result() as $row)  
        {  
        ?>
		<div class="col-sm-6" id="left_content">
			<h3><i>Indonesia</i></h3>
			<input type="hidden" id="content_id" name="content_id" value="<?php echo $row->id; ?>" />
			<textarea rows="5" class="textarea_box" id="content_ina" name="content_ina" placeholder="Terjemahan ... " required><?php echo $row->content_ina; ?></textarea>
		</div>
		<div class="col-sm-6" id="right_content">
			<h3><i>English</i></h3>
			<textarea rows="5" class="textarea_box" id="content_eng" name="content_eng" placeholder="Translate ... " required><?php echo $row->content_eng; ?></textarea>
			<button type="submit" class="btn btn-default pull-right" id="btn_save_administrator">Save</button>
		</div>
		<?php } ?>
	</form>
	<div class="nb"><i><b>NB : </b></i>Mohon tidak mengganti atau menghapus	 'tag' yang telah ada. Tag berada didalam tanda '<>'. Terimakasih. </div>
</div>