<?php $this->load->view('side/head') ?>
<?php $this->load->view('side/navbar_PPDB') ?>
<section id="head">
	<div class="container wow fadeIn">
		<div class="section-header"><br>
			<h4 class="section-title" style="color: #fff; font-size: 25px">Yayasan Al-Baitul Amien</h4>
		</div>
	</div>
</section>
<br>
<div class="container">
	<form autocomplete="off" method="post" action="<?php echo base_url("PPDB/t_daftar_siswa")?>" enctype="multipart/form-data">
		<div class="row">
			<div class="card" style="width: 50%; margin-left: 25%">
				<div class="card-header">
					<h2>Form Data Diri</h2>
				</div>
				<div class="card-body">
					<div class="form-group">
						<div class="form-group">
							<label for="judul">Nama Lengkap</label>
							<input type="text" name="nama" class="form-control" size="30" maxlength="100" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required="">
						</div>
						<div class="form-group">
							<label for="judul">Alamat</label>
							<input type="text" name="alamat" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="judul">No. Hp</label>
							<input type="text" name="no_hp" class="form-control" size="3" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" required="">
							<small style="color: #c0392b">(Pastikan nomor Handphone anda benar dan aktif untuk menerima SMS notifikasi)</small>
						</div>
						<div class="form-group">
							<label for="judul">Asal Sekolah</label>
							<input type="text" name="asal_sekolah" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="jenjang">Jenjang</label>
							<select name="jenjang" class="form-control" required="">
								<option disabled="">--Pilih Jenjang Pendidikan--</option>
								 <?php foreach ($jenjang->result() as $jnj) { ?>
								 	<option value="<?php  echo $jnj -> id_jenjang?>"><?php echo $jnj-> nama_jenjang; ?></option>
								 <?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="card-footer text-right">
					<button style="background-color: #10ac84" class="btn btn-success" name="btnSimpan">Simpan</button>
				</div>
				<div> <small style="color: #000">*Silahkan Upload Foto Bukti Pembayaran</small> </div>
			</div>
		</div>
	</form>
</div>

<!-- <center>
	<ul class="nav nav-tabs">
		<div class="card">
			<div class="card-header ">
				<h2>Form Data Diri</h2>
			</div>
			<div class="card-body p-4">
				<div class="form-group">
					<div class="form-group">
						<label for="judul">Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="judul">Alamat</label>
						<input type="text" name="alamat" class="form-control" required="">
					</div>

					<div class="form-group">
						<label for="judul">Asal Sekolah</label>
						<input type="text" name="asal_sekolah" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="jenjang">Jenjang</label>
						<select name="id_jenjang" class="form-control" required="">
							<option>--Pilih Jenjang Pendidikan--</option>
						</select>
					</div>
				</div>
				<div class="card-footer text-right">
					<button style="float: right; background-color: #10ac84" class="btn btn-success" name="btnSimpan">Simpan</button>
				</div>
			</div>
		</div>
	</ul>
</center> -->
<!-- Post -->


<br>
<?php $this->load->view('side/footer') ?>
<?php $this->load->view('side/js') ?>

<?php if ($this->session->flashdata()) { ?>
    <?php echo $this->session->flashdata('Pesan'); ?>                    
<?php } ?>

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