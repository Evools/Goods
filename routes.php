<?php

require_once __DIR__.'/router.php';


get('/', 'pages/index.php');

get('/create-card', 'pages/create-card.php');
get('/total', 'pages/total.php');

get('/$id', 'pages/index.php');

// get('/user/$id', 'views/user');

// get('/user/$name/$last_name', 'views/full_name.php');

// get('/product/$type/color/$color', 'product.php');

// get('/callback', function(){
//   echo 'Callback executed';
// });

// get('/callback/$name', function($name){
//   echo "Callback executed. The name is $name";
// });

// get('/callback/$name/$last_name', function($name, $last_name){
//   echo "Callback executed. The full name is $name $last_name";
// });

any('/404','pages/404.php');
