<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#head"><img style="margin-top: -10px" src="<?php echo base_url() ?>master/assets/img/new1.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url('./') ?>">Home</a></li>
          <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-sm">Login</a></li>
          <li><a href="#about">Profil</a></li>
          <li class="menu-has-children <?php if($this->uri->segment('1')=="PPDB"){ echo "active";}?>" href="#" ><a href="#">PPDB</a>
            <ul>
              <li class=""><a href="<?php echo base_url('PPDB/Panduan') ?>">Panduan</a></li>
              <li class=""><a href="<?php echo base_url('PPDB/Daftar_Siswa') ?>">Daftar</a></li>
               <li class=""><a href="<?php echo base_url('PPDB/UploadPendaftaran') ?>">Upload Bukti Pendaftaran</a></li>
              
            </ul>
          </li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#portfolio">Galeri</a></li>
          <li><a href="#contact">Kontak kami</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #10ac84">
              <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold; color: #fff">Masuk Pengguna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" id="email-modal" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" id="password-modal" placeholder="password">
                    </div>
                    <p class="text-center">
                        <!-- <button name="login" type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Masuk</button> -->
                        <a href="<?php echo base_url('Data_siswa') ?>" class="btn btn-primary">Masuk</a>
                    </p>
                </form>
               <!--  <p class="text-center text-muted">Belum Punya Akun?</p>
                <p class="text-center text-muted"><a href="<?php echo base_url('Daftar') ?>"><strong>Daftar</strong></a>! Segera punya akun!</p> -->
            </div>
          </div>
        </div>
      </div>