<?php get_header();?>
<!--page init -->
<?php $page_diretorio = get_template_directory_uri();?>
<div id="main" role="main">
	<div class="row">
		<div id="articolo_sx" class="col-md-5 col-sm-5 col-xs-24">
			<div class="row">        
				<nav id="nav_laterale" class="navbar navbar-default col-md-24 col-xs-24" role="navigation" aria-label="menu laterale">             
					<div class="container-fluid">
						<div class="row">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu_laterale">O Consulado<span class="sr-only"> Toggle navigation</span>
									<span class="glyphicon glyphicon-align-justify"></span> 
								</button>
							</div>
							<div class="collapse navbar-collapse" id="menu_laterale">
								<div class="testata"><a href="http://www.consfortaleza.org.br" title="O Consulado">O Consulado</a>
								</div>
								 <?php
                                         wp_nav_menu(array(
                                             'menu' => 'MenuLateral',
                                             'container' => 'nav', 
                                             'menu_class' => 'nav navbar-nav'  
                                             )); 
                                 ?>
							</div> 
						</div>
					</div>
				</nav>
			</div>
		</div>




		
					
					
					

				

	 <article id="articolo_centro" class="col-md-19 col-sm-19 padding_articolo item-page" itemscope="" itemtype="http://schema.org/Article" role="main" aria-label="articolo">
        
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>
		
		<meta itemprop="inLanguage" content="pt-PT">
        <h1 itemprop="headline"><?php the_title();?></h1>
        <div class="sr-only" itemprop="datePublished">2016-07-04</div>
        

        <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-24">&nbsp;</div>
                    <div class="col-md-17 col-sm-12 col-xs-24 share">&nbsp;</div>
        </div>
        
        <hr>
            <div class="sr-only" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                    <img src="<?$page_diretorio?>img/anteprima_google.jpg" alt="La Sede">
                    <meta itemprop="url" content="http://www.esteri.it/mae/resource/img/preferiti/anteprima_google.jpg">
                    <meta itemprop="width" content="600">
                    <meta itemprop="height" content="60">
                </div>
                <meta itemprop="name" content="Maeci">
            </div> 
            <div class="sr-only" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                <span itemprop="name">Maeci</span>
            </div>
            <div itemprop="mainEntityOfPage" itemscope="" itemtype="http://schema.org/WebPage">
            </div>
            <div class="sr-only" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="http://www.esteri.it/mae/resource/img/preferiti/anteprima_google.jpg">
                <meta itemprop="width" content="250">
                <meta itemprop="height" content="250"></div>
                <meta itemprop="dateModified" content="2016-08-04 16:31:19">
                
				
				<div itemprop="articleBody">
                    <?php the_content();?>
                </div>
            <hr>
        <div class="row"></div>    
		<?php } // end while
			} // end if?>
			<!--page fim -->

	</article>








</div>



<?php get_footer();?>