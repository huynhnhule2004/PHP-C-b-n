<?php
include "header.php";
if (isset($_GET['page']) && ($_GET['page'] != "")) {
  $page = $_GET['page'];

  switch ($page) {
    case 'shop':
      include_once ("shop.php");
      break;
    case 'category':
      include_once ("category.php");
      break;
    case 'cartActive':
      include_once ("cartActive.php");
      break;
    case 'dathang':
      include_once ("dathang.php");
      break;
    case 'success':
      include_once ("success.php");
      break;
    case 't-shirst':
      include_once ("t-shirst.php");
      break;
    case 'shirts':
      include_once ("shirts.php");
      break;
    case 'polo':
      include_once ("polo.php");
      break;
    case 'sweaters':
      include_once ("sweaters.php");
      break;
    case 'hoodies':
      include_once ("hoodies.php");
      break;
    case 'about':
      include_once ("about.php");
      break;
    case 'blog':
      include_once ("blog.php");
      break;
    case 'contact':
      include_once ("contact.php");
      break;
    case 'sign-in':
      include_once ("sign-in.php");
      break;
    case 'sign-up':
      include_once ("sign-up.php");
      break;

    default:
      include_once ("index.php");
      break;
  }
} else
  include_once ("shop.php");

include "footer.php";
