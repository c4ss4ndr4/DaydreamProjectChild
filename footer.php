	</div><!-- Row End -->
</section><!-- Container End -->

<section class="footer" role="document">
<div class="row full-width footerWidget">
		<div class="footerWidget">
	<?php dynamic_sidebar("Footer"); ?>
       </div>
 </div>
</section>

<section class="credits" role="document">
<footer class="row full-width" role="contentinfo">
	<div class="small-12 large-4 columns">
		<p>&copy; <?php echo date('Y'); ?>. <?php _e('Crafted on','reverie'); ?> <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>.</p>
	</div>
	
    
	<div class="small-12 large-8 columns">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>
   
</footer>
</section>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>