<?php $this->load->view('side/head') ?>
<?php $this->load->view('side/navbar_Upload') ?>
<section id="head">
	<div class="container wow fadeIn">
		<div class="section-header"><br>
			<h4 class="section-title" style="color: #fff; font-size: 25px">Yayasan Al-Baitul Amien</h4>
		</div>
	</div>
</section>
<br>
<div class="container">
    <form autocomplete="off" method="post" action="<?php echo base_url("Upload_DU/t_upload_bukti_daftar_ulang")?>" enctype="multipart/form-data">
    	<div class="row">
    		<div class="card" style="width: 50%; margin-left: 25%">
    			<div class="card-header">
    				<h2>Upload Bukti Daftar Ulang</h2>
    			</div>
    			<div class="card-body">
    				<div class="form-group">
    					<label for="upload_file">Masukan Gambar Bukti</label>
    					<br>
    					<input type="file" id="input-file-now" class="dropify" name="gambar_bukti_daftarulang" required="" />
    				</div>
    			</div>
    			<div class="card-footer text-right">
    				<button style="background-color: #10ac84" class="btn btn-success" name="btnSimpan">Kirim</button>
    			</div>
    		</div>
    	</div>
    </form>
</div>

<!-- <ul class="nav nav-tabs">

	<div class="card">
		<div class="card-header ">
			<h2>Upload Bukti Daftar Ulang</h2>
		</div>

		<div class="form-group">
			<label for="upload_file">Upload Bukti</label>
			<br>
			<input type="file" name="file">
		</div>

		<div class="card-footer text-right">
			<button style="float: right; background-color: #10ac84" class="btn btn-success" name="btnSimpan">Simpan</button>
		</div>
	</div>
</ul> -->
<br>

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