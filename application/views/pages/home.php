		<section class="evoslider">
			<div class="slideshow-container">

				<div class="mySlides fade">
  					<img src="<?php echo base_url(); ?>assets/img/slider/slider_2-txt.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
  					<img src="<?php echo base_url(); ?>assets/img/slider/slider_1-txt.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
  					<img src="<?php echo base_url(); ?>assets/img/slider/slider_3-txt.jpg" style="width:100%">
				</div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>
		</section>





		<section class="subnav">
			<div class="block-container">
				<img src="https://img.icons8.com/metro/50/ffffff/graduation-cap.png">
				<a href="#featured_news"><h3 class="block-title">NEWS</h3></a>
				<p class="block-txt">See What's happen in SAS</p>
			</div>
			<div class="block-container">
				<img src="https://img.icons8.com/ios/42/ffffff/graduation-scroll-filled.png">
				<a href="#upcoming_events"><h3 class="block-title">EVENTS</h3></a>
				<p class="block-txt">See what's going on in SAS</p>
			</div>
			<div class="block-container">
				<img src="https://img.icons8.com/ios/40/ffffff/xlarge-icons-filled.png">
				<a href="#"><h3 class="block-title">GALLERY</h3></a>
				<p class="block-txt">Coming Soon.</p>
			</div>
		</section>





		<section class="first"></section>
		<section class="content first">
			<h2 id="featured_news"><span class="title" style="color: #8B0000">FEATURED</span> <span class="title" style="color: #333">NEWS</span></h2>
			<!--<p>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nemo ipsum assumenda est animi dicta sunt, deserunt voluptas vitae alias rem dolorum totam at eveniet dolorem, quae minus suscipit cupiditate.</span>
				<span>Unde, aliquid, ipsa, culpa repellat reiciendis ratione harum dolore, vero nisi obcaecati nulla? Ab alias, nulla delectus expedita dolorem maiores nihil eaque ea numquam voluptates sit consequuntur inventore cupiditate, molestias!</span>
				<span>Doloremque voluptates necessitatibus, asperiores, non numquam facilis vitae nisi animi facere! Fuga ratione, non nulla dolorum molestias, odio iste deleniti, distinctio, assumenda quas dolor unde quaerat illo accusantium amet placeat.</span>
				<span>Aperiam quod eaque numquam qui atque laudantium perferendis praesentium sit doloribus, culpa, laborum, voluptatem veniam, illo aliquam corporis fugit ipsa quos. Numquam dolore inventore cum nesciunt ea reiciendis magnam blanditiis!</span>
				<span>Quod non aspernatur dolore, quaerat quasi excepturi fuga nisi hic, delectus eligendi. Ut itaque iusto molestiae nesciunt molestias unde, ea optio praesentium, excepturi voluptates earum corporis eveniet blanditiis pariatur nisi!</span>
			</p>-->
		</section>





		<section style="background-color: #EDEAE0">
			<div class="cage-container">
				<?php
					function word_limit($string, $word_limit){
                    $words = explode(" ",$string);
                    return implode(" ",array_splice($words,0,$word_limit));
                	}
					foreach(array_slice($news, 0, 3) as $nw ):
				 ?>
					<div class="cage">
						<h3 class="cage-title"><?php echo word_limit($nw->news_title, 3);?></h3><br>
						<div class="cage-desc">
							<?php echo word_limit($nw->news_text, 38);?><br>
						</div>
						<a href="<?php  echo base_url("web/read_news/").$nw->news_id;?>" class="cage-desc">Continue Reading <i class="fas fa-arrow-right"></i></a>
					</div>
					<?php endforeach;?>
				</div>
		</section>
		<section class="content button-news" style="background-color: #EDEAE0">
			<div class="button-view">
				<a href="<?php  echo base_url("web/all_news/");?>">VIEW ALL NEWS <i class="fas fa-arrow-right"></i></a>
			</div>
		</section>





		<section class="two"></section>
		<section class="two">
			<h2 id="upcoming_events" style="font-family: Oswald;  font-size: 36px"><span class="title content" style="color: #8B0000">UPCOMING</span> <span class="title" style="color: #333">EVENTS</span></h2>
			<div class="cage-evt-container">
				<?php
					foreach(array_slice($event, 0, 4) as $ev ):
				 ?>
					<div class="cage-evt">
						<h3 class="cage-evt-title"><?php echo word_limit($ev->event_title, 3);?></h3><br>
						<div class="cage-evt-desc">
							<?php echo word_limit($ev->event_text,15);?><br>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</section>
		<section class="content button-news" style="background-color: white">
			<div class="button-view">
				<a href="#">VIEW ALL EVENTS <i class="fas fa-arrow-right"></i></a>
			</div>
		</section>





		<section class="hero three"></section>
		<section class="content three">
			<h2><span class="title" style="color: #f2f2f2">MORE</span> <span class="title" style="color: #f2f2f2">INFORMATION</span></h2>
			<p>TBA</p>
		</section>
	</div>