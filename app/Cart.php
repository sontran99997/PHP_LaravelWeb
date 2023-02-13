<?php
    namespace App;
    class Cart{
        public $products = null; //danh sach san pham
        public $totalQuatity = 0; //tong so luong cua 1 sp trong gio
        public $totalPrice = 0; //tong tien gia 1 sp
        public function __construct($cart)//cart la 1 gio
        {
            if($cart){
                $this->products = $cart->products;
            }
        }
        public function AddCart($product, $id){
            $newproduct  = ['product'=>$product,'price'=>$product->price,'quantity'=>0];
            if($this->products){//gio hang da co sp==> mang product!= null
                if(array_key_exists($id, $this->products)){
                    //danh sach sp trong gio hang da ton tai 1 sp cp ma la $id
                    //==>lay sp  trong igo hang ra de tang so luong len 1
                    $newproduct = $this->products[$id];//lay sp trong gio hang
                }
                $newproduct['quantity']+=1; //tang so luong sp len 1
                //so tien moi = so luong moi * gia tien cua sp do
                $newproduct['price']= $product->price * $newproduct['quantity'];
                //cap nhat sp nay vao lai giohang
                $this->products[$id] = $newproduct;
            }
        }
    }
?>