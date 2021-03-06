<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/ExampleSite', 
    'ck_1d09b5dfe3b5e616f0bd33e8b88c1e9f125a1e28', 
    'cs_31e23f9c39ca7d94a21fccf209bc910f3e53aa61',
    [
        'version' => 'wc/v3',
    ]
);

/**List Of Products **/
 //$products = $woocommerce->get('products');

 //echo '<pre>';
  //  print_r($products);
 //echo '</pre>';


/** Get one Product */
 $product = $woocommerce->get('products/14');
 echo '<pre>';
    print_r($product);
 echo '</pre>';

/** Update a Product */

// $data = [
//     'regular_price' => '5000.00'
// ];

//  $response = $woocommerce->put('products/13', $data);

//   echo '<pre>';
//      print_r($response);
//   echo '</pre>';

/** Create a Product */
// echo '<pre>';
// print_r($woocommerce->get('products/categories'));
// echo '</pre>';
// die;

// $data = [
//     'name' => 'ENSAT T-Shirt',
//     'type' => 'simple',
//     'regular_price' => '39.99',
//     'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
//     'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
//     'categories' => [
//         [
//             'id' => 9
//         ],
//         [
//             'id' => 14
//         ]
//     ],
//     'images' => [
//         [
//             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
//         ],
//         [
//             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
//         ]
//     ]
// ];

// $res = $woocommerce->post('products', $data);

// echo '<pre>';
//     print_r($res);
// echo '</pre>';

/** Delete a Product */

//$woocommerce->delete('products/22', ['force' => true])

?>