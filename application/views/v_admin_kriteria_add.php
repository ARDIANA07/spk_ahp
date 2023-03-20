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
				  <?php echo form_open("admin/kriteria_aksi_tambah"); ?>
					<div class="col-md-6">
						<?php 
						$query_min = $this->db->query("select MAX(kriteria_id)+1 as max from tbl_kriteria");
						foreach ($query_min->result_array() as $row_max);
						$maksimal_kriteria = $row_max['max'];
						?>
						<input type="hidden" class="form-control" name="kriteria_id" value="<?php echo $maksimal_kriteria;?>">
					  <div class="form-group">
						<label>Nama Kriteria</label>
						<input type="text" class="form-control" name="kriteria_nama" placeholder="Nama kriteria">
					  </div>
					  <div class="form-group">
						<label>Nilai Kriteria</label>
						<input type="number" class="form-control" name="kriteria_nilai" placeholder="Nilai kriteria">
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