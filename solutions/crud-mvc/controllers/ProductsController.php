<?php

/**
 *
 */
class ProductsController extends Controller
{
  function __construct()
  {
    Parent::__construct();
  }
  function index(){
    $ViewUsuarios = new layout("products/products.php");
  }
  function getProducts(){
    $loader = new LoadModel("Product");
    $Product new Product();
    $products = $Product->getProducts();
    $listarUsuarios = new layout("products/index.php", compact("products"));
  }
}
