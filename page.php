<?php get_header();?>
<!--page init -->
<?php $page_diretorio = get_template_directory_uri();?>
<?php if(is_page('home')){ ?>
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
<?php } ?>


		
									
<?php if(is_page('contato')){ ?>
    <h1> Pagina Contato<h1>

<?php } ?>					

				

	 
        
           <!-- Começa o Loop. -->
<?php
        // The Query
        $args = array(
            'post_type'=> 'itens',
            'actor'    => 'admin',
            'order'    => 'ASC'
        );
        query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
   echo '<li>';
   the_title();
   echo '</li> Teste query ok';
endwhile;

// Reset Query
wp_reset_query();


?>

<?php get_footer();?>