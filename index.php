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
					<h1><?php single_post_title(); ?></h1>
				</section>


<div class="artBox">
    <!-- The loop starts Here -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="wordPress-artBox-blog" <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></p>
        
        <div class="entry">
       		<?php the_content('Read the rest of this entry &raquo;'); ?>
        </div>
        
        <p class="postmetadata">
			<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
        </p>
    </div><!-- end post class div -->

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

