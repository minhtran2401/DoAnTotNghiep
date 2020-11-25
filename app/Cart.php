<?php 
namespace App;
class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function AddCart($product, $id){
        $newProduct = ['quanty' => 0, 'price'=> $product->price_sp, 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quanty']++;
        $newProduct['price'] = $newProduct['quanty'] * $product->price_sp;
        $this->products[$id] =  $newProduct;
        $this->totalPrice += $product->price_sp;
        $this->totalQuanty++;
    }

    // day nha:
    public function AddCartDetail($product, $id, $qty_sp){
        $newProduct = ['quanty' => 0, 'price'=> $product->price_sp, 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quanty'] += $qty_sp;
        $newProduct['price'] = $newProduct['quanty'] * $product->price_sp;
        $this->products[$id] =  $newProduct;
        $this->totalPrice += $qty_sp * $product->price_sp ;
        $this->totalQuanty +=$qty_sp;
    }

    public function DeleteItemCart($id){
        $this->totalQuanty -= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function UpdateItemCart($id, $quanty){
        $this->totalQuanty -= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quanty'] = $quanty;
        $this->products[$id]['price'] = $quanty * $this->products[$id]['productInfo']->price_sp;

        $this->totalQuanty += $this->products[$id]['quanty'];
        $this->totalPrice += $this->products[$id]['price'];
    }

}
?>