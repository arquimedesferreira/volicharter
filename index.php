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
                                src="http://docs.google.com/gview?url=<?php $home_index ?>/tabella/Tabella.pdf&amp;embedded=true" 
                                style="width:100%; " >
                        </iframe>     
                </div>  
            </div>
</div><!--End container-->


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