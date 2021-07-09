<section class="page-section" id="contact">
 <div class="d-flex justify-content-center h-100">
  <div class="card text-white bg-danger mb-3" style="max-width: 150rem;">
    <div class="container">
      <div class="row">
       <div class="container text-center">
        <h2 class="section-heading text-uppercase">Update Servis</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?php foreach($tbl_reg as $row){ ?>
          <form action="<?php echo base_url(). 'page/update'; ?>" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" name="id_reg" value="<?php echo $row->id_reg ?>">
                  <input class="form-control" id="nama" type="text" name="nama" value="<?php echo $row->nama ?>">
                </div>
                <div class="form-group">
                  <input class="form-control" id="telp" type="text" name="telp" value="<?php echo $row->telp ?>">
                </div>
                <div class="form-group">
                  <input class="form-control" id="alamat" type="text" name="alamat" value="<?php echo $row->alamat ?>">
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="plat" type="text" name="plat" value="<?php echo $row->plat ?>">
                </div>
                <div class="form-group">
                  <input class="form-control" id="t_mtr" type="text" name="t_mtr" value="<?php echo $row->t_mtr ?>">
                </div>
                <input type="hidden" name="srv" value="<?php echo $row->srv ?>">
                <div class="form-group">
                  <select class="form-control" id="stat" name="stat">
                    <option>Dikerjakan</option>
                    <option>Selesai</option>
                  </select>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button type="submit" value="simpan"  class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton">simpan</button>
              </div>
            </div>
          </form>
          <?php } ?>
        </div>
      </div>
    </div>
     </div>
  </div>
</div>
</div>
  </section>