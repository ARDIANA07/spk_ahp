  <div class="content-wrapper ">
    <section class="content-header">
      <h1>
        wisata
      </h1>
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<a class="btn-sm btn-primary" href="<?php echo base_url("admin/wisata_tambah");?>"><i class="fa fa-plus"></i> <span>Tambah</span></a>
					</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No</th>
					  <th>Nama wisata</th>
					  <th>Kode Wisata</th>
					  <th>Alamat</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach($tbl_wisata as $data){
						  echo "<tr>
						  <td>".$no."</td>
						  <td>".$data->wisata_nama."</td>
						  <td>".$data->kode_wisata."</td>
						  <td>".$data->wisata_alamat."</td>
						  <td>
						  <a class='btn-sm btn-warning' title='Ubah' href='".base_url("admin/wisata_ubah/".$data->wisata_id)."'><i class='fa fa-pencil-square-o'></i></a>
						  <a title='Hapus' onclick=\"return confirm('Yakin untuk dihapus?')\" class='btn-sm btn-danger' href='".base_url("admin/wisata_aksi_hapus/".$data->wisata_id)."'><i class='fa fa-trash-o'></i></a>&nbsp;";
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