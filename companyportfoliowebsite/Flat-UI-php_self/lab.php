<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI - Free Bootstrap Framework and Theme</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php if (!empty($_POST)): ?>
  <?php
$name = $_POST["name"];
$family = $_POST["family"];
$genus = $_POST["genus"];
$species = $_POST["species"];
$date = $_POST["date"];
$time = $_POST["time"];
$optionsRadios = $_POST["optionsRadios"];
?>
    <div class="container">
    <div class="row"> <img src="images/head.png" alt="Smiley face" ></div>
    <div class="row"> 
    
    <div class="pagination">
            <ul>
              <li class="active"><a href="/indexxx.html">Personal Information</a></li>
              <li><a href="contact.html">Contact Information</a></li>
              <li><a href="samplecollection.html">Sample Collections</a></li>
              <li><a href="plantinfo.html">Plant Info</a></li>
              <li><a href="pest.html">Pest Information</a></li>
              <li><a href="lab.html">Lab Use</a></li>
            </ul>
          </div>
    
    </div>
   <div class="row">
    <div class="col-md-4 col-md-offset-3 textlable">
    <div class="form-group"><span>Here are your details!</span></div>
          <div class="form-group"><span>DIAGNOSIS</span></div>
        </div>
        </div>
<div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Common Name:</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $name; ?>/span></div>
          </div>
        </div>
        <div class="col-xs-1 textlable">
          <div class="form-group"><span>Family</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $family; ?>/span></div>
          </div>
        </div>
    </div>
<div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Genus</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $genus; ?>/span></div>
          </div>
        </div>
        <div class="col-xs-1 textlable">
          <div class="form-group"><span>Species</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $species; ?>/span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Date<span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $date; ?>/span></div>
          </div>
        </div>
        <div class="col-xs-1 textlable">
          <div class="form-group"><span>Time</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $time; ?>/span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-3 col-md-offset-1 textlable">
          <div class="form-group"><span>RESPONSE</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group"><span><?php echo $optionsRadios; ?>/span></div>
        </div>
        </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <a href="" class="btn btn-block btn-lg btn-primary">Thank you!</a></div>
    </div>

</div>




    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
    
    <?php else: ?>
    
    <div class="container">
    <form action="lab.php" method="POST">
    <div class="row"> <img src="images/head.png" alt="Smiley face" ></div>
    <div class="row"> 
    
    <div class="pagination">
            <ul>
              <li class="active"><a href="/indexxx.html">Personal Information</a></li>
              <li><a href="contact.html">Contact Information</a></li>
              <li><a href="samplecollection.html">Sample Collections</a></li>
              <li><a href="plantinfo.html">Plant Info</a></li>
              <li><a href="pest.html">Pest Information</a></li>
              <li><a href="lab.html">Lab Use</a></li>
            </ul>
          </div>
    
    </div>
   <div class="row">
    <div class="col-md-4 col-md-offset-3 textlable">
    	
          <div class="form-group"><span>DIAGNOSIS</span></div>
        </div>
        </div>
<div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Common Name:</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="name" type="text" value="" placeholder="Common Name" class="form-control" />
          </div>
        </div>
        <div class="col-xs-1 textlable">
          <div class="form-group"><span>Family</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="family" type="text" value="" placeholder="Family" class="form-control" />
          </div>
        </div>
    </div>
<div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Genus</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="genus" type="text" value="" placeholder="genus" class="form-control" />
          </div>
        </div>
        <div class="col-xs-1 textlable">
          <div class="form-group"><span>Species</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="species" type="text" value="" placeholder="Species" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Date<span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="date" type="text" value="" placeholder="MM-DD-YY" class="form-control" />
          </div>
        </div>
        <div class="col-xs-1 textlable">
          <div class="form-group"><span>Time</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="time" type="text" value="" placeholder="HH:MM:SS" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-3 col-md-offset-1 textlable">
          <div class="form-group"><span>RESPONSE</span></div>
        </div>
        <div class="col-xs-3">
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
            Regular Mail
          </label>
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" data-toggle="radio" checked="">
            EMail
          </label>
           <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" data-toggle="radio" checked="">
            Phone
          </label>
        </div>
        </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <input name="mySubmit" type="submit" value="Submit!" /></div></div>
    </div>
</form>
</div>
  </body>
</html>
