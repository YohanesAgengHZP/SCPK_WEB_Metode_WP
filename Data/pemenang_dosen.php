<?php
	session_start();
?>

<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 centered">
					<h4>Pemenang Pemilihan Dosen Terbaik</h4>
					<hr>
				</div>

				<div class="row mt">	
					<div class="col-lg-8 col-lg-offset-2">
						<table class="table" border='1'>
							<tr>
								<th>Ranking</th>
								<th>Nip </th>
								<th>Nama </th>
								<th>Jabatan </th>
							</tr>

							<?php
								$sql = mysqli_query($koneksi,"select * from dosen_peserta order by vektor_v desc limit 3");
								$i = 1;
								while ($row = mysqli_fetch_array($sql)){
									echo "<tr>
											<td> $i </td>
											<td> $row[nip] </td>
											<td> $row[nama] </td>
											<td> $row[jabatan]</td>
											</tr>";
									$i++;
								}
							?>
						</table>
						<div class="col-lg-6 col-lg-offset-3 centered">
							<h4>Selamat kepada dosen urutan pertama karena mendapat nilai tertinggi dalam rata - rata dosen terbaik tahun ini</h4>
						<hr>
				</div>
					</div>
				</div>	
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->