	<div class="main">
		<h2>Write a News:</h2>
		<div class="form-container">
			<form action="<?php echo base_url();?>admin/save_news" method="post" enctype="multipart/form-data">
				<label class="" for="img">Image (optional)</label><br>
				<input class="" type="file" name="image" id="img"><br><br>
  				<label class="" for="date">Event Date:</label><br>
  				<input type="date" name="newsdate"><br><br>
				<label class="" for="title">Title</label><br>
        		<input class="" type="text" name="newstitle" id="title" required><br>
        		<label class="" for="text">Paragraph :</label><br>
				<textarea class="" name="newstext" id="editor"></textarea><br>
				<input class="" type="submit" value="Simpan">
    		</form>
		</div>
	</div>