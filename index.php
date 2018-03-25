<?php

require 'modules/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$m = new Mustache_Engine(array(
'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates')
));

$sitename = "Entropy Innovations";
$phone = "07234 293824";

$default["nav_item"][0]["url"] = "/home";
$default["nav_item"][0]["nav"] = "Home";
$default["nav_item"][1]["url"] = "/about";
$default["nav_item"][1]["nav"] = "About Us";
$default["nav_item"][2]["url"] = "/portfolio";
$default["nav_item"][2]["nav"] = "Portfolio";
$default["nav_drop"][0]["nav"] = "Contact Us";
$default["nav_drop"][0]["url"] = "/contact";
$default["nav_drop"][0]["drop_item"][0]["item"] = "New Client";
$default["nav_drop"][0]["drop_item"][0]["url"] = "/new";
$default["nav_drop"][0]["drop_item"][1]["item"] = "Current Client";
$default["nav_drop"][0]["drop_item"][1]["url"] = "/current";
$default["nav_drop"][0]["drop_item"][2]["item"] = "Other Inquiries";
$default["nav_drop"][0]["drop_item"][2]["url"] = "/other";
$default["site_name"] = $sitename;
$default["phone"] = $phone;


$currentpage = $_SERVER['REQUEST_URI'];

if($currentpage=="/home" || $currentpage == "/"){
  include "php-include/home.inc.php";
  $bodyModel = $home;
	$template = "home";
}
elseif($currentpage=="/about"){
  include "php-include/about.inc.php";
  $bodyModel = $about;
	$template = "home";
}
elseif($currentpage=="/portfolio"){
  include "php-include/portfolio.inc.php";
  $bodyModel = $portfolio;
	$template = "home";
}
elseif($currentpage=="/contact" || $currentpage == "/new" || $currentpage == "/current" || $currentpage == "/other"){
  include "php-include/form.inc.php";
  $bodyModel = $form;
	$template = "home";
}

$page = $m->loadTemplate($template);
echo $page->render($bodyModel);
