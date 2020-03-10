	<div class="main">
		<h2>Write an Event:</h2>
		<div class="form-container">
			<form action="<?php echo base_url();?>admin/save_event" method="post" enctype="multipart/form-data">
  				<label class="" for="date">Event Date:</label><br>
  				<input type="date" name="eventdate"><br><br>
				<label class="" for="title">Title</label><br>
        		<input class="" type="text" name="eventtitle" id="title" required><br>
        		<label class="" for="text">Paragraph :</label><br>
				<textarea class="" name="eventtext" id="editor"></textarea><br>
				<input class="" type="submit" value="Simpan">
    		</form>
		</div>
	</div>