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
				  <?php echo form_open("admin/ketetapan_aksi_ubah/".$tbl_ketetapan->ketetapan_id); ?>
					<div class="col-md-6">
					  <div class="form-group">
						<label>Nama Ketetapan</label>
						<input type="text" class="form-control" name="ketetapan_nama" value="<?php echo set_value('ketetapan_nama', $tbl_ketetapan->ketetapan_nama); ?>">
					  </div>
					  <div class="form-group">
						<label>Matriks Ke-n</label>
						<input type="number" class="form-control" name="ketetapan_n" value="<?php echo set_value('ketetapan_n', $tbl_ketetapan->ketetapan_n); ?>">
					  </div>
					  <div class="form-group">
						<label>Nilai Ketetapan</label>
						<input type="number" step="0.01" class="form-control" name="ketetapan_nilai" value="<?php echo set_value('ketetapan_nilai', $tbl_ketetapan->ketetapan_nilai); ?>">
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