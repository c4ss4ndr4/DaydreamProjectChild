<?php
/*
Template Name: Full Width Work
*/
get_header("page"); ?>


<!-- Start the main container -->
<section class="pageContent" role="document">
	<div class="row">
<!-- Row for main content area -->

<section class="" role="document">
	<div class="small-12 large-12 columns innerPageContent" role="main">
	<div class="small-12 large-12 columns" role="main">
    <div class="row">       
		  <?php
              $linksPosts = new WP_Query();
              $linksPosts->query('post_type=page&post_parent=12&orderby=menu_order&order=DEC&post_number=3&posts_per_page=12');
          ?>
        
          
          <?php while ($linksPosts->have_posts()) : $linksPosts->the_post(); ?>
         
            <?php if ( has_post_thumbnail( $post_id ) === true ) 
                {
             echo '<div class="row">'; 
			  echo '<div class="large-6 columns">';
              echo '<div class="workSectionBody">';
              echo '<a href="';
              echo the_permalink();
              echo '">'; 
              echo get_the_post_thumbnail( $post_id, $size, $attr ); 
              echo '</a>';
              echo '<br />';
			  echo '</div>';
			  echo '</div>';
			  echo '<div class="large-6 columns">';
			  	echo '<h3>';
              echo the_title();
			  	echo '</h3>';
				
              echo the_excerpt('Read more...');
			  
              echo '</div>';
              echo '</div>';
			  echo '</div>';
        
                 } 
            else 
                {
                 
             echo '<div class="small-12 large-12 columns">';
             echo '<a href="';
             echo the_permalink();
             echo '">'; 
             
             echo the_title();
             
             echo '</a>';
             
             echo the_excerpt('Read more...');
             echo '</div>';
             
        
                 }
            ?>
            
             
  <?php endwhile; ?>
  </div>
 </div>
	</div>
  </section>
		
<?php get_footer(); ?>