<?php $this-> load->view('side/head') ?>
<?php $this-> load->view('side/navbar_DataSiswa') ?>


<section id="head">
  <div class="container wow fadeIn">
    <div class="section-header"><br>
      <h4 class="section-title" style="color: #fff; font-size: 25px">Yayasan Al-Baitul Amien</h4>
    </div>
  </div>
</section>
<br>
<div class="container mt-3">
  <h2>Entri Data</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#menu1">Data Siswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Data Anak</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Data Keluarga</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4">Riwayat Kesehatan</a>
    </li> -->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="menu1" class="container tab-pane active"><br>
      <div class="row">
          <div class="col-lg-12">
              <div class="card card-outline-info">
                  <div class="card-header" style="background-color: #2dc997">
                      <h4 class="m-b-0 text-white">Entri Data Siswa</h4>
                  </div>
                  <div class="card-body">
                      <form autocomplete="off" method="post" action="<?php echo base_url("Data_siswa/t_entri_data_siswa")?>" enctype="multipart/form-data" class="form-horizontal form-bordered">
                          <div class="form-body">
                              <div class="form-group row">
                                  <h3 class="control-label text-left col-md-3">I. Data Anak</h3>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Lengkap</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="nama_lengkap" size="30" maxlength="100" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Panggilan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="nama_panggilan" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tempat Lahir</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="tempat_lahir" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tanggal Lahir</label>
                                  <div class="col-md-9">
                                      <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tgl_lahir" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Usia</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="usia" size="3" maxlength="3" onKeyPress="return goodchars(event,'0123456789',this)" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Jenis Kelamin</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="jenis_kelamin">
                                        <?php foreach ($jenis_kel->result() as $jk ) { ?>
                                          <option value="<?php echo $jk -> id_jenis_kelamin ?>"><?php echo $jk-> jenis_kelamin; ?></option>
                                        <?php  } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Agama</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="agama">
                                        <?php foreach ($agama->result() as $a ) { ?>
                                          <option value="<?php echo $a -> id_agama ?>"><?php echo $a-> nama_agama; ?></option>
                                        <?php  } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kewarganegaraan</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="kewarganegraan">
                                        <?php foreach ($warga->result() as $w ) { ?>
                                          <option value="<?php echo $w -> id_kewarganegaraan ?>"><?php echo $w-> status_warganegara; ?></option>
                                        <?php  } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tinggal Bersama</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="tinggal_bersama" required="">
                                          <option>Orang Tua</option>
                                          <option>Wali</option>
                                          <option>Lainnya</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Bahasa Sehari-hari Di Rumah</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="bahasa_sehari_hari" required="">
                                          <option>Indonesia</option>
                                          <option>Jawa</option>
                                          <option>Lainnya</option>
                                      </select>
                                  </div>
                              </div>
                              <!-- <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tinggal Bersama</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="tinggal_bersama" required="">
                                  </div>
                              </div> -->
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Anak ke</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="anak_ke" size="3" maxlength="3" onKeyPress="return goodchars(event,'0123456789',this)" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Asal Sekolah</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="asal_sekolah">
                                          <option>PAUD</option>
                                          <option>TK</option>
                                          <option>SD</option>
                                          <option>Tidak Memilih</option>
                                      </select>
                                      <br><br>
                                      <small>Nama Sekolah</small>
                                      <input type="text" placeholder="..." class="form-control" name="nama_sekolah">
                                      <br>
                                      <small>Masuk Tahun</small>
                                      <input type="text" placeholder="..." class="form-control" name="masuk_tahun"  size="3" maxlength="4" onKeyPress="return goodchars(event,'0123456789',this)">
                                      <br>
                                      <small>Tamat Tahun</small>
                                      <input type="text" placeholder="..." class="form-control" name="tamat_tahun"  size="3" maxlength="4" onKeyPress="return goodchars(event,'0123456789',this)">
                                      <br>
                                      <small>Alamat Sekolah</small>
                                      <input type="text" placeholder="..." class="form-control" name="alamat_sekolah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kesulitan yang dialami ketika di PAUD/TK/SD </label>
                                  <div class="col-md-9">
                                      <textarea type="text" placeholder="..." class="form-control" rows="4" name="kesulitan_yg_dialami"></textarea>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Aktivitas yang paling disukai</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="aktivitas_yg_disukai">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">No. Hp Siswa</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="no_hp" size="3" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Upload foto</label>
                                  <div class="col-md-9">
                                      <input type="file" id="input-file-now" class="dropify" name="gambar_siswa" required="" />
                                  </div>
                              </div>
                          </div>
                          <div class="form-actions">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="offset-sm-3 col-md-9">
                                              <button type="submit" class="btn btn-primary" style="float: right;" name="btnSimpan"> <i class="fa fa-check"></i> Simpan</button>
                                              <!-- <button type="button" class="btn btn-inverse">Cancel</button> -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div><br>
          </div>
      </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="row">
          <div class="col-lg-12">
              <div class="card card-outline-info">
                  <div class="card-header" style="background-color: #2dc997">
                      <h4 class="m-b-0 text-white">Entri Data Anak</h4>
                  </div>
                  <div class="card-body">
                      <form autocomplete="off" method="post" action="<?php echo base_url("Data_anak/t_entri_data_anak")?>" enctype="multipart/form-data" class="form-horizontal form-bordered">
                          <div class="form-body">
                              <div class="form-group row">
                                  <h3 class="control-label text-left col-md-12">II. Kelahiran Anak</h3>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Lama Dalam Kandungan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="lama_kandungan">
                                      <small style="color: #c0392b ">Dengan format  ... Bulan, ... Hari <i>(contoh : 9 Bulan, 10 Hari) </i></small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Keadaan Selama Dalam Kandungan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="keadaan_dalam_kandungan">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Keadaan Lahir</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="keadaan_lahir">
                                          <option>Normal</option>
                                          <option>Sulit</option>
                                          <option>Prematur</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Proses Kelahiran</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="proses_kelahiran">
                                          <option>Normal</option>
                                          <option>Sulit</option>
                                          <option>Operasi Caesar</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Yang Membantu Kelahiran</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="membantu_kelahiran">
                                          <option>Dokter</option>
                                          <option>Bidan</option>
                                          <option>Lainnya</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Berat / Panjang Ketika Lahir</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="berat_panjang">
                                      <small style="color: #c0392b ">Dengan format berat Kg, panjang Cm <i>(contoh : 3,5 Kg , 10 Cm) </i></small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Apgar Score</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="apgar_score">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Usia Ibu Ketika Anak Lahir</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="usia_ibu">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <h3 class="control-label text-left col-md-12">III. Kesehatan Anak</h3>
                              </div>

                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Berat Badan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="berat_badan" size="3" maxlength="5" onKeyPress="return goodchars(event,'0123456789 kgKG',this)">
                                      <small class="form-control-feedback"> Diberi satuan (Kg) </small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tinggi Badan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="tinggi_badan" size="3" maxlength="6" onKeyPress="return goodchars(event,'0123456789 cmCM',this)">
                                      <small class="form-control-feedback"> Diberi satuan (Cm) </small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Golongan Darah</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="gol_darah">
                                        <?php foreach ($gol_darah->result() as $gol) { ?>
                                          <option value="<?php echo $gol -> id_golongan_darah ?>"><?php echo $gol -> golongan_darah; ?></option>
                                        <?php } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Lama Masa Meminum Asi</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="lama_minum_asi">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Perkembangan Dalam 2 Bulan Pertama</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="perkembangan">
                                      <small style="color: #c0392b">(Jika normal isikan normal, jika ada gangguan isikan ada gangguan dan sebutkan)</small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kelainan Dalam Tubuh</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="kel_dalam_tubuh">
                                      <small style="color: #c0392b">Dengan format pengisian jenis penyakit, usia, lamanya <i>(Contoh : hepatitis, 7 tahun, 3 bulan )</i> jika tidak ada kosongi saja.</small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Makan Tambahan yang diberikan setelah 4 Bulan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="makan_tambahan">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Imunisasi Yang Pernah Diberikan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="imunisasi">
                                      <small style="color: #c0392b">Dengan format pengisian jenis imunisasi, usia saat imunisasi <i>(Contoh : campak, 3 tahun )</i> jika tidak ada kosongi saja.</small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Alergi Makanan Dan Obat</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="alergi">
                                      <small style="color: #c0392b">Dengan format pengisian jenis alergi, sejak usia, akibat yang ditimbulkan <i>(Contoh : makan udang, 7 tahun, gatal-gatal)</i> jika tidak ada kosongi saja.</small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Penglihatan</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="penglihatan">
                                          <option>Normal</option>
                                          <option>Berkacamata Minus/Plus</option>
                                      </select>
                                  </div>
                              </div>
                               <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pendengaran</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="pendengaran">
                                          <option>Normal</option>
                                          <option>Kurang Tanggap Terhadap Suara</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Penampilan</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="penampilan">
                                          <option>Koordinasi Gerakan Terkendali</option>
                                          <option>Koordinasi Gerakan Kurang Terkendali</option>
                                      </select>
                                  </div>
                              </div>
                              <!-- <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Penglihatan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="penglihatan">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pendengaran</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="pendengaran">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Penampilan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="penampilan">
                                  </div>
                              </div> -->
                              <div class="form-group row">
                                  <h3 class="control-label text-left col-md-12">IV. Ciri Khas Anak</h3>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Ciri Fisik Yang Menonjol</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="ciri_fisik">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Ciri Kepribadian Yang Menonjol</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="ciri_kepribadian">
                                          <option>Periang</option>
                                          <option>Pemalu</option>
                                          <option>Suka Menyendiri</option>
                                          <option>Mudah Bergaul</option>
                                          <option>Aktif</option>
                                          <option>Pendiam</option>
                                          <option>Pemarah</option>
                                          <option>Lainnya</option>
                                      </select>
                                  </div>
                              </div>
                              <!-- <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Ciri Kepribadian Yang Menonjol</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="ciri_kepribadian">
                                  </div>
                              </div> -->
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Bakat Khusus Yang Menonjol</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="bakat">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Prestasi Yang Pernah Diraih</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="presatsi">
                                  </div>
                              </div>
                          </div>
                          <div class="form-actions">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="offset-sm-3 col-md-9">
                                              <button type="submit" class="btn btn-primary" style="float: right;" name="btnSimpan"> <i class="fa fa-check"></i> Simpan</button>
                                              <!-- <button type="button" class="btn btn-inverse">Cancel</button> -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div><br>
          </div>
      </div>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <div class="row">
          <div class="col-lg-12">
              <div class="card card-outline-info">
                  <div class="card-header" style="background-color: #2dc997">
                      <h4 class="m-b-0 text-white">Entri Data Keluarga</h4>
                  </div>
                  <div class="card-body">
                      <form autocomplete="off" method="post" action="<?php echo base_url("Data_keluarga/t_entri_data_keluarga")?>" enctype="multipart/form-data" class="form-horizontal form-bordered">
                          <div class="form-body">
                              <div class="form-group row">
                                  <h3 class="control-label text-left col-md-12">V. Data Keluarga</h3>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="nama_ayah" size="30" maxlength="100" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="nama_ibu" size="30" maxlength="100" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Agama Ayah</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="agama_ayah">
                                        <?php foreach ($agama->result() as $a ) { ?>
                                          <option value="<?php echo $a -> id_agama ?>"><?php echo $a-> nama_agama; ?></option>
                                        <?php  } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Agama Ibu</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="agama_ibu">
                                        <?php foreach ($agama->result() as $a ) { ?>
                                          <option value="<?php echo $a -> id_agama ?>"><?php echo $a-> nama_agama; ?></option>
                                        <?php  } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tanggal Lahir Ayah</label>
                                  <div class="col-md-9">
                                      <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tgl_lahir_ayah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tanggal Lahir Ibu</label>
                                  <div class="col-md-9">
                                      <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tgl_lahir_ibu">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kewarganegaraan Ayah</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="kewarganegraan_ayah">
                                        <?php foreach ($warga->result() as $w ) { ?>
                                          <option value="<?php echo $w -> id_kewarganegaraan ?>"><?php echo $w-> status_warganegara; ?></option>
                                        <?php  } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kewarganegaraan Ibu</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="kewarganegraan_ibu">
                                        <?php foreach ($warga->result() as $w ) { ?>
                                          <option value="<?php echo $w -> id_kewarganegaraan ?>"><?php echo $w-> status_warganegara; ?></option>
                                        <?php  } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pendidikan Terakhir Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="pend_ayah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pendidikan Terakhir Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="pend_ibu">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Jurusan Yang Diambil Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="jurusan_ayah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Jurusan Yang Diambil Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="jurusan_ibu">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Instansi Ayah Bekerja</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="instansi_ayah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Instansi Ibu Bekerja</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="instansi_ibu">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pangkat Golongan Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="pangkat_ayah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pangkat Golongan Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="pangkat_ibu">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Lama Kerja Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="lama_kerja_ayah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Lama Kerja Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="lama_kerja_ibu">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Penghasilan Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="penghasilan_ayah" size="3" maxlength="20" onKeyPress="return goodchars(event,'0123456789 rpRP,.',this)">
                                      <small class="form-control-feedback"> Diberi satuan (Rp) </small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Penghasilan Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="penghasilan_ibu" size="3" maxlength="20" onKeyPress="return goodchars(event,'0123456789 rpRP,.',this)">
                                      <small class="form-control-feedback"> Diberi satuan (Rp) </small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Jumlah Tanggungan Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="tanggungan_ayah" size="3" maxlength="3" onKeyPress="return goodchars(event,'0123456789',this)">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Jumlah Tanggungan Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="tanggungan_ibu" size="3" maxlength="3" onKeyPress="return goodchars(event,'0123456789',this)">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Alamat Rumah Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="alamat_ayah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Alamat Rumah Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="alamat_ibu">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Alamat Kantor Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="al_kantor_ayah">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Alamat Kantor Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="al_kantor_ibu">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">No.Telephone Rumah Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="no_telp_rumah_ayah" size="3" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">No.Telephone Rumah Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="no_telp_rumah_ibu" size="3" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">No.Telephone Kantor Ayah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="no_telp_kantor_ayah" size="3" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">No.Telephone Kantor Ibu</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="no_telp_kantor_ibu" size="3" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kesempatan Berkomunikasi Ayah Dengan Anak</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="komunikasi_ayah">
                                          <option>Setiap Hari</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kesempatan Berkomunikasi Ibu Dengan Anak</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="komunikasi_ibu">
                                          <option>Setiap Hari</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <h3 class="control-label text-left col-md-12">VI. Saudara Kandung Anak</h3>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Nama Saudara Kandung</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="nama_sdr_kandung" size="30" maxlength="100" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ',this)">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Jenis Kelamin Saudara Kandung</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="jenis_kelamin">
                                        <?php foreach ($jenis_kel->result() as $jk ) { ?>
                                          <option value="<?php echo $jk -> id_jenis_kelamin ?>"><?php echo $jk-> jenis_kelamin; ?></option>
                                        <?php  } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pendidikan Saudara Kandung</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="pend_sdr_kandung">
                                          <option>Tidak Memilih</option>
                                          <option>TK Al-Baitul Amien</option>
                                          <option>SD Al-Baitul Amien</option>
                                          <option>SMP Al-Baitul Amien</option>
                                          <option>Lainnya</option>
                                      </select>
                                  </div>
                              </div>
                              <!-- <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pendidikan Saudara Kandung</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="pend_sdr_kandung">
                                  </div>
                              </div> -->
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kelas Saudara Kandung</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="kls_sdr_kandung">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">No. Induk Saudara Kandung</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="no_induk_sdr_kandung" size="3" maxlength="16" onKeyPress="return goodchars(event,'0123456789',this)">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <h3 class="control-label text-left col-md-12">VII. Data Tempat Tinggal</h3>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Status Tempat Tinggal</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="status_tempat_tinggal">
                                          <option>Sendiri</option>
                                          <option>Dinas</option>
                                          <option>Kontrak</option>
                                          <option>Lainnya</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Jarak Dari Rumah Ke Sekolah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="jarak_rumah_ke_sekolah">
                                      <small style="color: #c0392b">Dengan format diberi satuan jarak dibelakang angka <i>(Contoh : 8 Km)</i></small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Luas Bangunan Rumah</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="luas_bangunan_rumah">
                                      <small style="color: #c0392b">Dengan format Panjang x Lebar <i>(Contoh : 5M x 6M)</i></small>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Jumlah Kamar</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="jumlah_kamar">
                                      <small style="color: #c0392b">Dengan format ... kamar <i>(Contoh : 4 Kamar)</i></small>
                                  </div>
                              </div>
                          </div>
                          <div class="form-actions">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="offset-sm-3 col-md-9">
                                              <button type="submit" class="btn btn-primary" style="float: right;" name="btnSimpan"> <i class="fa fa-check"></i> Simpan</button>
                                              <!-- <button type="button" class="btn btn-inverse">Cancel</button> -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div><br>
          </div>
      </div>
    </div>
    <!-- <div id="menu4" class="container tab-pane fade"><br>
      <div class="row">
          <div class="col-lg-12">
              <div class="card card-outline-info">
                  <div class="card-header" style="background-color: #2dc997">
                      <h4 class="m-b-0 text-white">Entri Riwayat Kesehatan</h4>
                  </div>
                  <div class="card-body">
                      <form autocomplete="off" method="post" action="<?php echo base_url("Riwayat_kesehatan/t_entri_riwayat_kesehatan")?>" enctype="multipart/form-data" class="form-horizontal form-bordered">
                          <div class="form-body">
<<<<<<< HEAD
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Berat Badan</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="berat_badan" size="3" maxlength="5" onKeyPress="return goodchars(event,'0123456789 kgKG',this)">
                                      <small class="form-control-feedback"> Diberi satuan (Kg) </small>
=======
                             <div class="form-group row">
                                  <h3 class="control-label text-left col-md-12">VIII. Kemampuan Anak</h3>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Bangun tidur sendiri</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="bangun_tidur">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Membersihkan tempat tidur sendiri</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="membersihkan_tempat_tidur">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Mandi sendiri</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="mandi_sendiri">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Gosok gigi sendiri</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="gosok_gigi_sendiri">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Mengenakan pakaian sendiri</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="mengenakan_pakaian_sendiri">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Makan sendiri</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="makan_sendiri">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Memakai sepatu sendiri</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="memakai_sepatu_sendiri">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tidur tidak ditemani</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="tidur_tidak_ditemani">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Bermain ke rumah tangga</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="bermain_ke_tetangga">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Bermain sendiri</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="bermain_sendiri">
                                          <option>Selalu</option>
                                          <option>Sering</option>
                                          <option>Kadang</option>
                                          <option>Tidak Pernah</option>
                                      </select>
                                  </div>
                              </div>
                              <hr>

                              <!-- nomor 11 - 23 -->
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Mengucapkan terima kasih</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="mengucapkan_terima_kasih">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Mengucapkan salam</label>
                                  <div class="col-md-9">
                                      <select class="form-control custom-select" name="mengucapkan_salam">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Tinggi Badan</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="tinggi_badan" size="3" maxlength="6" onKeyPress="return goodchars(event,'0123456789 cmCM',this)">
                                      <small class="form-control-feedback"> Diberi satuan (Cm) </small>
=======
                                      <select class="form-control custom-select" name="menjawab_salam">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Golongan Darah</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <select class="form-control custom-select" name="gol_darah">
                                        <?php foreach ($gol_darah->result() as $gol) { ?>
                                          <option value="<?php echo $gol -> id_golongan_darah ?>"><?php echo $gol -> golongan_darah; ?></option>
                                        <?php } ?>
=======
                                      <select class="form-control custom-select" name="hafal_doa_doa">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Lama Masa Meminum Asi</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="lama_minum_asi">
=======
                                     <select class="form-control custom-select" name="mengenal_huruf_latin">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Perkembangan Dalam 2 Bulan</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="perkembangan">
=======
                                      <select class="form-control custom-select" name="mengenal_huruf_arab">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Kelainan Dalam Tubuh</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="kel_dalam_tubuh">
=======
                                      <select class="form-control custom-select" name="mengenal_angka_sampai_5">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Makan Tambahan < 2 Bulan</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="makan_tambahan">
=======
                                      <select class="form-control custom-select" name="menulis_angka_sampai_5">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Imunisasi Yang Pernah Diberikan</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="imunisasi">
=======
                                     <select class="form-control custom-select" name="menulis_latin">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Alergi Yang Dimiliki</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="alergi">
=======
                                     <select class="form-control custom-select" name="menulis_arab">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Penglihatan</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="penglihatan">
=======
                                      <select class="form-control custom-select" name="menggambar">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Pendengaran</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="pendengaran">
=======
                                      <select class="form-control custom-select" name="mewarnai_gambar">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Penampilan</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="penampilan">
=======
                                      <select class="form-control custom-select" name="menceritakan_pengalaman">
                                          <option>Bisa</option>
                                          <option>Kurang Bisa</option>
                                          <option>Belum Bisa</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Ciri Fisik Yang Menonjol</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="ciri_fisik">
=======
                                      <select class="form-control custom-select" name="belajar_baca_quran">
                                          <option>Sudah Pernah</option>
                                          <option>Belum Pernah</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Ciri Kepribadian Yang Menonjol</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="ciri_kepribadian">
=======
                                      <select class="form-control custom-select" name="buku_yg_digunakan">
                                          <option>Iqro'</option>
                                          <option>Qiroati</option>
                                          <option>Tilawati</option>
                                      </select>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Bakat Khusus Yang Menonjol</label>
                                  <div class="col-md-9">
<<<<<<< HEAD
                                      <input type="text" placeholder="..." class="form-control" name="bakat">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Prestasi Yang Pernah Diraih</label>
                                  <div class="col-md-9">
                                      <input type="text" placeholder="..." class="form-control" name="presatsi">
                                  </div> -->
=======
                                      <select class="form-control custom-select" name="pencapaian_jilid">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label text-left col-md-3">Surat pendek yang sudah dihafal</label>
                                  <div class="col-md-9">
                                      <textarea class="form-control" placeholder="..." rows="3" name="surat_pendek_yang_dihafal"></textarea>
                                      <small style="color: #c0392b ">Sebutkan semua yang anda hafal</small>
                                  </div>
                              </div>
                          </div>
                          <div class="form-actions">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="offset-sm-3 col-md-9">
                                              <button type="submit" class="btn btn-primary" style="float: right;" name="btnSimpan"> <i class="fa fa-check"></i> Simpan</button>
                                              <!-- <button type="button" class="btn btn-inverse">Cancel</button> -->
                                          </div>
                                      </div>
                                  </div>
>>>>>>> 5f5c6c7331b959f757d9c123716418df6bc19200
                              </div>
                          </div>
                          <div class="form-actions">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="offset-sm-3 col-md-9">
                                              <button type="submit" class="btn btn-primary" style="float: right;" name="btnSimpan"> <i class="fa fa-check"></i> Simpan</button>
                                              <!-- <button type="button" class="btn btn-inverse">Cancel</button> -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div><br>
          </div>
      </div>
    </div>
  </div>
</div>



<?php $this->load->view('side/footer') ?>
<?php $this->load->view('side/js') ?>

<?php if ($this->session->flashdata()) { ?>
    <?php echo $this->session->flashdata('Pesan'); ?>                    
<?php } ?>


<script src="<?php echo base_url() ?>master/assets/dropify/dist/js/dropify.min.js"></script>
<script>
    function deleted(param){
var proc = window.confirm('Are you sure delete this data?');
if(proc){
  document.location='<?php echo base_url(); ?>admin/Galery/hapus/'+param;
}
}
$(document).ready(function() {
    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });

    // Used events
    var drEvent = $('#input-file-events').dropify();

    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    drEvent.on('dropify.errors', function(event, element) {
        console.log('Has Errors');
    });

    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e) {
        e.preventDefault();
        if (drDestroy.isDropified()) {
            drDestroy.destroy();
        } else {
            drDestroy.init();
        }
    })
});
</script>
<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>

<script language="javascript">
  function getkey(e)
  {
    if (window.event)
     return window.event.keyCode;
   else if (e)
     return e.which;
   else
     return null;
 }
 function goodchars(e, goods, field)
 {
  var key, keychar;
  key = getkey(e);
  if (key == null) return true;

  keychar = String.fromCharCode(key);
  keychar = keychar.toLowerCase();
  goods = goods.toLowerCase();

// check goodkeys
if (goods.indexOf(keychar) != -1)
  return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
 return true;

if (key == 13) {
  var i;
  for (i = 0; i < field.form.elements.length; i++)
    if (field == field.form.elements[i])
      break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
  };
// else return false
return false;
}
</script>


                