<?php

require_once __DIR__.'/router.php';

get('/login', 'pages/login.php');
get('/register', 'pages/register.php');

get('/', 'pages/index.php');
get('/create-card', 'pages/create-card.php');
post('/create-card', 'pages/create-card.php');
get('/total', 'pages/total.php');

post('/login', 'pages/login.php');
post('/register', 'pages/register.php');

get('/logout', 'function/logout.php');

any('/404','pages/404.php');
