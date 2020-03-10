





<div class="mainwrap">
  <div class="splashimg">
    <img src="<?php echo base_url();?>assets/images/main_slider1.png">
  </div>
  <div class="contentwrap">
    <h1 class="title">All News</h1>
    <div class="contents">
        <div class="grid-container-3">
            <?php 
            function word_limit($string, $word_limit){
                    $words = explode(" ",$string);
                    return implode(" ",array_splice($words,0,$word_limit));
                    }
            foreach ($res->result() as $post) : 
            ?>
                <div class="grid-item-3">
                    <div class="cage-evt-3">
                        <h3 class="cage-evt-title-3"><?php echo word_limit($post->news_title,9);?> ::</h3><br>
                        <div class="cage-evt-desc-3">
                            <?php echo word_limit($post->news_text,48);?><br>
                        </div>
                        <div class="mg-button-container-2">
                          <a style="background-color: crimson; color: white;" class="mg-button-2" href="<?php  echo base_url("web/read_news/").$post->news_id;?>">Read</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
  </div>
</div>