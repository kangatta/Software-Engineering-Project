<?php
class Order_model extends CI_Model
{
     function  __construct()
    {
        parent:: __construct();
    }
   


function create_order($itemid)
{
        $this->db->where('Item_id', $itemid);
        $query = $this->db->get('stock');
        foreach($query->result() as $row){
                $item_name =  $row->Item_name;
                $item_price = $row->Price;
                $qtty =  $row->Stock;
            
        }

        $orderid = random_int(1000,10000000);

        $userid = $this->session->userdata('username');
      

        $data = array(
            'OrderID' => $orderid,
            'UserID' => $userid,
            'ItemID' => $itemid,
            'ItemName' => $item_name,
            //'ItemDes' => $item_des,
            'Price' => $item_price,
            'Quantity' => $qtty,
            'Status' => "uncompleted"
        );

        $this->db->insert('orders',$data);
        redirect('product/cart');
    }
    function cart(){
        $userid = $this->session->userdata('username');
        $q =$this->db->get_where('orders', array('UserID' => $userid, 'Status' => 'uncompleted'));
        $res = $q->result();
        return $res;
    }
    function del_cart_item($itemNo){
        $this->db->delete('orders', array('ItemID' => $itemNo, 'Status' => 'uncompleted'));
        redirect('product/cart');
    }

    function to_checkout($data){
        for($i=0; $i<sizeof($data);$i++){
            $this->db->update('orders', $data[$i], array('OrderID'=> $data[$i]->OrderID));
        }

    }


}