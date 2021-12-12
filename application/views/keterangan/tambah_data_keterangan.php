<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">TAMBAH DATA KETERANGAN</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal" action="site/proses_add_keterangan" method="POST">
						 	

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Data Nama Orang</label> 
								<div class="col-sm-10"> 
									<select name="id_orang" class="form-control">
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
								<label class="col-sm-2 control-label">Deskripsi</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="deskripsi"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Jenis</label> 
								<div class="col-sm-10"> 
									<select name="jenis" class="form-control">
										<option value="hutang">Hutang</option>
										<option value="Pendapatan">Pendapatan</option>
										<option value="Beban">Beban</option>
									</select>
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Harga</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="harga"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">DP</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="dp"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Selesai DP</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="selesai_dp"> 
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
		