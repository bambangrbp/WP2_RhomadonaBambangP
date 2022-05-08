<?php
defined('BASEPATH')or exit('No direct script access allowed');

	class sekolah extends CI_Controller
	{
		public function _construct()
		{
			perent::_construct();
			$this->load->model('sekolah_model');
		}
		
		public function index()
		{
			// $this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama Siswa',
				'required',[
					'required'=>'Nama Siswa harus di isi']);

			$this->form_validation->set_rules('nis','NIS',
				'required',[
					'required'=>'NIS harus di isi']);

			if ($this->form_validation->run()==false)
			{
			$data['agama']=['Islam','Kristen','Katolik','Budha','Hindu','Protestan','Khonghucu'];
			$this->load->view('input_sekolah', $data);
			} else{
				$data=[
					'nama'=>$this->input->post('nama'),
					'nis'=>$this->input->post('nis'),
					'kelas'=>$this->input->post('kelas'),
					'tgl'=>$this->input->post('tgl'),
					'tmpt'=>$this->input->post('tmpt'),
					'alamat'=>$this->input->post('alamat'),
					'jk'=>$this->input->post('jk'),
					'agama'=>$this->input->post('agama'),
					//'harga'=>$this->Review_model->proses($this->input->post('merk'))
				];
				$this->load->view('output_sekolah',$data);
			}
		}
	}