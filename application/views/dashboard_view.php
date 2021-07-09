<section class="page-section" id="contact">
  <div class="d-flex justify-content-center h-100">
  <div class="card text-white bg-danger mb-3" style="max-width: 50rem;">
     <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Daftar Servis</h2>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-12">
          <form action="<?php echo base_url(). 'page/create'; ?>" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama *" required="required" data-validation-required-message="Masukan Nama Anda">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="telp" type="text" name="telp" placeholder="Nomor Telepon *" required="required" data-validation-required-message="Masukan Nomor polisi Anda">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Alamat *" required="required" data-validation-required-message="Masukan Alamat Anda">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="plat" type="text" name="plat" placeholder="Nomor Polisi *" required="required" data-validation-required-message="Masukan Nomor Polisi Anda">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="t_mtr" type="text" name="t_mtr" placeholder="Tipe motor *" required="required" data-validation-required-message="Masukan Tipe Motor Anda">
                  <p class="help-block text-danger"></p>
                </div>
              	<div class="form-group">
                  <label for="srv">Select list:</label>
                  <select class="form-control" id="srv" name="srv">
                    <option>Servis Ringan</option>
                    <option>Servis Berat</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="message" name="message" placeholder="Keluhan *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button type="submit" value="Tambah"  class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton">Daftar</button>
              </div>
            </div>
          </form>
          <form method="get" action="page/Tambah">
            <div class="col-lg-12 mb-3 mt-3 text-center">
              <button type="submit" class="btn btn-primary mb-3">Cetak Ulang</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    </div>
  </section>