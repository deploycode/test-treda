<?php
 /**
  *
  */
 class Store extends Model
 {
   public function getShops()
   {
     $result = $this->db->query("select * from shops");
     return $result->fetchAll();
   }
 }
