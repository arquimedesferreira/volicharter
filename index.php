<?php get_header();?>
<!--Antes da url base  -->
<?php $home_index = get_template_directory_uri();?>
    
<div class="container">
<div class="bg-faded p-4  my-4 row ">
                <div class="col-md-8">
                    <!-- Image Carousel -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">      
                        <?php  
                        $args = array('post_type'=>'Carrocel');
                        // The Query
                        $loop = new WP_Query( $args );
                        // The Loop
                        if ( $loop->have_posts() ) {
                             ?>   
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                                                              
                            <div class="carousel-inner" role="listbox">
                            <?php while ( $loop->have_posts() ) {
                                $loop->the_post(); 
                            ?>
                                <div class="carousel-item ">
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'd-block img-fluid w-100']); ?>
                     
                                </div>
                            <?php
                            
                            }            
                            echo('</div>');           
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        }                     
                        ?>

                        <div class="carousel-item active">
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
                        <h5 class="mb-0 "><strong>Celular:</strong></h5>
                        <div class="mb-4"> </div>
                        <div class="mb-4"><strong>BR +55 85 99817-9002</strong>     <img class="img-responsive" src="http://www.volicharter.org/coffe/img/whatsapp.48_48.svg" alt=""></div>
                        <div class="mb-4"><strong>BR +55 85 98782-6127</strong>     <img class="img-responsive" src="http://www.volicharter.org/coffe/img/whatsapp.48_48.svg" alt=""></div>
                        <h5 class="mb-0 "><strong>Telefone:</strong></h5>
                        <div class="mb-4"> </div>
                        <div class="mb-4"><strong>BR +55 85 3104-1171</strong></div>
                        <div class="mb-4"><strong>IT +39 02 4070-6898</strong></div>
                        <div class="mb-4"><strong>IT +39 02 4070-6898</strong></div>

                        <h5 class="mb-0 " ><strong>Email:</strong></h5>
                        <div class="mb-4">
                        <a href="mailto:info@volicharter.org"><strong>info@volicharter.org</strong></a> <br>
                        <a href="mailto:info@volicharter.net"><strong>info@volicharter.net</strong></a>              
                        </div>

                        <h5 class="mb-0 "><strong>Formas de Pagamento:</strong></h5>
                        <div class="mb-4">
                            <strong>A Partir de 04 de Outubro.</strong><br>
                            <strong>Todos os voos, em até 4x sem juros.</strong><br>
                        <br>
                        
                        </div>
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
                <div class="embed-responsive">
                        <?php  
                        $args = array('post_type'=>'planilha');
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) {
                                $loop->the_post();

                                the_post_thumbnail( 'large',['class' => 'd-block img-fluid w-100']);

                            }
                                wp_reset_postdata();
                            } else {
                                // no posts found
                            } 

                        
                        ?>
                </div>
            </div>
</div><!--End container-->
<!--Testando Home-->

        <?php  get_footer();?>    
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-2367121-4', 'auto');
            ga('send', 'pageview');
        </script>
</body>
</html>