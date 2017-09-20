<!DOCTYPE html>
<!-- saved from url=(0052)http://http://www.consfortaleza.org.br -->
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        	<!--<base href="http://www.consfortaleza.org.br">-->
            <!-- xmlns="http://www.w3.org/1999/xhtml" xml:lang="it-it" lang="it-it" -->
    <base href="."/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="trabalho realizado para Voli Charter empreendimentos">
    <meta name="author" content="Arquitec">

	<title> 
                <?php carregaTitulo() ?>
    </title>
     <?php $home = get_template_directory_uri();?>
	<link href="http://www.consfortaleza.org.br" rel="canonical">
	<meta property="og:title" content="Consolato - Fortaleza">
	<meta property="og:url" content="http://www.consfortaleza.org.br">
	<meta property="og:description" content="Consolato - Fortaleza">
	<meta property="og:type" content="website">
	<meta property="twitter:title" content="Consolato - Fortaleza">
	<meta property="twitter:url" content="http://www.consfortaleza.org.br">
	<meta property="twitter:description" content="Consolato - Fortaleza">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="og:title" content="Veduta della Città di Fortaleza">
	<meta property="og:url" content="http://www.consfortaleza.org.br">
	<meta property="og:description" content="Benvenuti al Nuovo Sito Web del Consolato d’Italia in Fortaleza">
	<meta property="og:image" content="<?= $home ?>/img/2016/07/recife_01.jpg">
	<meta property="twitter:title" content="Veduta della Città di Fortaleza">
	<meta property="twitter:url" content="http://www.consfortaleza.org.br">
	<meta property="twitter:description" content="Benvenuti al Nuovo Sito Web del Consolato d’Italia in Fortaleza">
	<meta property="twitter:image" content="<?= $home ?>/img/recife_01.jpg">
	<meta property="twitter:card" content="summary">

    <!-- 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="shortcut icon" href="http://www.consrecife.esteri.it/Consolato_Recife/templates/sede/favicon.png" type="image/png">
         <link href="<?= $home ?>/assets/css/bootstrap_0.css" rel="stylesheet" type="text/css">
         <script id="twitter-wjs" src="<?= $home ?>/assets/js/widgets.js"></script>
         <script async="" src="<?= $home ?>/assets/js/analytics.js"></script>
         <script src="<?= $home ?>/assets/js/jquery.js"></script>
         <script src="<?= $home ?>/assets/js/bootstrap.min.js"></script>
         <script src="<?= $home ?>/assets/js/mae.js"></script>
         <script src="<?= $home ?>/assets/js/venobox.min.js"></script>
         <link href="<?= $home ?>/assets/css/style_0.css" rel="stylesheet" type="text/css">        
         <link href="<?= $home ?>/assets/css/style_base.css" rel="stylesheet" type="text/css">
         <link href="<?= $home ?>/assets/css/print.css" rel="stylesheet" type="text/css" media="print">
         <link href="<?= $home ?>/assets/css/venobox.css" rel="stylesheet" type="text/css">
         -->


         <!-- Add Boostrat Coffe-->
         <link href="<?= $home ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="<?= $home ?>/css/business-casual.css" rel="stylesheet">
        <link href="<?= $home ?>/css/style_menu.css" rel="stylesheet">
        

    <?php wp_head();?>

    </head>
    <!--Inicio do body -->
    <body >
        
        <div class="tagline-lower text-center text-expanded text-shadow-white text-uppercase  mb-5 d-none d-lg-block p-4">
            <img class="img-responsive" src="<?= $home ?>/img/desenhando.svg" alt="">
        </div>            
        <div class="tagline-lower text-center text-expanded text-shadow-white text-uppercase  mb-5 d-none d-lg-block">
          <strong class=".navbar-brand">  Rua Osvaldo Cruz 1, Sala 1007  | Edificio Beira Mar Trade Center | Fortaleza -CE, Meireles </strong>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
            <div class="container">
                        <a class="navbar-brand text-uppercase text-expanded text-primary font-weight-bold d-lg-none" 
                        href="#">Voli Charter</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                                data-target="#navbarResponsive" 
                                aria-controls="navbarResponsive" 
                                aria-expanded="false" 
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>   
                <?php
                $args = array(
                    'depth'       => 0,
                    'sort_column' => 'menu_order, post_title',
                    'container_class' => 'collapse navbar-collapse text-uppercase text-expanded',
                    'container_id' => 'navbarResponsive',
                    'menu_class'  => 'navbar-nav mx-auto',
                    'include'     => 'navbar',
                    'exclude'     => 'navbar',
                    'echo'        => true,
                    'show_home'   => true,
                    'link_before' => '',
                    'link_after'  => '',
                    'page_item'  => 'navbarResponsive'                                  
                    );                                                        
                wp_nav_menu($args);?>
            </div>
        </nav>

        <!-- Container -->
        <div class="container">
            <div class="bg-faded p-4  my-4 row ">
                <div class="col-md-8">
                    <!-- Image Carousel -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid w-100" src="<?= $home ?>/img/canoa-quebrada-2.jpg" alt="">
                                    
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid w-100" src="<?= $home ?>/img/canoa-quebrada-ceara.jpg" alt="">
                                    
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid w-100" src="<?= $home ?>/img/lagoa-paraiso.jpg" alt="">
                                    
                                </div>
                            </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only text-primary">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only text-primary" >Next</span>
                        </a>
                    </div><!--Iamge Coursel -->
                </div><!--end Col  -->
                <!--Coll m4  -->
                <div class="col-md-4">
                      <h3 class="my-3 "><strong >Celular:</strong></h3>
                      <ul>
                          <li><strong>BR +55 85 99817-9002</strong></li>
                      </ul>
                      <h3 class="my-3"><strong>Telefone :</strong></h3>
                      <ul>
                        <li><strong>BR +55 85 3104-1171</strong></li>
                        <li><strong>IT +39 02 4070-6898</strong></li>
                      </ul>
                      <h3 class="my-3"><strong>Email:</strong></h3>
                      <ul>
                        <li><a href="mailto:info@volicharter.org"><strong>info@volicharter.org</strong></a></li>
                        <li><a href="mailto:info@volicharter.net"><strong>info@volicharter.net</strong></a></li>
                      </ul>
                </div><!--End Coll m4  --> 
            </div><!--bg-faded  -->

            <!-- -->
            <div class="bg-faded p-4 my-4 row">
                <hr class="divider">
                <h2 class="text-center text-lg text-uppercase my-0">Tabela de 
                <strong>Preço</strong>
                </h2>
                <hr class="divider">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" 
                                src="http://docs.google.com/gview?url=http://www.volicharter.org/tabella/Tabella.pdf&amp;embedded=true" 
                                style="width:100%; " >
                        </iframe>     
                </div>  
            </div>

            <!-- -->

        </div><!--End container-->