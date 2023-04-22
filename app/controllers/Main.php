<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if ($this->Settings->mmode && $this->v != 'login') {
        //     redirect('notify/offline');
        // }
        // $this->load->library('ion_auth');
        // $this->load->library('form_validation');
        // $this->lang->admin_load('auth', $this->Settings->user_language);

        $this->load->model('welcome_model');
        $this->load->library('pagination');
        // $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('encryption');

        $this->upload_path         = 'themes/default/frontend/assets/images/frontend';
        $this->thumbs_path         = 'themes/default/frontend/assets/images/frontend/thumbs';
        $this->image_types         = 'gif|jpg|jpeg|png|tif';
        $this->allowed_file_size   = '1024';

    }

    public function activate($id, $code)
    {
        if (!FRONTEND) {
            redirect('admin/auth/activate/' . $id . '/' . $code);
        }
        if ($code) {
            if ($activation = $this->ion_auth->activate($id, $code)) {
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('login'); 
            }
        } else {
            $this->session->set_flashdata('error', $this->ion_auth->errors());
            redirect('login');
        }
    }

    public function captcha_check($cap)
    {
        $expiration = time() - 300; // 5 minutes limit
        $this->db->delete('captcha', ['captcha_time <' => $expiration]);

        $this->db->select('COUNT(*) AS count')
        ->where('word', $cap)
        ->where('ip_address', $this->input->ip_address())
        ->where('captcha_time >', $expiration);

        if ($this->db->count_all_results('captcha')) {
            return true;
        }
        $this->form_validation->set_message('captcha_check', lang('captcha_wrong'));
        return false;
    }

    public function cookie($val)
    {
        set_cookie('frontend_use_cookie', $val, 31536000);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function currency($currency)
    {
        set_cookie('frontend_currency', $currency, 31536000);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function forgot_password()
    {
        if (!FRONTEND) {
            redirect('admin/auth/forgot_password');
        }
        $this->form_validation->set_rules('email', lang('email_address'), 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->sma->send_json(validation_errors());
        } else {
            $identity = $this->ion_auth->where('email', strtolower($this->input->post('email')))->users()->row();
            if (empty($identity)) {
                $this->sma->send_json(lang('forgot_password_email_not_found'));
            }

            $forgotten = $this->ion_auth->forgotten_password($identity->email);
            if ($forgotten) {
                $this->sma->send_json(['status' => 'success', 'message' => $this->ion_auth->messages()]);
            } else {
                $this->sma->send_json(['status' => 'error', 'message' => $this->ion_auth->errors()]);
            }
        }
    }

    public function hide($id = null)
    {
        $this->session->set_userdata('hidden' . $id, 1);
        echo true;
    }

    public function index()
    {   
        if($this->input->get('submit')){
            if($this->input->get('userCandidates')){
                $username = $this->input->get('userCandidates');
                echo $username;
            }
            die();
        }
        else{
            $bc                                  = [['link' => '#', 'page' => lang('home')]]; 
            $meta                                = ['page_title' => lang('home'), 'bc' => $bc];
            $this->data['browse_locations']      = $this->welcome_model->brow_jobs_by_location()->result();
            $this->data['browse_categories']     = $this->welcome_model->browse_jobs_by_category()->result();
            $this->data['browse_companies']      = $this->welcome_model->brow_jobs_by_company()->result();
            $this->data['latest_jobs']           = $this->welcome_model->list_lastest_jobs(20)->result();
            $this->data['user_info']             = $this->welcome_model->get_jobseeker_profile_info_all(10)->result();
            $this->data['topCompanies']          = $this->welcome_model->topCompanies(4)->result();
            // $this->session->unset_userdata('id');
            // $this->session->unset_userdata('email','pass');
            $this->page_construct_frontend('home2',$this->data,$meta);
        }
        
    }

    public function language($lang)
    {
        $folder        = 'app/language/';
        $languagefiles = scandir($folder);
        if (in_array($lang, $languagefiles)) {
            set_cookie('frontend_language', $lang, 31536000);
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function login($m = null)
    {
        if (!FRONTEND || $this->Settings->mmode) {
            redirect('admin/login');
        }
        if ($this->loggedIn) {
            $this->session->set_flashdata('error', $this->session->flashdata('error'));
            redirect('/');
        }

        if ($this->Settings->captcha) {
            $this->form_validation->set_rules('captcha', lang('captcha'), 'required|callback_captcha_check');
        }

        if ($this->form_validation->run('auth/login') == true) {
            $remember = (bool)$this->input->post('remember_me');

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                if ($this->Settings->mmode) {
                    if (!$this->ion_auth->in_group('owner')) {
                        $this->session->set_flashdata('error', lang('site_is_offline_plz_try_later'));
                        redirect('logout');
                    }
                }

                $this->session->set_flashdata('message', $this->ion_auth->messages());
                $referrer = ($this->session->userdata('requested_page') && $this->session->userdata('requested_page') != 'admin') ? $this->session->userdata('requested_page') : '/';
                redirect($referrer);
            } else {
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                redirect('login');
            }
        } else {
            if ($this->Settings->captcha) {
                $this->load->helper('captcha');
                $vals = [
                    'img_path'    => './assets/captcha/',
                    'img_url'     => base_url('assets/captcha/'),
                    'img_width'   => 150,
                    'img_height'  => 34,
                    'word_length' => 5,
                    'colors'      => ['background' => [255, 255, 255], 'border' => [204, 204, 204], 'text' => [102, 102, 102], 'grid' => [204, 204, 204]],
                ];
                $cap     = create_captcha($vals);
                $capdata = [
                    'captcha_time' => $cap['time'],
                    'ip_address'   => $this->input->ip_address(),
                    'word'         => $cap['word'],
                ];

                $query = $this->db->insert_string('captcha', $capdata);
                $this->db->query($query);
                $this->data['image']   = $cap['image'];
                $this->data['captcha'] = ['name' => 'captcha',
                    'id'                         => 'captcha',
                    'type'                       => 'text',
                    'class'                      => 'form-control',
                    'required'                   => 'required',
                    'placeholder'                => lang('type_captcha'),
                ];
            }
            $this->data['error']      = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
            $this->data['message']    = $m ? lang('password_changed') : $this->session->flashdata('message');
            $this->data['page_title'] = lang('login');
            $this->data['page_desc']  = $this->frontend_settings->description;
            if ($this->frontend_settings->private) {
                $this->data['message']       = $data['message'] ?? $this->session->flashdata('message');
                $this->data['error']         = isset($this->data['error']) ? $this->data['error'] : $this->session->flashdata('error');
                $this->data['warning']       = $data['warning']  ?? $this->session->flashdata('warning');
                $this->data['reminder']      = $data['reminder'] ?? $this->session->flashdata('reminder');
                $this->data['Settings']      = $this->Settings;
                $this->data['frontend_settings'] = $this->frontend_settings;
                $this->load->view($this->theme . 'user/private_login.php', $this->data);
            } else {
                $this->page_construct('user/login', $this->data);
            }
        }
    }

    public function logout($m = null)
    {
        if (!FRONTEND) {
            redirect('admin/logout');
        }
        $logout   = $this->ion_auth->logout();
        $referrer = ($_SERVER['HTTP_REFERER'] ?? '/');
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect($m ? 'login/m' : $referrer);
    }

    public function profile($act = null)
    {
        if (!$this->loggedIn) {
            redirect('/');
        }
        if (!FRONTEND || $this->Staff) {
            redirect('admin/users/profile/' . $this->session->userdata('user_id'));
        }
        $user = $this->ion_auth->user()->row();
        if ($act == 'user') {
            $this->form_validation->set_rules('first_name', lang('first_name'), 'required');
            $this->form_validation->set_rules('last_name', lang('last_name'), 'required');
            $this->form_validation->set_rules('phone', lang('phone'), 'required');
            $this->form_validation->set_rules('email', lang('email'), 'required|valid_email');
            $this->form_validation->set_rules('company', lang('company'), 'trim');
            $this->form_validation->set_rules('vat_no', lang('vat_no'), 'trim');
            $this->form_validation->set_rules('address', lang('billing_address'), 'required');
            $this->form_validation->set_rules('city', lang('city'), 'required');
            $this->form_validation->set_rules('state', lang('state'), 'required');
            $this->form_validation->set_rules('postal_code', lang('postal_code'), 'required');
            $this->form_validation->set_rules('country', lang('country'), 'required');
            if ($user->email != $this->input->post('email')) {
                $this->form_validation->set_rules('email', lang('email'), 'trim|is_unique[users.email]');
            }

            if ($this->form_validation->run() === true) {
                $bdata = [
                    'name'        => $this->input->post('first_name') . ' ' . $this->input->post('last_name'),
                    'phone'       => $this->input->post('phone'),
                    'email'       => $this->input->post('email'),
                    'company'     => $this->input->post('company'),
                    'vat_no'      => $this->input->post('vat_no'),
                    'address'     => $this->input->post('address'),
                    'city'        => $this->input->post('city'),
                    'state'       => $this->input->post('state'),
                    'postal_code' => $this->input->post('postal_code'),
                    'country'     => $this->input->post('country'),
                ];

                $udata = [
                    'first_name' => $this->input->post('first_name'),
                    'last_name'  => $this->input->post('last_name'),
                    'company'    => $this->input->post('company'),
                    'phone'      => $this->input->post('phone'),
                    'email'      => $this->input->post('email'),
                ];

                if ($this->ion_auth->update($user->id, $udata) && $this->frontend_model->updateCompany($user->company_id, $bdata)) {
                    $this->session->set_flashdata('message', lang('user_updated'));
                    $this->session->set_flashdata('message', lang('billing_data_updated'));
                    redirect('profile');
                }
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }
        } elseif ($act == 'password') {
            $this->form_validation->set_rules('old_password', lang('old_password'), 'required');
            $this->form_validation->set_rules('new_password', lang('new_password'), 'required|min_length[8]|max_length[25]');
            $this->form_validation->set_rules('new_password_confirm', lang('confirm_password'), 'required|matches[new_password]');

            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error', validation_errors());
                redirect('profile');
            } else {
                if (DEMO) {
                    $this->session->set_flashdata('warning', lang('disabled_in_demo'));
                    redirect($_SERVER['HTTP_REFERER']);
                }

                $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));
                $change   = $this->ion_auth->change_password($identity, $this->input->post('old_password'), $this->input->post('new_password'));

                if ($change) {
                    $this->session->set_flashdata('message', $this->ion_auth->messages());
                    $this->logout('m');
                } else {
                    $this->session->set_flashdata('error', $this->ion_auth->errors());
                    redirect('profile');
                } 
            }
        }

        $this->data['featured_products'] = $this->frontend_model->getFeaturedProducts();
        $this->data['customer']          = $this->site->getCompanyByID($this->session->userdata('company_id'));
        $this->data['user']              = $this->site->getUser();
        $this->data['page_title']        = lang('profile');
        $this->data['page_desc']         = $this->frontend_settings->description;
        $this->page_construct('user/profile', $this->data);
    }

    public function register()
    {
        if ($this->frontend_settings->private) {
            redirect('/login');
        }
        $this->form_validation->set_rules('first_name', lang('first_name'), 'required');
        $this->form_validation->set_rules('last_name', lang('last_name'), 'required');
        $this->form_validation->set_rules('phone', lang('phone'), 'required');
        $this->form_validation->set_rules('email', lang('email_address'), 'required|is_unique[users.email]');
        $this->form_validation->set_rules('username', lang('username'), 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', lang('password'), 'required|min_length[8]|max_length[20]|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', lang('confirm_password'), 'required');

        if ($this->form_validation->run('') == true) {
            $email    = strtolower($this->input->post('email'));
            $username = strtolower($this->input->post('username'));
            $password = $this->input->post('password');

            $customer_group = $this->frontend_model->getCustomerGroup($this->Settings->customer_group);
            $price_group    = $this->frontend_model->getPriceGroup($this->Settings->price_group);

            $company_data = [
                'company'             => $this->input->post('company') ? $this->input->post('company') : '-',
                'name'                => $this->input->post('first_name') . ' ' . $this->input->post('last_name'),
                'email'               => $this->input->post('email'),
                'phone'               => $this->input->post('phone'),
                'group_id'            => 3,
                'group_name'          => 'customer',
                'customer_group_id'   => (!empty($customer_group)) ? $customer_group->id : null,
                'customer_group_name' => (!empty($customer_group)) ? $customer_group->name : null,
                'price_group_id'      => (!empty($price_group)) ? $price_group->id : null,
                'price_group_name'    => (!empty($price_group)) ? $price_group->name : null,
            ];

            $company_id = $this->frontend_model->addCustomer($company_data);

            $additional_data = [
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'phone'      => $this->input->post('phone'),
                'company'    => $this->input->post('company'),
                'gender'     => 'male',
                'company_id' => $company_id,
                'group_id'   => 3,
            ];
            $this->load->library('ion_auth');
        }

        if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data)) {
            $this->session->set_flashdata('message', lang('account_created'));
            redirect('login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('login#register');
        }
    }

    public function reset_password($code = null)
    {
        if (!FRONTEND) {
            redirect('admin/auth/reset_password/' . $code);
        }
        if (!$code) {
            $this->session->set_flashdata('error', lang('page_not_found'));
            redirect('/');
        }

        $user = $this->ion_auth->forgotten_password_check($code);

        if ($user) {
            $this->form_validation->set_rules('new', lang('password'), 'required|min_length[8]|max_length[25]|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', lang('confirm_password'), 'required');

            if ($this->form_validation->run() == false) {
                $this->data['error']               = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
                $this->data['message']             = $this->session->flashdata('message');
                $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
                $this->data['new_password']        = [
                    'name'                   => 'new',
                    'id'                     => 'new',
                    'type'                   => 'password',
                    'class'                  => 'form-control',
                    'required'               => 'required',
                    'pattern'                => '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
                    'data-fv-regexp-message' => lang('pasword_hint'),
                    'placeholder'            => lang('new_password'),
                ];
                $this->data['new_password_confirm'] = [
                    'name'                      => 'new_confirm',
                    'id'                        => 'new_confirm',
                    'type'                      => 'password',
                    'class'                     => 'form-control',
                    'required'                  => 'required',
                    'data-fv-identical'         => 'true',
                    'data-fv-identical-field'   => 'new',
                    'data-fv-identical-message' => lang('pw_not_same'),
                    'placeholder'               => lang('confirm_password'),
                ];
                $this->data['user_id'] = [
                    'name'  => 'user_id',
                    'id'    => 'user_id',
                    'type'  => 'hidden',
                    'value' => $user->id,
                ];
                $this->data['code']           = $code;
                $this->data['identity_label'] = $user->email;
                $this->data['page_title']     = lang('reset_password');
                $this->data['page_desc']      = '';
                $this->page_construct('user/reset_password', $this->data);
            } else {
                // do we have a valid request?
                if ($user->id != $this->input->post('user_id')) {
                    $this->ion_auth->clear_forgotten_password_code($code);
                    redirect('notify/csrf');
                } else {
                    // finally change the password
                    $identity = $user->email;

                    $change = $this->ion_auth->reset_password($identity, $this->input->post('new'));
                    if ($change) {
                        //if the password was successfully changed
                        $this->session->set_flashdata('message', $this->ion_auth->messages());
                        redirect('login');
                    } else {
                        $this->session->set_flashdata('error', $this->ion_auth->errors());
                        redirect('reset_password/' . $code);
                    }
                }
            }
        } else {
            //if the code is invalid then send them back to the forgot password page
            $this->session->set_flashdata('error', $this->ion_auth->errors());
            redirect('/');
        }
    }











































































    public function sign_in()
    {
        $this->load->library('encryption');
        if(!empty($this->input->post('cm'))){
            $cm = $this->input->post('cm');
            if($cm == "job_seekers"){
                $page = "candidates";
                $lyout_page = "saved_jobs";
                $id = 'job_seeker_id';
                $this->session->set_userdata('pages','candidates');
                $this->session->set_flashdata('cmm',$cm);
                $this->session->set_userdata('cm_id',$id);
            }
            // echo $cm;die();
            else{
                $page = "employer";
                $lyout_page = "manage_jobs";
                $id = "employer_id";
                $this->session->set_userdata('pages','employers');
                $this->session->set_userdata('cmm',$cm);
            }
            $this->form_validation->set_error_delimiters('<div class="color">','</div>');
            $this->form_validation->set_rules('email',lang('email'),'trim|required|valid_email');
            $this->form_validation->set_rules('password',lang('password'),'trim|required|min_length[8]');
            if ($this->form_validation->run()==true && $this->input->post('submit')) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');

                if($this->welcome_model->login($cm,$id)){

                    if($page=="employer"){
                        $obj  = $this->welcome_model->login($cm,$id);
                        // echo $cm.$page.$id;die();
                        foreach($obj as $row){
                            // echo $this->encryption->decrypt($row->password);echo "<br>";
                            $getPass   = $this->encryption->decrypt($row->password);
                            $getEmail  = $row->email;
                            if($getPass == trim($password) && $getEmail == trim($email) ){
                                $employer_id=$row->employer_id;

                                $this->session->set_userdata('id',$employer_id);
                                $this->session->set_userdata('email',$getEmail);
                                $this->session->set_userdata('pass',$getPass);
                                $this->session->set_userdata('cm',$cm);
                                $this->session->set_userdata('cm_id',$id);
                                $this->session->set_userdata('employers','employers');
                                redirect(base_url($page.'/'.$lyout_page.'/'.$employer_id)); 
                            }
                            else{
                                $this->session->set_flashdata('error1','unknow culunm');
                            }
                        }
                    }
                    else{
                        $objs = $this->welcome_model->login($cm,$id);
                        foreach($objs as $row){
                            $getPass   = $this->encryption->decrypt($row->password);
                            $getEmail  = $row->email;

                            if($getPass == trim($password) && $getEmail == trim($email)){


                                $job_seeker_id = $row->job_seeker_id;
                                // echo $job_seeker_id;die();
                                $this->session->set_userdata('id',$job_seeker_id);
                                $this->session->set_userdata('email',$getEmail);
                                $this->session->set_userdata('password',$getPass);
                                $this->session->set_userdata('cm',$page);
                                $this->session->set_userdata('candidates','candidates');

                                // echo $getEmail.'<br>'.$getPass.'<br>';
                                // echo $page.$lyout_page.$job_seeker_id;die();

                                
                                redirect(base_url($page.'/'.$lyout_page.'/'.$job_seeker_id));
                           
                            }
                        }
                    }
                }
                else if($this->welcome_model->login($cm,$id)==false){
                    $this->session->set_flashdata('error',"unknow colunm");
                    $this->data['page_title']  = lang('home');
                    $bc                        = [['link' => '#', 'page' => lang('home')]];
                    $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
                    $this->page_construct_frontend('pages/login', $this->data, $meta);
                }
            }
            else{
                $this->session->set_flashdata('error1','unvailable');
                $this->data['page_title']  = lang('home');
                $bc                        = [['link' => '#', 'page' => lang('home')]];
                $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
                $this->page_construct_frontend('pages/login', $this->data, $meta);
            }
        }
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->session->unset_userdata('employers');
        $this->session->unset_userdata('candidates');
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/login', $this->data, $meta);
    }

    public function sign_up()
    {
        $this->form_validation->set_error_delimiters('<div class="error">' , '</div>');
        $this->form_validation->set_rules('username',lang('username'),'required|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('email',lang('Email'),'trim|required|valid_email');
        $this->form_validation->set_rules('password',lang('password'),'trim|required|min_length[8]');
        $this->form_validation->set_rules('c_password',lang('confirm_password'),'trim|required|matches[password]');
        $this->form_validation->set_rules('phone',lang('phone'),'trim|required|numeric');
        if($this->form_validation->run()==true && $this->input->post('submit')){
            $username       = $this->input->post('username');
            $email          = $this->input->post('email');
            $password       = $this->input->post('password');
            $password       = $this->encryption->encrypt($password);
            $phone          = $this->input->post('phone');
            $created_date   = date('Y-m-d H:i:s');
            // $status         = $this->input->post('status');
            $cm             = $this->input->post('cm');
            $facebook       = $this->input->post('facebook');
            $twitter        = $this->input->post('twitter');
            $linkedin       = $this->input->post('linkedin');
            $description    = $this->input->post('description');
            // echo $cm;die();
            $data = array(
                'username'              => $username,
                'email'                 => $email,
                'password'              => $password,
                'mobile'                => $phone,
                'created_date'          => $created_date,
                // 'status'                => $status,
                'facebook'              => $facebook,
                'twitter'               => $twitter,
                'linkedin'              => $linkedin,
                'description'           => $description,
            );
            if($this->welcome_model->register($data,$email,$cm)==false){
                $this->data['success'] = "This email have been used already";
            }
            else{
               $this->data['success']  = "Account is complete "; 
            }
        }
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/register', $this->data, $meta);
        
    
    }
    public function about()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/about', $this->data, $meta);
    }

    public function services()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/services', $this->data, $meta);
    }

    public function pricing()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/pricing', $this->data, $meta);
    }

    public function career()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/career', $this->data, $meta);
    }

    public function advertising()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/advertising', $this->data, $meta);
    }

    public function contact_us()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['contact_us']  = $this->welcome_model->getContact();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/contact_us', $this->data, $meta);
    }

    public function blog()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/blog', $this->data, $meta);
    }

    public function blog_detail()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/blog_detail', $this->data, $meta);
    }

    public function post_a_job()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/post_a_job', $this->data, $meta);
    }

    public function faqs()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/faqs', $this->data, $meta);
    }

    public function browse_categories()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['browse_categories']     = $this->welcome_model->browse_jobs_by_category()->result();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/browse_categories', $this->data, $meta);
    }

    public function browse_locations()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['browse_locations']         = $this->welcome_model->brow_jobs_by_location()->result();
        // $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/browse_locations', $this->data, $meta);
    }

    public function coming_soon()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/coming_soon', $this->data, $meta);
    }

    public function terms_and_conditions()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('pages/terms_and_conditions', $this->data, $meta);
    }

































    public function job_grid()
    {
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $limit                     = 6;
        $config                    = array();
        $config['base_url']        = site_url().'job_grid/?search=true';
        $action                    = null;
        $totalRow                  = $this->welcome_model->employer_count()->num_rows();
        // $this->data['count']       = $this->welcome_model->employer_count()->num_rows();
        $this->data['count']       = $totalRow;
        $page                      = 0;
        if(isset($_GET['offset'])){
            $page = ($_GET['offset']/10)+1;
        }
        else{
            $page = 1;
        };
        $this->data['pages']       = $page;
        $this->data['total']       = ceil($totalRow/10);
        $config['query_string_segment'] = 'offset';
        $config['page_query_string'] = true;
        $config['total_rows'] = $totalRow;
        $config['per_page']  = $this->input->get('perpage') ? $this->input->get('perpage') : (@$layoutspecificpagination->per_page ? $layoutspecificpagination->per_page : 10);
        if(!empty($_GET['offset'])){
            $offset = $_GET['offset'];
        }else{
            $offset = 0;
        } 
        $config["reuse_query_string"] = true;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $job_grid = $this->welcome_model->list_job_by_employer($config['per_page'], $offset);
        $this->data['job_grids']  = $job_grid;
        $this->data["page_link"]    = $this->pagination->create_links();

        $this->page_construct_frontend('listing/job_grid', $this->data, $meta);  

    }
    public function job_listing()
    {
        // $this->data['id']          = $this->session->userdata('id');
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $limit                     = 6;
        $config                    = array();
        $config['base_url']        = site_url().'job_listing/?search=true';
        $action                    = null;
        $totalRow                  = $this->welcome_model->employer_count()->num_rows();
        // $this->data['count']       = $this->welcome_model->employer_count()->num_rows();
        $this->data['count']       = $totalRow;
        $page                      = 0;
        if(isset($_GET['offset'])){
            $page = ($_GET['offset']/10)+1;
        }
        else{
            $page = 1;
        };
        $this->data['pages']       = $page;
        $this->data['total']       = ceil($totalRow/10);
        $config['query_string_segment'] = 'offset';
        $config['page_query_string'] = true;
        $config['total_rows'] = $totalRow;
        $config['per_page']  = $this->input->get('perpage') ? $this->input->get('perpage') : (@$layoutspecificpagination->per_page ? $layoutspecificpagination->per_page : 10);
        if(!empty($_GET['offset'])){
            $offset = $_GET['offset'];
        }else{
            $offset = 0;
        } 
        $config["reuse_query_string"] = true;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $job_listing = $this->welcome_model->list_job_by_employer($config['per_page'], $offset);
        $this->data['job_listings']  = $job_listing;
        $this->data["page_link"]    = $this->pagination->create_links();

        $this->page_construct_frontend('listing/job_listing', $this->data, $meta);  
    }
    public function job_detail()
    {
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        // $this->data['job_detail']  = $this->welcome_model->job_detail($job_key);
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('listing/job_detail', $this->data, $meta);
    }

    public function job_listing_map()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $limit = 6;
        $config = array();
        $config['base_url'] = site_url().'job_listing_map/?search=true';
        $action = null;
        $totalRow = $this->welcome_model->get_count_categories();
        $config['query_string_segment'] = 'offset';
        $config['page_query_string'] = true;
        $config['total_rows'] = $totalRow;
        $config['per_page']  = $this->input->get('perpage') ? $this->input->get('perpage') : (@$layoutspecificpagination->per_page ? $layoutspecificpagination->per_page : 6);
        if(!empty($_GET['offset'])){
            $offset = $_GET['offset'];
        }else{
            $offset = 0;
        } 
        $config["reuse_query_string"] = true;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $job_listing = $this->welcome_model->browse_jobs_by_category_limit($config['per_page'], $offset);
        $this->data['job_list']  = $job_listing;
        $this->data["page_link"]    = $this->pagination->create_links();
        $this->page_construct_frontend('listing/job_listing_map', $this->data, $meta);
    }

































    public function employer_grid()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('listing/employer_grid', $this->data, $meta);
    }

    public function employer_listing()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('listing/employer_listing', $this->data, $meta);
    }

    public function employer_detail()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('listing/employer_detail', $this->data, $meta);
    }

    public function employer_listing_map()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('listing/employer_listing_map', $this->data, $meta);
    }

    public function dashboard_employer()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];


        $limit                          = 6;
        $config                         = array();
        $config['base_url']             = site_url().'job_listing/?search=true';
        $action                         = null;
        $totalRow                       = $this->welcome_model->get_count_categories();
        $config['query_string_segment'] = 'offset';
        $config['page_query_string']    = true;
        $config['total_rows']           = $totalRow;
        $config['per_page']             = $this->input->get('perpage') ? $this->input->get('perpage') : (@$layoutspecificpagination->per_page ? $layoutspecificpagination->per_page : 6);
        if(!empty($_GET['offset'])){
            $offset = $_GET['offset'];
        }else{
            $offset = 0;
        } 
        $config["reuse_query_string"]   = true;
        $config["uri_segment"]          = 3;
        $this->pagination->initialize($config);
        $job_listing = $this->welcome_model->browse_jobs_by_category_limit($config['per_page'], $offset);
        $this->data['job_lists']        = $job_listing;
        $this->data["page_link"]        = $this->pagination->create_links();

        $this->data['id']               = $this->session->userdata('id'); 

        $this->page_construct_frontend('employers/dashboard', $this->data, $meta);
    }

    public function employer_profile()
    {
        $this->form_validation->set_rules('username',lang('username'),'required|min_length[4]|max_length[15]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('date',lang('date'),'trim|required');
        $this->form_validation->set_rules('phone',lang('phone'),'trim|required|numeric');
        $this->form_validation->set_rules('description',lang('description'),'trim|required');
        $this->form_validation->set_rules('address',lang('address'),'trim|required');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        if($this->input->post('submit') && $this->form_validation->run()==true){

            $id = $this->session->userdata('id');
            $data = array(
                'username'      => $this->input->post('username'),
                'email'         => $this->input->post('email'),
                'description'   => $this->input->post('description'),
                'created_date'  => $this->input->post('date'),
                'address'       => $this->input->post('address'),
                'facebook'      => $this->input->post('facebook'),
                'twitter'       => $this->input->post('twitter'),
                'linkedin'      => $this->input->post('Linkedin'),
                'mobile'        => $this->input->post('phone'),
            );
           
            if($this->welcome_model->update_employer($id,$data) == true){
                $this->data['message'] = "employers updated";
             
            }
            else{
                // $this->session->set_flashdata('message',lang('unvailable'));
                $this->data['message'] = "unvailable";
            }
        }
        else{
            $this->data['message'] = null;

        }
        $this->data['id']               = $this->session->userdata('id');
        $id                             = $this->session->userdata('id');
        $this->data['employer']         = $this->welcome_model->getEmployer($id);

        $this->data['error']            = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']       = lang('home');
        $bc                             = [['link' => '#', 'page' => lang('home')]];
        $meta                           = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('employers/profile', $this->data, $meta);
    }

    public function change_password()
    {   
            $this->form_validation->set_error_delimiters('<div class="color">','</div>');
            $this->form_validation->set_rules('curr_pass','Current Password','required|min_length[8]');
            $this->form_validation->set_rules('new_pass','New Password','required|min_length[8]');
            $this->form_validation->set_rules('confir_pass','Confirm Password','required|matches[new_pass]');
            if($this->form_validation->run()==true && $this->input->post('submit')){
                $getEmail   = $this->session->userdata('email');
                $currPass   = $this->input->post('curr_pass');
                $cm_id      = $this->session->userdata('cm_id');
                $id         = $this->session->userdata('id');
                $cmm         = $this->session->userdata('cmm');
        
                $newPass    = $this->input->post('new_pass');
                if($obj     = $this->welcome_model->login($cmm,$cm_id)){
                    foreach($obj as $row){
                        if($this->encryption->decrypt($row->password) == $currPass && $row->email == $getEmail){  

                            $this->db->where($cm_id,$id)
                                     ->update($cmm,array('password'=>$this->encryption->encrypt($newPass)));
                                      $this->session->set_userdata('message','password updated'); 
                                                             
                        }
                    
                    }
                }
            }
        $page  =  $this->session->userdata('pages');

        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        $this->data['id']          = $this->session->userdata('id');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend($page.'/change_password', $this->data, $meta);

    }

    public function employer_manage_candidates()
    {
        $this->data['id']          = $this->session->userdata('id');
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('employers/manage_candidates', $this->data, $meta);
    }

    public function employer_manage_jobs($employer_id)
    {
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        $this->data['id']          = $this->session->userdata('id');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['manage_jobs'] = $this->welcome_model->list_job_by_employer_id($employer_id)->result();
        $this->data['job_locations']    = $this->welcome_model->getLocation();
        $this->data['page_title']  = lang('home');
        $this->data['table']       = "employers";
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('employers/manage_jobs', $this->data, $meta);
    }
    public function employer_post_new_job()
    {
        $this->form_validation->set_error_delimiters('<div class="error">' , '</div>');
        $this->form_validation->set_rules('job_title','Job title','trim|required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('job_description',lang('job_description'),'trim|required');
        $this->form_validation->set_rules('job_category',lang('job_category'),'trim|required');
        $this->form_validation->set_rules('job_location',lang('job_location'),'trim|required');
        $this->form_validation->set_rules('salary',lang('salary'),'trim|required');
        $this->form_validation->set_rules('address',lang('address'),'trim|required');
        $this->form_validation->set_rules('job_expire_date',lang('date_expired'),'trim|required');
        $this->form_validation->set_rules('phone',lang('phone'),'trim|required|numeric');
        if($this->form_validation->run()==true && $this->input->post('submit')){
        
            $job_title      = $this->input->post('job_title');
            $job_des        = $this->input->post('job_description');
            $job_category   = $this->input->post('job_category');
            $job_location   = $this->input->post('job_location');
            $salary         = $this->input->post('salary');
            $date_expire    = $this->input->post('job_expire_date');
            $address        = $this->input->post('address');
            $id             = $this->session->userdata('id');
            $status         = $this->input->post('action');
            $phone          = $this->input->post('phone');
            $facebook       = $this->input->post('facebook');
            $twitter        = $this->input->post('twitter');
            $linkedin       = $this->input->post('linkedin');

            $data = array(
                'title'                 => $job_title,
                'text_description'      => $job_des,
                'using_employer_id'     => $id,
                'using_job_category_id' => $job_category,
                'using_job_location_id' => $job_location,
                'salary'                => $salary,
                'job_address'           => $address,
                'status'                => $status,
                'date_available'        => $date_expire,
                'facebook'              => $facebook,
                'twitter'               => $twitter,
                'linkedin'              => $linkedin,
                'job_phone_number'      => $phone,
                
            );
            
            // var_dump($_FILES['job_image']);die();
            $this->load->library('upload');

            if(!empty($_FILES['job_image']['size'])>0){
                $config['upload_path']   = $this->upload_path;
                $config['allowed_types'] = $this->image_types;
                $config['max_size']      = $this->allowed_file_size;
                $config['max_width']     = 1024;
                $config['max_height']    = 768;
                $config['max_filename']  = 35;
                $config['encrypt_name']  = true;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('job_image')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect(base_url('employer/post_new_job'));
                }
                $photo         = $this->upload->file_name;
                $data['job_image'] = $photo;
            }

         
            $this->welcome_model->add_job_by_employer($data);
            redirect(base_url('employer/manage_jobs/'.$id));
        }
        else{
            // $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
            $this->data['id']          = $this->session->userdata('id');
            //$this->data['topProducts'] = $this->welcome_model->topProducts();
            //$this->data['chartData']   = $this->welcome_model->getChartData();

            $this->data['job_categories'] = $this->welcome_model->getJobCategory();
            $this->data['job_locations']  = $this->welcome_model->get_location();
            $this->data['page_title']  = lang('home');
            $bc                        = [['link' => '#', 'page' => lang('home')]];
            $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
            $this->page_construct_frontend('employers/post_new_job', $this->data, $meta);
        }
       
    }

    public function employer_pricing()
    {
        $this->data['id']          = $this->session->userdata('id');
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('employers/pricing', $this->data, $meta);
    }


































    public function candidate_grid()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('listing/candidates_grid', $this->data, $meta);
    }

    public function candidates_listing()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();

        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];


        $limit                              = 6;
        $config                             = array();
        $config['base_url']                 = site_url().'candidates_listing/?search=true';
        $action                             = null;
        $totalRow                           = $this->welcome_model->get_jobseeker_profile_info_all()->num_rows();
        $this->data['total']                = $totalRow/10;
        $this->data['num']                  = 1;
        $this->data['counts']               = $this->welcome_model->get_jobseeker_profile_info_all()->num_rows();
        $config['query_string_segment']     = 'offset';
        $config['page_query_string']        = true;
        $config['total_rows']               = $totalRow;
        $config['per_page']                 = $this->input->get('perpage') ? $this->input->get('perpage') : (@$layoutspecificpagination->per_page ? $layoutspecificpagination->per_page : 10);
        if(!empty($_GET['offset'])){
            $offset                         = $_GET['offset'];
        }else{
            $offset                         = 0;
        } 
        $config["reuse_query_string"]       = true;
        $config["uri_segment"]              = 3;
        $this->pagination->initialize($config);
        $candidates_listing                 = $this->welcome_model->get_jobseeker_profile_info_all($config['per_page'], $offset)->result();
        $this->data['candidates']           = $candidates_listing;
        $this->data["page_link"]            = $this->pagination->create_links();


        // $this->data['candidates']  = $this->welcome_model->get_jobseeker_profile_info_all(10)->result();

        $this->page_construct_frontend('listing/candidates_listing', $this->data, $meta);
    }

    public function candidate_detail()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('listing/candidate_detail', $this->data, $meta);
    }

    public function candidate_listing_map()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('listing/candidate_listing_map', $this->data, $meta);
    }

    public function dashboard_candidate()
    {
        
        $this->data['error']                   = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        $this->data['latest_jobs']           = $this->welcome_model->list_lastest_jobs(20)->result();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('candidates/dashboard', $this->data, $meta);

        $limit                              = 6;
        $config                             = array();
        $config['base_url']                 = site_url().'candidates/?search=true';                           
        $total_rows                         = $this->welcome_model->list_lastest_jobs(10)->num_rows();
        $config['query_string_segment']     = 'offset';
        $config['page_query_string']        = true;


        $limit                              = 6;
        $config                             = array();
        $config['base_url']                 = site_url().'candidates_listing/?search=true';
        $action                             = null;
        $totalRow                           = $this->welcome_model->get_jobseeker_profile_info_all()->num_rows();
        $this->data['total']                = $totalRow/10;
        $this->data['num']                  = 1;
        $this->data['counts']               = $this->welcome_model->get_jobseeker_profile_info_all()->num_rows();
        $config['query_string_segment']     = 'offset';
        $config['page_query_string']        = true;
        $config['total_rows']               = $totalRow;
        $config['per_page']                 = $this->input->get('perpage') ? $this->input->get('perpage') : (@$layoutspecificpagination->per_page ? $layoutspecificpagination->per_page : 10);
        if(!empty($_GET['offset'])){
            $offset                         = $_GET['offset'];
        }else{
            $offset                         = 0;
        } 
        $config["reuse_query_string"]       = true;
        $config["uri_segment"]              = 3;
        $this->pagination->initialize($config);
        $candidates_listing                 = $this->welcome_model->get_jobseeker_profile_info_all($config['per_page'], $offset)->result();
        $this->data['candidates']           = $candidates_listing;
        $this->data["page_link"]            = $this->pagination->create_links();

    }

    public function candidate_profile()
    {
        $this->form_validation->set_rules('username',lang('username'),'trim|required');
        $this->form_validation->set_rules('email',lang('email'),'trim|required|valid_email');
        if($this->form_validation->run()==true){
            $id = $this->session->userdata('id');
            $data = array(
                'username'      => $this->input->post('username'),
                'email'         => $this->input->post('email'),
                'description'   => $this->input->post('description'),
                'created_date'  => $this->input->post('date'),
                'address'       => $this->input->post('address'),
                'facebook'      => $this->input->post('facebook'),
                'twitter'       => $this->input->post('twitter'),
                'linkedin'      => $this->input->post('linkedin'),
                'mobile'        => $this->input->post('phone'),
                'gender'        => $this->input->post('customRadio'),
                'experiences'   => $this->input->post('experience'),
                'date_of_birth' => $this->input->post('date_of_birth'),
            );
           
            if($this->welcome_model->update_candidate($id,$data) == true){
                $this->data['message'] = "employers updated";
             
            }
            else{
                // $this->session->set_flashdata('message',lang('unvailable'));
                $this->data['message'] = "unvailable";
            }
        }
        else{
            $this->data['message'] = null;

        }
        $id = $this->session->userdata('id');

        $this->data['candidates']  =    $this->welcome_model->getCandidate($id);
        $data                      = $this->welcome_model->getCandidate($id);

        $this->data['error']       =    (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        $this->data['page_title']  =    lang('home');
        $bc                        =    [['link' => '#', 'page' => lang('home')]];
        $meta                      =    ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('candidates/profile', $this->data, $meta);
    }

    // public function candidate_change_password()
    // {
        
    //     $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    //     //$this->data['topProducts'] = $this->welcome_model->topProducts();
    //     //$this->data['chartData']   = $this->welcome_model->getChartData();
    //     $this->data['page_title']  = lang('home');
    //     $bc                        = [['link' => '#', 'page' => lang('home')]];
    //     $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
    //     $this->page_construct_frontend('employers/change_password', $this->data, $meta);
    // }

    public function candidate_my_resume()
    {
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('candidates/my_resume', $this->data, $meta);
    }

    public function candidate_manage_jobs()
    {     
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['manage_jobs'] = $this->welcome_model->list_job_by_employer()->result();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $this->data['table']       = "candidates";
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('candidates/manage_jobs', $this->data, $meta);
    }

    public function candidate_saved_jobs($job_seeker_id)
    {
        
        $job_seeker_id = $this->session->userdata('id');
        // echo $job_seeker_id;die();

        if(isset($_GET['n'])){
            $job_id = $_GET['n'];
            if($obj = $this->welcome_model->display_save_job_offset($job_seeker_id,)){
                foreach($obj as $row){
                    if($row->job_ads_id == $job_id){
                        redirect(base_url('job_listing'));
                    }

                }
            }

            $this->welcome_model->save_job($job_seeker_id,$job_id);

        }


        // $this->data['save_job']    = $this->welcome_model->display_save_job($job_seeker_id);

        // $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        // $this->data['page_title']  = lang('home');
        // $bc                        = [['link' => '#', 'page' => lang('home')]];
        // $meta                      = ['page_title' => lang('home'), 'bc' => $bc];



        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $limit                     = 6;
        $config                    = array();
        $config['base_url']        = site_url().'candidates/saved_jobs/'.$job_seeker_id.'?search=true';
        $action                    = null;
        $totalRow                  = $this->welcome_model->count_by_job_seekers($job_seeker_id)->num_rows();
        // $this->data['count']       = $this->welcome_model->employer_count()->num_rows();
        $this->data['count']       = $totalRow;
        $page                      = 0;
        if(isset($_GET['offset'])){
            $page = ($_GET['offset']/10)+1;
        }
        else{
            $page = 1;
        };
        $this->data['pages']       = $page;
        $this->data['total']       = ceil($totalRow/10);
        $config['query_string_segment'] = 'offset';
        $config['page_query_string'] = true;
        $config['total_rows'] = $totalRow;
        $config['per_page']  = $this->input->get('perpage') ? $this->input->get('perpage') : (@$layoutspecificpagination->per_page ? $layoutspecificpagination->per_page : 10);
        if(!empty($_GET['offset'])){
            $offset = $_GET['offset'];
        }else{
            $offset = 0;
        } 
        $config["reuse_query_string"] = true;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);



        $save_job = $this->welcome_model->display_save_job($job_seeker_id,$config['per_page'], $offset);// error 



        $this->data['save_job']  = $save_job;
        $this->data["page_link"]    = $this->pagination->create_links();
        $this->page_construct_frontend('candidates/saved_jobs', $this->data, $meta);

    }

    public function candidate_pricing()
    {
        
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('candidates/pricing', $this->data, $meta);
    }
    public function view_candidate($job_ads_id){
        $this->data['error']       = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        //$this->data['topProducts'] = $this->welcome_model->topProducts();
        //$this->data['chartData']   = $this->welcome_model->getChartData();
        $this->data['page_title']  = lang('home');
        $bc                        = [['link' => '#', 'page' => lang('home')]];
        $meta                      = ['page_title' => lang('home'), 'bc' => $bc];
        $this->page_construct_frontend('candidates/view', $this->data, $meta);
        
    }
    public function action1($id,$employer_id){
        $this->db->set('status', '0');
        $this->db->where('job_ads_id', $id);
        $this->db->update('job_ads');
        $this->data['id']          = $this->session->userdata('id');
        $this->data['manage_jobs'] = $this->welcome_model->list_job_by_employer_id($employer_id)->result();
        redirect(base_url('employer/manage_jobs/').$employer_id);

    }
    public function action0($job_ads_id,$employer_id){
        $this->db->set('status', '1');
        $this->db->where('job_ads_id', $job_ads_id);
        $this->db->update('job_ads');
        $this->data['id']          = $this->session->userdata('id');
        $this->data['manage_jobs'] = $this->welcome_model->list_job_by_employer_id($employer_id)->result();
        redirect(base_url('employer/manage_jobs/').$employer_id);
    }

    public function delete_job($id){
        $this->db->delete('job_ads', array('job_ads_id' => $id));
        $employer_id    =     $this->session->userdata('id');
        redirect(base_url('employer/manage_jobs/').$employer_id);
    }
    public function job_update(){
        $job_id         =   $this->input->get('job_id');
        $job_title      =   $this->input->get('job_title');
        $job_salary     =   $this->input->get('salary');
        $job_location   =   $this->input->get('location');
        $date_vailable  =   $this->input->get('date');

        if (!empty($job_title) && !empty($job_salary) && !empty($job_location) && !empty($job_id)) {  

            $this->db->set('job_ads.title',$job_title);
            $this->db->set('job_ads.salary',$job_salary);
            $this->db->set('job_ads.date_available',$date_vailable);
            $this->db->set('job_ads.using_job_location_id',$job_location);
            $this->db->where('job_ads.job_ads_id',$job_id);
            $this->db->update('job_ads');

        } else {  
            echo "**name is not null"; 
        } 
        $employer_id    =     $this->session->userdata('id');
        redirect(base_url('employer/manage_jobs/').$employer_id);
    }

}


http://localhost/iGrowTech/jobpending_v2/candidates/saved_jobs/1538/?n=23782