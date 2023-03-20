  <div class="content-wrapper ">
    <section class="content-header">
      <h1>
        User
      </h1>
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<a class="btn-sm btn-primary" href="<?php echo base_url("admin/user_tambah");?>"><i class="fa fa-plus"></i> <span>Tambah</span></a>
					</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No</th>
					  <th>Username</th>
					  <th>Nama Lengkap</th>
					  <th>Email</th>
					  <th>Level</th>
					  <th>Status</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach($tbl_users as $data){
						  echo "<tr>
						  <td>".$no."</td>
						  <td>".$data->user_name."</td>
						  <td>".$data->user_fullname."</td>
						  <td>".$data->user_email."</td>
						  <td>".$data->user_level."</td>
						  <td>"; if($data->user_aktif=="1"){echo "Aktif";}else{echo "Non Aktif";} echo "</td>
						  <td>
						  <a class='btn-sm btn-warning' title='Ubah' href='".base_url("admin/user_ubah/".$data->user_id)."'><i class='fa fa-pencil-square-o'></i></a>
						  <a title='Hapus' onclick=\"return confirm('Yakin untuk dihapus?')\" class='btn-sm btn-danger' href='".base_url("admin/user_aksi_hapus/".$data->user_id)."'><i class='fa fa-trash-o'></i></a>&nbsp;";
						   if($data->user_aktif!="1"){
						  echo "<a onclick=\"return confirm('Konfirmasi untuk mengaktifkan user tersebut?')\" class='btn-sm btn-success' href='".base_url("admin/user_ubah_konfirmasi/".$data->user_id)."'><i class='fa fa-check-square-o'></i> Konfirmasi User </a>";
						  }
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
  </div>