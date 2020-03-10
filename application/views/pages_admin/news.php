<div class="main">
	<h2 style="margin-bottom: 50px;" class="oswalds">NEWS Management | <a style="background-color: crimson; color: white;" class="mg-button"  href="<?php echo base_url() ?>admin/write_news">  Add News <i class="fas fa-plus"></i></a></h2>
    <div class="wrapper">
	    <div class="grid-container-2">
            <?php 
            function word_limit($string, $word_limit){
                    $words = explode(" ",$string);
                    return implode(" ",array_splice($words,0,$word_limit));
                    }
            foreach ($res->result() as $post) : 
            ?>
                <div class="grid-item-2">
                    <div class="cage-evt-2">
                        <h3 class="cage-evt-title-2"><?php echo word_limit($post->news_title,9);?> ::</h3><br>
                        <div class="cage-evt-desc-2">
                            <?php echo word_limit($post->news_text,48);?><br>
                        </div>
                        <div class="mg-button-container-2">
                            <a style="background-color: #EDEAE0;; color: crimson;" class="mg-button-2" href="<?php  echo base_url("admin/edit_news/").$post->news_id;?>">Edit</a>
                            <a style="background-color: crimson; color: white;" class="mg-button-2" href="<?php  echo base_url("admin/delete_news/").$post->news_id;?>">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
