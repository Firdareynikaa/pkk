<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    
    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $query = $this->db->where('email', $email)
                           ->where('password', $password)
                           ->get('user');

        if ($this->db->affected_rows() > 0) {

            $data_login = $query->row();

            $data_session = array(
                                'email' => $data_login->email,
                                'password' => $data_login->password,
                                'logged_in'=> TRUE,
                                'id_user' => $data_login->id_user,
                                'id_level' => $data_login->id_level
                            );

        $this->session->set_userdata($data_session);
        return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tambah(){
        $tambah = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'id_level' => $this->input->post('id_level'),
        );
        return $this->db->insert('user', $tambah);
    }
}