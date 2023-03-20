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
				  <?php echo form_open("admin/wisata_aksi_ubah/".$tbl_wisata->wisata_id); ?>
					<div class="col-md-6">
					  <div class="form-group">
						<label>Nama wisata</label>
						<input type="text" class="form-control" name="wisata_nama" value="<?php echo set_value('wisata_nama', $tbl_wisata->wisata_nama); ?>">
					  </div>
					  <div class="form-group">
						<label>Kode Wisata</label>
						<input type="text" class="form-control" name="kode_wisata" value="<?php echo set_value('kode_wisata', $tbl_wisata->kode_wisata); ?>">
					  </div>
					  <div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="wisata_alamat"><?php echo set_value('wisata_alamat', $tbl_wisata->wisata_alamat); ?></textarea>
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