<?php 
    class admin_model extends CI_Model{
        function check_user_authentication($u_name, $pass){
            $this->db->select('*');
            $this->db->where('a_email', $u_name);
            $this->db->where('a_password', $pass);
            return $this->db->from('tbl_admin')->get()->result_array();
        }
        function add_category($data){
            $this->db->insert('category',$data);
        }

        function category_display(){
            return $this->db->select('*')
                            ->from('category')
                            ->order_by('c_name','ASC')
                            ->get()->result_array();
        }

        function add_sub_category($data){
            $this->db->insert('tbl_sub_category',$data);
        }

        function category_display_edit($id){
            return $this->db->select('*')
                            ->from('category')
                            ->where('c_id',$id)
                            ->order_by('c_name','ASC')
                            ->get()->result_array();
        }

        function update_category($id,$data){
                $this->db->where('c_id',$id);
                $this->db->update('category',$data);
        }

        function delete_category($id){
            $this->db->where('c_id',$id)
                    ->delete('category');
        }

        function fetch_sub_category($c_id){
            $this->db->where('c_id',$c_id);
            $this->db->order_by('s_name','ASC');
            $query=$this->db->get('tbl_sub_category');
            $output='<option value="">Select Sub Category</option>';
            foreach($query->result() as $row){
                $output .='<option value =" '.$row->s_id.'">'.$row->s_name.'</option>';
            }
            return $output;
        }
        function sub_category_list(){
           return $this->db->select('*')
                    ->from('tbl_sub_category')
                    ->join('category','category.c_id=tbl_sub_category.c_id')
                    ->get()->result_array();
        }

        function add_product_data($data){
            $this->db->insert('tbl_product_details',$data);
        }

        function product_details(){
            return $this->db->select('*')
                            ->from('tbl_product_details')
                            ->get()->result_array();
        }
        function product_edit($id){
            return $this->db->select('*')
                            ->from('tbl_product_details')
                            ->where('p_id',$id)
                            ->join('category','category.c_id=tbl_product_details.p_category_id')
                            ->join('tbl_sub_category','tbl_sub_category.s_id=tbl_product_details.p_sub_category_id')
                            ->get()->result_array();
        }
        function product_edit_data($id,$data){
            $this->db->where('p_id',$id);
            $this->db->update('tbl_product_details',$data);
        }
        function product_delete($id){
            $this->db->where('p_id',$id)
                    ->delete('tbl_product_details');
        }
        function fetch_sub_category_edit($c_id){
            $this->db->where('c_id',$c_id);
            $this->db->order_by('s_name','ASC');
            $query=$this->db->get('tbl_sub_category');
            $output='<option value="">Select Sub Category</option>';
            foreach($query->result() as $row){
                $output .='<option value =" '.$row->s_id.'">'.$row->s_name.'</option>';
            }
            return $output;
        }

        function order_details(){
           return  $this->db->select('*')
                    ->from('tbl_order')
                    ->join('tbl_order_item','tbl_order_item.o_id=tbl_order.o_id')
                    ->join('tbl_product_details','tbl_order_item.p_id=tbl_product_details.p_id')
                    ->join('tbl_shipping_address','tbl_shipping_address.shipping_id=tbl_order_item.shipping_id')
                    ->join('tbl_payment','tbl_order.o_id=tbl_payment.o_id')
                    ->get()->result_array();
        }
    }
?>