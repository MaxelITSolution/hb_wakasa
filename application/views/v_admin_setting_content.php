<script type="text/javascript">
	$('#setting').addClass('active_main');	
	$('#content').addClass('active');
	$(document).ready(function () {
		$('#contentTable').DataTable();
	});
</script>
<style type="text/css">
	table#contentTable tbody td div{
		height:20px;
		overflow:hidden;
		word-wrap:break-word; 
	}
</style>
<div class="mycontent" style="overflow-x: hidden; ">
	<div class="container">
		<div class="col-sm-3"></div>
		<div class="col-sm-6" class="cop">
			<h3 style="text-align: center; font-weight: bold; font-size: 30px;">CONTENT</h3>
			<br/>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<hr class="bold">
	<table id="contentTable" class="display cell-border" cellspacing="0" width="100%" data-click-to-select="true" data-single-select="true">
		<thead>
			<tr>
				<th>Id</th>
				<th>Page</th>
				<th>INA</th>
				<th>ENG</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($content->result() as $row)  
            {  
            ?>
            <tr>
            	<td>
					<?php echo $row->id;?>
				</td>
				<td>
					<?php echo $row->page;?>
				</td>
				<td>
					<div><?php echo $row->content_ina;?></div>
				</td>
				<td>
					<div><?php echo $row->content_eng;?></div>
				</td>
				<td>
					<a href="<?php echo 'detail_content?id=' .$row->id; ?>"><span class="glyphicon glyphicon-user"></span> Detail </a>
				</td>
            </tr>
            <?php } ?>
		</tbody>
	</table>
	<div class="row"></div>
	<div class="nb"><i><b>NB : </b></i>Mohon tidak mengganti atau menghapus	 'tag' yang telah ada. Tag berada didalam tanda '<>'. Terimakasih. </div>
</div>