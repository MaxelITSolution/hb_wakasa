<script type="text/javascript">
	$('#master').addClass('active_main');
	$('#administrator').addClass('active');
	$(document).ready(function () {
		$('#administratorTable').DataTable();
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>ADMINISTRATOR</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"><a href="add_administrator"><i class="fa fa-plus-square fa-lg"></i> Tambah Administrator</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div class="bold">&nbsp;</div>
	<table id="administratorTable" class="display hover cell-border" width="100%">
		<thead>
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>E-mail</td>
				<td>Phone Number</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($administrator->result() as $row)  
            {  
            ?>
            <tr>
            	<td>
					<?php echo $row->admin_id;?>
				</td>
				<td>
					<?php echo $row->admin_uname;?>
				</td>
				<td>
					<?php echo $row->admin_email;?>
				</td>
				<td>
					<?php echo $row->admin_phone;?>
				</td>
				<td>
					<a href="<?php echo 'detail_update_administrator?id=' .$row->admin_id; ?>"><span class="glyphicon glyphicon-user"></span> Detail </a> | 
					<a href="<?php echo 'delete_administrator?id=' .$row->admin_id; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
				</td>
            </tr>
            <?php } ?>
		</tbody>
	</table>
	
</div>