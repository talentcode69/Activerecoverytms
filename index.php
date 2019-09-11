<?php get_header('inner'); ?>
<div class="container" style="position: relative;">
	<div class="row">
		<div class="page-title">
			<h1>TMS Insights</h1>
		</div>
		<div class="page-content txt-pages">
			<div class="col-md-8">
				<h2>All News and Insights</h2>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>	
		<div class="row blog-row">
			<div class="col-md-3">
				<?php
				$featured_img_url = get_the_post_thumbnail_url($post->ID, 'medium');
				?>
				<img src="<?php echo $featured_img_url;?>" alt="<?php the_title();?>" class="img-responsive" />
				
			</div>
			<div class="col-md-9">
				<div class="post-meta">Posted on <?php the_time('jS F Y') ?> by <span><a href="https://activerecoverytms.com/dr-jonathan-horey/">Dr. Jonathan Horey</a></span></div>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt();?>
			</div>
		</div>	
		<?php
		// End the loop.
		endwhile;
		?></div>
		<div class="col-md-4">
			<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
<?php endif; ?>
		</div>
		</div>

	</div> <!-- /.row -->
 		</div>	
<?php get_footer(); ?>
