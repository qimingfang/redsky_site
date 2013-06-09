<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="stylesheet.css" title="StyleSheet"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>Redsky</title>
</head>
<body>
<div id="container">
   <div id="header">
   		<div class="inner">
   			<div id="logo">
   				RedSky
   			    <?php if (isset($title) && strlen($title) > 0){
                    echo "<div class='pageheading' style='margin-top:15px;'>$title</div>";
                    }
                ?>
            </div>
   			<div id="menu">
   				<ul>
   					<?php
   						$links = array(
   							"About" => "about.php",
   							"Documentation" => "wiki.php",
   							"Contact" => "contact.php"
   						);

   						foreach ($links as $name => $link){
   							echo "<li><a href='$link'>$name</a></li>";
   						}

   					?>
   				</ul>
   			</div>
   			<div id="topBanner"></div>
   		</div>
   </div>
   <div id="body">
   <?php if (isset($content) && strlen($content) > 0) echo $content; ?>

   <div id="footer">
    <div class="small inner topSpace center">
      Sponsored by the Department of Energy ARPA-e program <br />
      Copyright &copy; 2013 RedSky
    </div>
   </div>
</div>
</body>
</html>
