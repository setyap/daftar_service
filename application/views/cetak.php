<section class="page-section" id="contact">

  <div class="d-flex justify-content-center h-100">
  <div class="card text-white bg-danger mb-3" style="max-width: 150rem;">
    <div class="container">
      <div class="row">
       <div class="container text-center">
        <h2 class="section-heading text-uppercase">Pendaftaran Servis</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?php foreach($tbl_reg as $reg){ ?>
          <form action="<?php echo base_url(). 'page/cetakv'; ?>" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" name="id_reg" value="<?php echo $reg->id_reg ?>">
                  <label>Nama :</label>
                  <input class="form-control" id="nama" type="text" name="nama" value="<?php echo $reg->nama ?>">
                </div>
                <input type="hidden" name="telp" value="<?php echo $reg->telp ?>">
                <input type="hidden" name="alamat" value="<?php echo $reg->alamat ?>">
                <div class="form-group">
                	<label>Nomer Polisi :</label>
                  <input class="form-control" id="plat" type="text" name="plat" value="<?php echo $reg->plat ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                	<label>Type Motor :</label>
                  <input class="form-control" id="t_mtr" type="text" name="t_mtr" value="<?php echo $reg->t_mtr ?>">
                </div>
                <div class="form-group">
                	<label>Jenis Pengerjaan</label>
                  <input class="form-control" id="srv" type="text" name="srv" value="<?php echo $reg->srv ?>">
                </div>
                <input type="hidden" name="message" value="<?php echo $reg->message ?>">
                <input type="hidden" name="stat" value="Terdaftar">
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                
                <button type="submit" value="simpan"  class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton">Selesai</button>
                <br>
                <br>
                <button class="btn btn-primary btn-xl text-uppercase" onclick="window.print()">Print</button>
              </div>
            </div>
          </form>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>