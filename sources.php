<?php

$header_content = '<li><a href="#template" id="template-link"><span class="icon solid fa-tv">Template</span></a></li>
                   <li><a href="#images" id="umages-link"><span class="icon solid fa-images">Images</span></a></li>
                   ';
$title = "Sources";
include "assets/php/header.php";

?>

<!--main-->
<div id="main">
    <!-- Subject -->
    <section id="subject" class="one">

        <div class="container">

            <h2>This page is dedicated to the sources used for this website</h2>
            <br>
            <h3><a href="index.php">Return to main page</a></h3>
        </div>
    </section>

    <!-- Template -->
    <section id="template" class="two">

        <div class="container">

            <h2>Template</h2>
            <p>
                This website was made with the help of the site <a href="http://html5up.net" target="_blank">HTML5 UP</a>,
                using the template named <a href="https://html5up.net/prologue" target="_blank">Prologue</a>
                <br>
                The changes that i made are mostly on the content, colors and organization of the pages.
            </p>

        </div>
    </section>

    <!-- Images -->
    <section id="images" class="three">

        <div class="container">

            <h2>Images</h2>
            <p>
                The visuals used on this sites are sourced below :
            </p>

            <div class="row">

                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <div class="image fit"><img src="images/avatar.webp" alt="" /></div>
                        <header>
                            <h3>
                                <a href="images/avatar.webp" target="_blank">Xayah&Rakan</a>
                            </h3>

                            <p>
                                Links :
                                <br>
                                <a href="https://x.com/Eggniviaaaaa/status/1166944761221013506" target="_blank">
                                    Art : Twitter
                                </a>
                                <br>
                                <a href="https://www.pixiv.net/en/artworks/76515755" target="_blank">
                                    Art : Pixiv
                                </a>
                                <br>
                                <a href="https://x.com/Eggniviaaaaa" target="_blank">
                                    Artist : Twitter
                                </a>
                                <br>
                                <a href="https://www.pixiv.net/en/users/2478505" target="_blank">
                                    Artist : Pixiv
                                </a>
                            </p>
                        </header>
                    </article>
                </div>
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <div class="image fit"><img src="images/banner.webp" alt=""></div>
                        <header>
                            <h3>
                                <a href="images/banner.webp" target="_blank">Banner</a>
                            </h3>
                            <p>
                                Generated using <a href="https://www.adobe.com/fr/products/firefly.html" target="_blank">
                                    Adobe Firefly
                                </a>
                            </p>
                        </header>
                    </article>
                </div>
        </div>
    </section>


</div>







<?php
include "assets/php/footer.php";