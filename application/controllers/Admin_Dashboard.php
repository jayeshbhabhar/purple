<?php
defined('BASEPATH') or exit('no direct access allowed');

class Admin_Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (sessionId('admin_id') == "") {
            redirect(base_url('admin'));
        }
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        $data['title'] = "Home";

        $data['contact_query'] = $this->CommonModal->getNumRow('contact_query');
        $data['mentee'] = $this->CommonModal->getNumRow('mentee');
        $data['mentors'] = $this->CommonModal->getNumRow('mentors');
        $data['blog'] = $this->CommonModal->getNumRow('blog');
        $data['home_banner'] = $this->CommonModal->getNumRow('home_banner');
        $data['testimonial'] = $this->CommonModal->getNumRow('testimonial');
        $this->load->view('admin/dashboard', $data);
    }

    public function mentors()
    {
        $data['title'] = "Mentors";
        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('mentors', array('mid' => decryptId($BdID)));
            unlink('./uploads/mentors/' . $img);
            redirect('admin_Dashboard/mentors');
            exit;
        }
        $data['mentors'] = $this->CommonModal->getAllRowsInOrder('bc_mentors',  'mid', 'DESC');
        $this->load->view('admin/mentors', $data);
    }


    public function mentee()
    {

        $data['title'] = "Mentee Registrations";
        $table = "mentee";
        $BdID = $this->input->get('BdID');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('mentee', array('   id' => decryptId($BdID)));

            redirect('Admin_Dashboard/mentee');
            exit;
        }
        $data['mentee'] = $this->CommonModal->getAllRowsInOrder('mentee',  'id', 'DESC');
        $this->load->view('admin/mentee', $data);
    }


    public function add_mentor()
    {
        $data['title'] = "Add Mentors";

        $data['tag'] = "add";

        if (count($_POST) > 0) {
            $post = $this->input->post();

            $post['image'] = imageUpload('img', 'uploads/mentors/');

            $savedata = $this->CommonModal->insertRowReturnId('mentors', $post);
            if ($savedata) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Mentors Add Successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Mentors Add Successfully</div>');
            }
            redirect(base_url('admin_Dashboard/mentors'));
        } else {
            $this->load->view('admin/add_mentors', $data);
        }
    }

    public function edit_mentors($id)
    {


        $data['title'] = 'Update mentors';
        $data['tag'] = 'edit';
        $tid = decryptId($id);
        $data['mentors'] = $this->CommonModal->getRowById('mentors', 'mid', $tid);

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $image_url = $post['image'];

            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/mentors/');
                $post['image'] = $img;
                if ($image_url != "") {
                    unlink('uploads/mentors/' . $image_url);
                }
            }
            $category_id = $this->CommonModal->updateRowById('mentors', 'mid', $tid, $post);
            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">mentors Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">mentors Updated successfully</div>');
            }
            redirect(base_url('admin_Dashboard/mentors'));
        } else {
            $this->load->view('admin/add_mentors', $data);
        }
    }



    public function disable()
    {
        $id = $this->uri->segment(3);
        $table = $this->uri->segment(4);
        $status = $this->uri->segment(5);



        if ($table == 'mentors') {
            $this->CommonModal->updateRowById($table, 'mid', $id, array('is_visible' => $status));
            redirect(base_url('admin_Dashboard/mentors'));
        }

        if ($table == 'blog') {
            $this->CommonModal->updateRowById($table, 'blog_id', $id, array('is_visible' => $status));
            redirect(base_url('admin_Dashboard/blogs'));
        }
        if ($table == 'initiatives') {
            $this->CommonModal->updateRowById($table, 'id', $id, array('is_visible' => $status));
            redirect(base_url('admin_Dashboard/initiatives'));
        }
    }

    public function banner()
    {

        $data['title'] = "Success Stories";
        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('home_banne', array('bid' => decryptId($BdID)));
            unlink('./uploads/blogs/' . $img);
            redirect('admin_Dashboard/blogs');
            exit;
        }
        $data['banner'] = $this->CommonModal->getAllRows('bc_home_banner');
        $this->load->view('admin/banner', $data);
    }

    public function add_banner()
    {

        $data['title'] = 'Add Stories';
        $data['tag'] = 'add';

        if (count($_FILES) > 0) {
            $post = $this->input->post();

            $post['image'] = imageUpload('img', 'uploads/banner/');

            $category_id = $this->CommonModal->insertRowReturnId('bc_home_banner', $post);
            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Banner Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Something went wrong</div>');
            }
            redirect(base_url('admin_Dashboard/banner'));
        } else {
            $this->load->view('admin/add_banner', $data);
        }
    }


    public function edit_banner($id)
    {

        $data['title'] = 'Update Banner';
        $data['tag'] = 'edit';

        $tid = decryptId($id);
        $data['banner'] = $this->CommonModal->getRowById('bc_home_banner', 'bid', $tid);

        if (count($_POST) > 0) {
            $post = $this->input->post();


            $image_url = $post['image'];

            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/banner/');
                $post['image'] = $img;
                if ($image_url != "") {
                    unlink('uploads/banner/' . $image_url);
                }
            }


            $category_id = $this->CommonModal->updateRowById('bc_home_banner', 'bid', $tid, $post);
            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Banner Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Something went wrong</div>');
            }
            redirect(base_url('admin_Dashboard/banner'));
        } else {
            $this->load->view('admin/add_banner', $data);
        }
    }

    public function whats_new()
    {

        $data['title'] = "what's New";
        $data['tag'] = 'edit';


        $data['banner'] = $this->CommonModal->getRowById('bc_whats_new', 'bid', '1');

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $image_url = $post['image'];

            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img',  'uploads/new/');
                $post['image'] = $img;
                if ($image_url != "") {
                    unlink('uploads/new/' . $image_url);
                }
            }

            $category_id = $this->CommonModal->updateRowById('bc_whats_new', 'bid', '1', $post);
            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Banner Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Something went wrong</div>');
            }
            redirect(base_url('admin_Dashboard/whats_new'));
        } else {
            $this->load->view('admin/whats_new', $data);
        }
    }

    public function blogs()
    {
        $data['title'] = "Blogs";
        $data['tag'] = "blog";
        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('bc_blog', array('blog_id' => decryptId($BdID)));
            unlink('./uploads/blogs/' . $img);
            redirect('admin_Dashboard/blogs');
            exit;
        }
        $data['blogs'] = $this->CommonModal->getAllRows('bc_blog');
        $this->load->view('admin/blogs', $data);
    }


    public function add_blog()
    {
        $data['title'] = "Add Blog";
        $data['tag'] = "blog";

        if (count($_POST) > 0) {
            $post = $this->input->post();

            $video_path = preg_replace("#.*youtube\.com/watch\?v=#", "", $post['video']);
            $video_path = preg_replace("#.*https://youtu.be/#", "", $post['video']);

            $post['video'] =  $video_path;
            $post['image'] = imageUpload('img', 'uploads/blogs/');

            $savedata = $this->CommonModal->insertRowReturnId('blog', $post);
            if ($savedata) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Add Successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Add Successfully</div>');
            }
            redirect(base_url('admin_Dashboard/blogs'));
        } else {
            $this->load->view('admin/add_blog', $data);
        }
    }



    public function edit_blog($id)
    {


        $data['title'] = 'Update Blog';
        $data['tag'] = "blog";
        $tid = decryptId($id);
        $data['blog'] = $this->CommonModal->getRowById('bc_blog', 'blog_id', $tid);

        if (count($_POST) > 0) {
            $post = $this->input->post();


            $image_url = $post['image'];

            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/blogs/');
                $post['image'] = $img;
                if ($image_url != "") {
                    unlink('uploads/blogs/' . $image_url);
                }
            }
            $video_path = preg_replace("#.*youtube\.com/watch\?v=#", "", $post['video']);
            $video_path = preg_replace("#.*https://youtu.be/#", "", $post['video']);

            $post['video'] =  $video_path;


            $category_id = $this->CommonModal->updateRowById('blog', 'blog_id', $tid, $post);
            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Updated successfully</div>');
            }
            redirect(base_url('admin_Dashboard/blogs'));
        } else {
            $this->load->view('admin/edit_blog', $data);
        }
    }




    public function initiatives()
    {
        $data['title'] = "Initiatives";
        $data['tag'] = "initiatives";
        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('bc_initiatives', array('id' => decryptId($BdID)));
            unlink('./uploads/initiatives/' . $img);
            redirect('admin_Dashboard/initiatives');
            exit;
        }
        $data['blogs'] = $this->CommonModal->getAllRows('bc_initiatives');
        $this->load->view('admin/blogs', $data);
    }


    public function add_initiatives()
    {
        $data['title'] = "Add Initiatives";
        $data['tag'] = "initiatives";

        if (count($_POST) > 0) {
            $post = $this->input->post();

            $video_path = preg_replace("#.*youtube\.com/watch\?v=#", "", $post['video']);
            $video_path = preg_replace("#.*https://youtu.be/#", "", $post['video']);

            $post['video'] =  $video_path;
            $post['image'] = imageUpload('img', 'uploads/initiatives/');

            $savedata = $this->CommonModal->insertRowReturnId('bc_initiatives', $post);
            if ($savedata) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Initiatives Add Successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Initiatives Add Successfully</div>');
            }
            redirect(base_url('admin_Dashboard/initiatives'));
        } else {
            $this->load->view('admin/add_blog', $data);
        }
    }



    public function edit_initiatives($id)
    {


        $data['title'] = 'Update Initiatives';
        $data['tag'] = "initiatives";
        $tid = decryptId($id);
        $data['blog'] = $this->CommonModal->getRowById('initiatives', 'id', $tid);

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $video_path = preg_replace("#.*youtube\.com/watch\?v=#", "", $post['video']);
            $video_path = preg_replace("#.*https://youtu.be/#", "", $post['video']);

            $post['video'] =  $video_path;

            $image_url = $post['image'];

            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/initiatives/');
                $post['image'] = $img;
                if ($image_url != "") {
                    unlink('uploads/initiatives/' . $image_url);
                }
            }


            $category_id = $this->CommonModal->updateRowById('initiatives', 'id', $tid, $post);
            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Initiatives Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Initiatives Updated successfully</div>');
            }
            redirect(base_url('admin_Dashboard/initiatives'));
        } else {
            $this->load->view('admin/edit_blog', $data);
        }
    }



    public function newsletter()
    {

        $data['title'] = "Newsletter";
        $table = "newsletter";
        $BdID = $this->input->get('BdID');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('newsletter', array('id' => decryptId($BdID)));

            redirect('Admin_Dashboard/newsletter');
            exit;
        }
        $data['newsletter'] = $this->CommonModal->getAllRows($table);
        $this->load->view('admin/newsletter', $data);
    }

    public function contact_query()
    {

        $data['title'] = "Contact Query";
        $table = "contact_query";
        $BdID = $this->input->get('BdID');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('contact_query', array('cid' => decryptId($BdID)));

            redirect('Admin_Dashboard/contact_query');
            exit;
        }
        $data['contact'] = $this->CommonModal->getAllRows($table);
        $this->load->view('admin/contact', $data);
    }

    public function contactdetails()
    {
        $data['title'] = "Contact Details";
        $table = "contactdetails";

        $data['contactdetails'] = $this->CommonModal->getRowById($table, 'cid', '1');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $update = $this->CommonModal->updateRowByMoreId($table, array('cid' => '1'), $post);
            if ($update) {

                $this->session->set_flashdata('msg', 'Category Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url() . 'admin_Dashboard/contactdetails');
        } else {
            $this->load->view('admin/contactdetails', $data);
        }
    }

    public function policy()
    {
        $data['title'] = "Policy";

        $data['policy'] = $this->CommonModal->getAllRowsInOrder('policy', 'id', 'desc');
        $this->load->view('admin/policy', $data);
    }

    public function policy_edit()
    {
        $key = $this->uri->segment(3);
        $data['title'] = "Policy Edit";
        $id = decryptId($key);

        $data['policy'] = $this->CommonModal->getRowById('policy', 'id', $id);
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $savedata = $this->CommonModal->updateRowById('policy', 'id', $id, $post);
            if ($savedata) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Policy Update Successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Policy Update Successfully</div>');
            }
            redirect(base_url('admin_Dashboard/policy'));
        } else {
            $this->load->view('admin/policy-edit', $data);
        }
    }


    public function testimonials()
    {

        $data['title'] = "Testimonial";
        if (count($_POST) > 0) {
            $post = $this->input->post();

            // $post['testimonial'] = imageUpload('testimonial', 'uploads/testimonials/');

            $savedata = $this->CommonModal->insertRowReturnId('testimonial', $post);
            if ($savedata) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Testimonials Added Successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Something  went wrong</div>');
            }
            redirect(base_url('admin_Dashboard/testimonials'));
        } else {

            $data['testimonials'] = $this->CommonModal->getAllRows('testimonial');
            $this->load->view('admin/testimonials', $data);
        }
    }



    public function deletetestimonials($id)
    {

        if ($this->CommonModal->deleteRowById('testimonial', array('id' => $id))) {
            $this->session->set_flashdata('msg', 'Testimonial Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Testimonial not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }
        redirect('admin_Dashboard/testimonials');
    }


    public function team()
    {
        $table = "team";
        $data['title'] = "Team";
        $data['team'] = $this->CommonModal->getAllRows('team');
        $this->load->view('admin/team', $data);
    }


    public function team_add()
    {
        $data['title'] = "Add Team ";

        $this->load->view('admin/team_add', $data);
    }

    public function addteam()
    {
        $table = 'team';
        if (count($_POST) > 0) {
            print_r($_POST);

            $post = $this->input->post();
            $post['image'] = imageUpload('image', 'uploads/team/');

            if ($this->Dashboard_model->insertdata($table, $post)) {

                $this->session->set_flashdata('msg', 'Team Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url('admin_Dashboard/team'));
        } else {
            redirect(base_url('admin_Dashboard/team'));
        }
    }

    public function editteam()
    {
        $id = $this->uri->segment(3);
        // echo $id;

        $data['title'] = "Edit Team";
        $data['team'] = $this->CommonModal->getRowById('team', 'id', $id);
        if (count($_POST) > 0) {
            $post = $this->input->post();

            $temp_image = $post['image'];

            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/team/');
                $post['image'] = $img;
                if ($temp_image != "") {
                    unlink('uploads/team/' . $temp_image);
                }
            }
            $update = $this->CommonModal->updateRowById('team', 'id', $id, $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'Team Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url('admin_Dashboard/team'));
        } else {
            $this->load->view('admin/edit_team', $data);
        }
    }

    public function deleteteam($id)
    {

        $table = "team";

        $data = $this->CommonModal->getRowById('team', 'id', $id);
        if (file_exists("uploads/team/" . $data[0]['image'])) {
            unlink('uploads/team/' . $data[0]['image']);
        }

        if ($this->CommonModal->deleteRowById($table, array('id' => $id))) {
            $this->session->set_flashdata('msg', 'Team Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'team not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }


        redirect('admin_Dashboard/team');
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        redirect('Admin');
    }
}
