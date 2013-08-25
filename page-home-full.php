<?php
/*
Template Name: DD Home Full Width
*/
get_header(); ?>

<!-- Start the main container -->
<section class="container" role="document">
	
    <section class="tag" role="document">
    <div class="row">
    
<!-- Row for main content area -->

	<div class="small-12 large-12 columns" role="main">
    
    <div class="row">
    <div class="tag small-12 large-12 columns"><h1 class="lobster"><?php echo get_bloginfo ( 'description' );  ?></h1></div>
    </div>
    
  </div>
  </div>
  </section> <!-- end tag section -->
    
<section class="skills" role="document">
<div class="row">
  <div class="small-12 large-12 columns" role="main">
    <div class="row">
     <?php
              $linksPosts = new WP_Query();
              $linksPosts->query('post_type=page&post_parent=911&orderby=menu_order&order=DEC&post_number=3&posts_per_page=3');
          ?>
        
          
          <?php while ($linksPosts->have_posts()) : $linksPosts->the_post(); ?>
         
            <?php if ( has_post_thumbnail( $post_id ) === true ) 
                {
              echo '<div class="large-4 columns">';
              echo '<div class="servicesSection">';
              echo '<a href="';
              echo the_permalink();
              echo '">'; 
              echo get_the_post_thumbnail( $post_id, $size, $attr ); 
              echo '</a>';
              echo '<br />';
              //echo the_title();
              echo the_content('Read more...');
              echo '</div>';
              echo '</div>';
              
              
        
                 } 
            else 
                {
                 
             echo '<div class="large-4 columns">';
			 	echo '<div class="servicesSection">';
             echo '<a href="';
             echo the_permalink();
             echo '">'; 
             
             //echo the_title();
             
             echo '</a>';
             
             echo the_content('Read more...');
            echo '</div>'; 
			 echo '</div>';
             
        
                 }
            ?>
            
             
  <?php endwhile; ?>
  </div>
  </div>
 </div>
</section> <!-- end skills section -->
  
  
<section class="experience" role="document">
<div class="row">
 <div class="small-12 large-12 columns" role="main">
 <div class="row">

	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<!-- <header>
				<h1 class="entry-title"><?php //the_title(); ?></h1>
				<?php //reverie_entry_meta(); ?>
			</header> -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php //comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>
	</div>
	</div>
  </div>
    
</section> <!-- end experience -->
    
<section class="example" role="document">
<div class="row">
    <div class="small-12 large-12 columns" role="main">
    <div class="row">       
		  <?php
              $linksPosts = new WP_Query();
              $linksPosts->query('post_type=page&post_parent=12&orderby=menu_order&order=DEC&post_number=3&posts_per_page=3');
          ?>
        
          
          <?php while ($linksPosts->have_posts()) : $linksPosts->the_post(); ?>
         
            <?php if ( has_post_thumbnail( $post_id ) === true ) 
                {
              echo '<div class="large-4 columns">';
              echo '<div class="workSection">';
              echo '<a href="';
              echo the_permalink();
              echo '">'; 
              echo get_the_post_thumbnail( $post_id, $size, $attr ); 
              echo '</a>';
              echo '<br />';
			  	echo '<h3>';
              echo the_title();
			  	echo '</h3>';
              //echo the_excerpt('Read more...');
              echo '</div>';
              echo '</div>';
        
                 } 
            else 
                {
                 
             echo '<div class="large-4 column">';
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
 </div> <!-- end recent work Section -->
 </section><!-- end example Section -->
 
 </section>
 
 

		
<?php get_footer(); ?>