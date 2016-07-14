<script type="text/javascript">
	$('#report').addClass('active_main');
	$('#sub_report').addClass('active');
	$(document).ready(function () {
		$('#subsTable').DataTable();
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>LIST CLIENT SUBSCRIBE</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div class="container"></div>
	<br/>
	<hr class="bold">
	<br/>
	<table id="subsTable" class="display hover cell-border" width="100%">
		<thead>
			<tr>
				<td>Tanggal</td>
				<td>Waktu</td>
				<td>Nama</td>
				<td>Email</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($subscriber->result() as $row)  
            {  
            ?>
            <tr>
            	<td>
					<?php echo $row->subs_date;?>
				</td>
				<td>
					<?php echo $row->subs_time;?>
				</td>
				<td>
					<?php echo $row->name;?>
				</td>
				<td>
					<?php echo $row->email;?>
				</td>
				<td>
					<a href="<?php echo 'delete_subscriber?id=' .$row->id; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
				</td>
            </tr>
            <?php } ?>
		</tbody>
	</table>
	
</div>