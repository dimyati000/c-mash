<?php
  $path_logo = base_url('assets/img/bengkel1.png');
  $type = pathinfo($path_logo, PATHINFO_EXTENSION);
  $data = file_get_contents($path_logo);
  $image_base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>


<!DOCTYPE html>
<html>

<head>
  <title><?=$title?></title>
  <style>
  .table {
    border-collapse: collapse;
    border-color: black;
    font-family: TimesNewRoman, Times New Roman, Times, Baskerville, Georgia, serif;
    width: 100%;
  }

  .head-table th {
    padding: 10px;
    border: 1px solid black;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
  }

  .body-table td,
  th {
    padding: 10px;
    border: 1px solid black;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11px;
  }

  .head-lap td {
    padding: 1px;
    font-family: Arial, Helvetica, sans-serif;
  }

  .text-center {
    text-align: center;
  }

  .text-left {
    text-align: left;
  }

  .text-right {
    text-align: right;
  }

  .line-title {
    border: 0;
    border-style: inset;
    border-top: 2px solid #000;
  }

  .line-title-child {
    border: 0;
    margin-top: -7px;
    border-top: 1px solid #000;
  }

  .page_break {
    page-break-before: always;
  }

  .kata-pengantar {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
  }
  </style>
</head>

<body>
  <div style="margin:-25px;">

    <table class="table" style="text-align:left;">
      <tbody class="head-lap">
        <tr>
          <td width="20%">
            <div style="width:200px;">
              <img style="width:100%;" src="<?= $image_base64 ?>" alt="">
            </div>
          </td>
          <td width="70%" class="text-center" colspan="2">
            <span style="font-size:15px">LAPORAN PELAYANAN</span> <br>
            <span style="font-size:15px;">C-Mash</span> <br>
            <span style="font-size:12px"> Banjaranyar, Lopang, Kec. Kembangbahu, Kabupaten Lamongan, Jawa Timur 62282</span> <br>
            <span style="font-size:12px">Email : dimyati@gmail.com</a></span>
            <span style="font-size:12px">Telepon : 082221337795</span>
          </td>
          <td width="10%"></td>
        </tr>
      </tbody>
    </table>
    <hr class="line-title">
    <hr class="line-title-child">

    <p style="margin-top:35px;" class="kata-pengantar">Laporan Pelayanan Periode Tanggal :
      <!-- <?= format_date($tanggal_awal, 'd/m/Y') ?> s/d <?= format_date($tanggal_akhir, 'd/m/Y') ?></p> -->
    <table class="table">
      <thead class="head-table">
        <tr>
          <th width="4%" class="text-center">No.</th>
          <th width="15%">Tanggal Pesanan</th>
          <th width="10%" class="text-center">Nama Pemesan</th>
          <th width="8%" class="text-center">Jenis Laporan</th>
          <th width="20%">Barang Terbeli</th>
          <th width="15%" class="text-center">Total Harga</th>
          <th width="20%">Keterangan</th>
        </tr>
      </thead>
      <tbody class="body-table">
      <?php
      $no = 1;
      foreach ($laporan as $lpr) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $lpr->tanggalPemesanan ?></td>
          <td><?php echo $lpr->namaPemesan ?></td>
          <td><?php echo $lpr->jenisLaporan ?></td>
          <td><?php echo $lpr->barangTerbeli ?></td>
          <td><?php echo $lpr->totalHarga ?></td>
          <td><?php echo $lpr->keterangan ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>