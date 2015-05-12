<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="en">

    <head>

    <title>Interactive Resume - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/grid12.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="icon" href="/favicon.png" />


    </head>

    <body>
        <div class="header">
            <div id="socialmedia">
                <ul>
                    <li><a href="https://www.facebook.com/bryan.cantz"><span class="fa fa-facebook-official fa-3x"></span></a></li>
                    <li><a href="https://twitter.com/BCantz27"><span class="fa fa-twitter-square fa-3x"></a></li>
                    <li><a href="https://plus.google.com/u/0/106543553575642176536/posts"><span class="fa fa-google-plus-square fa-3x"></a></li>
                    <li><a href="https://www.linkedin.com/pub/bryan-cantz/90/385/351"><span class="fa fa-linkedin-square fa-3x"></a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                    <h1 id="title1">Bryan Cantz's</h1>
                    <hr>
                    <h1 id="title2">Interactive resume</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar" id="navbar">
                        <ul>
                            <li><a href="#about" class="smoothScroll">About</a></li>
                            <li><a href="#skills" class="smoothScroll">Skills</a></li>
                            <li><a href="#projects" class="smoothScroll">Projects</a></li>
                            <li><a href="#edu" class="smoothScroll">Education</a></li>
                            <li><a href="#contact" class="smoothScroll">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div  class="content">

        <div class="about" id="about">
            <div class="row row-centered">
                <div class="col-lg-12">
                    <h1>About Bryan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-centered">
                    <div class="aboutme">
                        <p1>I consider myself a coding enthusiast who is versatile in web development. The time I spend outside of working on websites is used to keep up-to-date with new/currrent web design patterns and frameworks, researching new upcoming web techologies, and play around in some video games to relieve the stress of debugging. I am mostly a self taught programmer, I have programming since I was young, but I also have some university education in languages like C/C++ and Java. Being a self taught programmer it is easy for me to teach myself a new framework or library quickly. I have experience working with the WAMP and LAMP stack, HTML, CSS, JavaScript, and much more which I will list below in my skills section.</p1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-centered">
                    <img src="/images/mypicture.jpg" class="img-responsive img-circle">
                </div>
                <div class="col-lg-3 col-md-12 col-centered">
                    <div class="details">
                        <p1>
                        <strong>Name: </strong><br>
                        <span class="detail">Bryan Cantz</span><br>
                        <strong>Age: </strong><br>
                        <span class="detail">23</span><br>
                        <strong>Residence: </strong><br>
                        <span class="detail">Broomall, Pennsylvania</span><br>
                        </p1>
                    </div>
                </div>
            </div>
        </div>

        <div class="skills" id="skills">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Skills</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="skillsaccordion">
                        <h2>Programming Languages</h2>
                        <div class="accordionContents">
                            <div class="row hidden-xs">
                                <div class="col-lg-6">
                                    <h3>Front-End</h3>
                                </div>
                                <div class="col-lg-6 ">
                                    <h3>Back-End</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <ul class="skilllist">
                                        <li>HTML5:</li>
                                        <li>CSS3:</li>
                                        <li>Javascript:</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>

                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <ul class="skilllist">
                                        <li>PHP:</li>
                                        <li>MySql:</li>
                                        <li>Java:</li>
                                        <li>C/C++:</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h2>Frameworks/Libraries</h2>
                        <div class="accordionContents">
                            <div class="row hidden-xs">
                                <div class="col-lg-6">
                                    <h3>CSS</h3>
                                </div>
                                <div class="col-lg-6 ">
                                    <h3>JavaScript</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <ul class="skilllist">
                                        <li>SASS:</li>
                                        <li>Bootstrap:</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <ul class="skilllist">
                                        <li>jQuery:</li>
                                        <li>Angular:</li>
                                        <li>Meteor:</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h2>Systems and Applications</h2>
                        <div class="accordionContents" id="sa">
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <h3>Operating Systems</h3>
                                    <ul>
                                        <li>Windows</li>
                                        <li>Linux/Unix</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <h3>Applications</h3>
                                    <ul>
                                        <li>jQuery</li>
                                        <li>Angular</li>
                                        <li>Meteor</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <h3>other</h3>
                                    <ul>
                                        <li>1:</li>
                                        <li>2:</li>
                                        <li>3:</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <h3>other</h3>
                                    <ul>
                                        <li>1:</li>
                                        <li>2:</li>
                                        <li>3:</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- vertical accordion -->
        </div>

        <div class="projects" id="projects">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Projects</h1>
                </div>
            </div>
            <div class="row">


            </div>
        </div>

        <div class="edu" id="edu">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Education/Experience</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-responsive" src="images/PennStateLogo.svg">
                </div>
                <div class="col-lg-8">
                    <p><strong>Pennsylvania State University</strong><br>                                                       Studied Computer Science/Engineering <br>
                      From 2010 - 2015
                    </p>
                </div>
            </div>
        </div>

        <div class="contact" id="contact">
            <h1>Contact Me!</h1>

            <?php
			//init variables
			$cf = array();
			$sr = false;

			if(isset($_SESSION['cf_returndata'])){
				$cf = $_SESSION['cf_returndata'];
			 	$sr = true;
			}
            ?>
            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="info">There were some problems with your form submission:</li>
                <?php
				if(isset($cf['errors']) && count($cf['errors']) > 0) :
					foreach($cf['errors'] as $error) :
				?>
                <li><?php echo $error ?></li>
                <?php
					endforeach;
				endif;
				?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
            <form method="post" action="process.php">
                <label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required />

                <label for="email">Email Address: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required />

                <label for="telephone">Telephone: </label>
                <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />

                <label for="message">Message: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>

                <span id="loading"></span>
                <input type="submit" value="Submit!" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
        </form>
        </div>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="scripts/myJs.js"></script>
        <script type="text/javascript" src="scripts/smoothscroll.js"></script>
    </body>

</html>
