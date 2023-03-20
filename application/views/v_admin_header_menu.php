<header class="main-header">
    <a href="" class="logo">
      <span class="logo-mini"></span><b></b>
    </a>
    <nav class="navbar navbar-static-top" >
      <div style="text-align:center;" class="col-xs-10">
		<div  style="padding-top: 15px; color:white;"><b>SISTEM INFORMASI SELEKSI WISATA HALAL DENGAN METODE ANALYTICAL HIERARCHY PROCESS (AHP) DI BANTUL YOGYAKARTA</b></div>
      </div>
        <ul class="nav navbar-nav">
		  <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Hi, { <?php echo $this->session->userdata("nama_lengkap"); ?> }</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>welcome" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
    </nav>
  </header>
  <?php
  $geturl = $this->uri->segment(2);
  $menu_admin = "";
  $menu_wisata = "";
  $menu_kriteria = "";
  $menu_subkriteria = "";
  $menu_ketetapan = "";
  $menu_bobot = "";
  $menu_user = "";
  
  if($geturl=="" or strpos($geturl, "index")!== FALSE){
	  $menu_admin = "active";
  }
  if(strpos($geturl, "wisata")!== FALSE){
	  $menu_wisata = "active";
  }
  if(strpos($geturl, "kriteria")!== FALSE){
	  $menu_kriteria = "active";
	  $menu_subkriteria = "";
  }
  if(strpos($geturl, "subkriteria")!== FALSE){
	  $menu_subkriteria = "active";
	  $menu_kriteria = "";
  }
  if(strpos($geturl, "ketetapan")!== FALSE){
	  $menu_ketetapan = "active";
  }
  if(strpos($geturl, "bobot")!== FALSE){
	  $menu_bobot = "active";
  }
  if(strpos($geturl, "user")!== FALSE){
	  $menu_user = "active";
  }
  
  ?>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="<?php echo $menu_admin;?>">
          <a href="<?php echo base_url(); ?>admin">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
        </li>
		<li class="<?php echo $menu_wisata;?>">
          <a href="<?php echo base_url(); ?>admin/wisata">
            <i class="fa fa-child"></i> <span>wisata</span>
          </a>
        </li>
		<li class="treeview <?php echo $menu_kriteria; echo $menu_subkriteria;  echo $menu_ketetapan; echo $menu_bobot;?>">
          <a href="#">
            <i class="fa fa-cubes"></i>
            <span>AHP</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li class="<?php echo $menu_ketetapan; ?>">
			  <a href="<?php echo base_url(); ?>admin/ketetapan">
				<i class="fa fa-paperclip"></i> <span>Ketetapan</span>
			  </a>
			</li>
            <li class="<?php echo $menu_kriteria; ?>">
				<a href="<?php echo base_url(); ?>admin/kriteria">
					<i class="fa fa-gear"></i> <span>Kriteria</span>
				</a>
			</li>
			<li class="<?php echo $menu_subkriteria; ?>">
			  <a href="<?php echo base_url(); ?>admin/alternatif">
				<i class="fa fa-gears"></i> <span>Alternatif</span>
			  </a>
			</li>
			<li class="<?php echo $menu_bobot; ?>">
			  <a href="<?php echo base_url(); ?>admin/bobot">
				<i class="fa fa-balance-scale"></i> <span>Bobot</span>
			  </a>
			</li>
          </ul>
        </li>
		
		<li class="<?php echo $menu_user;?>">
          <a href="<?php echo base_url(); ?>admin/user">
            <i class="fa fa-users"></i> <span>User</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>