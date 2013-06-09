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
   			</div>
   			<div id="menu">
   				<ul>
   					<?php
   						$links = array(
   							"home" => "#",
   							"about" => "#",
   							"download" => "#",
                "wiki" => "#",
   							"contact" => "#"
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
    <div class="greybackground">
   		<div class="inner">
   			<div id="bannerText">
   				Cloud Technologies for Advanced <a href='#' class='red'>Sensor Networks</a>
   			</div>
   			<div id="banner">
          <img src="connections.png" alt="connected" />
        </div>
   		</div>
    </div>

    <div class="inner topSpace">

      <div id="col2" class="col">
        <div class="subTitle">Sensors</div>
        <p>
        Macaroon halvah sweet roll caramels. Pudding brownie sesame snaps candy jelly beans cotton candy macaroon gummies. Cotton candy cake candy canes liquorice marzipan danish tiramisu. Apple pie pastry gummies.
        </p>

        <div class="subTitle">Speed</div>
        <p>
        Carrot cake tootsie roll marshmallow chocolate cake candy. Marshmallow wypas lemon drops icing. Donut tart wypas marzipan marzipan bear claw tootsie roll jelly muffin faworki sweet roll sesame snaps dragée bear claw.
        </p>

        <div class="subTitle">Scalability</div>
        <p>
        Topping sugar plum toffee muffin gingerbread biscuit brownie chocolate cake pudding. Gummies marshmallow wafer. Bonbon marzipan biscuit oat cake jujubes pudding croissant powder wypas.
        </p>
      </div>

      <div id="col1" class="col">
        <div class="subTitle">Security</div>
        <p>
        Cupcake ipsum dolor sit amet jelly icing gummi bears. Wafer macaroon carrot cake chupa chups ice cream croissant topping. Tart gummi bears tiramisu sweet roll. Liquorice pie cheesecake sweet bonbon.</p>

        <div class="subTitle">Survivability</div>
        <p>
        Sugar plum sugar plum chocolate bar gingerbread. Fruitcake gummi bears sesame snaps lollipop caramels jelly-o ice cream icing. Halvah gummies applicake carrot cake pie pudding bear claw tart. Chocolate cake muffin wypas jelly-o soufflé lollipop.
        </p>

        <div class="subTitle">Stability</div>
        <p>
        Chupa chups brownie sweet roll fruitcake chupa chups. Candy pudding lemon drops pastry caramels brownie jelly chocolate bar jelly-o. Jujubes pudding chocolate bar cookie wafer.
        </p>
      </div>

    </div>

   </div>
   <div id="footer">
    <div class="small inner topSpace center">
      Sponsored by the Department of Energy ARPA-e program <br />
      Copyright &copy; 2013 RedSky
    </div>
   </div>
</div>
</body>
</html>
