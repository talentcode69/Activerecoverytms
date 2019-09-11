<?php
/*
Template Name:Home
*/	
 get_header(); ?>
<div class="container" style="padding-top: 160px;">
	<div class="row">
		<div class="col-md-12 about-page-content">
			<div class="page-content txt-pages" style="padding-top: 0px;">
				<div class="talk-to-us">
				
					<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					the_content();

				// End the loop.
				endwhile;
				?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="youtube-gallery"> 
	<h2>VIDEOS ABOUT TRANSCRANIAL MAGNETIC STIMULATION </h2> 
	<?php
    query_posts(array(
        'post_type' => 'videos',
		'posts_per_page'   => 8
    ));
	
    while (have_posts()): the_post();
    ?>
	
        <div class="col-sm-6 col-md-3 p-0"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('full'); ?>" class="img-responsive" alt="Videos Thumbnails"/></a></div>
    <?php
    endwhile;
    ?> 
</div>

<?php get_footer();