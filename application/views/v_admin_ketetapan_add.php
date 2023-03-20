  <div class="content-wrapper ">
    <section class="content-header">
      <h1>
        Tambah
      </h1>
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<span>Silahkan melengkapi form berikut</span>
					</h3>
				</div>
				<div class="box-body">
				  <div class="row">
				  <?php echo form_open("admin/ketetapan_aksi_tambah"); ?>
					<div class="col-md-6">
						<?php 
						$query_min = $this->db->query("select MAX(ketetapan_id)+1 as max from tbl_ketetapan");
						foreach ($query_min->result_array() as $row_max);
						$maksimal_ketetapan = $row_max['max'];
						?>
						<input type="hidden" class="form-control" name="ketetapan_id" value="<?php echo $maksimal_ketetapan;?>">
					  <div class="form-group">
						<label>Nama Ketetapan</label>
						<input type="text" class="form-control" name="ketetapan_nama" placeholder="Nama ketetapan">
					  </div>
					  <div class="form-group">
						<label>Matriks Ke-n</label>
						<input type="number" class="form-control" name="ketetapan_n" placeholder="Matriks Ke-n">
					  </div>
					  <div class="form-group">
						<label>Nilai Ketetapan</label>
						<input type="number" step="0.01" class="form-control" name="ketetapan_nilai" placeholder="Nilai ketetapan">
					  </div>
					  <div class="form-group">
						<input type="submit" name="submit" value="Submit" class="btn btn-success">
					  </div>
					</div>
					<?php echo form_close(); ?>
				  </div>
				</div>
			</div>
		</div>
      </div>
    </section>
  </div>