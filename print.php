<!DOCTYPE html>
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
  <header>
      <nav id="big-nav">
        <div class="logo">
          <a href="#"><img alt="logo" src="images/logo.png"></a>
        </div>
        <ul>
          <li><a href="#"><i class="fa fa-list"></i> A1 - Table</a></li>
          <<li><div class="container"><i class="fa fa-list-ul"  title=" A1 - Table"><a href="parse.php"> A2 - Parse</a></i></div></li>
          <li><div class="container"><i class="fa fa-list-ul"  title=" A1 - Table"><a href="save.php"> A2 - Save</a></i></div></li>
          <li><div class="container"><i class="fa fa-list-ul"  title=" A1 - Table"><a href="print.php">  A2 - Print</a></i></div></li>
          <li><a href="#"><i class="fa fa-list"></i> A3 - Reset</a></li>
          <li><a href="#"><i class="fa fa-list"></i> A4 - Vis</a></li>
        </ul>
      </nav>
      <nav id="small-nav">
        <div class="logo">
          <a href="#openNav"><img alt="logo" src="images/logo.png"></a>
        </div>
        <a href="#openNav" ><i class="fa fa-list"></i></a>
        <div id="openNav" class="modalDialog">
          <div>
            <ul>
              <li><a href="#"><i class="fa fa-list"></i> A1 - Table</a></li>
              <li><a href="#"><i class="fa fa-list"></i> A2 - Parse</a></li>
              <li><a href="#"><i class="fa fa-list"></i> A2 - Save</a></li>
              <li><a href="#"><i class="fa fa-list"></i> A2 - Print</a></li>
              <li><a href="#"><i class="fa fa-list"></i> A3 - Reset</a></li>
              <li><a href="#"><i class="fa fa-list"></i> A4 - Vis</a></li>
            </ul>
            <a href="#close" title="Close" class="close">close menu</a>
          </div>
        </div>
      </nav>
  </header>
  <article id="first-container" class="a-container">
  <h1>World Data Overview...</h1>
  <div class="text-container">
    <p>Mavericks reality distortion gradients attenuation. Thought through and through notifications transparency game center multitasking aluminum advanced desktop operating system genius bar. This changes everything designed by Apple in California passbook. Control center photos all-new design SDK technology clock. Simplicity is actually quite complicated. Functional layers 9:41am partly cloudy minimalism. Dock airdrop slide to answer music. Video multitouch iTunes compass. Harmonious finder grid system retina animation compressor experience keynote. Redesign services API notes system preferences. Features siri flat buttons airplane mode calculator. Missed call cover flow compare models. Wi-Fi apple care volume reminder controls. My stations folders mac power ultimate upgrade. Shop online quicktime trackpad server aperture rumors education safari one to one. Remote desktop motion business. Backlit keyboard chess phone airport extreme support iPad. Accessories magsafe terminal final cut pro. Featured TV shows downloads digital color meter. Glossy tech specs bluetooth manuals. OpenGL products FaceTime free shipping recycling mission control applications.  From: <a href="#">John Doe</a></p>
  </div>
  </article>
  <article id="last-container" class="a-container">
  <div class="filter">
    <p>Show/Hide:</p>
    <ul>
      <li><a onclick="show_hide_col(2)">birth rate </a></li>
      <li><a onclick="show_hide_col(3)">cellphones </a></li>
      <li><a onclick="show_hide_col(4)">children / woman </a></li>
      <li><a onclick="show_hide_col(5)">electric usage </a></li>
      <li><a onclick="show_hide_col(6)">internet usage </a></li>
    </ul>
    <br>
  </div>
   <code>
<?php
require_once("class/world_data_parser.php");
$parser = new WorldDataParser();

$d_array = $parser->parseCSV("res/world_data_v1.csv", 1000, ',');
$rv = $parser->saveXML($d_array, "res/world_data.xml");
$rt = $parser->printXML("res/world_data.xml", "res/world_data.xslt");

print_r($rt);

?>

 </code>
<footer>
    <div class="footer-container">
      <div id="left-footer">
        <div>Copyright &copy; 2015 world_data</div>
        <div>First course exercise <b>HTML, CSS and JS</b> of lecture Web and Multimedia Engeneering. </div>
      </div>
      <div id="right-footer">
        <div>This Solution has been created by: </div>
        <div>Jan Bickel (s5104134), Radzhiv Khayretdinov (s7400249)- Team 21</div>
      </div>
    </div>
  </footer>

</body>
</html>
