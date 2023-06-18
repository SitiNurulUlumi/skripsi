  <!-- Full Width Column -->
  <div class="content-wrapper">
      <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <h1>
                  <?= $title ?>
              </h1>
              <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> <?= $title ?></a></li>
                  <li><a href="#"><?= $subtitle ?></a></li>
              </ol>
          </section>
          <!-- Main content -->
          <section class="content">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="box box-primary">
                          <div class="box-header with-border">
                              <h3 class="box-title"><?= $subtitle ?></h3>
                          </div>
                          <div class="box-body">
                              <button class="btn btn-social btn-sm btn-warning" onclick="reloadTable()"><i class="glyphicon glyphicon-refresh"></i> Reload Data</button>
                              <a class="btn btn-social btn-sm btn-success" href="<?= base_url() ?>images/tambah/"><i class="glyphicon glyphicon-plus"></i> Tambah Video</a>
                              <hr>
                              <div class="table-responsive">
                                  <table id="table" class="table table-bordered table-striped" width="100%">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Lokasi</th>
                                              <th>Tanggal</th>
                                              <th>Waktu</th>
                                              <th>Total Mobil</th>
                                              <th>Total Sepeda motor</th>
                                              <th>Total Truck</th>
                                              <th>Total Bus</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <th>No</th>
                                              <th>Lokasi</th>
                                              <th>Tanggal</th>
                                              <th>Waktu</th>
                                              <th>Total Mobil</th>
                                              <th>Total Sepeda motor</th>
                                              <th>Total Truck</th>
                                              <th>Total Bus</th>
                                          </tr>
                                      </tfoot>
                                  </table>
                              </div>
                          </div>
                          <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>
              </div>

          </section>
          <!-- /.content -->

      </div>
      <!-- /.container -->
  </div>