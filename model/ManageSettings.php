<?php

require_once 'Manage.php';

class ManageSettings extends Manage {
    
    public function orderList(int $user_id):object {
        $data=[
            'user_id'=>$user_id
            ];
            
        $query = "SELECT orders.id, orders.user_id, orders.reference, orders.date, orders.total FROM orders WHERE user_id=:user_id";
        
        return $this->getQuery($query, $data);
         
    }
    
    public function orderProductsList(int $order_id):object {
        $data=[
            'order_id'=>$order_id
            ];
            
        $query = "SELECT products.name, products.pictures, products.price FROM products
        JOIN products_orders ON products.id = products_orders.product_id
        WHERE products_orders.order_id=:order_id";
        
        return $this->getQuery($query, $data);
         
    }
    
    public function orderDetails(int $user_id):array {
        // Initialise le tableau
        $orderList = array();
        //Je recupère la liste des commandes d'un utilisateur
        $order = $this->orderList($user_id);
        
        if($order->rowCount()) {
            while($r = $order->fetch(PDO::FETCH_ASSOC)) {
                // je mets le detail de chaque commande dans mon tableau
                $orderList[$r['id']] = $r;
                // je recupère la liste des produits de la commande en cours
                $productList = $this->orderProductsList($r['id']);
                // je mets cette liste de produit dans mon detail de commande
                $orderList[$r['id']]['nb_product'] = $productList->rowCount();
                $orderList[$r['id']]['detail'] = $productList->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        return $orderList;
    }
   
}