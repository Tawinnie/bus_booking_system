<?php
//connect to the user account class
include("../classes/product_class.php");

function newbrand($brand)
//{
        // $newbrand= new Brand();
        // return($newbrand)->addbrand($brand);
{
    $newbrand= new Brand();
    $brand = $newbrand->addbrand($brand);
    return($brand);
}
function newdisplay(){
    $display = new Brand();
    $displaybrand =$display->display();
    return($displaybrand);
}

function newupdate($id,$brand){
    $update= new Brand();
    $updatebrand = $update->updatebrand($id,$brand);
    return($updatebrand);
}

//for category section
function newcategory($cat_name)
{
    $newcat= new Brand();
    $cat = $newcat->addcategory($cat_name);
    return($cat);
}
//select category
function displaycategory(){
    $display = new Brand();
    $displaycat =$display->selectcategory();
    return($displaycat);
}
//update/edit category
function newupdatecategory($id,$cat_name){
    $update= new Brand();
    $updatecat = $update->updatecategory($id,$cat_name);
    return($updatecat);
}
//save product controller
// function save_product_ctr($cat,$brand,$title,$price,$descr,$image,$keyword){
//     $item_object= new Brand();
//     return $item_object->add_product($cat, $brand,$title,$price,$descr,$image,$keyword);

// }
//update/edit product
// function new_product_ctr($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords){
//     $display_product = new Brand();
//     return $display_product->updateproduct($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords);
// }
function save_product_ctr($cat,$brand,$title,$price,$descr,$keyword){
    $item_object= new Brand();
    return $item_object->add_product($cat, $brand,$title,$price,$descr,$keyword);
}
//
function selectoneproduct_ctr($product_id)
{
    $oneproduct = new Brand();
    return $oneproduct->selectoneproduct($product_id);
}
function selectallproducts_ctr(){
    $oneproduct = new Brand();
    return $oneproduct->selectallproducts();
}
function searchproducts_ctr($name){
    $oneproduct = new Brand();
    return $oneproduct->searchproducts($name);
}
//function to update product
function update_product_ctr($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords){
    $new_product = new Brand();
    return $new_product->updateproduct($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords);
}
//get all brands class
function get_brand_ctr(){
    $new_brand = new Brand();
    return $new_brand->get_brands_class();
}

//get categories
function get_categories_ctr(){
    $new_cat = new Brand();
    return $new_cat->get_categories_class();
} 

// CART
function add_cart_ctrl($p_id, $ip_add, $c_id){

    //creating an instance
    $add_cart = new Brand();
  
    // return method
    return $add_cart -> insert_cart($p_id, $ip_add, $c_id);
  }
  
  function select_cart_ctrl(){
  
    //creating an instance
    $select_cart = new Brand();
  
    // return method
    return $select_cart -> select_cart();
  }
  
  // count cart
  function count_cart_ctrl($cid){
  
    $count_cart = new Brand();
  
    return $count_cart -> count_cart($cid);
  }
  
  // count one cart item
  function count_one_cart_ctrl($cid){
  
    $count_one_cart = new Brand();
  
    return $count_one_cart -> count_one_cart($cid);
  }
  
  function duplicate_cart_ctrl($pid, $cid){
  
    $duplicate_cart = new Brand();
  
    return $duplicate_cart -> duplicate_cart($pid, $cid);
  }
  
  function duplicate_one_cart_ctrl($pid, $cid){
  
    $duplicate_one_cart = new Brand();
  
    return $duplicate_one_cart -> duplicate_one_cart($pid, $cid);
  }
  
  function update_cart_qty_ctrl($pid, $cid){
    $update_cart = new Brand();
    return $update_cart -> update_cart_qty($pid, $cid);
  }
  
  function update_more_cart_qty_ctrl ($pid, $cid){
    $update_more_cart = new Brand();
    return $update_more_cart -> update_more_cart_qty($pid, $cid);
  }
  
    // 
  function delete_cart_qty_ctrl($pid, $cid){
    $delete_cart = new Brand();
    return $delete_cart -> delete_cart_qty($pid, $cid);
  }
  
  function update_textbox_ctrl($pid, $cid, $txtbox){
    $update_textbox = new Brand();
    return $update_textbox -> update_textbox($pid, $cid, $txtbox);
  }
  
?>