<?php

require_once 'Manage.php';

class Manage_Comment extends Manage {

        public function getAvisList(int $id):object {
                $data = ['product_id'=>$id];
                return $this->getQuery("SELECT id, comment, author, date_crea FROM comment WHERE product_id=:product_id ORDER BY id DESC", $data);
        }
        
        
        public function setAvisList(string $comment, int $id, date $date_crea):void {
                $data = [
                        'date_crea'=>$date_crea,
                        'comment'=>$comment, 
                        'product_id'=>$id
                ];
                $query = "INSERT INTO comment SET comment=:comment, product_id=:product_id, date_crea=NOW()";
                $this->getQuery($query, $data);
        }
}
