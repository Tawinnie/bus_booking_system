<?php
    require('../controllers/product_controller.php');

function get_all_cat_function()
{
	//call the controller
	$allcategories = get_categories_ctr();
	//display the records
	if ($allcategories)
    {
		//loop through the recrods one at a time
		foreach ($allcategories as $key => $value) 
        {
			$catid = $value['cat_id'];
			$catname = $value['cat_name'];

			echo '<option value ="'.$catid.'">'.$catname.'</option>';
		}

    }
}
function get_all_brands_function(){
	//call the controller
	$allbrands = get_brand_ctr();
	//display the records
	if ($allbrands){
		//loop through the recrods one at a time
		foreach ($allbrands as $key => $brand){
			$brandid = $brand['brand_id'];
			$brandname = $brand['brand_name'];

			echo '<option value ="'.$brandid.'">'.$brandname.'</option>';
		}

}
}
  
?>
