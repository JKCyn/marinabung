 <!-- Main content -->
	 <div class="main-content">
			 <h1 class="page-title"><center>DATA KETERANGAN</center> </h1>
			 <hr> 
			<!-- Breadcrumb -->
			<!-- <ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
				<li><a href="basic-tables.html">Tables</a></li> 
				<li class="active"><strong>Data Tables</strong></li> 
			</ol> --><center>
			<a href="site/tambah_data_keterangan" class="btn btn-success">TAMBAH DATA</a>
			<a href="site/p_keterangan/p" class="btn btn-warning">PRINT PDF</a>
			<a href="site/p_keterangan/e" class="btn btn-default">PRINT EXCEL</a>
			<br>
			</center>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<!-- <div class="panel-heading clearfix">
							<h4 class="panel-title">Basic Data Tables with responsive Plugin</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div> -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover dataTables-example" >
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Deskripsi</th>
											<th>DP</th>
											<th>Harga</th>
											<th>Status</th>
											<th>Pilihan</th>
										</tr>
									</thead>
									<?php $no=1; foreach ($data->result() as $key => $value) {
										?>
									<tbody>
										<tr class="gradeX">
											<td><?php echo $no++ ?></td>
											<td><?php echo $value->nama ?></td>
											<td><?php echo $value->deskripsi ?></td>
											<td>Rp. <?php echo number_format($value->dp,2) ?></td>
											<td>Rp. <?php echo number_format($value->harga,2) ?></td>
											<td>
												<?php 

													if($value->status==0){
														?>
														<a href="" class="btn btn-danger">BELUM SIAP</a>
														<?php
													}else{
														?>
														<a href="" class="btn btn-success">SELESAI</a>

														<?php
													}

												 ?>
											</td>
											<td>
												<a href="site/detail_keterangan/<?php echo $value->id_keterangan ?>" class='btn btn-warning'>DETAIL</a>
												<a href="site/edit_keterangan/<?php echo $value->id_keterangan ?>" class='btn btn-success'>EDIT</a>
												<a href="site/hapus_keterangan/<?php echo $value->id_keterangan ?>" class='btn btn-danger'>HAPUS</a>
											</td>
										</tr>
										
									</tbody>

									<?php
									} 
									?>

									<tfoot>
										
											<th>No</th>
											<th>Nama</th>
											<th>Deskripsi</th>
											<th>No Hp</th>
											<th>Status</th>
											<th>Pilihan</th>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			