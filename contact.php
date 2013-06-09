<?php

$people = Array(
    "Zhiyuan Teo" => Array(
        "zteo@cs.cornell.edu",
        "zhiyuan.png"),
    "Erluo Li" => Array(
        "el378@cornell.edu",
        "erluo.png"),
    "Qiming Fang" => Array(
        "qf26@cornell.edu",
        "qiming.png"),
    "Ken Birman" => Array(
        "ken@cs.cornell.edu",
        "ken.png"),
    "Robbert van Renesse" => Array(
        "rvr@cs.cornell.edu",
        "robbert.png")
);


$content = '
<div class="container-narrow">
	<table id="contact_table" cellpadding="10">';

foreach($people as $name => $values){
    $content .= "<tr>";
    $content .= "<td class='img_cell'><img class='img' width='100'src='images/" . $values[1] . "' /></td>";
    $content .= "<td><a href='mailto:" . $values[0] . "'>$name</a></td>";
    $content .= "</tr>";
}

$content .= "</table>";
$content .= "</div>";

$title = "Contact Us";

include "template.php";

?>
