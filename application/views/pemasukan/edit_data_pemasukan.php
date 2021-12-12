<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">EDIT DATA PEMASUKAN</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal" action="site/proses_edit_pemasukan" method="POST">
						 	<?php foreach ($data->result() as $key => $row) {
						 		# code...
						 	} ?>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Keterangan</label> 
								<div class="col-sm-10"> 
									<select name="id_keterangan" class="form-control">
											<option value="<?php echo $row->id_keterangan ?>"><?php echo $row->nama_keterangan ?></option>

										<?php 
										$data_orang = $this->db->query("SELECT * FROM tbl_keterangan");
										foreach ($data_orang->result() as $key => $v) {
											?>	
											<option value="<?php echo $v->id_keterangan ?>"><?php echo $v->nama_keterangan ?></option>
											<?php	
										} 

										?>
									</select>
								</div> 
							</div>

							
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Tanggal</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="tanggal" value="<?php echo $row->Tanggal ?>"> 
									<input type="hidden"  class="form-control" name="id_pemasukan" value="<?php echo $row->id_pemasukan ?>"> 
								</div> 
							</div>
							

						
							
							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">UPDATE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
							<a href="site/lihat_data_pemasukan" class="btn btn-warning">KEMBALI</a>
							
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		