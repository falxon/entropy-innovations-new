<?php
$form["metadescription"] = "Entropy Innovations provides full-stack web development using cutting edge open-source technologies. Contact us about an existing project, a new project, or a general enquiry.";
$form["title"] = "$sitename - Contact Us";
$form = array_merge($default, $form);
$form["nav_drop"][0]["active"] = "active";
$form["nav_drop"][0]["sr_active"][0]["(current)"] = "(current)";
$form["header"][0]["class"] = "short-header";

$form["form"][0]["title"] = "Contact Us";

$form["form"][0]["option"][0]["value"] = "new";
$form["form"][0]["option"][0]["name"] = "New Clients";

$form["form"][0]["option"][1]["value"] = "current";
$form["form"][0]["option"][1]["name"] = "Current or Returning Clients";

$form["form"][0]["option"][2]["value"] = "other";
$form["form"][0]["option"][2]["name"] = "Other Inquiries";

if ($_SERVER['REQUEST_URI'] == "/contact"){
  $form["form"][0]["contact"][0]["map"][0]["coordinate"] = "51.512829, -0.087231";
  $form["form"][0]["contact"][0]["phone_number"] = $phone;
}
elseif ($_SERVER['REQUEST_URI'] == "/new"){
  $form["form"][0]["option"][0]["selected"] = "selected='selected'";
}
elseif ($_SERVER['REQUEST_URI'] == "/current"){
  $form["form"][0]["option"][1]["selected"] = "selected='selected'";
}
elseif ($_SERVER['REQUEST_URI'] == "/other"){
  $form["form"][0]["option"][2]["selected"] = "selected='selected'";
}
