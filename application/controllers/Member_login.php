<?php

class Member_login extends CI_Controller
{


    private $main_layout = 'recruitment/master_layout';
    private $header = 'recruitment/header';
    private $footer = 'recruitment/footer';
    private $serverDateTime = '';
    public function __construct()
    {
        parent::__construct();

        $controller = $this->router->fetch_class();
        $method = $this->router->fetch_method();

        if (
            !$this->session->userdata('login_user_info_all')
            && !($controller == 'Member_login' && in_array($method, ['index', 'login_process']))
        ) {
            $this->session->set_flashdata('login_failed', 'Please login first');
            redirect('member_login');
        }
    }


    public function index()
    {
        $data = $this->engine->store_nav('recruitment', 'Nothing', 'শিক্ষিত বেকার কেন্দ্রীয় সঞ্চয় ও ঋণদান সমবায় সমিতি');
        $data['homapage_info'] = $this->Common->get_data('job_homepage')->row();

        $path = 'site/pages/login';
        $this->engine->render_front_view($data, $path, $this->header, $this->footer, $this->main_layout);
    }

    public function login_process()
    {

        $mobile_number = $this->input->post('mobile_number');
        $password = $this->input->post('password');

        $this->db->where('mobile_number', $mobile_number);
        $user = $this->db->get('members_n')->row();

        if ($user) {

            if (password_verify($password, $user->password))
            // if ($password == $user->password)
            {

                $this->session->set_userdata('current_type', 2);
                $this->session->set_userdata('login_user_info_all', $user);

                redirect('members');

            } else {

                $this->session->set_flashdata('login_failed', 'Wrong Password');
                redirect('member_login');

            }

        } else {

            $this->session->set_flashdata('login_failed', 'Mobile number not found');
            redirect('member_login');
        }
    }





    //     public function view_authenticate_member()
// {
//     $data = $this->engine->store_nav('members_list', 'members_list', 'সদস্য বিস্তারিত');

    //     $login_user = $this->session->userdata('login_user_info_all');

    //     $data['member'] = $this->Common
//         ->get_data_single_conditional('members_n', 'id', $login_user->id)
//         ->row();

    //     if (!$data['member']) {
//         show_404();
//     }

    //     $path = 'Applicant/members_list/member_Details';
//     $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
// }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('member_login');
    }
}




?>