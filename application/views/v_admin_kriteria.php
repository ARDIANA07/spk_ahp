  <div class="content-wrapper ">
    <section class="content-header">
      <h1>
        Kriteria
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<a class="btn-sm btn-primary" href="<?php echo base_url("admin/kriteria_tambah");?>"><i class="fa fa-plus"></i> <span>Tambah</span></a>
					</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No</th>
					  <th>Nama Kriteria</th>
					  <th>Nilai Kriteria</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach($tbl_kriteria as $data){
						  echo "<tr>
						  <td>".$no."</td>
						  <td>".$data->kriteria_nama."</td>
						  <td>".$data->kriteria_nilai."</td>
						  <td>
						  <a class='btn-sm btn-warning' title='Ubah' href='".base_url("admin/kriteria_ubah/".$data->kriteria_id)."'><i class='fa fa-pencil-square-o'></i></a>
						  <a title='Hapus' onclick=\"return confirm('Yakin untuk dihapus?')\" class='btn-sm btn-danger' href='".base_url("admin/kriteria_aksi_hapus/".$data->kriteria_id)."'><i class='fa fa-trash-o'></i></a>&nbsp;";
						  echo "</td>
						  </tr>";
						$no++;
					}
					
						$query_count_kriteria = $this->db->query("select COUNT(kriteria_id) as count from tbl_kriteria");
						$query_min_kriteria = $this->db->query("select MIN(kriteria_id) as min from tbl_kriteria");
						$query_max_kriteria = $this->db->query("select MAX(kriteria_id) as max from tbl_kriteria");
						foreach ($query_min_kriteria->result_array() as $row_min_kriteria);
						foreach ($query_max_kriteria->result_array() as $row_max_kriteria);
						foreach ($query_count_kriteria->result_array() as $row_count_kriteria);
						$minimal_kriteria = $row_min_kriteria['min'];
						$maksimal_kriteria = $row_max_kriteria['max'];
						$count_kriteria = $row_count_kriteria['count'];
						
						$query_ketetapan = $this->db->query("select ketetapan_nilai from tbl_ketetapan where ketetapan_n = '$count_kriteria' ");
						foreach ($query_ketetapan->result_array() as $row_ketetapan);
						$ketetapan_nilai = $row_ketetapan['ketetapan_nilai'];
					?>
					</tbody>
				  </table>
				</div>
				<!-- /.box-body -->
				<div class="box-body">
				  <table class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th width="30%" style="text-align:center;">Nama Kriteria</th>
					  <th width="40%" style="text-align:center;">Nilai Perbandingan</th>
					  <th width="30%" style="text-align:center;">Nama Kriteria</th>
					</tr>
					</thead>
					<tbody>
					<?php
					for($x = $minimal_kriteria; $x<=$maksimal_kriteria; $x++){
						$query_kriteria[$x] = $this->db->query("select * from tbl_kriteria where kriteria_id = '$x'");
						foreach ($query_kriteria[$x]->result_array() as $row_kriteria[$x]);
					}
					?>
					
					<?php for($y = $minimal_kriteria; $y<=$maksimal_kriteria; $y++){ 
							for($x = $minimal_kriteria; $x<=$maksimal_kriteria; $x++){ ?>
							<tr>
							<?php
								echo "<td style=\"text-align:center;\">".$row_kriteria[$y]['kriteria_nama']."</td>";
								echo "<td style=\"text-align:center;\">";
								if($row_kriteria[$y]['kriteria_nilai']==$row_kriteria[$x]['kriteria_nilai']){
									$perbandingan = "Sama penting dengan ( = )";
								}elseif($row_kriteria[$y]['kriteria_nilai']<$row_kriteria[$x]['kriteria_nilai']){
									$perbandingan = "Sedikit kurang penting dari  ( < )";
								}elseif($row_kriteria[$y]['kriteria_nilai']>$row_kriteria[$x]['kriteria_nilai']){
									$perbandingan = "Sedikit lebih penting dari  ( > )";
								}
								echo $perbandingan."</td>";
								echo "<td style=\"text-align:center;\">".$row_kriteria[$x]['kriteria_nama']."</td>";
							
							?>
							</tr>
						<?php 
							} 
						}
						?>
					
					</tbody>
				  </table>
				</div>
			  </div>
		</div>
      </div>
    </section>
	
	<!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
				<h5><strong>Matriks Perbandingan Pasangan Nilai Kriteria</strong></h5>
				  <table class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>Kriteria</th>
					  <?php 
						for($w = $minimal_kriteria; $w<=$maksimal_kriteria; $w++){
							$query = $this->db->query("select * from tbl_kriteria where kriteria_id = '$w'");
							foreach ($query->result_array() as $row){
								echo "<th style=\"text-align:center;\">".$row['kriteria_nama']."</th>";
							}
						}
					  ?>
					</tr>
					<?php 
						for($x = $minimal_kriteria; $x<=$maksimal_kriteria; $x++){
							$query = $this->db->query("select * from tbl_kriteria where kriteria_id = '$x'");
							foreach ($query->result_array() as $row){
								$nilai_awal_kriteria[$x] = $row['kriteria_nilai'];
								$nama_awal_kriteria[$x] = $row['kriteria_nama'];
							}
						}
					?>	
					
					<?php 
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){
					?>
					<tr>
						<td><?php echo $nama_awal_kriteria[$awal];?></td>
						<?php for($akhir = $minimal_kriteria; $akhir <=$maksimal_kriteria; $akhir++){?>
							<td style="text-align:center;"><?php 
							$nilai_perbandingan_kriteria[$awal][$akhir] = round($nilai_awal_kriteria[$awal]/$nilai_awal_kriteria[$akhir],4);
							echo $nilai_perbandingan_kriteria[$awal][$akhir];
							?>
							</td>	
						<?php }?>
					</tr>
					<?php } ?>
					<tr>
					<th style="text-align:right;">Jumlah</th>
					<?php 
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){
					?>
					<th style="text-align:center;">
					<?php 
						$jumlah_nilai_perbandingan_kriteria[$awal] = "";
						for($akhir = $minimal_kriteria; $akhir <=$maksimal_kriteria; $akhir++){
							$jumlah_nilai_perbandingan_kriteria[$awal] += $nilai_perbandingan_kriteria[$akhir][$awal]; 
						}
						echo $jumlah_nilai_perbandingan_kriteria[$awal];
					?>
					</th>
					<?php } ?>
					
					</tr>

					</thead>
					<tbody>
					<?php
					
					?>
					</tbody>
				  </table>
				</div>
				<!-- /.box-body -->
				<!-- /.box-header -->
				<div class="box-body">
				<h5><strong>Matriks Bobot Prioritas Nilai Kriteria</strong></h5>
				  <table class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>Kriteria</th>
					  <?php 
						for($w = $minimal_kriteria; $w<=$maksimal_kriteria; $w++){
							$query = $this->db->query("select * from tbl_kriteria where kriteria_id = '$w'");
							foreach ($query->result_array() as $row){
								echo "<th style=\"text-align:center;\">".$row['kriteria_nama']."</th>";
							}
						}
					  ?>
					  <th style="text-align:center;">Jumlah</th>
					  <th style="text-align:center;">Prioritas</th>
					</tr>					
					<?php 
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){
					?>
					<tr>
						<td><?php echo $nama_awal_kriteria[$awal];?></td>
						<?php for($akhir = $minimal_kriteria; $akhir <=$maksimal_kriteria; $akhir++){?>
							<td style="text-align:center;"><?php 
							$nilai_prioritas_kriteria[$awal][$akhir] = round($nilai_awal_kriteria[$awal]/$nilai_awal_kriteria[$akhir]/$jumlah_nilai_perbandingan_kriteria[$akhir],4);
							echo $nilai_prioritas_kriteria[$awal][$akhir];
							?>
							</td>	
						<?php }?>
						<th style="text-align:center;"><?php 
						$jumlah_nilai_prioritas_kriteria[$awal] = "";
						for($akhir = $minimal_kriteria; $akhir <=$maksimal_kriteria; $akhir++){
							$jumlah_nilai_prioritas_kriteria[$awal] += $nilai_prioritas_kriteria[$awal][$akhir]; 
						}
						echo $jumlah_nilai_prioritas_kriteria[$awal];
						?></th>
						<th style="text-align:center;"><?php $bobot_prioritas_kriteria[$awal] = round($jumlah_nilai_prioritas_kriteria[$awal]/$count_kriteria,4);
							echo $bobot_prioritas_kriteria[$awal];
						?></th>
					</tr>
					<?php } ?>
					</thead>
					<tbody>
					<?php
					
					?>
					</tbody>
				  </table>
				</div>
				<!-- /.box-body -->
				<!-- /.box-header -->
				<div class="box-body">
				<h5><strong>Nilai Eigen Kriteria</strong></h5>
				  <table class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th style="text-align:center;">Jumlah</th>
					  <th style="text-align:center;">Prioritas</th>
					  <th style="text-align:center;">Hasil</th>
					</tr>					
					<?php 
					$hasil_eigen_prioritas_kriteria[$awal] = "";
					for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){
						$hasil_eigen_prioritas_kriteria[$awal] = $jumlah_nilai_prioritas_kriteria[$awal]+$bobot_prioritas_kriteria[$awal];
					?>
					<tr>
						<th style="text-align:center;"><?php echo $jumlah_nilai_prioritas_kriteria[$awal]; ?></th>
						<th style="text-align:center;"><?php echo $bobot_prioritas_kriteria[$awal]; ?></th>
						<th style="text-align:center;"><?php echo $hasil_eigen_prioritas_kriteria[$awal]; ?></th>
					</tr>
					<?php } ?>
					<tr>
						<th colspan="2" style="text-align:right;">Jumlah</th>
						<th style="text-align:center;">
						<?php 
						$jumlah_eigen_prioritas_kriteria = "";
						for($awal = $minimal_kriteria; $awal<=$maksimal_kriteria; $awal++){ 
							$jumlah_eigen_prioritas_kriteria += $hasil_eigen_prioritas_kriteria[$awal]; 
						}
						echo $jumlah_eigen_prioritas_kriteria;
						?>
						</th>
					</tr>
					<tr>
						<th colspan="2" style="text-align:right;">&lambda;max</th>
						<th style="text-align:center;">
						<?php 
						$lambda_max_kriteria = round($jumlah_eigen_prioritas_kriteria/$count_kriteria,4);
						echo $lambda_max_kriteria;
						?>
						</th>
					</tr>
					<tr>
						<th colspan="2" style="text-align:right;">Consistency Index</th>
						<th style="text-align:center;">
						<?php 
						$consistency_index_kriteria = round(($lambda_max_kriteria-$count_kriteria)/($count_kriteria),4);
						echo $consistency_index_kriteria;
						?>
						</th>
					</tr>
					<tr>
						<th colspan="2" style="text-align:right;">Consistency Ratio</th>
						<th style="text-align:center;">
						<?php 
						$consistency_ratio_kriteria = round($consistency_index_kriteria/$ketetapan_nilai,4);
						echo $consistency_ratio_kriteria;
						?>
						</th>
					</tr>
					<tr>
						<th colspan="3" style="text-align:left;">
						<?php if($consistency_ratio_kriteria<0.1){
							$tanda_konsistensi_kriteria = "<";
							$hasil_konsistensi_kriteria = "baik atau diterima.";
						}else{
							$tanda_konsistensi_kriteria = ">";
							$hasil_konsistensi_kriteria = "kurang baik atau tidak dapat diterima.";
						}
						?>
						Consistency Ratio matriks kriteria bernilai <?php echo $consistency_ratio_kriteria." ".$tanda_konsistensi_kriteria;?>  0.1 yang menunjukkan konsistensi <?php echo $hasil_konsistensi_kriteria;?>
						</th>
					</tr>
					</thead>
					<tbody>
					<?php
					
					?>
					</tbody>
				  </table>
				</div>
				<!-- /.box-body -->
			  </div>
		</div>
      </div>
    </section>
	
  </div>
