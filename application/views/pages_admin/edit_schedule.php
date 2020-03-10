<?php 
	$schedule=$schedule->row_array();
 ?>
<div class="main">
		<h2>Schedule ::</h2>
		<div class="form-container">
			<form action="<?php echo base_url();?>admin/update_schedule" method="post" enctype="multipart/form-data">
				<input type="hidden" name="scheduleid" value="<?php echo $schedule['schedule_id'] ?>">
        		<label class="" for="text">Edit Contents :</label><br>
				<textarea class="" name="schedulecontent" id="editor"><?php echo $schedule['schedule_content'] ?></textarea><br>
				<input class="" type="submit" value="Simpan">
    		</form>
		</div>
	</div>