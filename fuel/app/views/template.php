<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Friday Drink</title>
<?php 
echo Asset::css('style.css');
echo Asset::css('bootstrap.css');
?>
<link type="text/css" rel="stylesheet" href="printstyle.css" media="print" /> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<div id="main">

<header>
	<img id="logo" alt="logo" width="1000" src="http://www.pourplanning.com/wp-content/uploads/2011/07/Header_4.jpg"/>
	<h1 id="mainTitle">Friday Drink</h1>
		<nav id="topNavigation">
			<ul id="mainmenu">
				<li><?php echo Html::anchor('drinks/index', 'Home'); ?></li>
				<li><?php echo Html::anchor('drinks/list', 'Bar');?></li>
				<li class="last"><?php echo Html::anchor('drinks/about', 'About');?></li>
			</ul>
		</nav>
</header>

<section id="leftColumn" class="column">
	<nav id="leftNavigation">
            <ul id="leftmenu">
		<?php
                    if(isset($navigation))
                    {
                        echo $navigation;
                    }
                ?>
            </ul>
	</nav>
</section>

<section id="rightColumn" class="column">
	<?php
            if(isset($content))
            {
                echo $content;
            }
        ?>
</section>

</div>
</body>
</html>