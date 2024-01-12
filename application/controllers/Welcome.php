<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_produk');
    }

    public function index() {
        $this->load->view('login');
    }

    public function admin() {
        $this->load->view('login_admin');
    }

    public function regis() {
        $this->load->view('registrasi');
    }

    public function home() {
        $recordPrdk = $this->M_produk->getDataProduk();
        $data = array('data_sepatu' => $recordPrdk);

        $dtSession = $this->session->userdata('username');
        $userData = $this->M_produk->getDataAdmin($dtSession);
        if (empty($dtSession)) {
            redirect(base_url());
        } else {
            $this->load->view('home', $data, ['DATA' => $userData]);
        }
    }
    
    public function halaman_user() {
        $recordPrdk = $this->M_produk->getDataProduk();
        $data = array('data_sepatu' => $recordPrdk);
    
        $dtSession = $this->session->userdata('username');
        $userData = $this->M_produk->getDataUser($dtSession);
    
        if (empty($dtSession)) {
            redirect(base_url());
        } else {
            $this->load->view('halaman_user', $data, ['DATA' => $userData]);
        }
    }
    
    public function forminput() {
        $this->load->view('form_input');
    }

    public function AksiInsert() {
        $kode_produk = $this->input->post('kode_produk');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $base64gambar = $_FILES["gambar"]["tmp_name"];

        $Path = "img/";
        $ImagePath = $Path . $kode_produk . "_logoku.jpg";
        move_uploaded_file($base64gambar, $ImagePath);

        $dataArr = array(
            'kode_produk' => $kode_produk,
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'stok' => $stok,
            'harga' => $harga,
            'gambar' => base_url() . $ImagePath,
        );

        $this->M_produk->InsertDataPrdk($dataArr);

        redirect(base_url('Welcome/home'));
    }

    public function formedit($id) {
        $queryProdukDetail = $this->M_produk->getDataPrdk($id);
        $data = array('data_sepatu' => $queryProdukDetail);
        $this->load->view('form_edit', $data);
    }

    public function AksiEdit() {
        $kode_produk = $this->input->post('kode_produk');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $base64gambar = $_FILES["gambar"]["tmp_name"];

        $Path = "img/";
        $ImagePath = $Path . $kode_produk . "_logoku.jpg";
        move_uploaded_file($base64gambar, $ImagePath);

        $DataUpdate = array(
            'kode_produk' => $kode_produk,
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'stok' => $stok,
            'harga' => $harga,
            'gambar' => base_url() . $ImagePath,
        );

        $this->M_produk->EditDataPrdk($kode_produk, $DataUpdate);
        redirect(base_url('index.php/Welcome/home'));
    }

    public function AksiHapus($nim) {
        $this->M_produk->HapusData($nim);
        redirect(base_url('index.php/Welcome/home'));
    }

    public function add_user() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');

        $arrInsert = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
        );

        $this->M_produk->insertDataLogin($arrInsert);
        $this->session->set_flashdata('msg', '2');
        redirect(base_url('index.php/Welcome/'));
    }

    public function cekLoginUser() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $userData = $this->M_produk->getLoginUser($username, $password);
    
        if ($userData) {
            $sess = array(
                'username' => $userData->username,
            );
            $this->session->set_userdata($sess);
            redirect('Welcome/halaman_user');
        } else {
            $this->session->set_flashdata('msg', 'Username atau password salah!');
            log_message('error', 'Login gagal untuk username: ' . $username);
            redirect('Welcome/index');
        }
    }    

    public function cekLoginAdmin() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $userData = $this->M_produk->getLoginAdmin($username, $password);

    if ($userData) {
        $sess = array(
            'username' => $userData->username,
        );
        $this->session->set_userdata($sess);
        redirect('Welcome/home');
    } else {
        $this->session->set_flashdata('msg', 'Username atau password salah!');
        log_message('error', 'Login gagal untuk username: ' . $username);
        redirect('Welcome/admin');
    }
}

    
    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
