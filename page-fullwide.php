<?php
/*
Template Name: Full wide page
*/
get_header(); ?>
	<!-- Column 1 /Content -->
	<div id="content" class="ts narrow container" style="padding-top: 20px;">
		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
			<div class="ts heading vertically padded slate post" data-dark>
				<div class="image">
					<?php if ( has_post_thumbnail() ) { ?>  
						<?php the_post_thumbnail(); ?>  
					<?php } else {?>  
						<script>
							var pageHeaderImg = Trianglify({
								width: 1000,
								height: 360,
							});
							document.write('<img src="' + pageHeaderImg.png() + '">');
						</script>
					<?php } ?> 
				</div>
				<span class="header"><?php the_title(); ?></span>
				<span class="description"><?php the_time('Y/n/j') ?> <?php edit_post_link(__( 'Edit', 'Carter' ), ''); ?></span>
			</div>
			<div class="ts hidden divider" data-dark></div>
			<post data-dark>
				<?php the_content(); ?>
			</post>
			<div class="ts hidden clearing divider" data-dark></div>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>