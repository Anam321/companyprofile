<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
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
        $data['body'] = 'pages/private/admin/service/index';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Service';
        $data['method'] = 'index';
        // $data['field'] = $this->models->fetc_where_data('tbl_about', 'id', 1);
        $this->load->view('main', $data);
    }
    public function form()
    {
        $data['body'] = 'pages/private/admin/service/form';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Form Service';
        $data['method'] = 'insert';
        // $data['field'] = $this->models->fetc_where_data('tbl_about', 'id', 1);
        $this->load->view('main', $data);
    }
    public function edit($x)
    {
        $data['body'] = 'pages/private/admin/service/edit';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Form Service';
        $data['method'] = 'update';
        $data['field'] = $this->models->fetc_where_data('tbl_service', 'id', $x);
        $this->load->view('main', $data);
    }

    function dataTables()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $table = 'tbl_service'; //nama tabel dari database
            $column_order = array(null, null, 'images', 'title', null); //field yang ada di table user
            $column_search = array(null, 'images', 'title'); //field yang diizin untuk pencarian 
            $order = array('id' => 'DESC'); // default order 

            $list = $this->models->get_datatables($table, $column_order, $column_search, $order);
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $no++;
                $row = array();
                $row[] = $no;
                $row[] = '<img class="flex-shrink-0" src="' . base_url() . 'assets/public/img/' . $field->images . '" alt="" style="height: 80px;">';
                $row[] = $field->title;


                $row[] = ' <div style="text-align: center;">
                       <a href="' . base_url('app-admin/pages/service/edit/') . '' . $field->id . '"> <button type="button" class="btn btn-warning btn-sm "><i class="fa fa-edit me-2"></i>Edit</button></a>
                        <button onclick="deletes(' . $field->id . ')" type="button" class="btn btn-danger btn-sm "><i class="fa fa-trash me-2"></i>Delete</button></div> ';
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
            $t = htmlspecialchars($this->input->post('title'));
            $c = array(' ');
            $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–');
            $s = str_replace($d, '', $t); // Hilangkan karakter yang telah disebutkan di array $d
            $slug = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua


            $sql = $this->db->query("SELECT slug FROM tbl_service where slug='$slug'");
            $cek_data = $sql->num_rows();

            if ($cek_data > 0) {
                $r = array(
                    'status' => '01',
                    'type' => 'error',
                    'mess' => 'Data Blog already exists, the url must be unique!',
                );
                echo json_encode($r);
            } else {

                $config['upload_path'] = './assets/public/img/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|webp';
                $config['max_size'] = 1020; // 1MB

                $this->load->library('upload', $config);
                $this->upload->do_upload('images');
                $hasil = $this->upload->data();

                $config['source_image'] = 'asset/public/img/' . $hasil['file_name'];
                $config['wm_text'] = app('app_name');
                $config['wm_type'] = 'text';
                $config['wm_font_path'] = './system/fonts/texb.ttf';
                $config['wm_font_size'] = '26';
                $config['wm_font_color'] = 'ffffff';
                $config['wm_vrt_alignment'] = 'middle';
                $config['wm_hor_alignment'] = 'center';
                $config['wm_padding'] = '20';
                $this->load->library('image_lib', $config);
                $this->image_lib->watermark();


                if ($hasil['file_name'] == '') {
                    $data = array(
                        'slug' => strtolower($slug),
                        'title' => htmlspecialchars($this->input->post('title')),
                        'body' => htmlspecialchars($this->input->post('body')),
                        'meta_deskripsi' => htmlspecialchars($this->input->post('meta_deskripsi')),
                        'keyword' => htmlspecialchars($this->input->post('keyword')),
                        'private' => 0,
                    );
                } else {
                    $data = array(
                        'images' => $hasil['file_name'],
                        'slug' => strtolower($slug),
                        'title' => htmlspecialchars($this->input->post('title')),
                        'body' => htmlspecialchars($this->input->post('body')),
                        'meta_deskripsi' => htmlspecialchars($this->input->post('meta_deskripsi')),
                        'keyword' => htmlspecialchars($this->input->post('keyword')),
                        'private' => 0,
                    );
                }
            }
            // print_r($data);
            $response = $this->models->PostData('tbl_service', $data);
            echo json_encode($response);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }



    public function updateData()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $t = htmlspecialchars($this->input->post('title'));
            $c = array(' ');
            $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–');
            $s = str_replace($d, '', $t); // Hilangkan karakter yang telah disebutkan di array $d
            $slug = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
            if (!empty($_FILES["images"]["name"])) {

                $config['upload_path'] = './assets/public/img/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|webp';
                $config['max_size'] = 1020; // 1MB

                $this->load->library('upload', $config);
                $this->upload->do_upload('images');
                $hasil = $this->upload->data();

                $config['source_image'] = 'assets/public/img/' . $hasil['file_name'];
                $config['wm_text'] = app('app_name');
                $config['wm_type'] = 'text';
                $config['wm_font_path'] = './system/fonts/texb.ttf';
                $config['wm_font_size'] = '26';
                $config['wm_font_color'] = 'ffffff';
                $config['wm_vrt_alignment'] = 'middle';
                $config['wm_hor_alignment'] = 'center';
                $config['wm_padding'] = '20';
                $this->load->library('image_lib', $config);
                $this->image_lib->watermark();


                if ($this->input->post('old_images') == true) {
                    $path = './assets/public/img/';
                    $filename = $this->input->post('old_images');
                    if (file_exists($path . $filename)) {
                        unlink($path . $filename);
                    }
                }

                $data = array(
                    'images' => $hasil['file_name'],
                    'slug' => strtolower($slug),
                    'title' => htmlspecialchars($this->input->post('title')),
                    'body' => htmlspecialchars($this->input->post('body')),
                    'meta_deskripsi' => htmlspecialchars($this->input->post('meta_deskripsi')),
                    'keyword' => htmlspecialchars($this->input->post('keyword')),
                    'private' => 0,
                );
            } else {
                $data = array(
                    'slug' => strtolower($slug),
                    'title' => htmlspecialchars($this->input->post('title')),
                    'body' => htmlspecialchars($this->input->post('body')),
                    'meta_deskripsi' => htmlspecialchars($this->input->post('meta_deskripsi')),
                    'keyword' => htmlspecialchars($this->input->post('keyword')),
                    'private' => 0,
                );
            }
            $update = $this->models->update(array('id' => $this->input->post('id')), $data, 'tbl_service');
            echo json_encode($update);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }

    public function delete_data($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $q = $this->db->get_where('tbl_service', ['id' => $id])->row_array();
            $foto = $q['images'];

            // var_dump($foto);

            $path = './assets/public/img/';
            // hapus file
            if (file_exists($path . $foto)) {
                unlink($path . $foto);
            }
            echo $this->models->delete('tbl_service', 'id', $id);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }
}
