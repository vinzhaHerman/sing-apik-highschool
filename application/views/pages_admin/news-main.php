<div class="main">
	<h2>Manage All News | <a href="<?php echo base_url() ?>admin/write_news">  Add News (<i class="fas fa-plus"></i>)</a></h2>
	<table id="table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Event Title</th>
                <th>Event Text</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        	<?php
                function limit_words($string, $word_limit){
                    $words = explode(" ",$string);
                    return implode(" ",array_splice($words,0,$word_limit));
                }
                foreach ($res->result() as $post) :
            ?>
            <tr>
                <td><?php echo limit_words($post->news_title,3) ?></td>
                <td><?php echo limit_words($post->news_text,12) ?></td>
                <td><?php echo $post->news_date ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
