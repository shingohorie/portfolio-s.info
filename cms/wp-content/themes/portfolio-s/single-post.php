<?php

/**
 * 
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
				<li class="l-breadcrumbs__item"><a href="/">Home</a></li>
				<li class="l-breadcrumbs__item"><a href="<?= get_permalink( get_page_by_path('works')->ID );?>"><?= get_the_title( get_page_by_path('works')->ID );?></a></li>
				<li class="l-breadcrumbs__item"><span><?php the_title(); ?></span></li>
			</ol>
		</div>
	</div>

	<?php while ( have_posts() ) : $wp_query->the_post(); ?>
	<div class="l-structure l-structure--double">
		<div class="l-structure__inner">
			<div class="l-main js-pswp">

				<div class="p-entry-header">
					<h1 class="p-entry-title"><?php the_title(); ?></h1>

					<div class="p-entry-eyecatch js-pswp__item">
						<p><a href="<?= the_field('eyecatch'); ?>" class="js-pswp__link"><img src="<?= the_field('eyecatch'); ?>" alt=""></a></p>
					</div>
				</div>

				<dl class="p-entry-position">
					<dt class="p-entry-position__term">担当</dt>
					<dd class="p-entry-position__detail"><?= implode(' / ', get_field('work_position')) ?></dd>
					<dt class="p-entry-position__term">対応環境</dt>
					<dd class="p-entry-position__detail"><?= implode(' / ', get_field('work_target')); ?></dd>
				</dl>

				<div class="p-entry-overview"><?php the_content(); ?></div>

				<?php if( have_rows( 'work_medias' ) ): ?>
					<?php $i = 0; ?>
					<?php while ( have_rows( 'work_medias' ) ) : the_row(); ?>
					
						<?php if( get_sub_field( 'media_switcher' ) == 'video' ): ?>
						<figure class="p-entry-figure">
							<video controls muted preload">
								<source src="<?php the_sub_field( 'media_video' )?>" type="video/mp4">
							</video>
							<figcaption><span>Fig <?php echo sprintf('%02d', get_row_index()); ?>.</span> <?php the_sub_field( 'media_caption' )?></figcaption>
						</figure>
						<?php elseif( get_sub_field( 'media_switcher' ) == 'image' ) : ?>
						<figure class="p-entry-figure js-pswp__item">
							<a href="<?php the_sub_field( 'media_image' )?>" target="_blank" class="js-pswp__link"><img src="<?php the_sub_field( 'media_image' )?>"></a>
							<figcaption><span>Fig <?php echo sprintf('%02d', get_row_index()); ?>.</span> <?php the_sub_field( 'media_caption' )?></figcaption>
						</figure>
						<?php endif; ?>					
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="l-sidebar">
				<div class="p-entry-lnav u-sticky">
					<div class="p-entry-info">
						<p class="p-entry-info__title">URL</p>
						<?php if( get_field( 'work_url' ) ): ?>
							<p class="u-break-word"><a href="<?php the_field( 'work_url' ); ?>" target="_blank"><?php the_field( 'work_url' ); ?></a></p>
						<?php else: ?>
							<p>公開終了</p>
						<?php endif; ?>
					</div>
					<div class="p-entry-info">
						<p class="p-entry-info__title">公開日</p>
						<p><?= date( "Y/m/d", strtotime( get_field('work_release') ) ); ?></p>
					</div>
					<?php if( have_rows('work_repositories') ): ?>
					<div class="p-entry-info">
						<p class="p-entry-info__title">リポジトリURL</p>
						<ul class="p-entry-info__repositories">
						<?php while ( have_rows( 'work_repositories' ) ) : the_row(); ?>
							<li class="u-break-word"><a href="<?php the_sub_field( 'work_repository' ); ?>" target="_blank"><?php the_sub_field( 'work_repository'); ?></a></li>
						<?php endwhile; ?>
						</ul>
					</div>
					<?php endif; ?>
					<?php if( have_rows('work_features') ): ?>
					<div class="p-entry-info">
						<p class="p-entry-info__title">特徴</p>
						<ul class="p-entry-info__list">
						<?php while ( have_rows( 'work_features' ) ) : the_row(); ?>
							<li><?php the_sub_field( 'work_feature'); ?></li>
						<?php endwhile; ?>
						</ul>
					</div>
					<?php endif; ?>
					<?php $tags = get_the_terms( get_the_id(), 'technology' ); ?>
					<?php if($tags) : ?>
					<div class="p-entry-info">
						<ul class="c-tagGroup">
							<?php foreach($tags as $tag) : ?>
							<li class="c-tagGroup__item"><span class="c-tag"><a href="<?= get_term_link($tag); ?>"><?= $tag->name; ?></a></span></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div> 
			</div>
			<div class="l-pager">
				<div class="p-entry-pager">
					<?php 
					$prev_post = get_previous_post(false);
					$next_post = get_next_post(false);
					?>	
					<?php if( $prev_post ) : ?>
					<p class="p-entry-pager__item p-entry-pager__item--prev">
						<a href="<?= get_permalink( $prev_post->ID ); ?>"><span><i></i><?= $prev_post->post_title; ?></span></a>
					</p>
					<?php endif; ?>
					<?php if( $next_post ) : ?>
					<p class="p-entry-pager__item p-entry-pager__item--next">
						<a href="<?= get_permalink( $next_post->ID ); ?>"><span><i></i><?= $next_post->post_title; ?></span></a>
					</p>
					<?php endif; ?>
					<p class="p-entry-pager__item p-entry-pager__item--archive">
						<a href="<?= get_permalink( get_page_by_path('works')->ID );?>"><span></span></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>