<?php get_header();?>
<!--page init -->
<?php $page_diretorio = get_template_directory_uri();?>

<?php 
//;
if(is_page('home')){ ?>

<?php } ?>


		
					

				
<?php if(is_page('servicos')){ ?>
      <!--Pagina de Servico-->
     
        
<?php } ?>
                                                           
<?php if(is_page('contato')){ ?>
     <!--Pagina de Contato-->
         
<?php } ?>

	 

<?php get_footer();?>