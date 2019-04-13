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
          <a href="" id="edtpel" data-toggle="modal" data-target="#editPelanggan" data-id="<?= $data['id']; ?>" data-nama="<?= $data['nama']; ?>" data-jenis="<?= $data['jenis']; ?>" data-alamat="<?= $data['alamat']; ?>" data-keperluan="<?= $data['keperluan']; ?>" class="btn btn-outline-warning btn-xs"><i class="ft-edit"></i></a>
          <a href="" data-id="<?= $data['id']; ?>" class="btn btn-outline-danger btn-xs swalconf"><i class="ft-trash-2"></i></a>
        </td>
      </tr> <?php
    }
  }
?>