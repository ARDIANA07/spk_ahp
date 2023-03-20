<div class="content-wrapper ">
    <section class="content-header">
      <h1>
        Bobot
      </h1>
    </section>
				<?php 
					//KRITERIA	
					$query_count_kriteria = $this->db->query("select COUNT(kriteria_id) as count from tbl_kriteria");
					$query_min_kriteria = $this->db->query("select MIN(kriteria_id) as min from tbl_kriteria");
					$query_max_kriteria = $this->db->query("select MAX(kriteria_id) as max from tbl_kriteria");
					foreach ($query_min_kriteria->result_array() as $row_min_kriteria);
					foreach ($query_max_kriteria->result_array() as $row_max_kriteria);
					foreach ($query_count_kriteria->result_array() as $row_count_kriteria);
					$minimal_kriteria = $row_min_kriteria['min'];
					$maksimal_kriteria = $row_max_kriteria['max'];
					$count_kriteria = $row_count_kriteria['count'];
					$query_ketetapan_kriteria = $this->db->query("select ketetapan_nilai from tbl_ketetapan where ketetapan_n = '$count_kriteria' ");
					foreach ($query_ketetapan_kriteria->result_array() as $row_ketetapan);
					$ketetapan_nilai_kriteria = $row_ketetapan['ketetapan_nilai'];
					
					for($x = $minimal_kriteria; $x<=$maksimal_kriteria; $x++){
						$query = $this->db->query("select * from tbl_kriteria where kriteria_id = '$x'");
						foreach ($query->result_array() as $row){
							$nilai_awal_kriteria[$x] = $row['kriteria_nilai'];
							$nama_awal_kriteria[$x] = $row['kriteria_nama'];
						}
					}	
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){
						for($akhir = $minimal_kriteria; $akhir <=$maksimal_kriteria; $akhir++){
							$nilai_perbandingan_kriteria[$awal][$akhir] = $nilai_awal_kriteria[$awal]/$nilai_awal_kriteria[$akhir];
						}
					}
					
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){
						$jumlah_nilai_perbandingan_kriteria[$awal] = "";
						for($akhir = $minimal_kriteria; $akhir <=$maksimal_kriteria; $akhir++){
							$jumlah_nilai_perbandingan_kriteria[$awal] += $nilai_perbandingan_kriteria[$akhir][$awal]; 
						}
					} 
					
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){
						for($akhir = $minimal_kriteria; $akhir <=$maksimal_kriteria; $akhir++){
							$nilai_prioritas_kriteria[$awal][$akhir] = $nilai_awal_kriteria[$awal]/$nilai_awal_kriteria[$akhir]/$jumlah_nilai_perbandingan_kriteria[$akhir];
						}
						$jumlah_nilai_prioritas_kriteria[$awal] = "";
						for($akhir = $minimal_kriteria; $akhir <=$maksimal_kriteria; $akhir++){
							$jumlah_nilai_prioritas_kriteria[$awal] += $nilai_prioritas_kriteria[$awal][$akhir]; 
						}
						$bobot_prioritas_kriteria[$awal] = $jumlah_nilai_prioritas_kriteria[$awal]/$count_kriteria; 
					} 
					
					$hasil_eigen_prioritas_kriteria[$awal] = "";
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){
						$hasil_eigen_prioritas_kriteria[$awal] = $jumlah_nilai_prioritas_kriteria[$awal]+$bobot_prioritas_kriteria[$awal];
					} 
					
					$jumlah_eigen_prioritas_kriteria = "";
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){ 
						$jumlah_eigen_prioritas_kriteria += $hasil_eigen_prioritas_kriteria[$awal]; 
					}
						
					$lambda_max_kriteria = $jumlah_eigen_prioritas_kriteria/$count_kriteria;
					$consistency_index_kriteria = ($lambda_max_kriteria-$count_kriteria)/($count_kriteria-1);
					$consistency_ratio_kriteria = $consistency_index_kriteria/$ketetapan_nilai_kriteria;
					
					//alternatif					
					for($kriteria_id=$minimal_kriteria; $kriteria_id<=$maksimal_kriteria; $kriteria_id++){
						$query_count_alternatif = $this->db->query("select COUNT(alternatif_id) as count from tbl_alternatif where kriteria_id='$kriteria_id'");
						$query_min_alternatif = $this->db->query("select MIN(alternatif_id) as min from tbl_alternatif where kriteria_id='$kriteria_id'");
						$query_max = $this->db->query("select MAX(alternatif_id) as max from tbl_alternatif where kriteria_id='$kriteria_id'");
						foreach ($query_min_alternatif->result_array() as $row_min_alternatif);
						foreach ($query_max->result_array() as $row_max_alternatif);
						foreach ($query_count_alternatif->result_array() as $row_count_alternatif);
						$minimal_alternatif[$kriteria_id] = $row_min_alternatif['min'];
						$maksimal_alternatif[$kriteria_id] = $row_max_alternatif['max'];
						$count_alternatif = $row_count_alternatif['count'];
						$query_ketetapan_alternatif = $this->db->query("select ketetapan_nilai from tbl_ketetapan where ketetapan_n = '$count_alternatif' ");
						foreach ($query_ketetapan_alternatif->result_array() as $row_ketetapan_alternatif);
						$ketetapan_nilai_alternatif = $row_ketetapan_alternatif['ketetapan_nilai'];
						
						for($x = $minimal_alternatif[$kriteria_id]; $x<=$maksimal_alternatif[$kriteria_id]; $x++){
							$query = $this->db->query("select * from tbl_alternatif, tbl_wisata where tbl_alternatif.wisata_id=tbl_wisata.wisata_id and alternatif_id = '$x' and kriteria_id='$kriteria_id'");
							foreach ($query->result_array() as $row){
								$nilai_awal_alternatif[$x] = $row['alternatif_nilai'];
								$nama_awal_alternatif[$x] = $row['wisata_nama'];
								$id_awal_alternatif[$x] = $row['wisata_id'];
							}
						}
						
						for($awal = $minimal_alternatif[$kriteria_id]; $awal<=$maksimal_alternatif[$kriteria_id]; $awal++){
							for($akhir = $minimal_alternatif[$kriteria_id]; $akhir <=$maksimal_alternatif[$kriteria_id]; $akhir++){
								$nilai_perbandingan_alternatif[$awal][$akhir][$kriteria_id] = $nilai_awal_alternatif[$akhir]/$nilai_awal_alternatif[$awal];
							}
						}
						
						for($awal = $minimal_alternatif[$kriteria_id]; $awal<=$maksimal_alternatif[$kriteria_id]; $awal++){
						$jumlah_nilai_perbandingan_alternatif[$awal][$kriteria_id] = "";
							for($akhir = $minimal_alternatif[$kriteria_id]; $akhir <=$maksimal_alternatif[$kriteria_id]; $akhir++){
								$jumlah_nilai_perbandingan_alternatif[$awal][$kriteria_id] += $nilai_perbandingan_alternatif[$akhir][$awal][$kriteria_id]; 
							}
						}
						
						for($awal = $minimal_alternatif[$kriteria_id]; $awal<=$maksimal_alternatif[$kriteria_id]; $awal++){
							for($akhir = $minimal_alternatif[$kriteria_id]; $akhir <=$maksimal_alternatif[$kriteria_id]; $akhir++){
								$nilai_prioritas_alternatif[$awal][$akhir][$kriteria_id] = $nilai_awal_alternatif[$akhir]/$nilai_awal_alternatif[$awal]/$jumlah_nilai_perbandingan_alternatif[$akhir][$kriteria_id];
							}
						
							$jumlah_nilai_prioritas_alternatif[$awal][$kriteria_id] = "";
							for($akhir = $minimal_alternatif[$kriteria_id]; $akhir <=$maksimal_alternatif[$kriteria_id]; $akhir++){
								$jumlah_nilai_prioritas_alternatif[$awal][$kriteria_id] += $nilai_prioritas_alternatif[$awal][$akhir][$kriteria_id]; 
							}
							
							$bobot_prioritas_alternatif[$awal][$kriteria_id] = $jumlah_nilai_prioritas_alternatif[$awal][$kriteria_id]/$count_alternatif;
						}
						
						// $hasil_eigen_prioritas_alternatif[$awal][$kriteria_id] = "";
						// for($awal = $minimal_alternatif[$kriteria_id]; $awal<=$maksimal_alternatif[$kriteria_id]; $awal++){
						// 	$hasil_eigen_prioritas_alternatif[$awal][$kriteria_id] = $jumlah_nilai_prioritas_alternatif[$awal][$kriteria_id]+$bobot_prioritas_alternatif[$awal][$kriteria_id];
						// }
						
						// $jumlah_eigen_prioritas_alternatif[$kriteria_id] = "";
						// for($awal = $minimal_alternatif[$kriteria_id]; $awal<=$maksimal_alternatif[$kriteria_id]; $awal++){ 
						// 	$jumlah_eigen_prioritas_alternatif[$kriteria_id] += $hasil_eigen_prioritas_alternatif[$awal][$kriteria_id]; 
						// }
						
						// $lambda_max_alternatif[$kriteria_id] = $jumlah_eigen_prioritas_alternatif[$kriteria_id]/$count_alternatif;
						// $consistency_index_alternatif[$kriteria_id] = ($lambda_max_alternatif[$kriteria_id]-$count_alternatif)/($count_alternatif-1);
						// $consistency_ratio_alternatif[$kriteria_id] = $consistency_index_alternatif[$kriteria_id]/$ketetapan_nilai_alternatif;
					}
					
					
					?>
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">
				<h5><strong>Matriks Hasil (Bobot)</strong></h5>
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>Kriteria</th>
						<?php for($w = $minimal_kriteria; $w<=$maksimal_kriteria; $w++){
								$query = $this->db->query("select * from tbl_kriteria where kriteria_id = '$w'");
								foreach ($query->result_array() as $row){
									echo "<th style=\"text-align:center;\">".$row['kriteria_nama']."</th>";
								}
							}
						?>
						<th rowspan="2" style="text-align:center;vertical-align:middle;">Prioritas Pilihan</th>
						<th rowspan="2" style="text-align:center;vertical-align:middle;">Ranking</th>
					</tr>
					<tr>
						<th>Alternatif</th>
						<?php for($w = $minimal_kriteria; $w<=$maksimal_kriteria; $w++){
								echo "<td style=\"text-align:center;\">".round($bobot_prioritas_kriteria[$w],4)."</td>";
							}
						?>
					</tr>					
					</thead>
					<tbody>
<!-- 					
					<?php for($w = 1; $w<=$count_alternatif; $w++){ 
					for($x = $minimal_kriteria; $x<=$maksimal_kriteria; $x++){
								$m = $w+($count_alternatif*($x-1));
					}
					
						$prioritas_pilihan_alternatif_akhir[$w] = "";
						for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){ 
							$m = $w+($count_alternatif*($awal-1));
							$prioritas_pilihan_alternatif_akhir[$w] += ($bobot_prioritas_alternatif[$m][$awal]*$bobot_prioritas_kriteria[$awal]); 
						}
					} ?> -->
					
					<?php for($w = 1; $w<=$count_alternatif; $w++){ ?>
					<tr>
						<td> <?php echo $nama_awal_alternatif[$w];?> </td>
						<?php for($x = $minimal_kriteria; $x<=$maksimal_kriteria; $x++){
								$m = $w+($count_alternatif*($x-1));?>
						<td> <?php echo round($bobot_prioritas_alternatif[$m][$x],4);?> </td>
						<?php } ?>
						
						<?php 
						$prioritas_pilihan_alternatif[$w] = "";
						for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){ 
							$m = $w+($count_alternatif*($awal-1));
							$prioritas_pilihan_alternatif[$w] += ($bobot_prioritas_alternatif[$m][$awal]*$bobot_prioritas_kriteria[$awal]); 
						}
						?>
						<td style="text-align:center;">
						<?php 
							echo round($prioritas_pilihan_alternatif[$w],4);
						?>
						</td>
						
						<td>
						<?php 						
						//$rangking = array
						//	  (
						//	  array(floatval($prioritas_pilihan_alternatif_akhir[1]),$nama_awal_alternatif[1]),
						//	  array(floatval($prioritas_pilihan_alternatif_akhir[2]),$nama_awal_alternatif[2]),
						//	  array(floatval($prioritas_pilihan_alternatif_akhir[3]),$nama_awal_alternatif[3]),
						//	  array(floatval($prioritas_pilihan_alternatif_akhir[4]),$nama_awal_alternatif[4]),
						//	  array(floatval($prioritas_pilihan_alternatif_akhir[5]),$nama_awal_alternatif[5]),
						//	  );
						//Sama halnya dengan berikut:	  
						$rangking = array();
						for($debug = 1; $debug<=$count_alternatif; $debug++){ 
							$mindebug = $debug-1;
							$rangking[$mindebug] = array();
							$rangking[$mindebug][0] = floatval($prioritas_pilihan_alternatif_akhir[$debug]);
							$rangking[$mindebug][1] = $nama_awal_alternatif[$debug];
						}
							sort($rangking);	
							$hitung = count($rangking);	
							for ($row = 0; $row < $hitung; $row++) {
								$juara[$row] = $rangking[$row][0];
							}
						 
						for($trace = 1; $trace<=$count_alternatif; $trace++){ 
							$mintrace = $trace-1;
							if($prioritas_pilihan_alternatif[$w]==$juara[$mintrace]){
								echo $trace;
							}
						}
						?>
						</td>
					</tr>
					
					<?php } ?>
				
					
					</tbody>
				  </table>
				</div>
			  </div>
		</div>
      </div>
    </section>
</div>
