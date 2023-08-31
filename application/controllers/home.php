<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		$this->load->model('home_model');
		$category=$this->home_model->product_category();
		$product=$this->home_model->product_category_horizontal();
		$product_details=$this->home_model->product_details();
		$cart_details=$this->home_model->cart_product();
		$this->load->view('include/header',['item'=>$product,'category'=>$category,'cart_details'=>$cart_details]);
		$this->load->view('index',['product_details'=>$product_details]);
		$this->load->view('include/footer');
	}

	public function register(){

		$data=[
			'fname'=>$this->input->post('fname'),
			'lname'=>$this->input->post('lname'),
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')),
			'mobile'=>$this->input->post('mobile'),
			'address'=>$this->input->post('address')
		];
		// echo "<pre>"; print_r($data); die;
		$this->load->model('home_model');
		$this->home_model->user_register($data);
		return redirect('home/login');
	}

	public function login(){
		$this->load->view('login');
	}

	public function login_currectly()
	{
		$this->load->model('home_model');
		$u_name = $this->input->post('email');
		$pass = md5($this->input->post('password'));

		$loginId = $this->home_model->check_user_authentication($u_name, $pass);
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
		$this->session->unset_userdata('id');
		return redirect('home/index');
	}

	public function profile(){
		$this->load->model('home_model');
		$profile_data=$this->home_model->profile_data();
		//echo '<pre>'; print_r($a); die;
		$user_detail=$this->session->userdata();
		$this->load->view('profile',['user_detail'=>$user_detail,'profile_data'=>$profile_data]);
	}
	public function edit_profile($id){
		$data=[
			'fname'=>$this->input->post('fname'),
			'lname'=>$this->input->post('lname'),
			'email'=>$this->input->post('email'),
			'mobile'=>$this->input->post('mobile'),
			'password'=>$this->input->post('password')
		];
		$this->load->model('home_model');
		$this->home_model->profile_edit($id,$data);
		return redirect('home/profile');
	}

	public function cart_data(){
		$this->load->library('cart');
		$this->load->model('home_model');
		$data = array(
			'u_id'=>$this->session->userdata('id'),
			'id'      =>$this->input->post('id'),
			'qty'     => 1,
			'price'   => $this->input->post('price'),
			'name'    => $this->input->post('name'),
			'image'   =>$this->input->post('image'),
			'details'   =>$this->input->post('details'),
			'shipping'   =>$this->input->post('shipping')
 		 );
			$this->cart->insert($data);
		}

		function cart(){
			$this->load->library('cart');
			//echo '<pre>'; print_r($this->cart->contents()); die;
			$this->load->model('home_model');

			$category=$this->home_model->product_category();
			$product=$this->home_model->product_category_horizontal();
			$this->load->view('include/header',['item'=>$product,'category'=>$category]);
			$this->load->view('cart');
		}
		function qtyUpdate(){
        	$update = 0;
        	$rowid = $this->input->get('rowid');
        	$qty = $this->input->get('qty');
      
        	if(!empty($rowid) && !empty($qty)){
            	$data = array(
                	'rowid' => $rowid,
                	'qty'   => $qty
            	);
            	$update = $this->cart->update($data);
        	}
        	echo $update?'ok':'err';
    }
 
		function cart_item_remove($rowid){
			$remove = $this->cart->remove($rowid);
			return redirect('home/cart');
		}
		function cart_dest(){
			echo $this->cart->destroy();
		}

	public function myorder11(){
		$this->load->model('home_model');
		$category=$this->home_model->product_category();
		$product=$this->home_model->product_category_horizontal();
		$cart_details=$this->home_model->cart_product();
		$this->load->view('include/header',['item'=>$product,'category'=>$category,'cart_details'=>$cart_details]);
		$this->load->view('myorder11');
	}
	public function myorder(){
		$this->load->model('home_model');
		$product_order_details=$this->home_model->order_detail();
		//echo '<pre>'; print_r($product_order_details); die;
		$this->load->view('myorder',['order_detail'=>$product_order_details]);
	}


	public function wishlist_add(){
		$this->load->model('home_model');
		$user_id=$this->session->userdata('id');
		$p_id=$this->input->post('id');
		$p_name=$this->input->post('name');
		$p_price=$this->input->post('price');
		$p_img=$this->input->post('image');
		$wish_product=$this->db->select('*')
                                    ->from('tbl_wishlist')
                                    ->where('u_id',$user_id)
                                    ->where('p_id',$p_id)
                                    ->get()
                                    ->row();
			

            if($wish_product== ''){
				$data=array(
                    'u_id' => $user_id,
                    'p_id' => $p_id,
                    'p_name' =>$p_name,
                    'p_img'=>$p_img,
                    'p_price' => $p_price
                );
                
              $this->db->insert('tbl_wishlist',$data);
            }
			return redirect('home/wishlist');
	}


	public function wishlist(){
		$this->load->model('home_model');
		$wish_details=$this->home_model->wishlist_product();
		$category=$this->home_model->product_category();
		$product=$this->home_model->product_category_horizontal();
		$cart_details=$this->home_model->cart_product();
		$this->load->view('include/header',['item'=>$product,'category'=>$category,'cart_details'=>$cart_details]);
		$this->load->view('wishlist',['product_details'=>$wish_details]);
		$this->load->view('include/footer');
	}
	public function product_delete_wishlist($w_id) {   
		$this->load->model("home_model");
		$this->home_model->wishlist_delete_item($w_id);
		redirect('home/wishlist');
	}

	public function detail($p_id){
		$this->load->model('home_model');
		$full_product_details=$this->home_model->product_details();
		$product_details=$this->home_model->product_full_details($p_id);
		$category=$this->home_model->product_category();
		$product=$this->home_model->product_category_horizontal();
		$cart_details=$this->home_model->cart_product();
		$this->load->view('include/header',['item'=>$product,'category'=>$category,'cart_details'=>$cart_details]);
		$this->load->view('details',['full_product'=>$full_product_details,'product_details'=>$product_details]);
		$this->load->view('include/footer');
	}

	public function checkout(){
		$this->load->model('home_model');
		$category=$this->home_model->product_category();
		$product=$this->home_model->product_category_horizontal();
		$this->load->view('include/header',['item'=>$product,'category'=>$category]);
		$address=$this->home_model->address_display();
		$this->load->view('checkout',['address'=>$address]);
		$this->load->view('include/footer');
	}

	public function order(){
		//echo '<pre>'; print_r($_POST); die;
		$data=[
			'c_id'=>$this->session->userdata('id'),
			'total_price'=>$this->cart->total(),
			'create_date'=>date("Y-m-d H:i:s"),
			'modified'=>date("Y-m-d H:i:s")
		];
		$this->load->model('home_model');
		$a=$this->home_model->order($data);
		
		$ordItemData = array();
		$i=0;
		foreach($this->cart->contents() as $item){
			$ordItemData[$i]['o_id']     = $a;
			$ordItemData[$i]['shipping_id']=$this->input->post('s_id');
			$ordItemData[$i]['p_id']     = $item['id'];
			$ordItemData[$i]['quantity'] = $item['qty'];
			$ordItemData[$i]['sub_total']= $item["subtotal"];
			$i++;
		}
		//echo '<pre>'; print_r($ordItemData); die;
	
		$this->home_model->order_item($ordItemData);
		
		//
		//payment
		$pay=[
			'c_id'=>$this->session->userdata('id'),
			'o_id'=>$a,
			'pay_type'=>$this->input->post('pay'),
			'pay_date_time'=>date("Y-m-d H:i:s")
		];
		$this->home_model->payment($pay);
		$this->cart->destroy();

		//echo '<pre>'; print_r($pay); die;
		return redirect('home/index');
	}

	function manage_address(){
		$this->load->model('home_model');
		$address=$this->home_model->address_display();
		$this->load->view('manage_address',['new_address'=>$address]);
	}
	function manage_address_add(){
		//echo '<pre>'; print_r($_POST); die;
		$data=[
			'c_id'=>$this->session->userdata('id'),
			'name'=>$this->input->post('c_name'),
			'mobile'=>$this->input->post('mobile'),
			'pin'=>$this->input->post('pin'),
			'locality'=>$this->input->post('locality'),
			'address'=>$this->input->post('address'),
			'city'=>$this->input->post('city'),
			'state'=>$this->input->post('state'),
			'landmark'=>$this->input->post('landmark'),
			'a_number'=>$this->input->post('a_number'),
			'place'=>$this->input->post('place')
		];
		//echo '<pre>'; print_r($data); die;
		$this->load->model('home_model');
		$this->home_model->add_address($data);
		return redirect('home/manage_address');
	}
	function delete_address($id){
		$this->load->model('home_model');
		$this->home_model->address_remove($id);
		return redirect('home/manage_address');
	}

	function fetch_add(){	
		$id=$this->input->post('id');
		$this->load->model('home_model');
		$data=$this->home_model->fetchAddress($id);
		echo json_encode($data);
	}
	
	function search_bar(){
		$a=$this->input->post('product');
		$this->load->model('home_model');

		$search_product=$this->home_model->search_bar($a);
		$category=$this->home_model->product_category();
		$product=$this->home_model->product_category_horizontal();
		$cart_details=$this->home_model->cart_product();
		$this->load->view('include/header',['item'=>$product,'category'=>$category,'cart_details'=>$cart_details]);
		$this->load->view('search',['search'=>$search_product]);
	}
	   
}
		