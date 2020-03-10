<div class="mainwrap">
	<div class="splashimg">
		<img src="<?php echo base_url();?>assets/images/main_slider1.png">
	</div>
	<div class="contentwrap">
		<h1 class="title">REGISTRATION PROCEDURE</h1>
		<div class="contents">
			<div class="bottom-content">
				<h1 class="oswalds crimsons">TATA CARA PEMBAYARAN ::</h1>
				<br>
				<br>
				<span class="spaces15 serifs">
					<p class="crimsons titles">Pembelian Formulir</p>
					<ol>
						<li>Membayar biaya pendaftaran di kasir sekolah</li>
						<li>Mempelajari proses pendaftaran yang tercantum pada panduan pendaftaran</li>
						<li>Jadwal observasi/psikotes untuk calon siswa SMA dan wawancara orangtua akan diatur tersendiri</li><br><br><br>
					</ol>
				</span>
				<span class="spaces15 serifs">
					<p class="crimsons titles">Pengembalian Formulir</p>
					<ol>
						<li>Fotokopi akte kelahiran (asli diperlihatkan)</li>
						<li>Fotokopi kartu keluarga (asli diperlihatkan)</li>
						<li>Pasfoto anak (3x4cm) = 1 lembar untuk ditempelkan di formulir</li>
						<li>Medical record dari dokter keluarga bagi yang membutuhkan untuk diketahui sekolah</li>
						<li>Progress report dari ahli yang terkait (psikolog/psikiater/dan lain-lain) dan medical record bagi calon siswa berkebutuhan khusus (special needs)</li>
						<li>Fotokopi rapor kelas 9 dan ijazah SMP</li><br><br><br>
					</ol>
				</span>
				<span class="spaces15 serifs">
					<p class="crimsons titles">Observasi (Tes Akademik dan Psikotes)</p>
					<ol>
						<li>Setiap calon siswa wajib mengikuti observasi</li>
						<li>Jika diperlukan Sekolah akan merujuk calon siswa ke Pelangi Resource Center untuk mengikuti observasi lanjutan/tes psikologi/assessment yang jadwalnya akan ditentukan kemudian dengan biaya sendiri</li>
						<li>Observasi bertujuan untuk mengetahui kesiapan siswa dalam mengikuti proses belajar di Sing Apik School</li>
						<li>Materi observasi disesuaikan dengan jenjang yang dituju</li>
						<li>Apabila calon siswa berhalangan hadir pada jadwal yang ditentukan, mohon segera menghubungi sekretaris PSB untuk dijadwalkan ulang</li><br><br><br>
					</ol>
				</span>
				<span class="spaces15 serifs">
					<p class="crimsons titles">Penentuan Hasil Observasi (Tes Akademik dan Psikotes)<br>
						Pada prinsipnya semua anak akan diterima kecuali ::
					</p>
					<ol>
						<li>Jika hasil observasi menunjukkan Ananda membutuhkan perhatian khusus (special needs) sementara tempat sudah tidak memungkinkan</li>
						<li>Jika terdapat ketidaksepahaman orangtua terhadap konsep maupun kebijakan sekolah</li>
						<li>Keputusan calon siswa diterima atau tidak akan dinformasikan paling cepat dua minggu setelah observasi</li>
						<li>Bagi Ananda yang membutuhkan observasi lanjutan atau assessmentkepastian dapat melanjutkan proses pendaftaran atau tidak selambat-lambatnya dapat diterima dua minggu setelah proses observasi lanjutan atau assessment dilakukan</li><br><br><br>
					</ol>
				</span>
				<span class="spaces15 serifs">
					<p class="crimsons titles">Wawancara Orangtua</p>
					<p>Wawancara orangtua merupakan pengenalan tahap awal orangtua terhadap Sing Apik School dan sebaliknya ,Wawancara ini juga merupakan bagian dari proses PSB secara keseluruhan. Kesepahaman antara pihak orangtua dan pihak sekolah atau sebaliknya merupakan dasar untuk kelanjutan proses pendaftaran.Setiap orangtua calon siswa akan mendapat jadwal wawancara. Wawancara wajib dihadiri oleh kedua orangtua. Diusahakan waktunya bersamaan dengan jadwal Ananda diobservasi.</p><br><br>
				</span>
				<span class="spaces15 serifs">
					<p class="crimsons titles">Pengukuran Seragam</p>
					<p>Pengukuran seragam dilaksanakan setelah calon siswa dinyatakan diterima menjadi siswa Sing Apik School berdasarkan hasil observasi dan wawancara</p><br><br><br>
				</span>
				<span class="spaces15 serifs">
					<p class="crimsons titles">Berikut Rincian Biaya:</p>
					<?php
					foreach(array_slice($tuition, 0, 4) as $tu ):
				 	?>
				 	<?php echo $tu->tuition_content;?>
				 	<?php endforeach;?>
				</span>
			</div>
		</div>
	</div>
</div>