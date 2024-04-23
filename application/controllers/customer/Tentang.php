<?php

	class Tentang extends CI_Controller{
		public function index(){

			$data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type=tp.kode_type")->result();

			$data['rental'] = $this->db->query("SELECT nama_rental FROM customer WHERE nama_rental != ''")->result();

			$data['type'] = $this->db->query("SELECT * FROM type")->result();
			$data['total_mobil'] = $this->db->query("SELECT * FROM mobil WHERE status = '1'")->num_rows()-1;
			$data['total_customer'] = $this->db->query("SELECT * FROM customer WHERE role_id = '2'")->num_rows()-1;
			$data['total_rental'] = $this->db->query("SELECT * FROM customer WHERE role_id = '3'")->num_rows()-1;

			$this->load->view('templates_customer/header');
			$this->load->view('customer/tentang', $data);
			$this->load->view('templates_customer/footer');
		}

		public function kirim_email() {
			// Ambil data dari formulir
			$email = $this->input->post('email');
			$deskripsi = $this->input->post('deskripsi');
	
			// Konfigurasi email
			$config['protocol'] = 'mail'; 
			$config['mailpath'] = '/usr/sbin/sendmail'; 
			$config['smtp_host'] = '';
			$config['mailtype'] = 'text';
	
			// Load library email
			$this->load->library('email');
			$this->email->initialize($config);
	
			// Set pengirim, penerima, subjek, dan pesan email
			$this->email->from($email);
			$this->email->to('email@gmail.com');
			$this->email->subject('Pesan dari Formulir Kontak Nusa Rent Car');
			$this->email->message("Deskripsi: $deskripsi");
			$this->email->set_newline("\r\n");

	
			// Kirim email
			if ($this->email->send()) {
				echo "Pesan Anda telah berhasil dikirim.";
			} else {
				show_error($this->email->print_debugger());
			}
		}
	}
?>
