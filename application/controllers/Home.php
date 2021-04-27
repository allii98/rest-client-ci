<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data = [
            'tittle' => 'Dashboard Rest Server',
            'isi' => $this->M_data->get_data()
        ];
        $this->template->load('template', 'home/v_home', $data);
    }

    public function tambah()
    {
        $data = [
            'tittle' => 'Tambah Data',
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('dept', 'Dept', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'karyawan/v_tambah', $data);
        } else {
            $karyawan = array(
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'dept' => $this->input->post('dept'),
                'email' => $this->input->post('email')
            );
            $this->M_data->insert($karyawan);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Home');
        }
    }

    public function edit($id = null)
    {
        $data = [
            'tittle' => 'Edit Data',
            'isi' => $this->M_data->get_id($id)
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('dept', 'Dept', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'karyawan/v_edit', $data);
        } else {

            $karyawan = array(
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'dept' => $this->input->post('dept'),
                'email' => $this->input->post('email')
            );
            $this->M_data->update($karyawan);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Home');
        }
    }

    public function delete($id)
    {
        $data = array('id' => $id);
        $this->M_data->delete($data);
        $this->session->set_flashdata("flash", "Berhasil Hapus");
        redirect(base_url('Home'));
    }

    public function detail($id)
    {
        $data['tittle'] = 'Detail Data Karyawan';
        $data['isi'] = $this->M_data->get_id($id);
        $this->template->load('template', 'karyawan/v_detail', $data);
    }
}

/* End of file Home.php */
