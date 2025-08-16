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
						<p class="u-mtOneLine">マークアップならびにフロントエンドエンジニアとして、新規開発から保守運用、小規模案件から大規模案件まで多数の案件を担当してきました。<br>コーポレートサイトやキャンペーンサイトなどの一般的なサイト制作をはじめ、JSフレームワークを用いたインタラクティブなコンテンツ開発、時にはレスポン<br>シブメールマガジン・他言語対応のグローバルサイト・CMS管理画面のカスタマイズなど、幅広く手がけています。</p>
						<p class="u-mtOneLine">最近では、開発のコーディネート（ディレクターとエンジニアの間に立ち、ガイドライン策定・ソースレビュー・進行管理・工程の再定義などを行います）や、大量生産の仕組みづくり、外部協力会社へのディレクションを行っています。</p>
						<p class="u-mtOneLine">1985年生 群馬県出身 / 東京都在住</p>
						<p class="p-about-introduction__account p-about-introduction__account--github"><a href="https://github.com/shingohorie" target="_blank">shingohorie</a></p>
						<p class="p-about-introduction__account p-about-introduction__account--hatena"><a href="https://shinimae.hatenablog.com/" target="_blank">knowledge base</a></p>
					</div>

					<div class="p-about-skillGroup p-about-skillGroup--twoUp">
						<div class="p-about-skillGroup__inner">
							<ul class="p-about-skillGroup__items">
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--coordination">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">Project Managements</p>
										</div>
										<div class="p-about-skill__body">
											<ul class="p-about-skill__items">
												<li class="p-about-skill__item">
													<p>PL（Project Leader）としての実績。要件定義・進行管理・複数チームの連携・品質管理・工程の再定義 など</p>
													<ul class="p-about-skill__example u-mtOneLine">
														
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
							<ul class="p-about-skillGroup__items">
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--html">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">HTML / CSS</p>
										</div>
										<div class="p-about-skill__body">
											<ul class="p-about-skill__items">
												<li class="p-about-skill__item">HTML5 / CSS3による基本的なコーディング</li>
												<li class="p-about-skill__item">
													<p>メタ言語を使用した開発経験</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>大規模 / 中規模サイトの新規開発</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>大規模 / 中規模サイトの保守運用</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>レスポンシブメールマガジンの制作</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>CMS管理画面のテンプレート開発</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>CSS設計思想を採用したモジュール開発</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>アクセシビリティ対応（JIS X 8341-3 レベルAA 一部準拠）</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>サイト高速化対応（Lighthouseで計測）</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>レガシーブラウザ対応（IE 6-8 / Android 2-4）</p>
													<ul class="p-about-skill__example">
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
													<p>CSSと連携した演出・インタラクションの実装</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>フレームワークを使用した開発経験</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>SVGアニメーションの実装（スクラッチまたはLottie.webを使用）</p>
													<p>データビジュアライゼーションの実装（D3.jsを使用）</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>PWAの実装</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
												<li class="p-about-skill__item">
													<p>Electronによるデスクトップアプリの開発</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--prog">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">CMS / PHP / Node.js ...</p>
										</div>
										<div class="p-about-skill__body">
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
													<p>バージョン管理システムを利用したチーム開発経験</p>
													<p>GitHubを利用した Git Flow / Pull Request / Fork による開発経験</p>
													<ul class="p-about-skill__example">
													</ul>
												</li>

												<li class="p-about-skill__item">
													<p>開発環境の仮想化と構成管理</p>
													<ul class="p-about-skill__example">
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