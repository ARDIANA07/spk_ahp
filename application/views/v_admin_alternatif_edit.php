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
				  <?php echo form_open("admin/alternatif_aksi_ubah/".$tbl_alternatif->alternatif_id); ?>
					<div class="col-md-6">
					  <div class="form-group">
						<label>Nama Kriteria</label>
						<select type="text" class="form-control select2" name="kriteria_id">
							<option value="<?php echo set_value('kriteria_id', $tbl_alternatif->kriteria_id); ?>"><?php echo set_value('kriteria_nama', $tbl_alternatif->kriteria_nama); ?></option>
							<?php
							foreach($tbl_kriteria as $data){
								echo "<option value='".$data->kriteria_id."'>".$data->kriteria_nama."</option>";
							}
							?>
						</select>
					  </div>
					  <div class="form-group">
						<label>Nama Alternatif</label>
						<select type="text" class="form-control select2" name="wisata_id">
							<option value="<?php echo set_value('wisata_id', $tbl_alternatif->wisata_id); ?>"><?php echo set_value('wisata_nama', $tbl_alternatif->wisata_nama); ?></option>
							<?php
							foreach($tbl_wisata as $data_wisata){
								echo "<option value='".$data_wisata->wisata_id."'>".$data_wisata->wisata_nama."</option>";
							}
							?>
						</select>
					  </div>
					  <div class="form-group">
						<label>Nilai Alternatif</label>
						<input type="number" class="form-control" name="alternatif_nilai" value="<?php echo set_value('alternatif_nilai', $tbl_alternatif->alternatif_nilai); ?>">
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