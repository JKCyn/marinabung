<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


	public function index()
	{

			$data['content']	='home';
			$this->load->view('index',$data);
	}

	public function lihat_data_orang()
	{	
			$data['data']		= $this->db->get('tbl_orang');
			$data['content']	='orang/lihat_data_orang';
			$this->load->view('index',$data);
	}

	public function tambah_data_orang()
	{
			$data['content']	='orang/tambah_data_orang';
			$this->load->view('index',$data);
	}

	public function proses_add_orang(){
		$orang				= $this->input->post('orang');
		$no_hp				= $this->input->post('no_hp');
		$data = array('nama'             => $nama, 
					  'no_hp'        	 => $no_hp
			);
		$this->db->insert('tbl_orang',$data);
		redirect('site/lihat_data_orang');
	}
	public function edit_orang($id_orang)
	{
			$data['data'] 				= $this->db->query("SELECT * FROM tbl_orang where id_orang='$id_orang'");
			$data['content']	='orang/edit_data_orang';
			$this->load->view('index',$data);
	}
	public function proses_edit_orang(){
		$id_orang			= $this->input->post('id_orang');
		$nama				= $this->input->post('nama');
		$no_hp				= $this->input->post('no_hp');

		$data = array('nama'            => $nama,
					  'no_hp'        	=> $no_hp
			);
		$this->db->where('id_orang',$id_orang);
		$this->db->update('tbl_orang',$data);
		redirect('site/lihat_data_orang');
	}
	public function hapus_orang($id_orang)
	{
			$data['data'] 				= $this->db->query("DELETE  FROM tbl_orang where id_orang'$id_orang'");
		redirect('site/lihat_data_orang');
			
	}




	/*KETERANGAN*/

	public function tambah_data_keterangan(){
		$data['content']	='keterangan/tambah_data_keterangan';
		$this->load->view('index',$data);
	} 

	public function proses_add_keterangan(){
		$id_orang				= $this->input->post('id_orang');
		$id_keterangan			= $this->input->post('id_keterangan');
		$jenis					= $this->input->post('jenis');
		$harga					= $this->input->post('harga');
		$dp						= $this->input->post('dp');
		$selesai_dp				= $this->input->post('selesai_dp');

		$data = array('id_orang'       	   => $id_orang, 
					  'jenis'   		   => $jenis,
					  'harga'   		   => $harga,
					  'dp'    			   => $dp,
					  'selesai_dp'         => $selesai_dp
			);
		$this->db->insert('tbl_keterangan',$data);
		redirect('site/lihat_data_keterangan');
	}

	public function lihat_data_keterangan()
	{	
			$data['data']		= $this->db->query("SELECT * FROM tbl_keterangan left join (tbl_orang) on tbl_keterangan.id_orang=tbl_orang.id_orang");
			$data['content']	='keterangan/lihat_data_keterangan';
			$this->load->view('index',$data);
	}

	public function edit_keterangan($id_keterangan)
	{
			$data['data'] 				= $this->db->query("SELECT * FROM tbl_keterangan left join (tbl_orang) on tbl_keterangan.id_orang=tbl_orang.id_orang where tbl_keterangan.id_keterangan='$id_keterangan'");
			$data['content']	='keterangan/edit_data_keterangan';
			$this->load->view('index',$data);
	}

	public function proses_edit_keterangan(){
		$id_keterangan			= $this->input->post('id_keterangan');
		$id_orang				= $this->input->post('id_orang');
		$jenis					= $this->input->post('jenis');
		$harga					= $this->input->post('harga');
		$dp						= $this->input->post('dp');
		$selesai_dp				= $this->input->post('selesai_dp');

		$data = array('id_orang'           => $id_orang, 
					  'jenis'   		   => $jenis,
					  'harga'   		   => $harga,
					  'dp'    			   => $dp,
					  'selesai_dp'         => $selesai_dp
			);
		$this->db->where('id_keterangan',$id_keterangan);
		$this->db->update('tbl_keterangan',$data);
		redirect('site/lihat_data_keterangan');
	}

	public function hapus_keterangan($id_keterangan)
	{
			$data['data'] 				= $this->db->query("DELETE  FROM tbl_keterangan where id_keterangan='$id_keterangan'");
			redirect('site/lihat_data_keterangan');
			
	}



	/*PEMASUKAN*/


	public function tambah_data_pemasukan(){
		$data['content']	='pemasukan/tambah_data_pemasukan';
		$this->load->view('index',$data);
	} 

	public function proses_add_pemasukan(){
		$pemasukan				= $this->input->post('pemasukan');
		$id_keterangan			= $this->input->post('id_keterangan');
		$tanggal				= $this->input->post('tanggal');
		$data = array('pemasukan'    	 => $pemasukan , 
					  'tanggal'        	 => $tanggal
			);
		$this->db->insert('tbl_pemasukan',$data);
		redirect('site/lihat_data_pemasukan');
	}

	public function lihat_data_pemasukan()
	{	
			$data['data']		= $this->db->query("SELECT * FROM tbl_pemasukan left join tbl_keterangan on tbl_pemasukan.id_keterangan=tbl_keterangan.id_keterangan ");
			$data['content']	='pemasukan/lihat_data_pemasukan';
			$this->load->view('index',$data);
	}
	public function edit_pemasukan($id_pemasukan)
	{
			$data['data'] 				= $this->db->query("SELECT * FROM tbl_pemasukan left join tbl_keterangan on tbl_pemasukan.id_keterangan=tbl_keterangan.id_keterangan where tbl_pemasukan.id_pemasukan='$id_pemasukan'");
			$data['content']	='pemasukan/edit_data_pemasukan';
			$this->load->view('index',$data);
	}
	public function proses_edit_pemasukan(){
		$pemasukan					= $this->input->post('pemasukan');
		$id_keterangan				= $this->input->post('id_keterangan');
		$tanggal					= $this->input->post('tanggal');
		$data = array('pemasukan'     => $pemasukan , 
					  'tanggal'        	 => $tanggal
			);
		$this->db->where('id_pemasukan',$id_pemasukan);
		$this->db->update('tbl_pemasukan',$data);
		redirect('site/lihat_data_pemasukan');
	}
	public function hapus_pemasukan($id_pemasukan)
	{
			$data['data'] 				= $this->db->query("DELETE  FROM tbl_pemasukan where id_pemasukan='$id_pemasukan'");
			redirect('site/lihat_data_pemasukan');
			
	}


	/*PENGELUARAN*/


	public function tambah_data_pengeluaran(){
		$data['content']	='pengeluaran/tambah_data_pengeluaran';
		$this->load->view('index',$data);
	} 

	public function proses_add_pengeluaran(){
		$pengeluaran				= $this->input->post('pengeluaran');
		$total						= $this->input->post('total');
		$data = array('pengeluaran'      => $pengeluaran, 
					  'total'        	 => $total
			);
		$this->db->insert('tbl_pengeluaran',$data);
		redirect('site/lihat_data_pengeluaran');
	}

	public function lihat_data_pengeluaran()
	{	
			$data['data']		= $this->db->query("SELECT * FROM tbl_pengeluaran ");
			$data['content']	='pengeluaran/lihat_data_pengeluaran';
			$this->load->view('index',$data);
	}
	public function edit_pengeluaran($id_pengeluaran)
	{
			$data['data']		= $this->db->query("SELECT * FROM tbl_pengeluaran where id_pengeluaran='$id_pengeluaran' ");
			$data['content']	='pengeluaran/edit_data_pengeluaran';
			$this->load->view('index',$data);
	}
	public function proses_edit_pengeluaran(){
		$id_pengeluaran				= $this->input->post('id_pengeluaran');
		$pengeluaran				= $this->input->post('pengeluaran');
		$total						= $this->input->post('total');
		$data = array('pengeluaran'      => $pengeluaran , 
					  'total'        	 => $total
			);
		$this->db->where('id_pengeluaran',$id_pengeluaran);
		$this->db->update('tbl_pengeluaran',$data);
		redirect('site/lihat_data_pengeluaran');
	}
	public function hapus_pengeluaran($id_pengeluaran)
	{
			$data['data'] 				= $this->db->query("DELETE  FROM tbl_pengeluaran where id_pengeluaran='$id_pengeluaran'");
			redirect('site/lihat_data_pengeluaran');
			
	}


	/*DEBIT*/
	public function tambah_data_debit(){
		$data['content']	='debit/tambah_data_debit';
		$this->load->view('index',$data);
	} 

	public function proses_add_debit(){
		$jumlah_keterangan		= $this->input->post('jumlah_keterangan');
		$total_pemasukan		= $this->input->post('total_pemasukan');
		$total_pengeluaran		= $this->input->post('total_pengeluaran');
		$total_bersih           = $total_pemasukan - $total_pengeluaran;
		$tanggal				= $this->input->post('tanggal');
		$data = array('jumlah_keterangant'       => $jumlah_keterangan , 
					  'total_pemasukan'        	 => $total_pemasukan,
					  'total_pengeluaran'        	 => $total_pengeluaran,
					  'total_bersih'        	 => $total_bersih,
					  'tanggal'        	 => $tanggal		
					  	);
		$this->db->insert('tbl_debit',$data);
		redirect('site/lihat_data_debit');
	}

	public function lihat_data_debit()
	{	
			$data['data']		= $this->db->query("SELECT * FROM tbl_debit");
			$data['content']	='debit/lihat_data_debit';
			$this->load->view('index',$data);
	}
	public function edit_debit($id_debit)
	{
			$data['data']		= $this->db->query("SELECT * FROM tbl_debit where id_debit='$id_debit' ");
			$data['content']	='debit/edit_data_debit';
			$this->load->view('index',$data);
	}
	public function proses_edit_debit(){
		$id_debit				= $this->input->post('id_debit');
		$jumlah_keterangan			= $this->input->post('jumlah_keterangan');
		$total_pemasukan		= $this->input->post('total_pemasukan');
		$total_pengeluaran		= $this->input->post('total_pengeluaran');
		$total_bersih           = $total_pemasukan - $total_pengeluaran;
		$tanggal				= $this->input->post('tanggal');
		$data = array('jumlah_keterangan'        => $jumlah_keterangan, 
					  'total_pemasukan'        	 => $total_pemasukan,
					  'total_pengeluaran'        => $total_pengeluaran,
					  'total_bersih'        	 => $total_bersih,
					  'tanggal'        	         => $tanggal		
					  	);
		$this->db->where('id_debit',$id_debit);
		$this->db->update('tbl_debit',$data);
		redirect('site/lihat_data_debit');
	}
	public function hapus_debit($id_debit)
	{
			$data['data'] 				= $this->db->query("DELETE  FROM tbl_debit where id_debit='$id_debit'");
			redirect('site/lihat_data_debit');
			
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */