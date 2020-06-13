<?php

/**
 * 
 * Template Name: tools
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio
 */

get_header();

?>
    <div id="tmpl-breadcrumbs">
    	<nav class="breadcrumbs">
    		<ul class="breadcrumbs__inner">
    			<li class="breadcrumbs__item"><a href="../">HOME</a></li>
    			<li class="breadcrumbs__item"><span>TOOLS</span></li>
    		</divul>
    	</nav>
    </div>
    <div id="tmpl-main">
    	<main class="main">
    		<div class="main__inner">
                <div class="articleGroup articleGroup--threeUp">
                    <div class="articleGroup__inner">
                    	<?php 

                        $args = array(
                            'posts_per_page' => -1,
                            'post_type' => 'tools'
                        );
                        $query = new WP_Query( $args ); ?>

                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php 
                            $works_class_add = '';
                            if( get_field('is_featured')): $works_class_add = 'featured';
                            endif;
                        ?>
                        <div class="articleGroup__item">
                            <article class="work work--rollover <?= $works_class_add; ?>">
                                <a href="<?php the_permalink() ?>">
                                    <?php 
                                        $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                                        list( $src, $width, $height ) = $eye_img; 
                                    ?>
                                    <figure><div style="background-image:url(<?= $src; ?>)"><?php the_post_thumbnail(); ?></div></figure>
                                    <h1 class="js-hyphenation-fix"><?= substr(get_field('work_release'), 0, 4); ?> <em><?php the_title() ?></em></h1>
                                </a>
                            </article>
                        </div>

                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
    	</main>
    </div>
<?php get_footer(); ?>