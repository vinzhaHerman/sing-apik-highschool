<div class="main">
	<h2 style="margin-bottom: 50px;" class="oswalds">Event Management | <a style="background-color: crimson; color: white;" class="mg-button"  href="<?php echo base_url() ?>admin/write_event">  Write an Event <i class="fas fa-plus"></i></a></h2>
    <div class="wrapper">
	    <div class="grid-container">
            <?php 
            function word_limit($string, $word_limit){
                    $words = explode(" ",$string);
                    return implode(" ",array_splice($words,0,$word_limit));
                    }
            foreach ($res->result() as $post) : 
            ?>
                <div class="grid-item">
                    <div class="cage-evt">
                        <h3 class="cage-evt-title"><?php echo word_limit($post->event_title,6);?> ::</h3><br>
                        <div class="cage-evt-desc">
                            <?php echo word_limit($post->event_text,32);?><br>
                        </div>
                        <div class="mg-button-container">
                            <a style="background-color: white; color: crimson;" class="mg-button" href="<?php  echo base_url("admin/edit_event/").$post->event_id;?>">Edit</a>
                            <a style="background-color: crimson; color: white;" class="mg-button" href="<?php  echo base_url("admin/delete_event/").$post->event_id;?>">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
