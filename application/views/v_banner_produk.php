<div class="banner">
	<?php foreach ($banner_produk->result() as $row) { ?>
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $row->image; ?>" id="image_banner">
	<?php } ?>

	<h3><?php echo $lang_array[71]; ?></h3>

	<!-- action="<?php echo base_url(); ?>Frontend/new_sp"-->
	<!--action="<?php echo base_url(); ?>cekS"-->
	<form class="form-inline" method="post">
	  	<div class="form-group">
	    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
	    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
	    	<input type="hidden" id="txt_make" name="txt_make" value="">
			<input type="hidden" id="txt_model" name="txt_model" value="">
		</div>

	  	<button type="button" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>

	  	<input type="submit" value="t_inp" id="t_inp" onclick="javascript: form.action='<?php echo base_url(); ?>sp';" style="display:none;" />
		<input type="submit" value="t_inp_mk" id="t_inp_mk" onclick="javascript: form.action='<?php echo base_url(); ?>spik';" style="display:none;" />
		<input type="submit" value="t_inp_md" id="t_inp_md" onclick="javascript: form.action='<?php echo base_url(); ?>spid';" style="display:none;" />
		<input type="submit" value="t_inp_mk_md" id="t_inp_mk_md" onclick="javascript: form.action='<?php echo base_url(); ?>spikd';" style="display:none;" />

		<input type="submit" value="t_mk" id="t_mk" onclick="javascript: form.action='<?php echo base_url(); ?>spk';" style="display:none;" />
		<input type="submit" value="t_md" id="t_md" onclick="javascript: form.action='<?php echo base_url(); ?>spd';" style="display:none;" />
		<input type="submit" value="t_mk_md" id="t_mk_md" onclick="javascript: form.action='<?php echo base_url(); ?>spkd';" style="display:none;" />
		

	  	<!--<input type="hidden" id="search_input1" name="search_input1" placeholder="Masukkan kata kunci">

		onchange="setMake();"
	  	-->

	  	<div class="row"></div>

		<select class="selectpicker" id="make_select" name="make_select">
			<option value="">By Make</option>
			<?php foreach ($make->result() as $row) { ?>
	         	<option value="<?=$row->make;?>"><?=$row->make;?></option>
	        <?php } ?>
		</select>

    <select class="selectpicker model_select" id="model_select1" name="model_select" onchange="setaModel();">
      <option value="">By Model</option>
          <?php foreach ($models->result() as $row) { ?>
             <option class="<?=$row->make;?>" value="<?=$row->model;?>"><?=$row->model;?></option>
          <?php } ?>
    </select>

    <?php 
      foreach ($models->result() as $row) {
        $arr_make[$row->make] = "1"; 
      } 
      foreach ($arr_make as $key => $m) {
        ?>
          <select class="selectpicker model_select <?php echo $key?>" id="model_select2" name="model_select" onchange="setModel();" style="display:none">
          	<option value="">By Model</option>
            <?php foreach ($models->result() as $row) { ?>
              <?php if ($row->make == $key) { ?>
                <option value="<?=$row->model;?>"><?=$row->model;?></option>
              <?php } ?>
            <?php } ?>
          </select>          
        <?php
      }
      
    ?>
        
	</form>

	<script type="text/javascript">

    var list_model = [];
    var ctr = 0;
    <?php $ctr = 0; ?>
    
		//CODING UNTUK FILTER YANG INI
		$('#make_select').on('change', function(){
			setMake();
			//DISPLAY ALL
      var optVal= $("#make_select").val();
      
      $('.model_select').hide();
			$('.model_select').prop( "disabled", true );
      $('.model_select.'+optVal).show();
      $('.model_select.'+optVal).prop( "disabled", false );

    
			//DISPLAY BY MAKE
//      var optVal= $("#make_select option:selected").val();
//  		var optVal= $("#make_select").val();
//			$('#model_select').find('option').each(function() {
//				if ($(this).attr('class') != optVal){
//					$(this).hide();
//				}
//			});
		});

		
		$('.model_select').on('change', function(){
			//alert($(this).val());
			var getModel = $(this).val();
			var getModel = getModel.replace(/'/g, "\\'");
			$('#txt_model').val(getModel);
		});

		$('#btn_search').click(function(){
			var f_inp = $('#search_input').val();
			var f_make = $('#txt_make').val();
			var f_model = $('#txt_model').val();
			if (f_inp!=""){
				if ((f_make=="") && (f_model=="")){
					$('#t_inp').click();	
					//alert('1');
				}
				if ((f_make!="") && (f_model=="")){
					$('#t_inp_mk').click();	
					//alert('2');
				}
				if ((f_make=="") && (f_model!="")){
					$('#t_inp_md').click();	
					//alert('3');
				}
				if ((f_make!="") && (f_model!="")){
					$('#t_inp_mk_md').click();	
					//alert('4');
				}
			}
			if (f_inp==""){
				if ((f_make=="") && (f_model=="")){
					$('#t_inp').click();	
					//alert('n1');
				}
				if ((f_make!="") && (f_model=="")){
					$('#t_mk').click();	
					//alert('n2');
				}
				if ((f_make=="") && (f_model!="")){
					$('#t_md').click();	
					//alert('n3');
				}
				if ((f_make!="") && (f_model!="")){
					$('#t_mk_md').click();	
					//alert('n4');
				}
			}
		});


		/*var field = document.getElementById('make_select');
		var operator = document.getElementById('model_select');
		field.onchange = function () { fieldcheck(); }
		function fieldcheck() {
			var getMake = document.getElementById('make_select').value;
			var getMake = getMake.replace(/'/g, "\\'");
			document.getElementById('txt_make').value = getMake;
			for (i = 0; i < operator.options.length; i++) {
				operator.options[i].style.display = "block";
	        };
			var get_mk = document.getElementById('make_select').value;
			for (i = 0; i < operator.options.length; i++) {
	            if (operator.options[i].className != get_mk) {
	                operator.options[i].style.display = "none";
	            }
	        };
		}*/

		/*function set1Model(){
			alert('asd');
		}*/
		function setMake(){
//			var getMake = document.getElementById('make_select').value;
      		var getMake = $('#make_select').val();
			var getMake = getMake.replace(/'/g, "\\'");
//      document.getElementById('txt_make').value = getMake;
			$('#txt_make').val(getMake);
		}
		/*function setModel2(){
//      var getModel = document.getElementById('model_select').value;
			var getModel = $('#model_select').val();
			var getModel = getModel.replace(/'/g, "\\'");
//      document.getElementById('txt_model').value = getModel;
			$('#txt_model').val(getModel);
		}*/

	</script>

</div>