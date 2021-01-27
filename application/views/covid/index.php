<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pasien Covid-19 Kabupaten Kudus</h1>
                    <p class="mb-4">Data Covid-19 di Kabupaten Kudus dan prediksi data pasien covid-19 akan terus di update siring perkembangan waktu </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered wy-table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Minggu Ke-</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Jumlah Pasien</th>
                                         
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Minggu Ke-</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Jumlah Pasien</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($data->result_array() as $tampil):?>
                                        <tr>
                                            <td><?= $tampil['minggu'];?></td>
                                            <td><?= $tampil['bulan'];?></td>
                                            <td><?= $tampil['tahun'];?></td>
                                            <td><?= $tampil['jumlah_pasien'];?></td>
                                         
                                        </tr>
                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
