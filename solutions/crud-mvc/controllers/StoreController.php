<?php

/**
 *
 */
class StoreController extends Controller
{

  function __construct(){
    parent::__construct();
  }

  function index(){
    $loader = new LoadModel("Store");
    $store= new Store();
    $shops = $Tienda->getShops();
    $ViewStore = new layout("store/index.php" , compact("shops"));
  }
}
