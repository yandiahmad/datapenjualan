<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model','barang');
        
    }

    public function index()
    {

          $data['title'] = 'Barang';
          $data['barang'] = $this->barang->getAllBarang();
    
          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('barang/index', $data);
          $this->load->view('templates/footer');
      }

      public function tambah()
      {
          $data['title'] = 'Tambah Barang';
          $data['barang'] = $this->barang->getAllBarang();

        $this->form_validation->set_rules('nama_barang','Nama Barang','required');
        $this->form_validation->set_rules('stok','Stok','required');
        $this->form_validation->set_rules('jumlah_terjual','Jumlah Terjual','required');
        $this->form_validation->set_rules('tanggal','Tanggal Transaksi','required');
        $this->form_validation->set_rules('jenis_barang','Jenis Barang','required');
         

          if($this->form_validation->run() == false) {
              $this->load->view('templates/header', $data);
              $this->load->view('templates/sidebar', $data);
              $this->load->view('templates/topbar', $data);
              $this->load->view('barang/tambah', $data);
              $this->load->view('templates/footer');

          } else {

            if ($barang = '') {
            } else {

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('barang')) {
                    redirect('barang');
                } else {

                    $data = [
                        "nama_barang" => $this->input->post('nama_barang', true),
                        "stok" => $this->input->post('stok', true),
                        "jumlah_terjual" => $this->input->post('jumlah_terjual', true),
                        "tanggal" => $this->input->post('tanggal', true),                        
                        "jenis_barang" => $this->input->post('jenis_barang', true),
                    ];
                }
                $this->barang->tambahBarang($data, 'barang');
                $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                <i class="fas fa-check-circle"></i>
                Barang Sukses Ditambahkan!..
                </div>
                ');
                redirect('barang');

          }
      }
    }

    public function view($id)
    {
        $data['title'] = 'View';
        $data['barang'] = $this->barang->getBarangById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/view', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Barang';
        $data['barang'] = $this->barang->getBarangById($id);

        $this->form_validation->set_rules('nama_barang','Nama Barang','required');
        $this->form_validation->set_rules('stok','Stok','required');
        $this->form_validation->set_rules('jumlah_terjual','Jumlah Terjual','required');
        $this->form_validation->set_rules('tanggal','Tanggal Transaksi','required');
        $this->form_validation->set_rules('jenis_barang','Jenis Barang','required');
        
        if($this->form_validation->run()== false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->barang->editBarang($id);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success mb-1" role="alert">
            <i class="fas fa-check-circle"></i>
            Barang Sukses di Update!
            </div>
            ');
            redirect('barang');


        }

    }

    public function delete($id)
    {
        $path = './assets/img/barang/';
        if($foto != 'default.jpeg') {
            unlink(FCPATH.$path.$foto);
        }
        $id = [
            'id' => $id
        ];
        $this->barang->deleteData($id);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success mb-1" role="alert">
        <i class="fas fa-check-circle"></i>
        Barang Sukses di Hapus!
        </div>
        ');
    redirect('barang');
    }
}
