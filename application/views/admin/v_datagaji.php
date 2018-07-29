  <div class="right_col" role="main">

    <div class="">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data Gaji  <small>Float left</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Menunggu ACC</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Approved</a>
                        </li>

                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div class="col-md-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Tanggal penggajian</th>
                                  <th>NIP</th>
                                  <th>Total Lemburan</th>
                                  <th>Total Potongan</th>
                                  <th>Total Gaji</th>
                                  <th>status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($data_gaji_menunggu->result() as $key):
                                  if($key->status_penggajian == "proses" )
                                  {
                                    $status = 'Menunggu ACC ';
                                  }else{
                                    $status = '';
                                  }
                                  ?>
                                  <tr>
                                    <td><?= tanggal_indo($key->tgl_penggajian) ?></td>
                                    <td><?= $key->nip ?> </td>
                                    <td><?= number_format($key->total_lemburan)  ?></td>
                                    <td><?= number_format($key->total_potongan) ?></td>
                                    <td><?= number_format($key->total_gaji) ?></td>
                                    <td><?= $status; ?></td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                          <div class="col-md-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Tanggal penggajian</th>
                                  <th>NIP</th>
                                  <th>Total Lemburan</th>
                                  <th>Total Potongan</th>
                                  <th>Total Gaji</th>
                                  <th>status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $sum_total = 0;
                                  foreach($data_gaji_approved->result() as $key):
                                  $sum_total += str_replace(",","", $key->total_gaji);
                                  if($key->status_penggajian == "konfirmasi" )
                                  {
                                    $status = 'Berhasil di konfirmasi';
                                  }else{
                                    $status = '';
                                  }
                                  ?>
                                  <tr>
                                    <td><?= tanggal_indo($key->tgl_penggajian) ?></td>
                                    <td><?= $key->nip ?> </td>
                                    <td><?= number_format($key->total_lemburan)  ?></td>
                                    <td><?= number_format($key->total_potongan) ?></td>
                                    <td><?= number_format($key->total_gaji) ?></td>
                                    <td><?= $status; ?></td>
                                  </tr>
                                <?php endforeach; ?>
                                <?php echo '<h4>Total : '. number_format($sum_total).'</h4>'; ?>
                              </tbody>
                            </table>
                          </div>



                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>


  </div>
