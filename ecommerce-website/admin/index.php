<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$page = $_GET['page'] ?? 'dashboard';

include 'includes/header.php';
include 'includes/sidebar.php';

switch($page){

case "about":
include "pages/about.php";
break;

case "services":
include "pages/services.php";
break;

case "service-details":
include "pages/service-details.php";
break;

case "products":
include "pages/products.php";
break;

case "product-details":
include "pages/product-details.php";
break;

case "career":
include "pages/career.php";
break;

case "blog":
include "pages/blog.php";
break;

case "blog-details":
include "pages/blog-details.php";
break;

case "team":
include "pages/team.php";
break;

case "clients":
include "pages/clients.php";
break;

case "projects":
include "pages/projects.php";
break;

case "contact":
include "pages/contact.php";
break;

case "download":
include "pages/download.php";
break;

default:
include "dashboard.php";

}

include 'includes/footer.php';
?>