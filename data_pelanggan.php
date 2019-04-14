<?php 
  require_once("config.php");
  $i=1;
  $datas = pg_query($conn, "SELECT * FROM public.pembeli");
  while($data = pg_fetch_assoc($datas)){
    if($data['id']!='ownerPangkalan'){ ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['jenis']; ?></td>
        <td><?= $data['alamat']; ?></td>
        <td><?= $data['keperluan']; ?></td>
        <td align="center">
          <a href="" id="edtpel" data-toggle="modal" data-target="#editPelanggan" data-id="<?= $data['id']; ?>" data-nama="<?= $data['nama']; ?>" data-jenis="<?= $data['jenis']; ?>" data-alamat="<?= $data['alamat']; ?>" data-keperluan="<?= $data['keperluan']; ?>" class="btn btn-outline-warning"><i class="fa fa-pencil-square-o"></i></a>
          <a href="" data-id="<?= $data['id']; ?>" class="btn btn-outline-danger swalconf"><i class="fa fa-trash"></i></a>
        </td>
      </tr> <?php
    }
  }
?>