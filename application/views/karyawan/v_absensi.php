<div class="right_col" role="main">

  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th>
          <input type="checkbox" id="check-all" class="flat">
        </th>
        <th class="column-title">Tanggal Masuk </th>
        <th class="column-title">Scan Masuk </th>
        <th class="column-title">Scan Keluar </th>
        <th class="column-title">Terlambat </th>
        <th class="column-title">Jam Kerja </th>
        <th class="bulk-actions" colspan="7">
          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; foreach($data_absensi as $key): ?>
        <tr>
          <td><?= $no++ ?> </td>
          <td><?= $key->tgl_absen ?> </td>
          <td><?= $key->scan_masuk ?></td>
          <td><?= $key->scan_keluar ?> </td>
          <td><?= selisih($key->scan_masuk, $key->jam_masuk) ?></td>
          <td><?= selisih($key->scan_keluar, $key->scan_masuk) ?></td>
        </tr>


      <?php endforeach; ?>
    </tbody>
  </table>



</div>
