<?php $this->load->view('side/head') ?>
<?php $this->load->view('side/navbar_Jadwal') ?>
<section id="head">
  <div class="container wow fadeIn">
    <div class="section-header"><br>
      <h4 class="section-title" style="color: #fff; font-size: 25px">Yayasan Al-Baitul Amien</h4>
    </div>
  </div>
</section>
<br>

<section id="about">

 <div class="container">
  <div class="row">
    <div class="col-lg-12 mx-auto">
      <form action="" method="post">
        <div class="card">
          <div class="card-header">
            <h2>Jadwal Test TK</h2>
          </div>
          <div class="card-body p-6">
            <table class="table">
              <thead align="center">
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Tempat</th>
                </tr>
              </thead>
              <tbody>
               <?php
               $no = 1; 
               foreach ($jadwalTK->result() as $tk ) { ?>
              <tr>
                <td><?php echo $no++?></td>
                <td><?php echo date("d F Y", strtotime($tk -> tanggal)) ?></td>
                <td><?php echo $tk-> waktu; ?></td>
                <td><?php echo $tk-> tempat; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </form>
  </div>
</div>
</div>
</section>
<br>
<?php $this->load->view('side/footer') ?>
<?php $this->load->view('side/js') ?>