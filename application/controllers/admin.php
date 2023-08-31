<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class admin extends CI_Controller {

        public function login(){
            $this->load->view('admin/login');
        }
        public function login_currectly(){
		    $this->load->model('admin_model');
		    $u_name = $this->input->post('email');
		    $pass = ($this->input->post('password'));

		    $loginId = $this->admin_model->check_user_authentication($u_name, $pass);
		    $count= count($loginId);
		    if ($count>0) {
			    foreach ($loginId as $row) {
				    $this->session->set_userdata($row);
			    }
			    echo "<script>alert('You Are Sucessfully Login !!')</script>";
			    echo "<script>location.href='index'</script>";
		    }else {
			    echo "<script>alert('Wrong Username Or Password !!')</script>";
			    echo "<script>location.href='login'</script>";
		    }
	    }
        public function logout(){
		    $this->session->unset_userdata('a_id');
		    return redirect('admin/login');
	    }

        public function index(){
            $this->load->view('admin/include/header');
            $this->load->view('admin/index');
            $this->load->view('admin/include/footer');
        }

        public function uploadImage($attribute_name){
            $config = [];
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['upload_path']   = './assets/uploads/';


            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload($attribute_name)) {
                $result = $this->upload->data();
                $output = 'assets/uploads/' . $result['file_name'];
                return $output;
            } else {
                log_message('error', 'File upload error: ' . $this->upload->display_errors());
                return NULL;
            }
        }
        public function category_list(){
            $this->load->model('admin_model');
            $item_category=$this->admin_model->category_display();
            $this->load->view('admin/include/header');
            $this->load->view('admin/category_list',['category_list'=>$item_category]);
        }
        public function category(){
            $this->load->view('admin/include/header');
            $this->load->view('admin/category');
        }

        public function add_category(){
            $data=['c_name'=>$this->input->post('category_name')];
            $this->load->model('admin_model');
            $this->admin_model->add_category($data);
            redirect('admin/category');
        }  
        public function edit_category($id){
            $this->load->model('admin_model');
            $item=$this->admin_model->category_display_edit($id);
            $this->load->view('admin/include/header');
            $this->load->view('admin/category_edit',['item'=>$item]);
        } 

        public function category_update($id){
            $data=['c_name'=>$this->input->post('category_name')];
           // echo '<pre>'; print_r($data); die;
            $this->load->model('admin_model');
            $this->admin_model->update_category($id,$data);
            redirect('admin/category_list');

        }

        public function category_delete($id){
            $this->load->model('admin_model');
            $this->admin_model->delete_category($id);
            redirect('admin/category_list');
        }

        public function sub_category_list(){
            $this->load->model('admin_model');
            $sub_category=$this->admin_model->sub_category_list();
            $this->load->view('admin/include/header');
            $this->load->view('admin/sub_category_list',['sub_category'=>$sub_category]);
        }

        public function sub_category(){
            $this->load->model('admin_model');
            $item=$this->admin_model->category_display();
            $this->load->view('admin/include/header');
            $this->load->view('admin/sub_category',['item_category'=>$item]);
        }

        public function add_sub_category(){
            $data=[
                'c_id'=>$this->input->post('c_id'),
                's_name'=>$this->input->post('sub_category_name')
                ];
            $this->load->model('admin_model');
            $this->admin_model->add_sub_category($data);
            redirect('admin/sub_category');
        }
        public function edit_sub_category($id){
            $this->load->model('admin_model');
            $item=$this->admin_model->category_display($id);
            
            $this->load->view('admin/include/header');
            $this->load->view('admin/sub_category_edit',['item_category'=>$item]);
        }
        
        public function product(){
            $this->load->model('admin_model');
            $item_category=$this->admin_model->category_display();
            $item_detail=$this->admin_model->product_details();
            $this->load->view('admin/include/header');
            $this->load->view('admin/product',['item_category'=>$item_category,'item_detail'=>$item_detail]);
        }

        public function sub_category_find(){
            $this->load->model('admin_model');
            if($this->input->post('c_id')){
                echo $this->admin_model->fetch_sub_category( $this->input->post('c_id'));
            }
        }
        public function add_product(){

            //echo '<pre>'; print_r($_POST); die;
            $data=[
                'p_type'=>$this->input->post('p_type'),
                'p_name'=>$this->input->post('p_name'),
                'p_details'=>$this->input->post('detail'),
                'p_price'=>$this->input->post('price'),
                'p_discount'=>$this->input->post('discount'),
                'p_category_id'=>$this->input->post('c_id'),
                'p_sub_category_id'=>$this->input->post('sub_id'),
                'p_tax'=>$this->input->post('p_tax'),
                'shipping_charge'=>$this->input->post('p_shipping'),
                'p_img'=>$this->uploadImage('img'),
                'p_img2'=>$this->uploadImage('img2'),
                'p_img3'=>$this->uploadImage('img3'),
                'p_img4'=>$this->uploadImage('img4')
            ];
            $this->load->model('admin_model');
            $this->admin_model->add_product_data($data);
            redirect('admin/product');
        }

        function product_edit($id){
            $this->load->model('admin_model');
            $edit_item=$this->admin_model->product_edit($id);
            $item_category=$this->admin_model->category_display();
            $this->load->view('admin/include/header');
            $this->load->view('admin/product_edit',['edit_item'=>$edit_item,'item_category'=>$item_category]);
        }
        public function sub_category_find_edit(){
            $this->load->model('admin_model');
            if($this->input->post('c_id')){
                echo $this->admin_model->fetch_sub_category_edit( $this->input->post('c_id'));
            }
        }

        function product_detail_edit($id){
            $data=[
                'p_type'=>$this->input->post('p_type'),
                'p_name'=>$this->input->post('p_name'),
                'p_details'=>$this->input->post('detail'),
                'p_price'=>$this->input->post('price'),
                'p_discount'=>$this->input->post('discount'),
                'p_category_id'=>$this->input->post('p_category_id'),
                'p_sub_category_id'=>$this->input->post('s_id'),
                'p_tax'=>$this->input->post('p_tax'),
                'shipping_charge'=>$this->input->post('shipping'),
                'p_img'=>$this->uploadImage('img'),
                'p_img2'=>$this->uploadImage('img2'),
                'p_img3'=>$this->uploadImage('img3'),
                'p_img4'=>$this->uploadImage('img4')
            ];
            $this->load->model('admin_model');
            $this->admin_model->product_edit_data($id,$data);
            redirect('admin/product');
        }
        
        public function product_delete($id){
            $this->load->model('admin_model');
            $this->admin_model->product_delete($id);
            redirect('admin/product');
        }

        public function order_list(){
            $this->load->model('admin_model');
            $order_data=$this->admin_model->order_details();
            //echo '<pre>'; print_r($order_data); die;
            $this->load->view('admin/include/header');
            $this->load->view('admin/order',['order'=>$order_data]);
            $this->load->view('admin/include/footer');
        }
    }
?>