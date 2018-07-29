  <div class="right_col" role="main">

    <div class="row">
      <div class="col-md-6">
        <div class="x_panel">
          <h4>Laporan Penggajian Karyawan</h4>
          <form action="index.html" method="post">
            <div class="form-group">
              <select class="form-control" name="pilihBulan" id="selectBulan">
                <option value=""> -- Pilih Tanggal -- </option>
                <?php foreach($tanggal as $key){
                  $tgl = tanggal_indo($key->tgl_penggajian);
                  echo "<option value='$key->tgl_penggajian'>$tgl </option>";
                } ?>
              </select>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row" id="showgaji">
      
    </div>



  </div>
<script src="<?= base_url().'assets/vendors/jquery/dist/jquery.min.js' ?> "></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#selectBulan').change(function(){
      var tgl_penggajian = $('#selectBulan').val();

      var html = '';
      var i;
      $.ajax({
          url:'<?= base_url() ?>admin/laporan/show_datagaji/'+tgl_penggajian,
          type:'POST',
          success:function(data){
            $('#showgaji').html(data);
            //
            // if(data.length > 0 ){
            //   for(i=0; i<data.length; i++)
            //   {
            //     html += '<tr>'+
            //             '<td>'+data[i].tgl_penggajian+'</td>'+
            //             '<td>'+data[i].nip+'</td>'+
            //             '<td>'+data[i].total_lemburan+'</td>'+
            //             '<td>'+data[i].total_potongan+'</td>'+
            //             '<td>'+data[i].total_potongan+'</td>'+
            //             '<tr>';
            //   }
            //   $('#showgaji').html(html);
            // }

          }
      });

    })
  });
</script>
