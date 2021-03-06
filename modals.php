<!-- BEGIN Tambah Tabung -->
<div class="modal modal-info fade text-left" id="tambahTabung" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="modal1">Tambahkan Tabung Gas LPG</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="ftt" action="insert.php" method="post">
          <div class="modal-body">
            <label for="sel1">Ukuran Tabung:</label>
            <div class="form-group position-relative has-icon-left">
              <select class="form-control" id="sel1" name="ukuran" >
                <option value="null" selected disabled>Pilih ukuran tabung</option>
                <option value="3 Kg">3 Kg</option>
                <option value="5.5 Kg">5.5 Kg</option>
                <option value="12 Kg">12 Kg</option>
              </select>
              <div class="form-control-position">
                <i class="fa fa-cube font-medium-4 icon-align"></i>
              </div>
            </div>
            <label for="jmls">Jumlah: </label>
            <div class="form-group position-relative has-icon-left">
              <input type="number" class="form-control" placeholder="Masukkan jumlah tabung" name="jumlah" id="jmls" min=1>
              <div class="form-control-position">
                <i class="fa fa-balance-scale font-medium-4 icon-align"></i>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="tambah1" value="tambah">
            <button type="reset" class="btn btn-outline-danger btn-xs" data-dismiss="modal" value="close"><i class="fa fa-times"></i> Cancel</button>
            <button type="submit" class="btn btn-outline-success btn-xs" value="submit" name="tambah" id="tambah"><i class="fa fa-check"></i> Tambah</button>
          </div>
        </form>
      </div>
    </div>
</div>
<!-- END Tambah Tabung -->

<!-- BEGIN Jual Tabung -->
<div class="modal modal-info fade text-left" id="jualTabung" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="modal2">Jual Tabung Gas LPG</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="fjt">
          <div class="modal-body">
            <label for="sel2">Ukuran Tabung:</label>
            <div class="form-group position-relative has-icon-left">
              <select class="form-control" id="sel2" name="ukuran">
                <option value="null" selected disabled>Pilih ukuran tabung</option>
                <option value="3 Kg">3 Kg</option>
                <option value="5.5 Kg">5.5 Kg</option>
                <option value="12 Kg">12 Kg</option>
              </select>
              <div class="form-control-position">
                <i class="fa fa-cube font-medium-4 icon-align"></i>
              </div>
            </div>
            <label for="jml2">Jumlah: </label>
            <div class="form-group position-relative has-icon-left">
              <input type="number" class="form-control" placeholder="Masukkan jumlah tabung" id="jml2" name="jumlah">
              <div class="form-control-position">
                <i class="fa fa-balance-scale font-medium-4 icon-align"></i>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-outline-danger btn-xs" data-dismiss="modal" value="close"><i class="fa fa-times"></i> Cancel</button>
            <input type="hidden" name="jual1" value="tambah">
            <button type="submit" class="btn btn-outline-success btn-xs" value="submit" name="jual" id="jual"><i class="fa fa-check"></i> Jual</button>
          </div>
        </form>
      </div>
    </div>
</div>
<!-- END Jual Tabung -->

<!-- Begin Tambah Data -->
<div class="modal modal-info fade text-left" id="tambahPelanggan" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modal3">Tambah Data Pelanggan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="ftdp">
        <div class="modal-body">
          <label for="nama1">Nama: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" name="nama1" id="nama1" class="form-control" placeholder="Masukkan nama pelanggan">
            <div class="form-control-position">
              <i class="fa fa-user font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="alamat1">Alamat: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" name="alamat1" id="alamat1" class="form-control" placeholder="Masukkan alamat pelanggan">
            <div class="form-control-position">
              <i class="fa fa-map font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="sel3">Kategori:</label>
          <div class="form-group position-relative has-icon-left">
            <select class="form-control" id="sel3" name="kat1">
              <option value="null" selected disabled>Pilih kategori pelanggan</option>
              <option value="Rumah Tangga">Rumah Tangga</option>
              <option value="Usaha Mikro">Usaha Mikro</option>
              <option value="Lainnya">Lainnya</option>
            </select>
            <div class="form-control-position">
              <i class="fa fa-th-list font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="kep1">Keperluan: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" name="kep1" id="kep1" class="form-control" placeholder="Masukkan keperluan pelanggan">
            <div class="form-control-position">
              <i class="fa fa-tag font-medium-4 icon-align"></i>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="tambahpel" value="tambah">
          <button type="reset" class="btn btn-outline-danger btn-xs" data-dismiss="modal" value="close"><i class="fa fa-times"></i> Cancel</button>
          <button type="submit" class="btn btn-outline-success btn-xs" value="submit" name="tampel" id="hmm3"><i class="fa fa-check"></i> Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Tambah Data -->

<!-- Begin Edit Data -->
<div class="modal modal-info fade text-left" id="editPelanggan" tabindex="-1" role="dialog" aria-labelledby="modal4" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modal4">Edit Data Pelanggan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="fedp">
        <div class="modal-body">
          <input type="hidden" name="idedpel" id="idedpel">
          <label for="nama2">Nama: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" name="nama2" id="nama2" class="form-control" placeholder="Masukkan nama pelanggan">
            <div class="form-control-position">
              <i class="fa fa-user font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="alamat2">Alamat: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" name="alamat2" id="alamat2" class="form-control" placeholder="Masukkan alamat pelanggan">
            <div class="form-control-position">
              <i class="fa fa-map font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="sel4">Kategori:</label>
          <div class="form-group position-relative has-icon-left">
            <select class="form-control" id="sel4" name="kat2">
              <option value="null" selected disabled>Pilih kategori pelanggan</option>
              <option value="Rumah Tangga">Rumah Tangga</option>
              <option value="Usaha Mikro">Usaha Mikro</option>
              <option value="Lainnya">Lainnya</option>
            </select>
            <div class="form-control-position">
              <i class="fa fa-th-list font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="kep2">Keperluan: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" name="kep2" id="kep2" class="form-control" placeholder="Masukkan keperluan pelanggan">
            <div class="form-control-position">
              <i class="fa fa-tag font-medium-4 icon-align"></i>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-outline-danger btn-xs" data-dismiss="modal" value="close"><i class="fa fa-times"></i> Cancel</button>
          <input type="hidden" name="editpel" value="tambah">
          <button type="submit" class="btn btn-outline-success btn-xs" value="submit" name="editpels" id="edit3"><i class="fa fa-check"></i> Perbarui</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Edit Data -->

<!-- Begin Jual Gas -->
<div class="modal modal-info fade text-left" id="jualGas" tabindex="-1" role="dialog" aria-labelledby="modal5" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modal5">Jual LPG</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="fjg">
        <div class="modal-body">
          <label for="sel5">Ukuran Tabung:</label>
          <div class="form-group position-relative has-icon-left">
            <select class="form-control" id="sel5" name="ukuran">
              <option value="null" selected disabled>Pilih ukuran tabung</option>
              <option value="1">3 Kg</option>
              <option value="4">5.5 Kg</option>
              <option value="7">12 Kg</option>
            </select>
            <div class="form-control-position">
              <i class="fa fa-cube font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="sel6">Pelanggan:</label>
          <div class="form-group position-relative has-icon-left">
            <select class="form-control" id="sel6" name="plg">
              <option value="null" selected disabled>Pilih pelanggan</option>
              <?php
                require_once("config.php");
                $datas = pg_query($conn, "SELECT * FROM pembeli");
                while($data = pg_fetch_assoc($datas)){
                  if($data['id'] != 'ownerPangkalan'){
                  ?>
                    <option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
                  <?php
                  }
                }
              ?>
            </select>
            <div class="form-control-position">
              <i class="fa fa-user font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="jml3">Jumlah: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="number" class="form-control" placeholder="Masukkan jumlah tabung" id="jml3" name="jumlah">
            <div class="form-control-position">
              <i class="fa fa-balance-scale font-medium-4 icon-align"></i>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="jualgass" value="tambah">
          <button type="reset" class="btn btn-outline-danger btn-xs" data-dismiss="modal" value="close"><i class="fa fa-times"></i> Cancel</button>
          <button type="submit" class="btn btn-outline-success btn-xs" value="submit" name="juallpg" id="juallpg"><i class="fa fa-check"></i> Jual</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Jual Gas -->

<!-- Begin Restock Gas -->
<div class="modal modal-info fade text-left" id="restockGas" tabindex="-1" role="dialog" aria-labelledby="modal6" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modal6">Restock LPG</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frg" method="post" action="insert.php">
        <div class="modal-body">
          <label for="sel7">Ukuran Tabung:</label>
          <div class="form-group position-relative has-icon-left">
            <select class="form-control" id="sel7" name="ukuran">
              <option value="null" selected disabled>Pilih ukuran tabung</option>
              <option value="2">3 Kg</option>
              <option value="5">5.5 Kg</option>
              <option value="8">12 Kg</option>
            </select>
            <div class="form-control-position">
              <i class="fa fa-cube font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="jml4">Jumlah: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="number" class="form-control" placeholder="Masukkan jumlah tabung" id="jml4" name="jumlah" min=1>
            <div class="form-control-position">
              <i class="fa fa-balance-scale font-medium-4 icon-align"></i>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="restokgas" value="tambah">
          <button type="reset" class="btn btn-outline-danger btn-xs" data-dismiss="modal" value="close"><i class="fa fa-times"></i> Cancel</button>
          <button type="submit" class="btn btn-outline-success btn-xs" value="submit" name="rsg" id="rsg"><i class="fa fa-check"></i> Restock</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Restock Gas -->

<!-- Begin Retur LPG -->
<div class="modal modal-info fade text-left" id="returLPG" tabindex="-1" role="dialog" aria-labelledby="modal7" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modal7">Retur LPG</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frl" method="post" action="insert.php">
        <div class="modal-body">
          <label for="sel8">Ukuran Tabung:</label>
          <div class="form-group position-relative has-icon-left">
            <select class="form-control" id="sel8" name="ukuran">
              <option value="null" selected disabled>Pilih ukuran tabung</option>
              <option value="1">3 Kg</option>
              <option value="4">5.5 Kg</option>
              <option value="7">12 Kg</option>
            </select>
            <div class="form-control-position">
              <i class="fa fa-cube font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="sel9">Pelanggan:</label>
          <div class="form-group position-relative has-icon-left">
            <select class="form-control" id="sel9" name="plg">
              <option value="null" selected disabled>Pilih pelanggan</option>
              <?php
                require_once("config.php");
                $datas = pg_query($conn, "SELECT * FROM pembeli");
                while($data = pg_fetch_assoc($datas)){
                  if($data['id'] != 'ownerPangkalan'){
                  ?>
                    <option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
                  <?php
                  }
                }
              ?>
            </select>
            <div class="form-control-position">
              <i class="fa fa-user font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="tgl">Tanggal Transaksi: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="date" class="form-control" id="tgl" value="<?= date('Y-m-d'); ?>" name="tanggal">
            <div class="form-control-position">
              <i class="fa fa-calendar-check-o font-medium-4 icon-align"></i>
            </div>
          </div>
          <label for="jml5">Jumlah: </label>
          <div class="form-group position-relative has-icon-left">
            <input type="number" class="form-control" placeholder="Masukkan jumlah tabung" id="jml5" name="jumlah" value="" min=1>
            <div class="form-control-position">
              <i class="fa fa-balance-scale font-medium-4 icon-align"></i>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="returgas" value="tambah">
          <button type="reset" class="btn btn-outline-danger btn-xs" data-dismiss="modal" value="close"><i class="fa fa-times"></i> Cancel</button>
          <button type="submit" class="btn btn-outline-success btn-xs" value="submit" name="rtg" id="rtg"><i class="fa fa-check"></i> Retur</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Retur LPG -->

<!-- BEGIN Input Report -->
<div class="modal modal-info fade text-left" id="inputReport" tabindex="-1" role="dialog" aria-labelledby="modal8" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="modal8">Cetak Report Penjualan</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="frb">
          <div class="modal-body">
            <label for="bulan">Bulan:</label>
            <div class="form-group position-relative has-icon-left">
              <select class="form-control" id="bulan" name="bulan">
                <option value="null" selected disabled>Pilih bulan</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
              <div class="form-control-position">
                <i class="fa fa-calendar font-medium-4 icon-align"></i>
              </div>
            </div>
            <label for="tahun">Tahun:</label>
            <div class="form-group position-relative has-icon-left">
              <select class="form-control" id="tahun" name="tahun">
                <option value="null" selected disabled>Pilih tahun</option>
                <option value="2019">2019</option>
              </select>
              <div class="form-control-position">
                <i class="fa fa-calendar-times-o font-medium-4 icon-align"></i>
              </div>
            </div>
            <label for="ukuran">Ukuran:</label>
            <div class="form-group position-relative has-icon-left">
              <select class="form-control" id="ukuran" name="ukuran">
                <option value="null" selected disabled>Pilih ukuran lpg</option>
                <option value="1">3 kg</option>
                <option value="4">5.5 kg</option>
                <option value="7">12 kg</option>
              </select>
              <div class="form-control-position">
                <i class="fa fa-cube font-medium-4 icon-align"></i>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-outline-danger btn-xs" data-dismiss="modal" value="close"><i class="fa fa-times"></i> Cancel</button>
            <input type="hidden" name="repot" value="tambah">
            <button type="submit" class="btn btn-outline-success btn-xs" value="submit" name="repots" id="repots"><i class="fa fa-print"></i> Cetak</button>
          </div>
        </form>
      </div>
    </div>
</div>
<!-- END Input Report -->