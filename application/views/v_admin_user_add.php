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
				  <?php echo form_open("admin/user_aksi_tambah"); ?>
					<div class="col-md-6">
					  <div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="user_name">
					  </div>
					  <div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="user_password">
					  </div>
					  <div class="form-group">
						<label>Level</label>
						<select type="text" class="form-control select2" name="user_level">
							<option value="admin">Admin</option>
							<option value="mahasiswa">Mahasiswa</option>
						</select>
					  </div>
					  <div class="form-group">
						<label>Status</label>
						<select type="text" class="form-control select2" name="user_aktif">
							<option value="1">Aktif</option>
							<option value="0">Non Aktif</option>
						</select>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" name="user_fullname">
					  </div>
					  <div class="form-group">
						<label>E-Mail</label>
						<input type="text" class="form-control" name="user_email">
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