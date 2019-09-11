<?php
/*
Template Name: Videos
*/
?>

<?php get_header('inner'); ?>

<div class="container" style="position: relative;">
	<div class="row">
		<div class="page-title">
			<h1>ACTIVE RECOVERY VIDEO HUB</h1>
		</div>
		<div class="page-content txt-pages">
            <div id="videos_page">
                <?php /*
                <a><img src="<?php echo get_template_directory_uri();?>/assets/img/videos/1.jpg" alt=""/></a>
                <a><img src="<?php echo get_template_directory_uri();?>/assets/img/videos/2.jpg" alt=""/></a>
                <a><img src="<?php echo get_template_directory_uri();?>/assets/img/videos/3.jpg" alt=""/></a>
                <a><img src="<?php echo get_template_directory_uri();?>/assets/img/videos/4.jpg" alt=""/></a>
                <a><img src="<?php echo get_template_directory_uri();?>/assets/img/videos/5.jpg" alt=""/></a>
                <a><img src="<?php echo get_template_directory_uri();?>/assets/img/videos/6.jpg" alt=""/></a>
                <a><img src="<?php echo get_template_directory_uri();?>/assets/img/videos/7.jpg" alt=""/></a>
                <a><img src="<?php echo get_template_directory_uri();?>/assets/img/videos/8.jpg" alt=""/></a>
                */ ?>

                <?php
                query_posts(array(
                    'post_type' => 'videos',
					'posts_per_page'   => -1
                ));

                while (have_posts()): the_post();
                ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""/></a>
                <?php
                endwhile;
                ?>
            </div>
		</div>
	</div> <!-- /.row -->
</div> <!-- /.container -->

<?php get_footer(); ?>