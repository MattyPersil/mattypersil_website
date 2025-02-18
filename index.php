<?php
$header_content = '<li><a href="#welcome" id="top-link"><span class="icon solid fa-home">Welcome</span></a></li>
                   <li><a href="#introduction" id="portfolio-link"><span class="icon solid fa-th">What do i do ?</span></a></li>
                   <li><a href="#about" id="about-link"><span class="icon solid fa-user">About Me</span></a></li>
                   <li><a href="#documentation" id="doc-link"><span class="icon solid fa-book">Documentation</span></a></li>  
                   <li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contact</span></a></li>
                   ';
$title = "MattyPersil Homepage";
include "assets/php/header.php";

?>

		<!-- Main -->
			<div id="main">
				<!-- Welcome -->
					<section id="welcome" class="one dark cover">
                        
						<div class="container">

							<header>
								<h2 class="alt">Hello ! I'm <strong>MattyPersil</strong>, computer science student in France, Nantes.
                                <br> Welcome to my website !</h2>
								<p>I love the subjects i'm studying, and i also do a few things by myself on my freetime,
                                <br>like this website !</p>
							</header>

							<footer>
								<a href="#introduction" class="button scrolly">Discover what i do</a>
							</footer>

						</div>
					</section>

				<!-- Introduction -->
					<section id="introduction" class="two">
						<div class="container">

							<header>
								<h2>What do i do ?</h2>
							</header>

							<h3>
                                As said earlier, i am studying computer science !
                            </h3>

                            <!--<a class="image featured"><img src="images/code.jpg" alt="" /></a>-->

                            <div id="matrixContainer">
                                <canvas id="matrixCanvas"></canvas>
                            </div>


                            <h3>Programming</h3>
                            <p>
                                I'm currently in the first year of my studies, i have done a few projects at various occasions
                                in various languages, the ones i used the most in school are : Php, Html/Css, C++, sql and python,
                                in addition, i am personally learning a bit of rust and javascript.
                            </p>
                            <h3>Networks and infrastructure</h3>
                            <p>
                                Other than programming in a few languages, i really love working with Infrastructure, Systems and
                                Networks Solutions. To explain, i have an option with my studies : "BTS SIO" (Brevet de technicien supérieur
                                Service Informatique aux Organisations) with speciality "SISR" (Solution d'Infrastructure Système et Réseau).
                                With this option i really learn a lot more things about networks, virtual machines, etc..
                                <br>
                                To illustrate   this part, i am creating a home made infrastructure hosting a few virtual machines : websites,
                                a discord bot and monitoring with the help of the Proxmox Linux distribution and virtual machines under
                                Debian distribution.
                            </p>

						</div>
					</section>

                <!-- About Me -->
                <section id="about" class="three">
                    <div class="container">

                        <header>
                            <h2>About Me</h2>
                        </header>


                        <h3>Who am i ?</h3>
                        <div class="row">
                            <img src="images/avatar.jpg" alt="" class = 'col-2'/>

                            <p class="col-10 text-left">
                                Text
                            </p>
                        </div>

                        <h3>Beyond tech</h3>
                        <p>
                            Text
                        </p>

                        <h3>Looking ahead</h3>
                        <p>
                            Text
                        </p>
                    </div>
                </section>

				<!-- Documentation -->
					<section id="documentation" class="four">
						<div class="container">

							<header>
								<h2>Documentation</h2>
							</header>

							<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>

							<p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
							ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
							laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
							parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
							dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
							ornare iaculis.</p>

						</div>
					</section>
                <?php include "assets/php/contact.php"?>
			</div>

    <script src="assets/js/matrix.js"></script>

<?php include "assets/php/footer.php"; ?>