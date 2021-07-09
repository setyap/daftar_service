 <section id="contact">
    <div class="d-flex justify-content-center h-100">
  <div class="card text-white bg-danger mb-3" style="max-width: 150rem;">
    <div class="container">
    <div class="container">
      <div class="row">
     <div class="container" style="margin-top: 20px">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">DAFTAR ANTRIAN</h2>
             <!-- <form action="<?php echo site_url('Page/search_keyword');?>" method = "post">
             <input type="text" name = "keyword" placeholder="Search" />
             <input type="submit" value = "Search" value="Cari" />
             </form>
             <br> -->
            <table id="table_id" class="table table-striped table-bordered text-white" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Telpon</th>
                <th scope="col">Plat Nomor</th>
                <th scope="col">Tipe Motor</th>
                <th scope="col">Jenis Servis</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Status</th>
                <!-- <th scope="col">Action</th> -->
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($tbl_reg as $row) {
              ?>
              <tr>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->telp ?></td>
                <td><?php echo $row->plat ?></td>
                <td><?php echo $row->t_mtr ?></td>
                <td><?php echo $row->srv ?></td>
                <td><?php echo $row->message ?></td>
                <td><?php echo $row->stat ?></td>
               <!--  <td>
                  <?php echo anchor('Page/edit/'.$row->id_reg,'Edit',['class'=>'btn btn-warning']); ?>
                  <?php echo anchor('Page/hapus/'.$row->id_reg,'Hapus',['class'=>'btn btn-success']); ?>
                </td> -->
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </section>