<script type="text/javascript">
	$('#report').addClass('active_main');
	$('#client_contact').addClass('active');
	$(document).ready(function () {
		$('#contactTable').DataTable();
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>LIST CLIENT CONTACT</h2></div>
	
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
	<table id="contactTable" class="display hover cell-border" width="100%">
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
			<?php foreach ($user_contact->result() as $row)  
            {  
            ?>
            <tr>
            	<td>
					<?php echo $row->send_date;?>
				</td>
				<td>
					<?php echo $row->send_time;?>
				</td>
				<td>
					<?php echo $row->name;?>
				</td>
				<td>
					<?php echo $row->email;?>
				</td>
				<td>
					<?php $flg = $row->is_read; 
						if ($flg=="0"){ ?>
							<a href="<?php echo 'detail_message?id=' .$row->id; ?>" style="color: #0090D9;"><span class="glyphicon glyphicon-user"></span> Detail </a>
						<?php } else { ?>
							<a href="<?php echo 'detail_message?id=' .$row->id; ?>"><span class="glyphicon glyphicon-user"></span> Detail </a>
						<?php } ?>
				</td>
            </tr>
            <?php } ?>
		</tbody>
	</table>
	
</div>