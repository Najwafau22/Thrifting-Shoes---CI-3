<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

    public function getDataProduk() {
        $this->db->select('*');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataPrdk($data) {
        $this->db->insert('produk', $data);
    }

    public function EditDataPrdk($id, $data) {
        $this->db->where('kode_produk', $id);
        $this->db->update('produk', $data);
    }

    public function getDataPrdk($id) {
        $this->db->where('kode_produk', $id);
        $query = $this->db->get('produk');
        return $query->row();
    }

    public function HapusData($id) {
        $this->db->where('kode_produk', $id);
        $this->db->delete('produk');
    }

    public function metode_penyimpanan($kode_produk, $nama, $deskripsi, $stok, $harga, $gambar) {
        $data = array(
            'kode_produk' => $kode_produk,
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'stok' => $stok,
            'harga' => $harga,
            'gambar' => $gambar
        );

        $this->db->insert('produk', $data);
    }

    // LOGIN REGIS

    public function insertDataLogin($data) {
        $this->db->insert('tb_login','tb_admin', $data);
    }

    public function getDataUser($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_login');
        return $query->row();
    }
    public function getDataAdmin($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_admin');
        return $query->row();
    }

    public function getLoginUser($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password); 
        $query = $this->db->get('tb_login');
        $user = $query->row();
        if (!empty($user)) {
            return $user;
        } else {
            return null;
        }
    }


	public function getLoginAdmin($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password); 
        $query = $this->db->get('tb_admin');
        $user = $query->row();
        if (!empty($user)) {
            return $user;
        } else {
            return null;
        }
    }

// M_produk model
// public function getLoginAdmin($username, $password) {
//     $this->db->where('username', $username);
//     $query = $this->db->get('tb_admin');
//     $user = $query->row();

//     if (!empty($user) && password_verify($password, $user->password)) {
//         return $user;
//     } else {
//         return null;
//     }
// }
//     public function admin($username, $password) {
//     $this->db->where('username', $username);
//     $this->db->where('password', $password);
//     $query = $this->db->get('tb_admin');
//     $user = $query->row();

//     return $user;
// }


}
