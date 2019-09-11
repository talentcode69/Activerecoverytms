<?php get_header('inner'); ?>

<div class="container" style="position: relative;">
	<div class="row">
		<div class="page-title">
			<span>TMS INSIGHTS</span>
		</div>
		<div class="page-content txt-pages">
			<div class="col-md-8">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
		<div class="row blog-row" style="padding-top: 0px;">
			<div class="col-md-12" style="margin-bottom: 17px;">
				<?php
				$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
				?>
				<img src="<?php echo $featured_img_url;?>" alt="<?php the_title();?>" class="img-responsive" />

			</div>
			<div class="col-md-12">
				<div class="post-meta">Posted on <?php the_time('jS F Y') ?> by <a href="https://activerecoverytms.com/dr-jonathan-horey/"><span>Dr. Jonathan Horey</span></a></div>
				<h1><?php the_title(); ?></h1>
				<?php the_content();?>
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
