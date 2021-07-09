<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title ?></title>
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"> -->
</head>
<body>
  <div class="d-flex justify-content-center h-100">
  <div class="card text-white bg-danger mb-3" style="max-width: 150rem;">
   <!--  <div class="container"> -->
    <div class="container">
      <div class="row">
     <div class="container text-center" style="margin-top: 20px">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">DAFTAR ANTRIAN</h2>
             <form action="<?php echo site_url('Page/search_keyword');?>" method = "post">
             <input type="text" name = "keyword" placeholder="Search" />
             <input type="submit" value = "Search" value="Cari" />
             </form>
             <br>
            <table id="table_id" class="table table-striped table-bordered text-white" cellspacing="0" width="100%">
              <thead>
            <tr>
                <!-- <th>ID Reg</th> -->
                <th>Nama</th>
                <th>Telpon</th>
                <th>Plat Nomor</th>
                <th>Tipe Motor</th>
                <th>Jenis Service</th>
                <th>Keluhan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             <?php
             $no = 1;
              foreach ($tbl_reg as $reg) {
              ?>
              <tr>
                <!-- <td><?php echo $no++ ?></td> -->
                <td><?php echo $reg->nama; ?></td>
                <td><?php echo $reg->telp; ?></td>
                <td><?php echo $reg->plat; ?></td>
                <td><?php echo $reg->t_mtr; ?></td>
                <td><?php echo $reg->srv; ?></td>
                <td><?php echo $reg->message; ?></td>
                <td>
                  <?php echo anchor('Page/cetak/'.$reg->id_reg,'Cetak',['class'=>'btn btn-success']); ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
    </div>
  </div>
</div>
</div>
  <!--  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
  </script> -->
</body>
</html>