<?php
/**
 * @package WordPress
 * @subpackage cat_site
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<!--Loading Google Fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Peralta&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Wellfleet&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<div id="page">



<header>
<div id="homeNav">
<nav id="topNavHome">				
<a href="<?php echo get_option('home'); ?>/"><img height="128px" width="128px" src="<?php bloginfo('template_directory'); ?>https://content.owo.art/assets/logo.png" alt="The logo for PixelCat Art, it's a drawing of a cat." ><h1><?php bloginfo('name'); ?></h1></a><?php wp_nav_menu( array( 'container'=>'', 'menu'=>'mainnav' ) ); ?>
</nav>
</div>
</header>
    

	
<section id="content">
	
<main id="mainGallery">
				<!--Title of Main-->
				<section id="galleryTitle">		
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</section>


<div class="blog-post-box">
    <!-- The loop starts Here -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h2><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></h2>
        
        <div class="entry">
       		<?php the_content('Read the rest of this entry &raquo;'); ?>
        </div>
        
        <p class="postmetadata">
        This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> and is filed under <?php the_category(', ') ?>. You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

        <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
            // Both Comments and Pings are open ?>
            You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

        <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
            // Only Pings are Open ?>
            Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

        <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
            // Comments are open, Pings are not ?>
            You can skip to the end and leave a response. Pinging is currently not allowed.

        <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
            // Neither Comments, nor Pings are open ?>
            Both comments and pings are currently closed.

        <?php } edit_post_link('Edit this entry','','.'); ?>
		</p>

		</div>

	<!-- the comments template below refers to the comments.php file in the theme-->
	<?php comments_template(); ?>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?><!-- The loop ends here -->

	</div>




</main>
</section><!-- end Content -->





			<!--Footer-->
			<footer>
            <p>
            <?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a><br />
            <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and 
            <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
            </p>
				<nav>
                <?php wp_nav_menu( array( 'container'=>'', 'menu'=>'footernav' ) ); ?>
				</nav>
			</footer>







</div><!-- end Page -->
		<?php wp_footer(); ?>
</body>
</html>

