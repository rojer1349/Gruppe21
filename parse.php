<?php
require_once("class/world_data_parser.php");
$parser = new WorldDataParser();
echo "<pre>";
print_r($parser->parseCSV("res/world_data_v1.csv", 1000, ','));
echo "</pre>";
?>
