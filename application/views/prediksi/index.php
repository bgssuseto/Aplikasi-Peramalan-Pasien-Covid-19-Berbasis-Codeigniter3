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
                                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
											<th>No</th>
                                            <th>Timeline</th>
                                            <th>Jumlah Pasien</th>
                                            <th>X</th>
                                            <th>Y</th>
                                            <th>X*X</th>
                                            <th>X*Y</th>
                                         
                                        </tr>
									</thead>
									
                                    <tbody>
										
										<?php
										 $x=-1; 
										$no=0;
										 $tot_y = 0;
										 $tot_x= 0;
										 $totxy=0;
										 $totxx=0;
										 
										foreach($data->result_array() as $tampil): 
											$x++;
											$no++;
											$y = $tampil['jumlah_pasien'];
											$xpang = $x*$x; 
											$xy =$x*$y;
											$xx=$x*$x;
											$tot_x +=$x;
											$tot_y += $tampil['jumlah_pasien'];
											$totxy +=$xy;
											$totxx +=$xx;
											$ybar = $tot_y/$no;
											$xbar = $tot_x/$no;
											
																					

										?>
                                        <tr>
											<td><?=$no;?></td>
                                            <td>Minggu Ke- <?= $tampil['minggu'];?> Bulan <?= $tampil['bulan'];?> Tahun <?= $tampil['tahun'];?></td>
											
											<td><?=  $tampil['jumlah_pasien'];?></td>
											
                                            <td><?= $x;?></td>
											<td><?= $tampil['jumlah_pasien'];?></td>
											<td><?= $xpang;?></td>
											<td><?= $xy;?></td>
											                                
										</tr>
										
                                        
											<?php endforeach; ?>
											<tr>
												<td colspan="2">&#931;</td>
												<td><?= $tot_y; ?></td>
												<td><?= $tot_x; ?></td>
												<td><?= $tot_y;?></td>
												<td><?= $totxx;?></td>
												<td><?= $totxy;?></td>
												
											</tr>

											<tr>
												<td colspan="3">Rata-Rata </td>
												<td><?=$xbar;?></td>
												<td><?=$ybar;?></td>
												<td></td>
												<td></td>
												
											</tr>
										</tfoot>
                                    
											
									</tbody>

									
								</table>
								<label for="">Rumus Regresi Linear</label><br>
									<?php


									//Regresi Linear
									$b1=($totxy- (($tot_x * $tot_y)/$no)) / ($totxx-(($tot_x*$tot_x)/$no));
								
									$b0=($tot_y/$no)-$b1*($tot_x/$no);

									if($b1 > 0){
										$minggu = $_POST['minggu'];
										$x=$x+$minggu;
										$yx=$b0+$b1*$x;
										echo "Y= $b0+$b1*$x<br>";
										echo"
										Prediksi Pasien Untuk Minggu Ke- "
										.$minggu; echo " Adalah ".$yx; echo" Orang";
									}

									
									
									?>
							
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
