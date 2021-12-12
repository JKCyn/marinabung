 <!-- Main content -->
	 <div class="main-content">
			 <h1 class="page-title"><center>DATA DEBIT</center> </h1>
			 <hr> 
			<!-- Breadcrumb -->
			<!-- <ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
				<li><a href="basic-tables.html">Tables</a></li> 
				<li class="active"><strong>Data Tables</strong></li> 
			</ol> --><center>
			<a href="site/tambah_data_debit" class="btn btn-success  btn-rounded">TAMBAH DATA</a>
			<a href="site/p_debit/p" class="btn btn-warning  btn-rounded">PRINT PDF</a>
			<a href="site/p_debit/e" class="btn btn-default  btn-rounded">PRINT EXCEL</a>
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
											<th>Pemasukan</th>
											<th>Pengeluaran</th>
											<th>Total Bersih</th>
											<th>Tanggal</th>
											<th>Pilihan</th>
										</tr>
									</thead>
									<?php $no=1; foreach ($data->result() as $key => $value) {
										?>
									<tbody>
										<tr class="gradeX">
											
											<td><?php echo $no++  ?></td>
											<td><?php echo $value->jumlah_orang ?></td>
											<td><?php echo $value->total_pemasukan ?></td>		
											<td><?php echo $value->total_pengeluaran?></td>		
											<td><?php echo $value->total_bersih ?></td>		
											<td><?php echo $value->tanggal ?></td>		

											<td>
												<a href="site/edit_debit/<?php echo $value->id_debit ?>" class='btn btn-success  btn-rounded'>EDIT</a>
												<a href="site/hapus_debit/<?php echo $value->id_debit ?>" class='btn btn-danger  btn-rounded'>HAPUS</a>
											</td>
										</tr>
										
									</tbody>

									<?php
									} 
									?>

									<tfoot>
										<th>No</th>
											<th>Nama</th>
											<th>Pemasukan</th>
											<th>Pengeluaran</th>
											<th>Total Bersih</th>
											<th>Tanggal</th>
											<th>Pilihan</th>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			