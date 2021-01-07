<!DOCTYPE HTML>
<html>
	<head>
    	<title>Nos Actions</title>
    	<meta charset="UTF-8">
    	<link href="header.css" rel="stylesheet">
    	<link href="actions.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico" sizes="64x64">
        <link rel="shortcut icon" href="favicon.ico">
  	</head>
  	<body>
    	<header>
        	<nav>
            	<a href="/"><img src="Images/FSPF.png"></a>
            	<ul class="MenuList">
                	<li>
                    	<a href="/"><p>Menu</p></a>
                	</li>
                	<li>
                    	<a href="/actions.php"><p>Nos actions</p></a>
                	</li>
                	<li>
						<a href="/#contact"><p>Contactez nous</p></a>
                	</li>
            	</ul>
        	</nav>
    	</header>
    	<article class="Article">
			<?php
                if (file_exists("./Articles/".$_GET["id"].".html")) {
                    $curfile = fopen("./Articles/".$_GET["id"].".html", 'rb');
				    echo fread($curfile,filesize("./Articles/".$_GET["id"].".html"));
                } else {
                    echo "<p>Cet article n'éxiste pas encore</p>";
                }
			?>
    	</article>
  	</body>
</html>
