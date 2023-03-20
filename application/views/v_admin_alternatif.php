  <div class="content-wrapper ">
    <section class="content-header">
      <h1>
        Alternatif
      </h1>
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<a class="btn-sm btn-primary" href="<?php echo base_url("admin/alternatif_tambah");?>"><i class="fa fa-plus"></i> <span>Tambah</span></a>
					</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No</th>
					  <th>Nama Kriteria</th>
					  <th>Nama Alternatif</th>
					  <th>Nilai Alternatif</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach($tbl_alternatif as $data){
						  echo "<tr>
						  <td>".$no."</td>
						  <td>".$data->kriteria_nama."</td>
						  <td>".$data->wisata_nama."</td>
						  <td>".$data->alternatif_nilai."</td>
						  <td>
						  <a class='btn-sm btn-warning' title='Ubah' href='".base_url("admin/alternatif_ubah/".$data->alternatif_id)."'><i class='fa fa-pencil-square-o'></i></a>
						  <a title='Hapus' onclick=\"return confirm('Yakin untuk dihapus?')\" class='btn-sm btn-danger' href='".base_url("admin/alternatif_aksi_hapus/".$data->alternatif_id)."'><i class='fa fa-trash-o'></i></a>&nbsp;";
						  echo "</td>
						  </tr>";
						$no++;
					}
					?>
					</tbody>
				  </table>
				</div>
				<!-- /.box-body -->
			  </div>
		</div>
      </div>
    </section>
	
	<?php 
	$query_min_kriteria = $this->db->query("select MIN(kriteria_id) as min from tbl_kriteria");
	$query_max_kriteria = $this->db->query("select MAX(kriteria_id) as max from tbl_kriteria");
	foreach ($query_min_kriteria->result_array() as $row_min_kriteria);
	foreach ($query_max_kriteria->result_array() as $row_max_kriteria);
	$minimal_kriteria = $row_min_kriteria['min'];
	$maksimal_kriteria = $row_max_kriteria['max'];
	
	for($x = $minimal_kriteria; $x<=$maksimal_kriteria; $x++){
		$query = $this->db->query("select * from tbl_kriteria where kriteria_id = '$x'");
			foreach ($query->result_array() as $row){
				$nama_awal_kriteria[$x] = $row['kriteria_nama'];
			}
	}	
					
	for($kriteria_id=$minimal_kriteria; $kriteria_id<=$maksimal_kriteria; $kriteria_id++){
		
						$query_count_alternatif = $this->db->query("select COUNT(alternatif_id) as count from tbl_alternatif where kriteria_id='$kriteria_id'");
						$query_min_alternatif = $this->db->query("select MIN(alternatif_id) as min from tbl_alternatif where kriteria_id='$kriteria_id'");
						$query_max = $this->db->query("select MAX(alternatif_id) as max from tbl_alternatif where kriteria_id='$kriteria_id'");
						foreach ($query_min_alternatif->result_array() as $row_min_alternatif);
						foreach ($query_max->result_array() as $row_max_alternatif);
						foreach ($query_count_alternatif->result_array() as $row_count_alternatif);
						$minimal_alternatif = $row_min_alternatif['min'];
						$maksimal_alternatif = $row_max_alternatif['max'];
						$count_alternatif = $row_count_alternatif['count'];
						
						$query_ketetapan = $this->db->query("select ketetapan_nilai from tbl_ketetapan where ketetapan_n = '$count_alternatif' ");
						foreach ($query_ketetapan->result_array() as $row_ketetapan);
						$ketetapan_nilai = $row_ketetapan['ketetapan_nilai'];
						
						for($x = $minimal_alternatif; $x<=$maksimal_alternatif; $x++){
							$query = $this->db->query("select * from tbl_alternatif, tbl_wisata where tbl_alternatif.wisata_id=tbl_wisata.wisata_id and alternatif_id = '$x' and kriteria_id='$kriteria_id'");
							foreach ($query->result_array() as $row){
								$nilai_awal_alternatif[$x] = $row['alternatif_nilai'];
								$nama_awal_alternatif[$x] = $row['wisata_nama'];
							}
						}
	?>
	
	
	<section class="content" >
      <div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body">
					<h5><strong>Perbandingan Alternatif <?php echo $nama_awal_kriteria[$kriteria_id];?></strong></h5>
					  <table class="table table-bordered table-striped">
						<thead>
						<tr>
						  <th width="30%" style="text-align:center;">Nama Alternatif</th>
						  <th width="40%" style="text-align:center;">Nilai Perbandingan</th>
						  <th width="30%" style="text-align:center;">Nama Alternatif</th>
						</tr>
						</thead>
						<tbody>
						<?php for($x = $minimal_alternatif; $x<=$maksimal_alternatif; $x++){ ?>
							<?php for($y = $minimal_alternatif; $y<=$maksimal_alternatif; $y++){ ?>
							<tr>
							  <td style="text-align:center;"><?php echo $nama_awal_alternatif[$x];?></td>
							  <?php
							  echo "<td style=\"text-align:center;\">";
									if($nilai_awal_alternatif[$x]==$nilai_awal_alternatif[$y]){
										$perbandingan = "Sama nilainya dengan ( = )";
									}elseif($nilai_awal_alternatif[$x]<$nilai_awal_alternatif[$y]){
										$perbandingan = "Sedikit kurang nilainya dari  ( < )";
									}elseif($nilai_awal_alternatif[$x]>$nilai_awal_alternatif[$y]){
										$perbandingan = "Sedikit lebih nilainya dari  ( > )";
									}
									echo $perbandingan."</td>";
							?>
							  <td style="text-align:center;"><?php echo $nama_awal_alternatif[$y];?></td>
							</tr>
							<?php } ?>
						<?php } ?>
								
						</tbody>
					  </table>
					</div>
				<!-- /.box-header -->
				<div class="box-body">
				<h5><strong>Matriks Perbandingan Pasangan Nilai Alternatif <?php echo $nama_awal_kriteria[$kriteria_id];?></strong></h5>
				  <table class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>Alternatif </th>
					  <?php 
						for($w = $minimal_alternatif; $w<=$maksimal_alternatif; $w++){
							$query = $this->db->query("select * from tbl_alternatif, tbl_wisata where tbl_alternatif.wisata_id=tbl_wisata.wisata_id and alternatif_id = '$w' and kriteria_id='$kriteria_id'");
							foreach ($query->result_array() as $row){
								echo "<th style=\"text-align:center;\">".$row['wisata_nama']."</th>";
							}
						}
					  ?>
					  </th>
					</tr>
					
					<?php 
					for($awal = $minimal_alternatif; $awal<=$maksimal_alternatif; $awal++){
					?>
					<tr>
						<td><?php echo $nama_awal_alternatif[$awal];?></td>
						<?php for($akhir = $minimal_alternatif; $akhir <=$maksimal_alternatif; $akhir++){?>
							<td style="text-align:center;"><?php 
							$nilai_perbandingan_alternatif[$awal][$akhir][$kriteria_id] = round($nilai_awal_alternatif[$akhir]/$nilai_awal_alternatif[$awal],4);
							echo $nilai_perbandingan_alternatif[$awal][$akhir][$kriteria_id];
							?>
							</td>	
						<?php }?>
					</tr>
					<?php } ?>
					<tr>
					<th style="text-align:right;">Jumlah</th>
					<?php 
					for($akhir = $minimal_alternatif; $akhir<=$maksimal_alternatif; $akhir++){
					?>
					<th style="text-align:center;">
					<?php 
						$jumlah_nilai_perbandingan_alternatif[$akhir][$kriteria_id] = "";
						for($awal = $minimal_alternatif; $awal <=$maksimal_alternatif; $awal++){
							$jumlah_nilai_perbandingan_alternatif[$akhir][$kriteria_id] += $nilai_perbandingan_alternatif[$awal][$akhir][$kriteria_id]; 
						}
						echo $jumlah_nilai_perbandingan_alternatif[$akhir][$kriteria_id];
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
				<h5><strong>Matriks Bobot Prioritas Nilai Alternatif <?php echo $nama_awal_kriteria[$kriteria_id];?></strong></h5>
				  <table class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>Alternatif</th>
					  <?php 
						for($w = $minimal_alternatif; $w<=$maksimal_alternatif; $w++){
							$query = $this->db->query("select * from tbl_alternatif, tbl_wisata where tbl_alternatif.wisata_id=tbl_wisata.wisata_id and alternatif_id = '$w' and kriteria_id='$kriteria_id'");
							foreach ($query->result_array() as $row){
								echo "<th style=\"text-align:center;\">".$row['wisata_nama']."</th>";
							}
						}
					  ?>
					  <th style="text-align:center;">Jumlah</th>
					  <th style="text-align:center;">Prioritas</th>
					</tr>					
					<?php 
					for($awal = $minimal_alternatif; $awal<=$maksimal_alternatif; $awal++){
					?>
					<tr>
						<td><?php echo $nama_awal_alternatif[$awal];?></td>
						<?php for($akhir = $minimal_alternatif; $akhir <=$maksimal_alternatif; $akhir++){?>
							<td style="text-align:center;"><?php 
							$nilai_prioritas_alternatif[$awal][$akhir][$kriteria_id] = round($nilai_awal_alternatif[$akhir]/$nilai_awal_alternatif[$awal]/$jumlah_nilai_perbandingan_alternatif[$akhir][$kriteria_id],4);
							echo $nilai_prioritas_alternatif[$awal][$akhir][$kriteria_id];
							?>
							</td>	
						<?php }?>
						<th style="text-align:center;"><?php 
						$jumlah_nilai_prioritas_alternatif[$awal][$kriteria_id] = "";
						for($akhir = $minimal_alternatif; $akhir <=$maksimal_alternatif; $akhir++){
							$jumlah_nilai_prioritas_alternatif[$awal][$kriteria_id] += $nilai_prioritas_alternatif[$awal][$akhir][$kriteria_id]; 
						}
						echo $jumlah_nilai_prioritas_alternatif[$awal][$kriteria_id];
						?></th>
						<th style="text-align:center;"><?php $bobot_prioritas_alternatif[$awal][$kriteria_id] = round($jumlah_nilai_prioritas_alternatif[$awal][$kriteria_id]/$count_alternatif,4);
							echo $bobot_prioritas_alternatif[$awal][$kriteria_id];
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
				<!-- /.box-body -->
			  </div>
		</div>
      </div>
    </section>
	<?php } ?>
	
  </div>