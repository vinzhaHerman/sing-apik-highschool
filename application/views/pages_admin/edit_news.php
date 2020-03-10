<?php 
	$news=$news->row_array();
 ?>
	<div class="main">
		<h2>Write a News:</h2>
		<div class="form-container">
			<form action="<?php echo base_url();?>admin/update_news" method="post" enctype="multipart/form-data">
				<input type="hidden" name="newsid" value="<?php echo $news['news_id'] ?>">
				<input type="hidden" name="img_old" value="<?php echo $news['news_image'] ?>">





				<label class="" for="img">Image (optional)</label><br>
				<img class="form-image" src="<?php echo base_url()?>uploads/news_images/<?php echo $news['news_image']?>"><br>
				<input type="file" name="image" id="img"><br><br>





  				<label class="" for="date">Event Date:</label><br>
  				<input type="date" name="newsdate" value="<?php echo $news['news_date'] ?>"><br><br>





				<label class="" for="title">Title</label><br>
        		<input class="" type="text" name="newstitle" id="title" value="<?php echo $news['news_title'] ?>" required><br>





        		<label class="" for="text">Paragraph :</label><br>
				<textarea class="" name="newstext" id="editor"><?php echo $news['news_text'] ?></textarea><br>





				<input class="" type="submit" value="Simpan">
    		</form>
		</div>
	</div>