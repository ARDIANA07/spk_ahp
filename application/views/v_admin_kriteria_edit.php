  <div class="content-wrapper ">
    <section class="content-header">
      <h1>
        Ubah
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
				  <?php echo form_open("admin/kriteria_aksi_ubah/".$tbl_kriteria->kriteria_id); ?>
					<div class="col-md-6">
					  <div class="form-group">
						<label>Nama Kriteria</label>
						<input type="text" class="form-control" name="kriteria_nama" value="<?php echo set_value('kriteria_nama', $tbl_kriteria->kriteria_nama); ?>">
					  </div>
					  <div class="form-group">
						<label>Nilai Kriteria</label>
						<input type="number" class="form-control" name="kriteria_nilai" value="<?php echo set_value('kriteria_nilai', $tbl_kriteria->kriteria_nilai); ?>">
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