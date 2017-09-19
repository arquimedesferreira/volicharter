<!DOCTYPE html>
<!-- saved from url=(0052)http://http://www.consfortaleza.org.br -->
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        	<!--<base href="http://www.consfortaleza.org.br">--><base href="."/>
            <!-- xmlns="http://www.w3.org/1999/xhtml" xml:lang="it-it" lang="it-it" -->

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
    <?php wp_head();?>

    </head>
    <body dir="ltr">
        <div id="testata_esteri">
            <div class="container"> 
                <div id="logo_ministero" class="col-md-12 col-sm-8 col-xs-24" role="banner">
                    <h1> 

                        <p id="logo_farnesina">Farnesina</p>
                        <p id="riga_1_farnesina">Ministero degli Affari Esteri<br>
                            e della Cooperazione Internazionale</p>
                    </h1>
                </div>
            </div>
        </div>

        <div id="up">
            <div class="container">     
                <div class="flag">
                    <img src="<?=$home?>/img/flag_flag.svg" alt="Italia Fortaleza">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="header" class="col-md-24" role="heading">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 stellone">
                            <a href="http://www.consfortaleza.org.br" title="Consolato d&#39;Italia Fortaleza (Ceará)">
                                <img src="<?= $home ?>/img/stellone_ministero_ok.svg" alt="Consolato d&#39;Italia Fortaleza (Ceará)">
                            </a>
                        </div>

                        <div class="logo_sede" role="banner">
                            <a href="http://www.consfortaleza.org.br" title="consolato_fortaleza">
                            <!-- -->
                                <p id="titolo_generico">Consulado Honorário da Italia</p>
                                <p id="nome_sede" class="nome_iic">Fortaleza (Ceará/Piauí)</p> 
                           
                            </a>
                        </div><!-- end logo_sede-->
                        
                        <div id="boxUtility">
                            <div class="row">
                                <!-- font resize -->
                                <div id="resize_font">
                                    <div class="row"> <a class="zoomin" href="javascript:  ridimTesto(1);" title="Aumenta la dimensione del testo"> 
                                      <!-- <img src="/mae/images/ZoomIn.gif" alt="Aumenta la dimensione del testo"> --> 
                                        </a> <a class="zoomout" href="javascript: ridimTesto(-1);" title="Riduci la dimensione del testo"> 
                                        <!-- <img src="/mae/images/ZoomOut.gif" alt="Riduci la dimensione del testo"> --> 
                                        </a> 
                                    </div>
                                </div>
                                <!-- FINE font resize -->
                                <!--ricerca  <form class="navbar-form" role="search" action="http://www.consfortaleza.org.br/search">-->
                                <div id="ricerca_sito" role="search">
                                    <!-- <form class="navbar-form" role="search" action="http://www.consfortaleza.org.br/search">-->
                                    <form class="navbar-form" role="search" >
                                        <div id="form_inline" class="form-group col-xs-18">
                                            <label for="cerca_q" class="sr-only">Conteudo da Busca</label>
                                            <input id="cerca_q" type="text" class="form-control" placeholder="Buscar" name="q">
                                        </div>
                                        <button id="search_btn" class="btn btn-default col-xs-5" type="submit">
                                            <!--- class="glyphicon glyphicon-search" -->
                                            <i> 
                                                <img src="<?= $home ?>/img/lupa.png"/>
                                            </i>
                                        </button>
                                    </form>
                                </div>
                                <!--fine ricerca--> 
                                <!--lingue-->
                                <div id="lingue">
                                    <div class="row">
                                        <!-- 
                                        <ul><li><a href="http://www.consfortaleza.org.br/it/" title="Sito Italiano (IT)">IT</a></li><li><a href="http://www.consfortaleza.org.br/pt/" title="Sito Portoguese (pt-PT)">PT</a></li></ul>
                                        -->
                                        <ul>
                                            <li><a href="http://www.consfortaleza.org.br/it/" title="Sito Italiano (IT)"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--fine lingue--> 
                            </div>


                            <div class="row"> 
                                <!--social-->
                                <div id="social" class="col-md-24 col-sm-19 col-xs-24">
                                     <div class="social_follow"> 
                                     </div>
                                </div>
                                <!--fine social-->  
                            </div>
                        </div>
                    </div><!-- end row-->

                    <div class="row">
                        <div id="nav" class="navbar navbar-default col-md-24 col-xs-24" role="navigation">
                            <div class="container-fluid"> 
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu">Menu 
                                        <span class="sr-only"> Toggle navigation</span> 
                                        <span class="glyphicon glyphicon-align-justify"></span> 
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="main_menu">
                                    

                                    <?php 
                                        //$args =array(
                                        //    'theme_location'=>'header-menus',
                                        //    'show_home'=>'Home',
                                        //    'menu_class'  => 'menu');
                                        //$args = array(
                                        //                'depth'       => 0,
                                        //                'sort_column' => 'menu_order, post_title',
                                        //                'menu_class'  => 'menu',
                                        //                'include'     => '',
                                        //                'exclude'     => '',
                                        //                'echo'        => true,
                                        //                'show_home'   => true,
                                        //                'link_before' => '',
                                        //                'link_after'  => '',
                                        //                'page_item'  => 'nav'
                                        //            );
                                         //wp_page_menu($args);
                                         //wp_nav_menu($args);
                                         //wp_nav_menu( array( 
                                         //    'theme_location' => 'header-menu',
                                         //    'container_class' => 'my_extra_menu_class',
                                         //    'menu_class'=>'nav' ) );
                                         wp_nav_menu(array(
                                             'menu' => 'Home',
                                             'container' => 'nav', 
                                             'menu_class' => 'nav menu'
                                             
                                             )); 
                                             //'container_class' => 'class-da-nav'
                                    ?>

                                   

                                </div>
                                <!-- fim menu header-->
                            </div>
                        </div>
                    </div><!-- end row menu header-->

                    <div class="row">  <!-- inicio sub menu-->
                            <div id="submenunav" class="navbar navbar-default col-md-24 col-xs-24" role="navigation">
                                <div class="container-fluid"> 


                                
                                    <div class="navbar-header">
                                        <!-- inicio sub menu
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu_tag">[ Importante ] &gt;&gt; 
                                            <span class="sr-only"> Toggle navigation</span> 
                                            <span class="glyphicon glyphicon-align-justify">
                                            </span>
                                         </button>
                                        <div id="titolo_aree"><h5>[ Importante ] &gt;&gt;</h5>
                                         </div>  -->                                 
                                     </div>
                                    <div class="collapse navbar-collapse" id="main_menu_tag">
                                       
                                       <?php
                                         wp_nav_menu(array(
                                             'menu' => 'SubMenu',
                                             'container' => 'nav', 
                                             'menu_class' => 'nav navbar-nav'  
                                             )); 
                                         ?>
                                       
                                       
                                    </div>
                                </div>
                            </div>
                        </div>  <!-- fim sub menu-->