<footer class="l-footer">
	<div class="l-footer__inner">
		<div class="l-footer__siteroot">
			<p class="l-siteroot"><a href="/"><span>PORTFOLIO-S</span></a></p>
		</div>
		<div class="l-footer__fnav">
			<nav class="l-fnav">
				<ul class="l-fnav__primaryItems">
					<li class="l-fnav__primaryItem">
						<a href="<?= get_permalink( get_page_by_path('works')->ID );?>"><?= get_the_title( get_page_by_path('works')->ID );?></a>
						<ul class="l-fnav__secondaryItems">
							<?php
							$args = array(
								'posts_per_page' => 5,
								'post_type' => 'post',
								'ignore_sticky_posts' => true
							);
							$query = new WP_Query( $args ); ?>

							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li class="l-fnav__secondaryItem"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
							<?php endwhile; ?>
						</ul>
					</li>
					<li class="l-fnav__primaryItem">
						<a href="<?= get_permalink( get_page_by_path('managements')->ID );?>"><?= get_the_title( get_page_by_path('managements')->ID );?></a>
						<ul class="l-fnav__secondaryItems">
							<?php
							$args = array(
								'posts_per_page' => 5,
								'post_type' => 'post',
								'ignore_sticky_posts' => true,
								'tax_query' => array(
									array(
										'taxonomy' => 'technology',
										'field' => 'slug',
										'terms' => 'pl'
									)
								),
								'order' => 'ASC', 
								'orderby' => 'menu_order', 
							);
							$query = new WP_Query( $args ); ?>

							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li class="l-fnav__secondaryItem"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
							<?php endwhile; ?>
						</ul>
					</li>
					<li class="l-fnav__primaryItem">
						<a href="<?= get_permalink( get_page_by_path('tools')->ID );?>"><?= get_the_title( get_page_by_path('tools')->ID );?></a>
						<ul class="l-fnav__secondaryItems">
							<?php
							$args = array(
								'posts_per_page' => 5,
								'post_type' => 'tools',
								'ignore_sticky_posts' => true
							);
							$query = new WP_Query( $args ); ?>

							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li class="l-fnav__secondaryItem"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
							<?php endwhile; ?>
						</ul>
					</li>
					<li class="l-fnav__primaryItem">
						<a href="<?= get_permalink( get_page_by_path('about')->ID );?>"><?= get_the_title( get_page_by_path('about')->ID );?></a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="l-footer__copyright">
			<p class="l-copyright"><small>copyright 2025 Shingo Horie</small></p>
		</div>
	</div>
</footer>
<script src="<?=get_template_directory_uri()?>/resources/js/main.js"></script>
</body>
</html>