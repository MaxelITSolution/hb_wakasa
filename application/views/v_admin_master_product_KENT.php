<script type="text/javascript">
	
	$(document).ready(function () {
		createTableDataEng(<?php echo $produk?>);
		
		$("#productTable").on("click","#Hapus",function()
		{
			if(confirm("Apakah Data Tersebut mau dihapus ?"))
			{
				$.ajax({
					url:"<?php echo site_url("Backend/DeleteData")?>",
					method: "POST",
					datatype:"json",
					data:{productID:$(this).attr("productID")},
					success:function(res)
					{
						createTableDataEng(JSON.parse(res));
					}
				});
			}
		});
		function createTableDataEng(duata)
		{
			$('#productTable').DataTable(
			{
				data:duata,
				columns:[
				{title:"Product ID"},
				{title:"Product Name"},
				{title:"Action"}
				],
				destroy:true
			});
		}
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>PRODUK</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"><a href=<?php echo site_url("Backend/add_product")?>><i class="fa fa-plus-square fa-lg"></i> Tambah Produk</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div id="sep">&nbsp;</div>
	<table id="productTable" class="display hover cell-border" width="100%">
		
	</table>
	
</div>