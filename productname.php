<?php
 if(isset($_GET['barcode'])) {
      $barcode = $_GET['barcode'];
  $barcode =   filter_input(INPUT_GET, 'barcode', FILTER_SANITIZE_URL);
//echo "<br>";
$product =array();
  $product+=array("Peter"=>"35");
  $product+= array('Ni/h\%jk' => '2ø3"3' );
  $product+= array('ADS' => '23' );
  $product+= array('Mickle' => '22123456' );
  $product+=array("Pete"=>"35");
  $product+= array('May'=> "34" );
  $product+= array('M'=> "34" );
  $product+= array('Mgh'=> "34" );
  $product+=array("103343"=>"ODR04,00X1,50 VITON");
$product+=array("103347"=>"ODR06,00X1,50VITON");
$product+=array("103352"=>"ODR07,50X1,50VITON");
$product+=array("103357"=>"ODR09,00X1,50VITON");
$product+=array("103365"=>"ODR10,00X2,00VITON");
$product+=array("103369"=>"ODR12,00X2,00VITON");
$product+=array("103374"=>"ODR13,50X2,00VITON");
$product+=array("103378"=>"ODR15,00X2,00VITON");
$product+=array("103382"=>"ODR16,30X2,40VITON");
$product+=array("103391"=>"ODR20,00X2,00VITON");
$product+=array("103392"=>"ODR20,30X2,40VITON");
$product+=array("103399"=>"ODR25,30X2,40VITON");
$product+=array("103401"=>"ODR26,00X2,00VITON");
$product+=array("103410"=>"ODR32,00X2,50VITON");
$product+=array("103411"=>"ODR33,30X2,40VITON");
$product+=array("103415"=>"ODR38,00X2,50VITON");
    //var_dump($product);      echo "<br>";
  foreach ($product as $key => $value) {

    if($key == $barcode){
  //  echo $key;

echo json_encode($value);
echo json_decode($value);
    //  echo $value;
    }

  }
}


?>
