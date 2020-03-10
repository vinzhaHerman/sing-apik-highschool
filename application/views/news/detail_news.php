<?php 
  $news=$news->row_array();
?>





<div class="mainwrap">
  <div class="splashimg">
    <img src="<?php echo base_url();?>assets/images/main_slider1.png">
  </div>
  <div class="contentwrap">
    <h1 class="title">NEWS</h1>
    <div class="contents">
        <img src="<?php echo base_url().'uploads/news_images/'.$news['news_image'];?>">
        <h2 class="oswalds crimsons titles"><?php echo $news['news_title'];?> :: <br><br></h2>
        <p class="serifs spaces15"><?php echo $news['news_text'];?></p>
    </div>
  </div>
</div>