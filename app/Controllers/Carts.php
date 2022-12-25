<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Carts extends BaseController
{
    public $productModel;
    public $cart;
    public $cmdModel;

    function __construct(){
        $this->productModel = model(ProductModel::class);
        $this->cart         = Services::cart();
        $this->cartModel    = model(CartModel::class);
        $this->cmdModel     = model(CommandeModel::class);
        helper('date');       
    }

    public function index(){
        $data = [
            'title'     => 'Ajout au Panier | Heaven flag',
            'coords'    => $this->coordModel->first(),
            'products'  => $this->productModel->getProduct()
        ];
        return view('carts/index',$data);
    }
    public function shopping(){
        $hash = md5(str_shuffle("abcdefghijklmnopqrstuvwxyz".time()));
        $data = [
            'title'     => 'Shopping Cart',
            'coords'    => $this->coordModel->first(),
            'products'  => $this->productModel->getProduct(),
            'total'     => $this->cart->total(),
            'hash'      => $hash,
        ];
        $rules = $this->cmdModel->validationRules;
        
        if($this->request->getMethod() === 'post' && $this->validate($rules)){
            $data = [
                'hash'          => $hash,
                'client'        => $this->request->getPost('client'),
                'phone'         => $this->request->getPost('phone'),
                'mean'          => $this->request->getPost('mean'),
                'proof'         => $this->request->getPost('proof'),
                'amount'        => $this->request->getPost('amount'),
                'status'        => 'attente',
                'created_at'    => date('Y-m-d H:i:s'),
            ];
            $this->cmdModel->insert($data);
            session()->set('carting', $data);
            $this->saveCart();
            return redirect()->to('/success');
        }else{
            $data['validation'] = $this->validation->getErrors();
        }

        return view ('carts/shopping',$data);
    }
    public function success(){
        $data = [
            'title'  => 'Confirmation',
            'coords'   => $this->coordModel->first(),
        ];
        $this->cart->destroy();
        session()->remove('carting');
        return view('products/success',$data);
    }
    function clear(){
        if($this->request->isAJAX()){            
            $this->cart->destroy();
        }
    }
    
    function add(){ 
        if($this->request->isAJAX()){
            $data = array(
                'id'    => $this->request->getPost('product_id'), 
                'name'  => $this->request->getPost('product_name'), 
                'qty'   => $this->request->getPost('product_quantity'), 
                'price' => $this->request->getPost('product_price'), 
            );
            
            $this->cart->insert($data);
        }
    }
    function load(){
        if ($this->request->isAJAX()) {
            echo $this->view();
        }
    }
    function remove()
    {
        if($this->request->isAJAX()){
            $row_id = $_POST["row_id"];
            $this->cart->remove($row_id);
        }
    }
    function view(){
        
        $output = '';
        $output .= '
            <div class="table-responsive" id="order_table">
                <table class="table table-bordered table-striped">
                    <tr>  
                        <th width="40%">Article</th>  
                        <th width="10%">Quantité</th>  
                        <th width="20%">Prix</th>  
                        <th width="15%">Total</th>  
                        <th width="5%">Action</th>  
                    </tr>
        ';
     
        $shopping_cart = $this->cart->contents();

        if($shopping_cart != null){

            foreach($shopping_cart as $items)
            {              
                $output .= '
                    <tr> 
                        <td>'.$items["name"].'</td>
                        <td>'.$items["qty"].'</td>
                        <td align="center">$'.$items["price"].'</td>
                        <td align="center">$'.$items["subtotal"].'</td>
                        <td>
                            <button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$items["rowid"].'">
                                Supprimer
                            </button>
                        </td>
                    </tr>
                ';
            }
            
            $output .= '
                <tr>  
                    <td colspan="3" align="center">Total</td>  
                    <td align="center">$ '.$this->cart->total().'</td>  
                    <td></td>  
                </tr>  
            ';
        }else{
            $output = '
                <tr>
                    <td colspan="5" align="center">
                        Votre Panier est encore vide!
                    </td>
                </tr>
            ';
        } 

        $output .= '</table></div>';

        $datum = [
            'cart_details'		=>	$output,
            'total_price'		=>	'$' . $this->cart->total(),
            'total_item'		=>	$this->cart->totalItems()
        ];
        return json_encode($datum);
    }


    public function saveCart(){   
        $carting = session()->get('carting');
        $products = $this->cart->contents();
        foreach ($products as $prod) {
            $produit = [
                'hash'      => $carting['hash'],
                'client'    => $carting['client'],
                'phone'     => $carting['phone'],
                'prod_id'   => $prod['id'],
                'quantity'  => $prod['qty'],
                'total'     => $prod['price'],
                'status'    => 'attente',
                'created_at'=> date('Y-m-d H:i:s')
            ];
            $this->cartModel->insert($produit);            
        }     
    }

    function dealing($hash, $typekey)
    {
        if (!is_logged()) return redirect()->to('/login');
        $cmd = $this->cmdModel->getCommandeByHash($hash);
        if (!empty($cmd)) {

            if ($typekey == 'process') {
                $data = ['status' => 'en cours'];
            } elseif ($typekey == 'done') {
                $data = ['status' => 'traité'];
            }
            $id = $cmd['cmd_id'];
            $this->cmdModel->update($id,$data);

        } else {
            return redirect()->back();
        }
        return redirect()->to('/profile');

    }
    function details($hash){
        $data = [
            'title'     => 'Détails commande',
            'carting'   => $this->cartModel->getCartByHash($hash),
        ];
        return view ('carts/admin/details', $data);
    }
    
    function getProductName($prod){
        $product = $this->productModel->getProduct($prod);
        return $product['name']; 
    }
    function getProductPicture($prod){
        $product = $this->productModel->getProduct($prod);
        return $product['picture']; 
    }
}
