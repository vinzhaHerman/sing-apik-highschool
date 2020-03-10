<?php 
	$tuition=$tuition->row_array();
 ?>
<div class="main">
		<h2>TUITION FEE ::</h2>
		<div class="form-container">
			<form action="<?php echo base_url();?>admin/update_tuition" method="post" enctype="multipart/form-data">
				<input type="hidden" name="tuitonid" value="<?php echo $tuition['tuition_id'] ?>">
        		<label class="" for="text">Edit Contents :</label><br>
				<textarea class="" name="tuitioncontent" id="editor"><?php echo $tuition['tuition_content'] ?></textarea><br>
				<input class="" type="submit" value="Simpan">
    		</form>
		</div>
	</div>