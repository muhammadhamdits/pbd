<?php
require_once("header.php");
require_once("config.php");
?>

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Daftar Pelanggan</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active">Pangkalan LPG 
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button class="btn btn-outline-primary" id="tdp" type="button" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#tambahPelanggan"><i class="ft-user-plus"></i> Tambah data</button>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Daftar pelanggan LPG</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload" id="reload2"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered zero-configuration" id="pelanggans">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kategori</th>
                          <th>Alamat</th>
                          <th>Keperluan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $i=1;
                          $datas = pg_query($conn, "SELECT * FROM public.pembeli");
                          while($data = pg_fetch_assoc($datas)){
                            ?>
                              <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['jenis']; ?></td>
                                <td><?= $data['alamat']; ?></td>
                                <td><?= $data['keperluan']; ?></td>
                                <td align="center">
                                  <a href="" id="edtpel" data-toggle="modal" data-target="#editPelanggan" data-id="<?= $data['id']; ?>" data-nama="<?= $data['nama']; ?>" data-jenis="<?= $data['jenis']; ?>" data-alamat="<?= $data['alamat']; ?>" data-keperluan="<?= $data['keperluan']; ?>" class="btn btn-outline-warning btn-xs"><i class="ft-edit"></i></a>
                                  <a href="" data-id="<?= $data['id']; ?>" class="btn btn-outline-danger btn-xs swalconf"><i class="ft-trash-2"></i></a>
                                </td>
                              </tr>
                            <?php
                          }
                        ?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ Zero configuration table -->  
      </div>
    </div>
  </div>

  <?php
require_once("footer.php");
?>