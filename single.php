<?php get_header();?>


<?php //$my_query = new WP_Query('category_name=Carrocel');
      $query_posts($query_string . '&cat=-3,-8');  ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <!-- Do special_cat stuff... -->


            <img src="<?php the_post_thumbnail_url();?>">
                  
            <h1><?php the_title();?></h1>
            <p> <?php the_content();?></p>
         



<?php endwhile; ?>
<?php get_footer();?>