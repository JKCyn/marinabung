<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">EDIT DATA Keterangan</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
					<?php foreach ($data->result() as $key => $row) {
						# code...
					} ?>
						 <form class="form-horizontal" action="site/proses_edit_keterangan" method="POST">
						 	

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nama Orang</label> 
								<div class="col-sm-10"> 
									<select name="id_orang" class="form-control">
											<option value="<?php echo $row->id_orang ?>"><?php echo $row->nama ?></option>

										<?php 
										$data_orang = $this->db->query("SELECT * FROM tbl_orang");
										foreach ($data_orang->result() as $key => $v) {
											?>	
											<option value="<?php echo $v->id_orang ?>"><?php echo $v->nama ?></option>
											<?php	
										} 

										?>
									</select>
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Project</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="project" value="<?php echo $row->nama_project ?>"> 
									<input type="hidden"  class="form-control" name="id_project" value="<?php echo $row->id_project ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Jenis</label> 
								<div class="col-sm-10"> 
									<select name="jenis" class="form-control">

										<option value="hutang">Hutang</option>
										<option value="pendapatan">Pendapatan</option>
										<option value="beban">Beban</option>
									</select>
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Harga</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="harga" value="<?php echo $row->harga ?>"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">DP</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="dp" value="<?php echo $row->dp ?>"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Selesai DP</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="selesai_dp" value="<?php echo $row->selesai_dp ?>"> 
								</div> 
							</div>

										<option value="1">Selesai</option>
										<option value="0">Belum</option>
									</select>
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">UPDATE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
							<a href="site/lihat_data_keterangan" class="btn btn-warning">KEMBALI</a>
							
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		