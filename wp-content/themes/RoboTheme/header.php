    <html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <?php
			global $color;
			$url = $_SERVER['REQUEST_URI'];
			if (preg_match("/divisions/", $url)){
				$color = "#80b3ff";
			}
			elseif (preg_match("/robot_designs/", $url)){
				$color = "#8aa193";
			}
			elseif (preg_match("/about_us/", $url)){
				$color = "#ffbc7d";
			}
			elseif (preg_match("/members/", $url)){
				$color = "#274379";
			}
			elseif (preg_match("/sponsors/", $url)){
				$color = "#caacf6";
			}
			else{
				$color = "#a9a29c";
			}
            
			
        ?>
		<title>Robodogs Team 435</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body>
	<div id = "wrapper">
		<div id = "header" class = "header_container">
			<div class="header"><h1 style="color:#001D55;">Team435</h1><h1 class="commodoreFont" style="color:#1F5C1F;"> Robodogs</h1></div>
				<nav>
					<ul>
						<li><a href="/"><img src="/wp-content/themes/RoboTheme/home-icon.svg" onerror="this.onerror=null; this.src='image.png'"><?php if(preg_match("/[a-zA-Z]/",$_SERVER['REQUEST_URI'])){echo "<div></div>";}?></a></li>
						<li><a href="/divisions"><img src="/wp-content/themes/RoboTheme/divisions-icon.svg"/><?php if(!preg_match("/divisions/",$_SERVER['REQUEST_URI'])){echo "<div></div>";}?></a></li>
						<li><img src="/wp-content/themes/RoboTheme/robot-design-icon.svg"/><?php if(!preg_match("/robot_design/",$_SERVER['REQUEST_URI'])){echo "<div></div>";}?></li>
						<li><img src="/wp-content/themes/RoboTheme/members-icon.svg"/><?php if(!preg_match("/members/",$_SERVER['REQUEST_URI'])){echo "<div></div>";}?></li>
						<li><img src="/wp-content/themes/RoboTheme/about-us-icon.svg"/><?php if(!preg_match("/about_us/",$_SERVER['REQUEST_URI'])){echo "<div></div>";}?></li>
						<li><img src="/wp-content/themes/RoboTheme/sponsors-icon.svg"/><?php if(!preg_match("/sponsors/",$_SERVER['REQUEST_URI'])){echo "<div></div>";}?></li>
					</ul>
				</nav>
				<div class="under_accent" style= "background-color:<?php echo $color; ?>;"></div>
		</div>
