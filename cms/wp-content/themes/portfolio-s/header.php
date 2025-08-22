<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=1110, initial-scale=1.0">
<meta name="robots" content="noindex nofollow noarchive">
<title><?php wp_title( '|', true, 'right' ); ?><?= get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ); ?></title>
<meta name="description" content="Just Another Portfolio Site">
<meta name="author" content="Shingo Horie">
<link rel="dns-prefetch" href="//fonts.googleapis.com/">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/resources/css/vendor.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/resources/css/default.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/resources/css/common.css">
<?php if ( is_front_page() ): ?>
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/resources/css/home.css">
<?php elseif ( is_page('about') ): ?>
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/resources/css/about.css">
<?php elseif ( is_single() || is_single('tools') ): ?>
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/resources/css/works.css">
<?php endif; ?>
<link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Lato:wght@400;700&display=swap">
<link rel="shortcut icon" href="<?=get_template_directory_uri()?>/resources/icon/favicon.png" type="image/vnd.microsoft.icon">
</head>
<body>
	<header class="l-header <?php if( is_front_page() ): ?>l-header--front<?php endif; ?>">
		<div class="l-header__inner">
			<div class="l-header__siteroot">
				<?php if( is_front_page() ): ?>
				<h1 class="l-siteroot"><span>PORTFOLIO-S</span></h1>
                <?php else: ?>
				<p class="l-siteroot"><a href="/"><span>PORTFOLIO-S</span></a></p>
                <?php endif; ?>
			</div>
			<div class="l-header__rightNav">
				<nav class="l-gnav">
					<ul class="l-gnav__items">
						<li class="l-gnav__item"><a href="<?= get_permalink( get_page_by_path('works')->ID );?>"><span><?= get_the_title( get_page_by_path('works')->ID );?></span></a></li>
						<li class="l-gnav__item"><a href="<?= get_permalink( get_page_by_path('managements')->ID );?>"><span>Managements</span></a></li>
					</ul>
				</nav>
			</div>
			<div class="l-header__leftNav">
				<nav class="l-gnav">
					<ul class="l-gnav__items">
						<li class="l-gnav__item"><a href="<?= get_permalink( get_page_by_path('tools')->ID );?>"><span><?= get_the_title( get_page_by_path('tools')->ID );?></span></a></li>
						<li class="l-gnav__item"><a href="<?= get_permalink( get_page_by_path('about')->ID );?>"><span><?= get_the_title( get_page_by_path('about')->ID );?></span></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
