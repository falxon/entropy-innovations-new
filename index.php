<?php

require 'modules/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$m = new Mustache_Engine(array(
'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates')
));

$sitename = "Entropy Innovations";
$lipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

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
$default["phone"] = "07287 837928";


$currentpage = $_SERVER['REQUEST_URI'];

if($currentpage=="/home" || $currentpage == "/"){
  include "php-include/home.inc.php";
  $bodyModel = $home;
	$template = "home";
}

$page = $m->loadTemplate($template);
echo $page->render($bodyModel);
