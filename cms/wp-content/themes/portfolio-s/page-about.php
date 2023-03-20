<?php

/**
 * 
 * Template Name: about
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
				<li class="l-breadcrumbs__item"><?= get_the_title() ?></li>
			</ol>
		</div>
	</div>
    <div class="l-structure l-structure--single">
		<div class="l-structure__inner">
			<div class="l-main">
				<div class="l-section">
					<h1 class="c-primaryHeader" data-text-en="<?= get_the_title() ?>"><span>スキル詳細</span></h1>

					<div class="p-about-introduction">
						<p class="p-about-introduction__title">堀江真悟  <i>Shingo Horie</i></p>
						<p>マークアップならびにフロントエンドエンジニアとして、新規開発から保守運用、小規模案件から大規模案件まで多数の案件を担当してきました。<br>コーポレートサイトやキャンペーンサイトなどの一般的なサイト制作をはじめ、JSフレームワークを用いたインタラクティブなコンテンツ開発、時にはレスポン<br>シブメールマガジン・他言語対応のグローバルサイト・CMS管理画面のカスタマイズなど、幅広く手がけています。</p>
						<p>1985年生 群馬県出身 / 東京都在住</p>
						<p class="p-about-introduction__account p-about-introduction__account--github"><a href="https://github.com/shingohorie" target="_blank">shingohorie</a></p>
					</div>

					<div class="p-about-skillGroup p-about-skillGroup--twoUp">
						<div class="p-about-skillGroup__inner">
							<ul class="p-about-skillGroup__items">
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--html">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">HTML / CSS</p>
										</div>
										<div class="p-about-skill__body">
											<ul class="p-about-skill__items">
												<li class="p-about-skill__item">
													HTML5 / CSS3による基本的なコーディング</li>
												<li class="p-about-skill__item">
													メタ言語を使用した開発経験
													<ul class="p-about-skill__example">
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_sass.svg" alt="Sass"></i></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_pug.svg" alt="Pug"></i></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													大規模 / 中規模サイトの新規開発
													
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('maezawa', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('maezawa', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('segasammy', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('segasammy', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('tif', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('tif', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('tome', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('tome', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('shintaku', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('shintaku', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													大規模 / 中規模サイトの保守運用 
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('megsnow', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('megsnow', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('mizkan', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('mizkan', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('nabco', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('nabco', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('sony', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('sony', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('sonydi-acos', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('sonydi-acos', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													レガシーブラウザ対応
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('sony', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('sony', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('peachjohn', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('peachjohn', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													レスポンシブメールマガジンの制作
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('sony-mail-mysony', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('sony-mail-mysony', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('sony-mail-retension', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('sony-mail-retension', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													CMS管理画面のテンプレート開発
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('fureai', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('fureai', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('audi', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('audi', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('rj-sg', OBJECT, 'tools')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('rj-sg', OBJECT, 'tools')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('wizonline', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('wizonline', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													CSS設計手法を採用したモジュール開発
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('segasammy', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('segasammy', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('shintaku', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('shintaku', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('rj-web', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('rj-web', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													JIS X 8341-3 レベルAA 一部準拠によるアクセシビリティ対応
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('tif', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('tif', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													Lighthouseによるサイト高速化対応
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('reazon', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('reazon', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													ガイドライン策定・テンプレート設計・量産者や外部作業者への品質管理
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('maezawa', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('maezawa', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('odakyusc', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('odakyusc', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('tif', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('tif', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--js">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">JavaScript</p>
										</div>
										<div class="p-about-skill__body">
											<ul class="p-about-skill__items">
												<li class="p-about-skill__item">jQueryによる基本的なプログラミング</li>
												<li class="p-about-skill__item">ES6によるオブジェクト指向プログラミング</li>
												<li class="p-about-skill__item">
													CSSと連携した演出・インタラクションの実装
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('menu', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('menu', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('vogue-tiffany', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('vogue-tiffany', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('pentax', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('pentax', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													AltJSを使用した開発経験
													<ul class="p-about-skill__example">
														<li><a href="<?= get_term_link('typescript', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_typescript.svg" alt="TypeScript"></i></a></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_coffeescript.svg" alt="CoffeeScript"></i></li>
													</ul>
												</li>

												<li class="p-about-skill__item">
													フレームワークを使用した開発経験
													<ul class="p-about-skill__example">
														<li><a href="<?= get_term_link('electron', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_electron.svg" alt="Electron"></i></a></li>
														<li><a href="<?= get_term_link('vuejs', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_vue.svg" alt="Vue.js"></i></a></li>
														<li><a href="<?= get_term_link('nuxtjs', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_nuxt.svg" alt="Nuxt.js"></i></a></li>
														<li><a href="<?= get_term_link('angularjs', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_angular.svg" alt="AngularJS"></i></a></li>
														<li><a href="<?= get_term_link('backbonejs', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_backbone.svg" alt="Backbone.js"></i></a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													モジュールバンドラによるモジュール管理
													<ul class="p-about-skill__example">
														<li><a href="<?= get_term_link('webpack', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_webpack.svg" alt="webpack"></i></a></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_browserify.svg" alt="Browserify"></i></li>
														<li><a href="<?= get_term_link('requirejs', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_require.svg" alt="RequireJS"></i></a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													SVGによるアニメーションの実装<br>D3.jsによるデータビジュアライゼーションの実装
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('tokyoink', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('cheeseday', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('cheeseday', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('cheeseday', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('segasammy', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('segasammy', OBJECT, 'post')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('rj-web', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('rj-web', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													PWAの実装
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('rj-pwa', OBJECT, 'tools')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('rj-pwa', OBJECT, 'tools')->ID); ?>">[事例]</a></li>
														<li><a href="<?= get_permalink(get_page_by_path('odakyuop-pwa', OBJECT, 'post')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('odakyuop-pwa', OBJECT, 'post')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													Electronによるデスクトップアプリの開発
													<ul class="p-about-skill__example">
														<li><a href="<?= get_permalink(get_page_by_path('rj-metatool', OBJECT, 'tools')->ID); ?>" data-title="<?= get_the_title(get_page_by_path('rj-metatool', OBJECT, 'tools')->ID); ?>">[事例]</a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													テスティングフレームワークによるユニットテストの作成
													<ul class="p-about-skill__example">
														<li><a href="<?= get_term_link('jest', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_jest.svg" alt="Jest"></i></a></li>
														<li><a href="<?= get_term_link('mocha', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_mocha.svg" alt="Mocha"></i></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--prog">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">CMS / PHP / Node.js / ...</p>
										</div>
										<div class="p-about-skill__body">
											<ul class="p-about-skill__items">
												<li class="p-about-skill__item">
													CMSによるサイト構築（管理画面のカスタマイズ含む）
													<ul class="p-about-skill__example">
														<li><a href="<?= get_term_link('wordpress', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_wordpress.svg" alt="WordPress"></i></a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													基本的なプログラミング
													<ul class="p-about-skill__example">
														<li><a href="<?= get_term_link('php', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_php.svg" alt="PHP"></i></a></li>
														<li><a href="<?= get_term_link('nodejs', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_nodejs.svg" alt="Node.js"></i></a></li>
														<li><a href="<?= get_term_link('gas', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_gas.svg" alt="Google App Script"></i></a></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													タスクランナー等による開発
													<ul class="p-about-skill__example">
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_npm.svg" alt="npm scripts"></i></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_gulp.svg" alt="gulp"></i></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_grunt.svg" alt="Grunt"></i></li>
													</ul>
												</li>
												<li class="p-about-skill__item">
													ジェネレータによるスタイルガイドの作成
													<ul class="p-about-skill__example">
														<li><a href="<?= get_term_link('kss', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_kss.png" alt="KSS"></i></a></li>
														<li><a href="<?= get_term_link('astrum', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_astrum.png" alt="Astrum"></i></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--dev">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">Develop Environment</p>
										</div>
										<div class="p-about-skill__body">
											<ul class="p-about-skill__items">
												<li class="p-about-skill__item">
													バージョン管理システムを利用したチーム開発経験 <br>GitHubを利用した Git Flow / Pull Request / Fork による開発経験
													<ul class="p-about-skill__example">
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_git.svg" alt="Git"></i></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_github.svg" alt="GitHub"></i></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_svn.svg" alt="Subversion"></i></li>
													</ul>
												</li>

												<li class="p-about-skill__item">
													開発環境の仮想化と構成管理
													<ul class="p-about-skill__example">
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_docker.svg" alt="Docker"></i></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_docker_compose.png" alt="Docker Compose"></i></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_vagrant.svg" alt="Vagrant"></i></li>
														<li><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_ansible.svg" alt="Ansible"></i></li>
													</ul>
												</li>
												
												<li class="p-about-skill__item">
													PaaS / BaaS サービスの利用
													<ul class="p-about-skill__example">
														<li><a href="<?= get_term_link('heroku', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_heroku.svg" alt="Heroku"></i></a></li>
														<li><a href="<?= get_term_link('firebase', 'technology'); ?>"><i class="hover"><img src="<?=get_template_directory_uri()?>/resources/img/about/icon_firebase.svg" alt="Firebase"></i></a></li>
													</ul>
												</li>
												
												<li class="p-about-skill__item">CUIでの基本的なLinuxマシンのオペレーション</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="l-section">
					<h2 class="c-primaryHeader c-primaryHeader--md" data-text-en="Certification"><span>資格</span></h2>

					<ul>
						<li>Microsoft Office Specialist (MOS)　[Word, Excel]</li>
						<li>基本情報技術者試験</li>
						<li>Oracle Master [Bronze]</li>
						<li>Oracle Certified Professional Java SE6 Programmer</li>
						<li>Linux Professional Institute Certification (LPIC)　[Level 1]</li>
						<li>XMLマスター [BASIC]</li>
						<li>VBAエキスパート　[Excel, Access]</li>
						<li>CIW JavaScript Specialist</li>
						<li>CIW Perl Specialist</li>
						<li>PHP5技術者認定初級試験</li>
						<li>Microsoft Certified Prifessional (MCP)　[70-480 (Programming in HTML5 with JavaScript and CSS3)]</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>