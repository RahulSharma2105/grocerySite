<?php
    class home_model extends CI_Model{
        
        public function user_register($data){
            $this->db->insert('tbl_user_profile',$data);
        }

        function check_user_authentication($u_name, $pass){
            $this->db->select('*');
            $this->db->where('email', $u_name);
            $this->db->where('password', $pass);
            return $this->db->from('tbl_user_profile')->get()->result_array();
        }
        function product_category(){
            return $this->db->select('*')
                            ->from('category')->get()->result_array();
        }

        function product_category_horizontal(){
                return $this->db->select('*')
                                ->from('tbl_product_details')
                                ->join('tbl_sub_category','tbl_product_details.p_sub_category_id = tbl_sub_category.s_id')
                                ->join('category','category.c_id = tbl_product_details.p_category_id')
                                ->get()->result_array();
        }   
        
        function product_details(){
            return $this->db->select('*')
                        ->from('tbl_product_details')
                        ->get()
                        ->result_array(); 
        }
        public function product_full_details($p_id){
            return $this->db->select('*')
                            ->from('tbl_product_details')
                            ->where('p_id',$p_id)
                            ->group_by("p_type")
                            ->get()
                            ->result_array();
        }
        public function cart_product(){
            $id=$this->session->userdata('id');
            return $this->db->select('*')
                            ->from('tbl_cart')
                            ->where('u_id',$id)
                            ->join('tbl_product_details','tbl_product_details.p_id = tbl_cart.p_id')
                            ->get()->result_array();
        }
        public function cart_delete_item($id){
            $this -> db -> where('cart_id', $id);
            $this -> db -> delete('tbl_cart');
        }

        public function wishlist_product(){
            $id=$this->session->userdata('id');
            return $this->db->select('*')
                            ->from('tbl_wishlist')
                            ->where('u_id',$id)->get()->result_array();
        }
        public function wishlist_delete_item($id){
            $this -> db -> where('w_id', $id);
            $this -> db -> delete('tbl_wishlist');
        }
        public function order($data){
            $insert=$this->db->insert('tbl_order',$data);
            return $insert?$this->db->insert_id():false;
        }
        function order_item($data){
           return  $this->db->insert_batch('tbl_order_item', $data);
        }

        function order_detail(){
           return $this->db->select('*')
                    ->from('tbl_order')
                    ->where('c_id',$this->session->userdata('id'))
                    ->join('tbl_order_item','tbl_order_item.o_id=tbl_order.o_id')
                    ->join('tbl_product_details','tbl_order_item.p_id=tbl_product_details.p_id')
                    ->order_by('order_item_id','desc')
                    ->get()->result_array();
        }

        function profile_data(){
           return $this->db->select('*')
                    ->from('tbl_user_profile')
                    ->where('id',$this->session->userdata('id'))
                    ->get()->result_array();
        }

        function profile_edit($id,$data){
            $this->db->where('id',$id);
            $this->db->update('tbl_user_profile',$data);
        }
        function add_address($data){
            $this->db->insert('tbl_shipping_address',$data);
        }
        function address_display(){
           return  $this->db->select('*')->from('tbl_shipping_address')
                            ->where('c_id',$this->session->userdata('id'))
                            ->get()->result_array();
        }
        
        function address_remove($id){
            $this->db->where('shipping_id',$id)->delete('tbl_shipping_address');
        }

        function fetchAddress($id){
            $this->db->where('shipping_id',$id);
            $data=$this->db->get('tbl_shipping_address')->result_array();
            return $data;
        }
        function payment($data){
            $this->db->insert('tbl_payment',$data);
        }
        function search_bar($product){
           // echo '<pe>'; print_r($product); die;
                $a=$this->db->select('*')
                        ->from('category')
                        ->join('tbl_product_details','category.c_id=tbl_product_details.p_category_id')
                        ->join('tbl_sub_category','tbl_sub_category.s_id=tbl_product_details.p_sub_category_id')
                        ->where('c_name',$product)
                        ->or_where('p_name',$product)
                        ->or_where('s_name',$product)
                        ->get()->result_array();
                // echo '<pre>'; print_r($a); die;
                return $a;
        }
    }
