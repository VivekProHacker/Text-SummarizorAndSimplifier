<?php
if ($_FILES["file"]["type"] == "text/plain" &&
    $_FILES["file"]["size"] < 65536)
{
  if ($_FILES["file"]["error"] > 0)
  {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
  else
  {
 $fh = fopen($_FILES["file"]["name"],'r');
while ($line = fgets($fh)) {
  echo($line);
}
fclose($fh);

  }
}
else
{
  if ($_FILES["file"]["type"] != "text/plain")
    echo "File is not of the permitted type.";
  else if ($_FILES["file"]["size"] < 65536)
    echo "File exceeds permitted size.";
}
?>



<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Text Summarizer</title>
        

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#myProgress {
  position: relative;
  width: 100%;
  height: 30px;
  background-color: #ddd;
}

#myBar {
  position: absolute;
  width: 10%;
  height: 100%;
  background-color: #4CAF50;
}

#label {
  text-align: center;
  line-height: 30px;
  color: white;
}
</style>
<script>
function validateForm() {
    var x = document.forms["myForm"]["text"].value;
    if (x == null || x == "") {
        alert("Please Enter Some Text to Summarize");
        return false;
    }
}
</script>        
<script>
window.onload = function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 50);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
</script>        
    </head>
    <body style="zoom: 1;">
        <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target="nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
<img style="float:left;width:50px;height:50px;    " src="logo.png" />
            <a class="brand" style="padding-left: 40px;"href="index.php">Text Summarizer & Simplifier</a>
            <div class="nav-collapse collapse" id="navbar-main">
              
            </div>
        </div>
    </div>
</div>
        <div style="height:60px"></div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">


<div class="row-fluid">
    <div class="span8 offset2">
        <div class="hero-unit">

<h3>Application is loading your Request...... </h3>
</center>
<div id="myProgress">
  <div id="myBar"></div>
</div>
<?php
session_start();
$_SESSION['text'] = $_POST['text'];
header('refresh:5;url=test_summarizer.php');
?>
</center>
<br>

<br><br><br><br><br>
</div>
</div>
</div>

                </div>
            </div>
<br/><br/><br/>
            <div style="height:10px"></div>
            <footer>
<p align="center">
<span id="mashape-button" data-api="text-summarization" data-name="textanalysis" data-light="1"></span><script src="./Text Summarizer - TextSummarization _ Text Summarization Online _ Text Summarization Demo _ Text Summarization API_files/button.js"></script>
<a href ="https://hackathon.guide> " > Hackathon</a>'16 @IIITV --- Team Fury</a>
</p>
</footer>
        </div>
        
</body></html>
