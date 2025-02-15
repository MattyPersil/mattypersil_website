<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title><?php echo isset($title) ? $title:"Unnamed ?"?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">

<!-- Header -->
<div id="header">

    <div class="top">

        <!-- Logo -->
        <div id="logo">
            <span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
            <h1 id="title"><a href="/index.php">MattyPersil</a></h1>
            <p>CS Student</p>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <?php
                if(isset($header_content)){echo $header_content;}
                ?>
            </ul>
        </nav>

    </div>

    <div class="bottom">

        <!-- Social Icons -->
        <ul class="icons">
            <li><a target="_blank" href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a target="_blank" href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a target="_blank" href="https://github.com/MattyPersil" class="icon brands fa-github"><span class="label">Github</span></a></li>
            <li><a target="_blank" href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="mailto:matthieumm444444@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>

    </div>

</div>
