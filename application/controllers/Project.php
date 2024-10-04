<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ajax_m', 'models');
        is_logged_in();
    }
    function static()
    {
        $data['header'] = 'pages/private/admin/header';
        $data['nav'] = 'pages/private/admin/nav';
        $data['footer'] = 'pages/private/admin/footer';
        return $data;
    }
    public function index()
    {
        $data['body'] = 'pages/private/admin/project/index';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Project';
        $data['method'] = 'index';
        // $data['field'] = $this->models->fetc_where_data('tbl_about', 'id', 1);
        $this->load->view('main', $data);
    }
    public function form()
    {
        $data['body'] = 'pages/private/admin/project/form';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Form Projek';
        $data['method'] = 'insert';
        // $data['field'] = $this->models->fetc_where_data('tbl_about', 'id', 1);
        $this->load->view('main', $data);
    }
    public function edit($x)
    {
        $data['body'] = 'pages/private/admin/project/edit';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Edit Projek';
        $data['method'] = 'update';
        $data['field'] = $this->models->fetc_where_data('ref_projek', 'id_projek', $x);
        $this->load->view('main', $data);
    }

    public function confirm($x)
    {
        $data['body'] = 'pages/private/admin/project/confirm';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Edit Projek';
        $data['method'] = 'update';


        $prj = $this->models->fetch_data();
        foreach ($prj as $field) {
            $query = $this->models->get_anggaran($field->id_projek);
            $anggaran = $query;
        }
        $data['anggaran'] = $anggaran;
        $data['projek'] = $this->db->get_where('ref_projek', ['id_projek' => $x])->row_array();
        $data['uraian'] = $this->models->get_uraian($x);
        $data['rab'] = $this->models->get_uraian_rab($x);


        $this->load->view('main', $data);
    }

    function dataTables()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $table = 'ref_projek'; //nama tabel dari database
            $column_order = array(null, null, 'nama_projek', 'nama_client', 'volume', null); //field yang ada di table user
            $column_search = array(null, 'nama_projek', 'nama_client', 'volume'); //field yang diizin untuk pencarian 
            $order = array('id_projek' => 'DESC'); // default order 

            $list = $this->models->get_datatables($table, $column_order, $column_search, $order);
            $data = array();
            $no = 1;
            foreach ($list as $field) {

                $row = array();
                $anggaran = $this->models->get_anggaran($field->id_projek);
                $awal  = new DateTime($field->tgl_mulai);
                $akhir = new DateTime($field->tgl_akhir);
                $diff  = date_diff($awal, $akhir);

                $timeline = $diff->format('%a hari');
                $row = array();
                $row[] = $no++;
                $row[] = $field->nama_projek;
                $row[] = $field->nama_client;
                $row[] = $field->alamat;
                $row[] = $field->volume;
                $row[] = 'Rp. ' . number_format($anggaran) . '';
                $row[] = $timeline;
                $row[] = date_indo($field->tgl_mulai);
                $row[] = date_indo($field->tgl_akhir);
                if ($field->status == 1) {
                    $badge = '<span class="badge bg-warning text-dark">Sedang Di kerjakan</span>';
                } else {
                    $badge = '<span class="badge bg-success text-dark">Selesai</span>';
                }
                $row[] = $badge;

                $row[] = ' <a class="btn btn-secondary btn-sm mb-1" href="' . base_url('admin/project/rab/') . '' . $field->id_projek . '"><i class="fa fa-file me-2"></i>RAB</a>            
                        <div class="btn-group"><button type="button" class="btn btn-warning btn-sm dropdown-toggle mb-1"  data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-edit me-2"></i>Edit</button> 
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="' . base_url('app-admin/project/edit/') . '' . $field->id_projek . '">Edit Data</a></li>
                                <li><a class="dropdown-item" href="' . base_url('app-admin/project/confirm/') . '' . $field->id_projek . '">Konfirmasi Status</a></li>
                                 
                            </ul>
                        </div>
                        <button onclick="deletes(' . $field->id_projek . ')" type="button" class="btn btn-danger btn-sm "><i class="fa fa-trash me-2"></i>Delete</button>';
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->models->count_all($table),
                "recordsFiltered" => $this->models->count_filtered($table, $column_order, $column_search, $order),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }




    public function insertData()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'nama_projek' => $this->input->post('nama_projek'),
                'nama_client' => $this->input->post('nama_client'),
                'email' => $this->input->post('email'),
                'nohp' => $this->input->post('nohp'),
                // 'id_kategori' => $this->input->post('kategori'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_akhir' => $this->input->post('tgl_akhir'),
                'alamat' => $this->input->post('alamat'),
                'keterangan' => $this->input->post('keterangan'),
                'volume' => $this->input->post('volume'),
                'status' => 1,
            );
            $response = $this->models->PostData('ref_projek', $data);
            echo json_encode($response);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }



    public function updateData()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'nama_projek' => $this->input->post('nama_projek'),
                'nama_client' => $this->input->post('nama_client'),
                'email' => $this->input->post('email'),
                'nohp' => $this->input->post('nohp'),
                // 'id_kategori' => $this->input->post('kategori'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_akhir' => $this->input->post('tgl_akhir'),
                'alamat' => $this->input->post('alamat'),
                'keterangan' => $this->input->post('keterangan'),
                'volume' => $this->input->post('volume'),

            );
            $update = $this->models->update(array('id_projek' => $this->input->post('id')), $data, 'ref_projek');
            echo json_encode($update);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }

    public function delete_data($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            echo $this->models->delete('ref_projek', 'id_projek', $id);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }
}
