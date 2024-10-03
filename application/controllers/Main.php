<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_m', 'models');
    }
    function static()
    {
        $data['header'] = 'pages/public/builder/header';
        $data['nav'] = 'pages/public/builder/nav';
        $data['footer'] = 'pages/public/builder/footer';
        return $data;
    }
    public function index()
    {
        $data['body'] = 'pages/public/builder/index';
        $data['static'] = $this->static();
        $data['seo_title'] = app('title');
        $data['seo_deskripsi'] = app('deskripsi');
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';


        $data['meta_service'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'SERVICE');
        $data['meta_patner'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'PATNER');
        $data['meta_fax'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'FAX');
        $data['meta_blog'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');


        $data['slider'] = $this->models->fetc_all_data('tbl_slider');
        $data['feature'] = $this->models->fetc_all_data('tbl_feature');
        $data['about'] = $this->models->fetc_where_data('tbl_about', 'id', 1);
        $data['service'] = $this->models->fetc_all_data_where('tbl_service', 'private', 0);
        $data['patner'] = $this->models->fetc_all_data('tbl_patner');
        $data['faxLeft'] = $this->models->fetc_all_data_where('tbl_fax', 'position', 'LEFT');
        $data['faxRight'] = $this->models->fetc_all_data_where('tbl_fax', 'position', 'RIGHT');
        $data['testimoni'] = $this->models->fetc_all_data('tbl_testimoni');
        $data['blog'] = $this->models->fetc_where_data_Where_limit('tbl_blog', 'private', 0, 6);
        $this->load->view('main', $data);
    }

    public function about()
    {
        $blog_title = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');
        $data['body'] = 'pages/public/builder/component/about';
        $data['static'] = $this->static();
        $data['seo_title'] = $blog_title['meta_title'];
        $data['seo_deskripsi'] = app('deskripsi');
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';

        $data['meta_blog'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');

        $data['breadcump_1'] = $this->uri->segment(1);

        $data['about'] = $this->models->fetc_where_data('tbl_about', 'id', 1);

        $this->load->view('main', $data);
    }
    public function terms()
    {
        $blog_title = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'TERMS');
        $data['body'] = 'pages/public/builder/component/terms';
        $data['static'] = $this->static();
        $data['seo_title'] = $blog_title['meta_title'];
        $data['seo_deskripsi'] = app('deskripsi');
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';

        $data['meta_blog'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');

        $data['breadcump_1'] = $this->uri->segment(1);

        $data['terms'] = $this->models->fetc_where_data('set_terms', 'id', 1);

        $this->load->view('main', $data);
    }
    public function privacy()
    {
        $blog_title = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'PRIVACY');
        $data['body'] = 'pages/public/builder/component/privacy';
        $data['static'] = $this->static();
        $data['seo_title'] = $blog_title['meta_title'];
        $data['seo_deskripsi'] = app('deskripsi');
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';

        $data['meta_blog'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');

        $data['breadcump_1'] = $this->uri->segment(1);

        $data['field'] = $this->models->fetc_where_data('set_privacy', 'id', 1);

        $this->load->view('main', $data);
    }
    public function service()
    {
        $service_title = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'SERVICE');
        $data['body'] = 'pages/public/builder/component/service';
        $data['static'] = $this->static();
        $data['seo_title'] = $service_title['meta_title'];
        $data['seo_deskripsi'] = $service_title['meta_deskripsi'];
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';

        $data['meta_service'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'SERVICE');
        $data['breadcump_1'] = $this->uri->segment(1);

        $data['service'] = $this->models->fetc_all_data_where('tbl_service', 'private', 0);

        $this->load->view('main', $data);
    }

    public function portfolio()
    {
        $this->load->library('pagination');
        $meta_portfolio =  $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'PORTFOLIO');


        $data['body'] = 'pages/public/builder/component/portfolio';
        $data['static'] = $this->static();
        $data['seo_title'] = $meta_portfolio['meta_title'];
        $data['seo_deskripsi'] = $meta_portfolio['meta_deskripsi'];
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';

        $data['meta_portfolio'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'PORTFOLIO');
        $data['breadcump_1'] = $this->uri->segment(1);


        // CONFIG PAGINTION

        $config['base_url'] = base_url('main/portfolio');
        $config['total_rows'] = $this->models->get_CountLimit('pages_portfolio');
        $config['per_page'] = 12;
        $config['num_links'] = 5;

        // var_dump($config['total_rows']); 
        // die;

        // STAYLIING PAGINATION

        $config['full_tag_open'] = '<nav class="justify-content-center d-flex"><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] = 'first';
        $config['first_tag_open'] = ' <li class="page-item">';
        $config['first_tag_close'] = ' </li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = ' <li class="page-item">';
        $config['last_tag_close'] = ' </li>';


        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = ' <li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = ' <li class="page-item active"><a href="#" class="page-link" aria-label="Previous">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = ' <li class="page-item">';
        $config['num_tag_close'] = ' </li>';

        $config['attributes'] = array('class' => 'page-link');

        // INISIALISASI
        $this->pagination->initialize($config);
        $data1['start'] = $this->uri->segment('3');


        $data['portfolio_data'] = $this->models->get_dataLimit('pages_portfolio', $config['per_page'], $data1['start']);
        $data['paging'] = $this->pagination->create_links();

        $this->load->view('main', $data);
    }

    public function blog()
    {
        $this->load->library('pagination');
        $meta_blog =  $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');


        $data['body'] = 'pages/public/builder/component/blog';
        $data['static'] = $this->static();
        $data['seo_title'] = $meta_blog['meta_title'];
        $data['seo_deskripsi'] = $meta_blog['meta_deskripsi'];
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';

        $data['meta_blog'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');
        $data['breadcump_1'] = $this->uri->segment(1);

        // CONFIG PAGINTION

        $config['base_url'] = base_url('main/blog');
        $config['total_rows'] = $this->models->get_CountLimit('tbl_blog');
        $config['per_page'] = 12;
        $config['num_links'] = 5;

        // var_dump($config['total_rows']); 
        // die;

        // STAYLIING PAGINATION

        $config['full_tag_open'] = '<nav class="justify-content-center d-flex"><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] = 'first';
        $config['first_tag_open'] = ' <li class="page-item">';
        $config['first_tag_close'] = ' </li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = ' <li class="page-item">';
        $config['last_tag_close'] = ' </li>';


        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = ' <li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = ' <li class="page-item active"><a href="#" class="page-link" aria-label="Previous">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = ' <li class="page-item">';
        $config['num_tag_close'] = ' </li>';

        $config['attributes'] = array('class' => 'page-link');

        // INISIALISASI
        $this->pagination->initialize($config);
        $data1['start'] = $this->uri->segment('3');


        $data['blog'] = $this->models->get_dataLimit('tbl_blog', $config['per_page'], $data1['start']);
        $data['paging'] = $this->pagination->create_links();

        $this->load->view('main', $data);
    }

    public function contact()
    {
        $blog_title = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'CONTACT');
        $data['body'] = 'pages/public/builder/component/contact';
        $data['static'] = $this->static();
        $data['seo_title'] = $blog_title['meta_title'];
        $data['seo_deskripsi'] = app('deskripsi');
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';

        $data['meta_contact'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'CONTACT');

        $data['breadcump_1'] = $this->uri->segment(1);

        $data['about'] = $this->models->fetc_where_data('tbl_about', 'id', 1);

        $this->load->view('main', $data);
    }


    public function send_message()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(

                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'subject' => htmlspecialchars($this->input->post('subject')),
                'message' => htmlspecialchars($this->input->post('message')),
                'visit' => 1,
                'date_send' => date('Y-m-d H:i:s'),
            );

            $response = $this->models->PostData('tbl_message', $data);
            echo json_encode($response);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }
    public function sendNews()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'email' => htmlspecialchars($this->input->post('email')),
            );

            $response = $this->models->PostData('tbl_custumer_email', $data);
            echo json_encode($response);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }


    public function blog_detail($x)
    {

        $c = array(' ');
        $d = array('&', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–', '\n', '\r');
        $s = str_replace($d, '', htmlspecialchars($x, ENT_QUOTES)); // 
        $slug = strtolower(str_replace($c, '-', $s)); // 

        $sql = $this->db->query("SELECT slug FROM tbl_blog where slug='$slug'");
        $cek_url = $sql->num_rows();
        if ($cek_url == false) {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        } else {
            $blog_seo = $this->models->fetc_where_data('tbl_blog', 'slug', $slug);
            $data['body'] = 'pages/public/builder/component/blog_detail';
            $data['static'] = $this->static();
            $data['seo_title'] = $blog_seo['title'];
            $data['seo_deskripsi'] = $blog_seo['meta_deskripsi'];
            $data['seo_keyword'] = $blog_seo['keyword'];
            $data['robots'] = 'all, index, follow';

            $data['ogImages'] = base_url('assets/public/img/') . $blog_seo['foto'];
            $data['ogAlt'] = 'all, index, follow';

            $data['breadcump_1'] = $this->uri->segment(1);
            $data['field'] = $blog_seo;
            $data['category'] = $this->models->fetc_all_data('set_category');
            $data['recentPost'] = $this->models->fetc_all_data_limit('tbl_blog', 12, 'id', 'DESC');
            $this->load->view('main', $data);
        }
    }
    public function portfolio_detail($x)
    {

        $c = array(' ');
        $d = array('&', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–', '\n', '\r');
        $s = str_replace($d, '', htmlspecialchars($x, ENT_QUOTES)); // 
        $slug = strtolower(str_replace($c, '-', $s)); // 

        $sql = $this->db->query("SELECT link FROM pages_portfolio where link='$slug'");
        $cek_url = $sql->num_rows();
        if ($cek_url == false) {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        } else {
            $portfolio_seo = $this->models->fetc_where_data('pages_portfolio', 'link', $slug);
            $data['body'] = 'pages/public/builder/component/portfolio_detail';
            $data['static'] = $this->static();
            $data['seo_title'] = $portfolio_seo['title'];
            $data['seo_deskripsi'] = $portfolio_seo['desk'];
            $data['seo_keyword'] = $portfolio_seo['keyword'];
            $data['robots'] = 'all, index, follow';

            $data['ogImages'] = base_url('assets/public/img/') . $portfolio_seo['images'];
            $data['ogAlt'] = 'all, index, follow';

            $data['breadcump_1'] = $this->uri->segment(1);
            $data['field'] = $portfolio_seo;
            $data['populerportfolio'] = $this->models->fetc_all_data_limit('pages_portfolio', 12, 'id', 'DESC');
            $this->load->view('main', $data);
        }
    }
    public function service_detail($x)
    {

        $c = array(' ');
        $d = array('&', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–', '\n', '\r');
        $s = str_replace($d, '', htmlspecialchars($x, ENT_QUOTES)); // 
        $slug = strtolower(str_replace($c, '-', $s)); // 

        $sql = $this->db->query("SELECT slug FROM tbl_service where slug='$slug'");
        $cek_url = $sql->num_rows();
        if ($cek_url == false) {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        } else {
            $service_seo = $this->models->fetc_where_data('tbl_service', 'slug', $slug);
            $data['body'] = 'pages/public/builder/component/service_detail';
            $data['static'] = $this->static();
            $data['seo_title'] = $service_seo['title'];
            $data['seo_deskripsi'] = $service_seo['meta_deskripsi'];
            $data['seo_keyword'] = $service_seo['keyword'];
            $data['robots'] = 'all, index, follow';

            $data['ogImages'] = base_url('assets/public/img/') . $service_seo['images'];
            $data['ogAlt'] = 'all, index, follow';

            $data['breadcump_1'] = $this->uri->segment(1);
            $data['field'] = $service_seo;
            $data['serviceall'] = $this->models->fetc_all_data_limit('tbl_service', 12, 'id', 'DESC');
            $this->load->view('main', $data);
        }
    }


    public function categori($x)
    {


        $c = array(' ');
        $d = array('&', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–', '\n', '\r');
        $s = str_replace($d, '', htmlspecialchars($x, ENT_QUOTES)); // 
        $slug = strtolower(str_replace($c, '-', $s)); // 

        $blog_seo =  $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');;
        $data['body'] = 'pages/public/builder/component/categori';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Categori | ' . $blog_seo['meta_title'];
        $data['seo_deskripsi'] = $blog_seo['meta_deskripsi'];
        $data['seo_keyword'] = '';
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';

        $data['breadcump_1'] = $this->uri->segment(1);

        $data['blog'] = $this->models->fetc_where_data_Where_limit('tbl_blog', 'category', $slug, 12);

        $this->load->view('main', $data);
    }
}
