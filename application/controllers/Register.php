<?php 

class Register extends CI_Controller {

    public function index() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth_header');
            $this->load->view('register_form');
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $no_telp = $this->input->post('no_telp');
            $password = md5($this->input->post('password'));
            $role_id = '2';

            // Mengelola unggah foto
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff|webp';
            $config['max_size'] = 2048; // Ukuran maksimum 2MB

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_identitas')) {
                // Jika unggah foto gagal, tampilkan pesan error dan kembali ke halaman pendaftaran
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('register');
            } else {
                $data_upload = $this->upload->data();
                $foto_identitas = $data_upload['file_name'];

                $data = array(
                    'nama' => $nama,
                    'username' => $username,
                    'alamat' => $alamat,
                    'gender' => $gender,
                    'no_telp' => $no_telp,
                    'foto_identitas' => $foto_identitas,
                    'password' => $password,
                    'role_id' => $role_id
                );

                // Memasukkan data ke dalam database
                $this->rental_model->insert_data($data, 'customer');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Berhasil Register, Silakan Login!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
                redirect('auth/login');
            }
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telepon', 'required|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
}

?>
