<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <!-- METADATA -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Responsive Bootstrap App Landing Page">
        <meta name="author" content="jkr">

        <!-- PAGE TITLE -->  
        <title>O2 - Responsive Bootstrap App Landing Page</title>

        <!-- Bootstrap Core CSS -->


        <link href="<?php echo css_url('bootstrap');?>" rel="stylesheet">
        <link href="<?php echo css_url('animate');?>" rel="stylesheet">

        <!-- CAROUSEL AND LIGHTBOX -->
        <link href="<?php echo css_url('owl.carousel.min');?>" rel="stylesheet">
        <link href="<?php echo css_url('nivo-lightbox');?>" rel="stylesheet">
        <link href="<?php echo css_url('lightbox_themes/default/default');?>" rel="stylesheet">

        <!-- FONT AND OTHER -->
        <link href="<?php echo css_url('css');?>" rel="stylesheet" type="text/css">
        <!-- <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
        <link href="<?php echo css_url('font-awesome.min');?>" rel="stylesheet">
        <link href="../../namcreditV2/assets/fonts/custom-fonts/font-joker.css" rel="stylesheet">
        <link href="<?php echo css_url('style');?>" rel="stylesheet">
        <link href="<?php echo css_url('stylei_home_v2');?>" rel="stylesheet">
        <link href="<?php echo css_url('color_4');?>" rel="stylesheet">

        <!-- Modernizer and IE specyfic files -->  
        <script src="<?php echo js_url('modernizr.custom');?>"></script>
        <!--  IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
            <script src="js/html5.js"></script>
        <![endif]-->
        <!--[if gte IE 9]>
          <style type="text/css">
            .home-background-overlay,
            .section-inverse:before {
               filter: none;
            }
          </style>
        <![endif]-->
    </head>

    <body class="leaf-ui">
        <!-- Navigation -->
        <header id="header" class="header-section">      
            <div class="navbar navbar-inverse navbar-fixed-top animated drop-nav" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="../../namcreditV2/assets/img/labo.png " alt="" class="img-responsive logo" >
                        </a>
                    </div>
                    <!-- NAVIGATION LINKS -->
                    <nav class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="scroll active"><a href="#home">Acceuil</a></li>
                            <li class="scroll "><a href="#overview">Faire un transfert</a></li>
                            <li class="scroll"><a href="#twitte">Nous contacter ou réclamer</a></li>
                            <!--f<li class="scroll"><a href="#benifits"></a></li>
                            <li class="scroll"><a href="#appreviews">Review</a></li>
                            <li class="scroll"><a href="#screenshots">Screen</a></li>
                            <li class="scroll"><a href="#pricing">Pricing</a></li>
                            <li class="scroll"><a href="#getapp">Get app</a></li>      -->
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!--/#header-->

        <section id="home" class="section-home">

            <!-- BACKGROUND OVERLAY -->
            <div class="home-background-overlay"></div>
            <div class="control-home">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="intro-sectionhome">
                                <section id="" class="workway-section section">
                                    <div class="container">

                                        <!-- SECTION HEADING -->
                                        <h2 class="section-heading text-center wow fadeIn" data-wow-duration="500ms"><label style="color: whitesmoke">Comment utiliser notre site</label></h2>


                                        <div class="row">
                                            <!-- how it start timeline-->
                                            <div class="col-sm-12 col-md-4 col-md-push-8 wow fadeInRight" data-wow-duration="1500ms">
                                                <ul class="workway-timeline hex">
                                                    <li class="timeline-list-item">
                                                        <div class="icon-wrapper icon-md leaf-shape">
                                                            <div class="icon-outer">
                                                                <div class="icon-inner"><img src="../../namcreditV2/assets/img/1.png" style="width: 100%; height: 100%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="content-details">
                                                            <h3 class="workway-intro detailsite">Cliquer sur "Faire un transfert"</h3>
                                                            <p class="detailsite"></p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-list-item">
                                                        <div class="icon-wrapper icon-md leaf-shape">
                                                            <div class="icon-outer">
                                                                <div class="icon-inner"><img src="../../namcreditV2/assets/img/2.png" style="width: 100%; height: 100%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="content-details">
                                                            <h3 class="workway-intro detailsite">Choisissez le réseau déstinataire</h3>
                                                            <p class="detailsite"></p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-list-item">
                                                        <div class="icon-wrapper icon-md leaf-shape">
                                                            <div class="icon-outer" >
                                                                <div class="icon-inner" style="background-color: white"><img src="../../namcreditV2/assets/img/3.png" style="width: 100%; height: 100%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="content-details">
                                                            <h3 class="workway-intro detailsite" style="width: auto">Remplissez le formulaire</h3>
                                                            <p class="detailsite"></p>
                                                        </div>
                                                    </li>
                                                    <li class="timeline-list-item">
                                                        <div class="icon-wrapper icon-md leaf-shape">
                                                            <div class="icon-outer">
                                                                <div class="icon-inner de"><img src="../../namcreditV2/assets/img/4.gif" style="width: 100%; height: 100%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="content-details">
                                                            <h3 class="workway-intro detailsite">Payer en toute  sécuriter</h3>
                                                            <p class="detailsite"></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--/.workway-timeline-->
                                            </div>
                                            <!-- Promo video-->
                                            <div class="col-sm-12 col-md-8 col-md-pull-4">
                                                <div class="workway-video-wraper video-embed">
                                                    <iframe width="700" height="400" src="https://www.youtube.com/embed/BMz6qd8inqY"   allowfullscreen></iframe>
                                                    <!-- <iframe width="700" height="400" src="https://www.youtube.com/embed/1EfL4hznruk" frameborder="0" allowfullscreen></iframe> -->
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--#home-->

        <!--
        =================================
        Overveiw SECTION
        =================================
        -->
        <section id="overview" class="overview-section section">
            <div class="pretty-line csicon-pretty-line"></div>
            <div class="container">

                <!-- SECTION HEADING -->
                <h2 class="section-heading text-center wow fadeIn" data-wow-duration="500ms">Choisissez Votre Operateur</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h4 class="section-description wow fadeIn">L'opérateur Choisi doit être celui du contact auquel vous voulez faire votre transfert</h4>
                    </div>
                </div>
                <!--App overview -->
                <div class="row scroll">
                    <div class="col-md-4 col-sm-6 overview-details">
                        <div class="icon-wrapper leaf-shape icon-lg wow animated fadeInUp"  data-wow-delay=".5s">
                            <div class="icon-outer">
                                <a href="#features" class="icon-inner "><img src="../../namcreditV2/assets/img/togocel.png" class="operateur"></a>
                            </div>
                            <div class="pretty-line csicon-pretty-line"></div>
                        </div>
                        <h3>Togocel</h3>
                        <p>Le premier opérateur au togo</p>
                    </div>
                    <!--/.overview-details -->
                    
                    <div class="col-md-4 col-sm-6 overview-details">
                        <div class="icon-wrapper leaf-shape icon-lg wow animated fadeInUp"  data-wow-delay=".7s">
                            <div class="icon-outer">
                                <a href="#features" class="icon-inner"><img src="../../namcreditV2/assets/img/moov.jpg" class="operateur"></a>
                            </div>
                            <div class="pretty-line csicon-pretty-line"></div>
                        </div>
                        <h3>Moov Togo</h3>
                        <p>La reférence avec flooz au togo</p>
                    </div>
                    <!--/.overview-details -->
                    
                    <div class="col-md-4 col-sm-6 overview-details">
                        <div class="icon-wrapper leaf-shape icon-lg wow animated fadeInUp"  data-wow-delay=".9s">
                            <div class="icon-outer">
                                <a href="#features" class="icon-inner"><img src="../../namcreditV2/assets/img/illicoo.jpg" class="operateur"></a>
                            </div>
                            <div class="pretty-line csicon-pretty-line"></div>
                        </div>
                        <h3>Togo telecom</h3>
                        <p>La référence en matière de télécommunication</p>
                    </div>

                </div>
            </div>
        </section>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color: #009688;">okokokokokok</h4>
                    </div>
                    <div class="modal-body">
                        <p style="background-color: #009688;color:white;">okoko</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" style="background-color: #009688;color:white;" data-dismiss="modal">Passer au payement</button>
                    </div>
                </div>

            </div>
        </div>
        <!--
        =================================
        FEATURES SECTION
        =================================
        -->
        <section id="features" class="features-section section-inverse section">
            <div class="pretty-line csicon-pretty-line"></div>
            <div class="container">

                <!-- SECTION HEADING -->
                <h2 class="section-heading text-center wow fadeIn" data-wow-duration="500ms">Demander votre transaction</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h4 class="section-description wow fadeIn" data-wow-duration="1s">Prenez soin de bien remplir les champs</h4>
                    </div>
                </div>

                <!-- FEATURES LEFT -->
                <div class="col-md-4 col-sm-4">

                    <!-- Modal -->

                    <form>

                        <fieldset class="form-group">
                            <label >Entrer le numéro de télephone du bénéficiaire</label>
                            <input type="number" class="form-control" name="number" id="number" placeholder="+228 90 30 35 01">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="name">Votre nom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleSelect1">Choisir le montant</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="exampleTextarea">Ajouter un méssage au destinataire</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </fieldset>
                        <br> <br> <br> <br>
                        <button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="background-color: white; color: #009688; float: right;"  >Valider</button>

                    </form>
                </div>
                <!-- /.features-list-left -->

                <!-- CLOSE UP PHONE IMAGE -->
                <div class="col-md-4 col-sm-4 ferures-img-wpr wow animated bounceIn" data-wow-offset="120" data-wow-duration="1.5s">
                   Namcredit est Déjà sur votre mobile
                </div>

                <!-- FEATURES RIGHT -->
                <div class="col-md-4 col-sm-4">
                    <img src="../../namcreditV2/assets/img/namburo.jpg" class="features-image img-responsive " alt="" data-wow-duration="1s" />


            </div>
        </section>
       

        <!--
        =================================
        From twitte SECTION
        =================================
        -->
        <section id="twitte" class="twitte-section section-inverse section">
            <div class="pretty-line csicon-pretty-line"></div>
            <div class="container">


                <!-- SECTION HEADING -->
                <h2 class="section-heading text-center wow fadeIn" data-wow-duration="500ms">Nous contacter</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h4 class="section-description wow fadeIn" data-wow-duration="1s">Vous voulez donner un avis</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <!--twitter feed carousel-->
                        <form class="form-horizontal" role="form" method="post">

                            <div class="form-group">
                                <label class="col-sm-2 control-label" >Objet</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="">
                                        <option>Prendre contact ou donner un avis</option>
                                        <option>Faire une réclamation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="contact" name="contact" type="submit" style="background-color: white; color: #009688; float: right" value="Envoyer" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <!-- Will be used to display an alert to the user -->
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </section>

        <link href="<?php echo css_url('cssComplement');?>" rel="stylesheet">

        <!-- Twitter feed  template-->
        <script id="twittertemplate" type=iconshape/template>
            <div class="feed-details">
                <h4>{{tweet}}</h4>
                <span>{{screen_name}} </span><time class="date">-{{date}}</time>
            </div>
        </script>
        <!-- jQuery Version 1.11.1 -->
        <script src="<?php echo js_url('jquery');?>"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo js_url('bootstrap.min');?>"></script>
        <script src="<?php echo js_url('preloder');?>"></script>
        <script src="<?php echo js_url('pluign');?>"></script>
        <script src="<?php echo js_url('tweetie');?>"></script>
        <script src="<?php echo js_url('waypoints.min');?>"></script>
        <script src="<?php echo js_url('jquery.counterup');?>"></script>
        <script src="<?php echo js_url('owl.carousel.min');?>"></script>
        <script src="<?php echo js_url('jquery.nav');?>"></script>
        <script src="<?php echo js_url('wow.min');?>"></script>
        <script src="<?php echo js_url('jquery.loupe');?>"></script>
        <script src="<?php echo js_url('jquery.parallax-1.1.3');?>"></script>
        <script src="<?php echo js_url('script');?>"></script>
        
        <!--  ancien js dans le  jsComplement-->
        <script src="<?php echo js_url('jsComplement');?>"></script>


    </body>
</html>
