<div class="mainwrap">
	<div class="splashimg">
		<img src="<?php echo base_url();?>assets/images/main_slider1.png">
	</div>
	<div class="contentwrap">
		<h1 class="title">REGISTRATION SCHEDULE</h1>
		<div class="contents">
			<div class="bottom-content">
				<h1 class="oswalds crimsons">JADWAL PELAKSANAAN REGISTRASI ::</h1>
				<br>
				<br>
				<span class="spaces15 serifs">
					<p class="crimsons titles">Berikut Rincian Jadwal:</p>
					<?php
					foreach(array_slice($schedule, 0, 4) as $sc ):
				 	?>
				 	<?php echo $sc->schedule_content;?>
				 	<?php endforeach;?>
				</span>
			</div>
		</div>
	</div>
</div>