<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Config\Services;

class Carts extends BaseController
{
    public $productModel;
    public $cartModel;
    public $cart;
    public $cmdModel;

    function __construct(){
        $this->productModel = model(Element::class);
        $this->cart         = Services::cart();
        $this->cartModel    = model(Cart::class);
        $this->cmdModel     = model(Commande::class);
        helper('date');       
    }

    public function index(){
        $data = [
            'title'     => 'Ajout au Panier | E-Tech SARL',
            'coords'    => $this->coordModel->first(),
            'accueil' => $this->accModel->first(),
        ];
        return view('carts/index',$data);
    }
    public function detail($segment = null){
        $service = $this->servModel->getServiceBySlug($segment);
        $categ = $this->catModel->join('services','services.srv_id= categories.srv_id')
                                ->where('categories.srv_id', $service['srv_id'])
                                ->findAll();
        $data = [
            'title'=> "Détails Service",
            'coords'=> $this->coords,
            'service'=> $service,
            'categories'=> $categ,
            'accueil' => $this->accModel->first(),
            'parts' => $this->partModel->findAll(),
            'nb'=> count($categ)
        ];
        return view('carts/index',$data);
    }   

    public function carting() {
        return view('carts/carting');
    }
    public function checkout() {
        $data = [
            'coords'=> $this->coords,
            'accueil' => $this->accModel->first(),
        ];
        return view('carts/checkout',$data);
    }
    public function unity($segment, $name = null) {
        $element = $this->elmtModel->getElement($segment);
        $data = [
            'title'=> "Ajouter au Panier",
            'element'=> $element,
            'accueil' => $this->accModel->first(),
        ];
        return view('carts/unity',$data);
    }

    public function shopping(){
        $shopping_cart = $this->cart->contents();
        if(empty($shopping_cart)) {
            return redirect()->back();
        }
        $hash = md5(str_shuffle("abcdefghijklmnopqrstuvwxyz".time()));
        $moyens = model(Moyen::class);
        $data = [
            'title'     => 'Shopping Cart | E-Tech',
            'coords'    => $this->coordModel->first(),
            'total'     => $this->cart->total(),
            'hash'      => $hash,
            'accueil' => $this->accModel->first(),
            'moyens' => $moyens->findAll(),
        ];
        $rules = $this->cmdModel->validationRules;
        
        if($this->request->getMethod() === 'post' && $this->validate($rules)){
            $file = $this->request->getFile('proof');   
                   
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $data = [
                    'hash'          => $hash,
                    'client'        => $this->request->getPost('client'),
                    'phone'         => $this->request->getPost('phone'),
                    'mean'          => $this->request->getPost('mean'),
                    'proof'         => $imageName,
                    'amount'        => $this->request->getPost('amount'),
                    'status'        => 'attente',
                    'attendu'       => $this->request->getPost('total'),
                    'created_at'    => date('Y-m-d H:i:s'),
                ];

                if($this->cmdModel->save($data)) {
                    $file->move('./resources/images/proofs', $imageName);
                    session()->set('carting', $data);
                    $this->saveCart();
                    return $this->success();
                }else {
                    return redirect()->back()->with('error','Impossible, une erreur s\'est produite');
                }
            }
        }else{
            $data['validation'] = $this->validation->getErrors();
        }

        return view ('carts/checkout',$data);
    }
    public function success(){
        $data = [
            'title'  => 'Confirmation',
            'coords'   => $this->coordModel->first(),
        ];
        $this->cart->destroy();
        session()->remove('carting');
        return view('carts/success',$data);
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
            'total_item'		=>	''. $this->cart->totalItems()
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
    function dealingCart($id, $typekey)
    {
        $cmd = $this->cartModel->find($id);
        if (!empty($cmd)) {

            if ($typekey == 'process') {
                $data = ['status' => 'en cours'];
            } elseif ($typekey == 'done') {
                $data = ['status' => 'traité'];
            }
            $id = $cmd['cart_id'];
            $this->cartModel->update($id,$data);

        } else {
            return redirect()->back();
        }
        return redirect()->back();

    }
    function details($hash){
        $data = [
            'title'     => 'Détails commande',
            'carting'   => $this->cartModel->getCartByHash($hash),
        ];
        return view ('carts/admin/details', $data);
    }
    
    function getProductName($prod){
        $product = $this->elmtModel->getElement($prod);
        return $product['el_title']; 
    }
    function getProductPicture($prod){
        $product = $this->elmtModel->getElement($prod);
        return $product['picture']; 
    }
}
