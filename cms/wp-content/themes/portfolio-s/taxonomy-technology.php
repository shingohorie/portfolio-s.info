<?php

/**
 * 
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio
 */

get_header();

?>
	<div class="l-breadcrumbs">
		<div class="l-breadcrumbs__inner">
			<ol class="l-breadcrumbs__items">
                <li class="l-breadcrumbs__item"><a href="/">HOME</a></li>
				<li class="l-breadcrumbs__item"><a href="<?= get_permalink( get_page_by_path('works')->ID );?>"><?= get_the_title( get_page_by_path('works')->ID );?></a>・<a href="<?= get_permalink( get_page_by_path('tools')->ID );?>"><?= get_the_title( get_page_by_path('tools')->ID );?></a></li>
				<li class="l-breadcrumbs__item">#<?php single_tag_title(); ?></li>
			</ol>
		</div>
	</div>
    <div class="l-structure l-structure--single">
		<div class="l-structure__inner">
			<div class="l-main">

				<div class="l-section">
					<h1 class="c-primaryHeader" data-text-en="# <?php single_tag_title(); ?>"><span>タグ「<?php single_tag_title(); ?>」に一致する実績</span></h1>
					<div class="c-cardGroup c-cardGroup--threeUp">
						<div class="c-cardGroup__inner">
							<ul class="c-cardGroup__items">
								<?php while ( have_posts() ) : the_post(); ?>
								<li class="c-cardGroup__item">
									<div class="c-card <?php if( get_field('is_featured')): echo "c-card--featured"; endif; ?>">
										<figure class="c-card__vis">
											<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
										</figure>
										<div class="c-card__header">
											<p class="c-card__title"><?php the_title() ?></p>
										</div>
										<div class="c-card__body">
											<?php $tags = get_the_terms( get_the_id(), 'technology' ); ?>
											<?php if($tags) : ?>
											<ul class="c-tagGroup">
												<ul class="c-tagGroup">
												<?php foreach($tags as $tag) : ?>
												<li class="c-tagGroup__item"><span class="c-tag"><a href="<?= get_term_link($tag); ?>"><?= $tag->name; ?></a></span></li>
												<?php endforeach; ?>
												</ul>
											</ul>
											<?php endif; ?>
										</div>
										<div class="c-card__footer">
											<p class="c-card__note"><?= date("Y/m", strtotime(get_field('work_release'))); ?></p>
										</div>
									</div>
								</li>

								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="l-section">
					<h2 class="c-primaryHeader c-primaryHeader--md" data-text-en="See Other Tags"><span>タグ一覧</span></h2>

					<ul class="c-tagGroup">
						<?php
						$tags = get_terms('technology');
						$str = array();
						foreach ( $tags as $tag ) {
							array_push($str, '<li class="c-tagGroup__item"><span class="c-tag"><a href="'.get_term_link($tag).'">'. esc_html($tag->name). '</a></span></li>');
						}
						echo implode('', $str);
						?>
					</ul>
				</div>

            </div>
    	</div>
    </div>
<?php get_footer(); ?>