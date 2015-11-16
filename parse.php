<!DOCTYPE html>
<html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>WME Course Exercise HTML</title>
  <meta name="description" content="WME Übung 1 Gruppe#21">
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Jan Bickel, Radzhiv Khayretdinov">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <script src="js/script.js"></script>
</head>
<body>
<?php
require_once("class/world_data_parser.php");

$parser = new WorldDataParser();
$d_array = $parser->parseCSV("res/world_data_v1.csv", 1000, ',');

print("<pre>");
print_r($d_array);
print("</pre>");

?>
</body>
</html>