<?php
     require('connexion/connexion.php');
    $bdd = $pdo -> query ("SELECT * FROM t_utilisateur");
    $utilisateur = $bdd -> fetch();

    $bdd = $pdo -> query ("SELECT * FROM t_titre_cv");
    $titre = $bdd -> fetchAll();

   $bdd = $pdo -> query ("SELECT * FROM t_competences ");
    $competences = $bdd -> fetchAll();

   $bdd = $pdo -> query ("SELECT * FROM t_experiences ");
   $experiences = $bdd -> fetchAll();

    
  //EXPERIENCES  
    $sql_exp = $pdo->query("SELECT * FROM t_experiences");
    $sql_exp -> execute();
    $nb_exp= $sql_exp->rowCount(); 


   $bdd = $pdo -> query ("SELECT * FROM t_loisirs ");
    $loisirs = $bdd -> fetchAll();

    /*echo 'utilisateur : ';
    print_r($utilisateur);
    echo 'titreCV : ';
    print_r($titrecv);
    echo 'experience : ';
    print_r($experiences);
    echo 'competence : ';
    print_r($competences);
    echo 'loisirs : ';
    print_r($loisirs);*/
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Site CV</title>

     <!--  Ajout du parallax -->
    
  

    <!-- Bootstrap Core CSS -->
    <link href="front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="front/css/stylish-portfolio.css" rel="stylesheet">
    <link href="front/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Mon CV</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Acceuil</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>A propos</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Me contacter</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1 id="name"><?php echo $utilisateur['prenom'].' '.$utilisateur['nom'];  ?></h1>
            <h3 id="soustitre"><?= $titre[0]['titre_cv']; ?></h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">En savoir plus</a>
        </div>
    </header>

    <!-- Bienvenue -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div id="Bienvenue" class="col-lg-12 text-center">
                    <h2>Bienvenue sur mon site CV</h2>
                     <p class="lead">Pour telechargez mon CV en format PDF cliquer ici:</p>
                    <div id="downicon">
                    <a href="docs/CV Yannis CHAREF V2.pdf" id="down" target="_blank">Téléchargez mon CV <img src="front/img/Downloads-icon.png" ></a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Barres de Competences -->
  <section>
  <!--<h2 class="text-center">Scroll down the page a bit</h2><br><br> -->
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-lg-2"></div>
             <div class="col-md-8 col-lg-8">
               
            <div class="barWrapper">
                <span class="progressText"><B>HTML5</B></span>
                <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >   
                        <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>     
                    </div>
                </div>

            <div class="barWrapper">
             <span class="progressText"><B>CSS3</B></span>
                <div class="progress ">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="10" aria-valuemax="100" style="">
                     <span  class="popOver" data-toggle="tooltip" data-placement="top" title="75%"> </span>  
                  </div>
                  
                </div>
            </div>

            <div class="barWrapper">
                 <span class="progressText"><B>BOOTSTRAP</B></span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                     <span  class="popOver" data-toggle="tooltip" data-placement="top" title="65%"> </span>  
                  </div>
                </div>
            </div>
            <div class="barWrapper">
                     <span class="progressText"><B>JQUERY</B></span>
                    <div class="progress">
                       <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                        <span  class="popOver" data-toggle="tooltip" data-placement="top" title="55%"> </span>  
                      </div>
                </div>
            </div>

            <div class="barWrapper">
                <span class="progressText"><B>MYSQL</B></span>
                <div class="progress">
                     <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                      <span  class="popOver" data-toggle="tooltip" data-placement="top" title="70%"> </span>  
                    </div>
                </div>
            </div>

              <div class="barWrapper">
                <span class="progressText"><B>PHP</B></span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                      <span  class="popOver" data-toggle="tooltip" data-placement="top" title="75%"> </span> 
                    </div>
                </div>
            </div>
        </div>
             <div class="col-md-2 col-lg-2"></div>
            </div>
        </div>
  </section>

        <!-- Callout -->
            <aside class="callout">
                <div class="text-vertical-center">
                    <h1>Experiences Professionnel</h1>
                </div>
            </aside>

        <section id="ExperiencesPro">

            <div class="container">
                <div class="row">
            <div class="col-lg-12">
              <h3 class="text-center">Zigzag Timeline Layout (and Cats)</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                <ul class="timeline">
                    <li>
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="front/img/rst.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Ascogere</h4>
                  <h4 class="subheading">restauration collective d'entreprise</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
              </div>
              <div class="line"></div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="front/img/mp.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Man Power</h4>
                  <h4 class="subheading">Manutentionnaire</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
              </div>
              <div class="line"></div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="front/img/mcdonald.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>McDonalds</h4>
                  <h4 class="subheading">Employer de restauration</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
              </div>
              <div class="line"></div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="front/img/laplage.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>La Plage Parisienne</h4>
                  <h4 class="subheading">Serveur</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
              </div>
              <div class="line"></div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="front/img/lepoles.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Le Poles solidaire</h4>
                  <h4 class="subheading">Formation integrateur/developpeur junior</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
      </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Mon Portfolio</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="front/img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="front/img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="front/img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="front/img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Me Contacter -->
    <section id="contact">

        <div id="formulaire">
           <form class="form-horizontal">
              <fieldset>

                <!-- Formulaire -->
                <legend>Me contacter</legend>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="nom"></label>  
                      <div class="col-md-4">
                      <input id="nom" name="nom" type="text" placeholder="Nom" class="form-control input-md">  
                      </div>
                    </div>

               
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="prenom"></label>  
                      <div class="col-md-4">
                      <input id="prenom" name="prenom" type="text" placeholder="Prenom" class="form-control input-md">  
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-md-4 control-label" for="email"></label>  
                      <div class="col-md-4">
                      <input id="email" name="email" type="text" placeholder="email" class="form-control input-md">  
                      </div>
                    </div>


              
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="objet"></label>  
                      <div class="col-md-4">
                      <input id="objet" name="objet" type="text" placeholder="Objet" class="form-control input-md"> 
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-md-4 control-label" for="messages"></label>
                      <div class="col-md-4">                     
                        <textarea class="form-control" id="messages" name="messages">Message</textarea>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="envoyer"></label>
                      <div class="col-md-4">
                        <button id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>
                      </div>
                    </div>

                </fieldset>
            </form>
        </div>
      
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Adresse</strong>
                    </h4>
                    <p><?php echo $utilisateur['adresse'].' '.$utilisateur['ville'].' '.$utilisateur['code_postal']; ?></p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i><?php echo $utilisateur['tel'];?> </li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <p><?php echo $utilisateur['email']; ?></p> 
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>

    </footer>

    <!-- jQuery -->
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="front/js/parallax.js"></script>
    <script src="front/js/main.js"></script>
    <script type="text/javascript" src="front2/js/main.js"></script>
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
