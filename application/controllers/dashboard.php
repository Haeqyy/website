<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['barang'] = $this -> mtoko -> tampil_data() -> result();
		$this->load->view('templates/head');
		$this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
	}

	public function addCart($id){
		$barang = $this->model_barang->find($id);

		$data = array(
        'id'      => $barang->id_brg,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_brg
	);

		$this->cart->insert($data);
		redirect('dashboard');
	}
	public function detail($id_barang){
		$data['barang'] = $this->modelBarang->detailBarang($id_barang);
		$this->load->view('templates/head');
		$this->load->view('templates/sidebar');
		$this->load->view('DetailBarang',$data);
		$this->load->view('templates/footer');
	}

	public function deleteCart(){
		$this->cart->destroy();
		redirect('dashboard');
	}
	
	public function detailCart() {
		$this->load->view('templates/head');
		$this->load->view('templates/sidebar');
		$this->load->view('cart');
		$this->load->view('templates/footer');
	}
	public function processOrder(){
		$is_processed = $this->modelinvoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/head');
			$this->load->view('templates/sidebar');
			$this->load->view('processOrder');
			$this->load->view('templates/footer');
		} else{
			echo "Maaf, Pesanan Anda Gagal diproses";
		}
		}
	
		public function payment(){
			$this->load->view('templates/head');
			$this->load->view('templates/sidebar');
			$this->load->view('payment');
			$this->load->view('templates/footer');
		}
}