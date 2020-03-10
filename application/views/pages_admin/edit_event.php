<?php 
	$event=$event->row_array();
 ?>
<div class="main">
		<h2>Write an Event:</h2>
		<div class="form-container">
			<form action="<?php echo base_url();?>admin/update_event" method="post" enctype="multipart/form-data">
				<input type="hidden" name="eventid" value="<?php echo $event['event_id'] ?>">
  				<label class="" for="date">Event Date:</label><br>
  				<input type="date" name="eventdate" value="<?php echo $event['event_date'] ?>"><br><br>
				<label class="" for="title">Title</label><br>
        		<input class="" type="text" name="eventtitle" id="title" value="<?php echo $event['event_title'] ?>" required><br>
        		<label class="" for="text">Paragraph :</label><br>
				<textarea class="" name="eventtext" id="editor"><?php echo $event['event_text'] ?></textarea><br>
				<input class="" type="submit" value="Simpan">
    		</form>
		</div>
	</div>