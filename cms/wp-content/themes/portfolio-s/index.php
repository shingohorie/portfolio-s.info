<?php

/**
 * The main template file
 *
 * This is theme for Portfolio for Desktop
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio
 */

get_header();

?>
<div class="l-mainvisual">
	<div class="p-home-mainvisual">
		<div class="p-home-mainvisual__inner">
			<!-- <p class="p-home-mainvisual__header" data-text-en="PICKUP">ピックアップ</p> -->
			<?php
			$args = array(
				'posts_per_page' => 1,
				'post_type' => 'post',
				'post__in' => get_option( 'sticky_posts' )
			);
			$query = new WP_Query( $args ); ?>

			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="c-media c-media--lg c-media--reverse">
				<a href="<?php the_permalink() ?>">
					<div class="c-media__body">
						<figure class="c-media__vis"><?php the_post_thumbnail('', array('loading' =>'lazy')); ?></figure>
						<div class="c-media__detail">
							<p class="c-media__title u-weightBold"><?php the_title() ?></p>
							<div class="c-media__tags">
								<ul class="c-tagGroup">
									<?php $tags = get_the_terms( get_the_id(), 'technology' ); ?>
									<?php foreach($tags as $tag) : ?>
									<li class="c-tagGroup__item"><span class="c-tag"><?= $tag->name; ?></span></li>
									<?php endforeach; ?>
								</ul>
							</div>
							<p class="c-media__note"><?= date("Y/m", strtotime(get_field('work_release'))); ?></p>
							<!-- <p class="c-media__toDetail">詳細をみる</p> -->
						</div>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<div class="l-structure l-structure--home">
	<div class="l-structure__inner">
		
		<div class="l-main">
			<div class="p-home-works">
				<div class="p-home-works__header">
					<h2 class="c-primaryHeader c-primaryHeader--md u-mbZero" data-text-en="RECENT WORKS"><span>最近の実績</span></h2>
				</div>
				<div class="p-home-works__body">
					<div class="c-mediaGroup c-mediaGroup--vertical c-mediaGroup--underlined">
						<div class="c-mediaGroup__inner">
							<ul class="c-mediaGroup__items">
								<?php
                                $args = array(
                                    'posts_per_page' => 4,
                                    'post_type' => 'post',
									'post__not_in' => get_option( 'sticky_posts' )
                                );
                                $query = new WP_Query( $args ); ?>

                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<li class="c-mediaGroup__item">
									<div class="c-media  <?php if( get_field('is_featured')): echo "c-media--featured"; endif; ?>">
										<a href="<?php the_permalink() ?>">
											<div class="c-media__body">
												<figure class="c-media__vis"><?php the_post_thumbnail('', array('loading' =>'lazy')); ?></figure>
												<div class="c-media__detail">
													<p class="c-media__title"><?php the_title() ?></p>
													<?php $tags = get_the_terms( get_the_id(), 'technology' ); ?>
													<?php if ($tags) : ?>
													<div class="c-media__tags">
														<ul class="c-tagGroup">
														<?php foreach($tags as $tag) : ?>
														<li class="c-tagGroup__item"><span class="c-tag"><?= $tag->name; ?></span></li>
														<?php endforeach; ?>
														</ul>
													</div>
													<?php endif; ?>
													<p class="c-media__note"><?= date("Y/m", strtotime(get_field('work_release'))); ?></p>
												</div>
											</div>
										</a>
									</div>
								</li>
                                <?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="p-home-works__footer">
					<p class="p-home-works__toDetail"><a href="<?= get_permalink( get_page_by_path('works')->ID );?>">実績一覧へ</a></p>
				</div>
			</div>

			<div class="p-home-works">
				<div class="p-home-works__header">
					<h2 class="c-primaryHeader c-primaryHeader--md u-mbZero" data-text-en="RECENT TOOLS"><span>業務で開発した社内ツール</span></h2>
				</div>
				<div class="p-home-works__body">
					<div class="c-mediaGroup c-mediaGroup--vertical c-mediaGroup--underlined">
						<div class="c-mediaGroup__inner">
							<ul class="c-mediaGroup__items">
								<?php
                                $args = array(
                                    'posts_per_page' => 4,
                                    'post_type' => 'tools'
                                );
                                $query = new WP_Query( $args ); ?>

                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<li class="c-mediaGroup__item">
									<div class="c-media  <?php if( get_field('is_featured')): echo "c-media--featured"; endif; ?>">
										<a href="<?php the_permalink() ?>">
											<div class="c-media__body">
												<figure class="c-media__vis"><?php the_post_thumbnail(); ?></figure>
												<div class="c-media__detail">
													<p class="c-media__title"><?php the_title() ?></p>
													<div class="c-media__tags">
														<ul class="c-tagGroup">
														<?php $tags = get_the_terms( get_the_id(), 'technology' ); ?>
														<?php foreach($tags as $tag) : ?>
														<li class="c-tagGroup__item"><span class="c-tag"><?= $tag->name; ?></span></li>
														<?php endforeach; ?>
														</ul>
													</div>
													<p class="c-media__note"><?= date("Y/m", strtotime(get_field('work_release'))); ?></p>
												</div>
											</div>
										</a>
									</div>
								</li>
                                <?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="p-home-works__footer">
					<p class="p-home-works__toDetail"><a href="<?= get_permalink( get_page_by_path('tools')->ID );?>">ツール一覧へ</a></p>
				</div>
			</div>
		</div>
		<div class="l-sidebar">
			<div class="p-home-lnav u-sticky">
				<div class="p-home-journal">
					<div class="p-home-journal__header">
						<h2 class="p-home-journal__title"><a href="http://shinimae.hatenablog.com/" target="_blank"><span>Journal</span></a></h2>
					</div>
					<div class="p-home-journal__body">
						<ul class="p-home-journal__items">
							<?php
							$rss = simplexml_load_file('http://shinimae.hatenablog.com/feed');
							$html = '';
							$i = 0;
							foreach($rss->entry as $item){
								if($i < 3){
									$title = $item->title;
									$date = date("Y/m/d", strtotime($item->published));
									$link = $item->link['href'];
									$summary = strip_tags($item->summary);
									$html .= '<li class="p-home-journal__item">';
									$html .= '<a href="'.$link.'" target="_blank">';
									$html .= '<p class="p-home-journal__pubdate">'.$date.'</p>';
									$html .= '<p class="p-home-journal__detail">'.$title.'</p>';
									$html .= '<p class="p-home-journal__summary">'.$summary.'</p>';
									$html .= '</a>';
									$html .= '</li>';
									$i++;
								}else{
									break;
								}
							}
							echo $html;
							?>
						</ul>
					</div>
					<div class="p-home-journal__footer">
						<p class="p-home-journal__toDetail"><a href="http://shinimae.hatenablog.com/" target="_blank">記事一覧へ</a></p>
					</div>
				</div>
				<div class="p-home-about">
					<div class="p-home-about__header">
						<h2 class="p-home-about__title">堀江 真悟  <i>Shingo Horie</i></h2>
					</div>
					<div class="p-home-about__body">
						<p>マークアップならびにフロントエンドエンジニアとして、新規開発から保守運用、小規模案件から大規模案件まで多数の案件を担当してきました。</p>
					</div>
					<div class="p-home-about__footer">
						<p class="p-home-about__toDetail"><a href="<?= get_permalink( get_page_by_path('about')->ID );?>">スキル詳細へ</a></p>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>

<?php get_footer(); ?>
