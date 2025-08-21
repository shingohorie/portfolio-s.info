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
						<p class="p-about-introduction__title">
							堀江 真悟 <i>Shingo Horie</i>
						</p>
						<figure class="p-about-introduction__portrait">
							<img
							src="<?=get_template_directory_uri()?>/resources/img/about/img_portrait.jpg"
							alt=""
							/>
							<figcaption>
							近影 (2025年撮影)<br />1985年生・群馬県出身
							</figcaption>
						</figure>

						<div class="p-about-introduction__body">
							<p>
							フロントエンドエンジニアとしてwebのキャリアを開始。9年ほど開発の第一線に立っておりました。大規模なコーポレートサイトやブランドサイトを担当することが多く、基本設計・コンポーネント設計をはじめ、リッチな演出の実装、CMSの設計構築、保守運用など業務範囲は多岐にわたりました。
							</p>

							<p class="u-mtOneLine">
							多種多様な案件を経験する中で、開発現場にとってもビジネス側にとてもやさしいプロジェクト管理とはなんだろうと考え始め、これまで培ってきた経験値をもとにPL（Project
							Leader）に転向。「自分が思う最良のマネジメント」を実践するようになりました。それが直近の４年ほどのことになります。
							</p>

							<p class="u-mtOneLine">
							技術者としては開発力・提案力・スピード・守備範囲の広さを持ち味としております。<br />
							PLとしてはていねいな管理が持ち味で、複雑な案件の進行管理を成功させたり、業務モデルや開発スキームの再定義を任せていただいております。
							</p>

							<p class="u-mtOneLine">
							事業会社にてメディアサイトの立ち上げを担当した際に、CMSベンダーよりインタビューを受けました<br />
							<a
								href="https://microcms.io/interviews/dip"
								target="_blank"
								class="p-about-introduction__link-block"
								>導入事例インタビュー【ディップ株式会社様】従来の約3分の1の期間でサイト公開が実現。記事公開までの期間も1か月→翌日に短縮</a
							>
							</p>
						</div>
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
											<p>
											PL（Project
											Leader）として、要件定義・進行管理・品質管理・開発ディレクション・部署間の合意形成・開発スキームの再定義など
											</p>
											<hr class="p-about-skill__separator" />
											<ul class="p-about-skill__barometer">
												<li class="p-about-skill__barometerItem">
													進行管理・開発ディレクション
													<div class="c-barometer c-barometer--100"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													外注先管理・外注先評価
													<div class="c-barometer c-barometer--90"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													品質管理
													<div class="c-barometer c-barometer--90"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													要件定義
													<div class="c-barometer c-barometer--70"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													開発スキームの再定義
													<div class="c-barometer c-barometer--80"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													部署間連携
													<div class="c-barometer c-barometer--80"></div>
												</li>
												<li class="p-about-skill__barometerItem p-about-skill__barometerItem--inexperienced">
													経験のないもの
													<span>予算管理・企画・顧客対応・効果測定</span>
												</li>
											</ul>
											<hr class="p-about-skill__separator" />
											<ul class="p-about-skill__example">
												<li><a
													href="<?= get_permalink(get_page_by_path('hatarako-magazine', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('hatarako-magazine', OBJECT, 'post')->ID); ?></a
													></li>
												<li>はたらこねっと 脱スケルトンプロジェクト</li>
											</ul>
											<ul class="p-about-skill__example">
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('maezawa', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('maezawa', OBJECT, 'post')->ID); ?></a
													>
												</li>
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('odakyusc', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('odakyusc', OBJECT, 'post')->ID); ?></a
													>
												</li>
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('sonpo-kousaten', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('sonpo-kousaten', OBJECT, 'post')->ID); ?></a
													>
												</li>
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('cesar', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('cesar', OBJECT, 'post')->ID); ?></a
													>
												</li>
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('psup', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('psup', OBJECT, 'post')->ID); ?></a
													>
												</li>
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('alfresa', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('alfresa', OBJECT, 'post')->ID); ?></a
													>
												</li>
												<li><a href="<?= get_permalink(get_page_by_path('tif', OBJECT, 'post')->ID); ?>"><?= get_the_title(get_page_by_path('tif', OBJECT, 'post')->ID); ?></a></li>
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('rj-package', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('rj-package', OBJECT, 'post')->ID); ?></a
													>
												</li>
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('rj-sg', OBJECT, 'tools')->ID); ?>"
													><?= get_the_title(get_page_by_path('rj-sg', OBJECT, 'tools')->ID); ?></a
													>
												</li>
												<li>
													<a
													href="<?= get_permalink(get_page_by_path('cosmedicsjp', OBJECT, 'post')->ID); ?>"
													><?= get_the_title(get_page_by_path('cosmedicsjp', OBJECT, 'post')->ID); ?></a
													>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--html">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">Frontend Development</p>
										</div>
										<div class="p-about-skill__body">
											<ul class="p-about-skill__barometer">
												<li class="p-about-skill__barometerItem">
													HTML / CSS（SCSS） / JavaScript（jQuery含む）
													<span
													>基本設計・コンポーネント設計・演出の実装・保守運用</span
													>
													<div class="c-barometer c-barometer--100"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													アクセシビリティ対応
													<span
													>JIS X 8341-3 レベルAA
													一部準拠の経験あり</span
													>
													<div class="c-barometer c-barometer--80"></div>
												</li>

												<li class="p-about-skill__barometerItem">
													Next.js / React
													<span
													>既存の横展開・小規模なコンポーネント開発なら可能</span
													>
													<div class="c-barometer c-barometer--50"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													Nuxt / Vue.js
													<span
													>既存の横展開・小規模なコンポーネント開発なら可能</span
													>
													<div class="c-barometer c-barometer--40"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													TypeScript
													<span
													>基礎的なコーディングなら可能</span
													>
													<div class="c-barometer c-barometer--40"></div>
												</li>

												<li class="p-about-skill__barometerItem">
													単体テスト
													<span
													>Vitest / testing-library
													での実装経験あり</span
													>
													<div class="c-barometer c-barometer--70"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													webpack / npm scripts
													<span
													>gulpでのアセットビルド実装の経験もあり</span
													>
													<div class="c-barometer c-barometer--70"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													Storybook
													<div class="c-barometer c-barometer--70"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													レガシーブラウザ・HTMLメール（レスポンシブ）
													<div class="c-barometer c-barometer--100"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													その他
													<span
													>PWA, Eelectron,
													データビジュアライゼーションなどの実装経験あり<br />モダンフレームワークはBackbone.jsやAngularJS（1系）の実装経験もあり</span
													>
												</li>
												<li class="p-about-skill__barometerItem p-about-skill__barometerItem--inexperienced">
													経験のないもの
													<span
													>Canvas（WebGL）による演出の実装・VRTやE2Eテストの実装・既存プロダクトのパフォーマンスチューニング</span
													>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="p-about-skillGroup__item">
									<div class="p-about-skill p-about-skill--prog">
										<div class="p-about-skill__header">
											<p class="p-about-skill__title">
											Backend Development, <br />Infrastructure
											</p>
										</div>
										<div class="p-about-skill__body">
											<ul class="p-about-skill__barometer">
												<li>
													PHP
													<span>基本なコーディングは可能</span>
													<div class="c-barometer c-barometer--60"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													WordPress
													<span
													>カスタムテーマ開発や管理画面のカスタマイズが可能</span
													>
													<div class="c-barometer c-barometer--100"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													Movable Type
													<span>既存サイトの更新であれば可能</span>
													<div class="c-barometer c-barometer--30"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													microCMS
													<span>APIの設計やWebhookの設定など可能</span>
													<div class="c-barometer c-barometer--100"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													Node.js
													<span
													>開発環境の構築や、簡易的なCLIアプリの実装が可能</span
													>
													<div class="c-barometer c-barometer--60"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													Git / GitHub
													<span
													>Git
													Flowによる大規模プロダクトのリポジトリ運用<br />GitHub
													Actionsの実装経験あり</span
													>
													<div class="c-barometer c-barometer--80"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													Linux / Apache
													<span
													>基本的なCLIオペレーションは可能<br />htaccessでの設定は可能<br />httpd.confは複雑な設定にならなければ可能</span
													>
													<div class="c-barometer c-barometer--80"></div>
												</li>
												<li class="p-about-skill__barometerItem">
													Docker
													<span
													>既存のDockerfileの読解なら可能</span
													>
													<div
													class="c-barometer c-barometer--30 u-mtOneLine"
													></div>
												</li>
												<li class="p-about-skill__barometerItem">
													AWS
													<span
													>Amplify Hosting, EC2 の設定は可能<br />S3, VPC,
													ECSなどは対応は難しい</span
													>
													<div class="c-barometer c-barometer--40"></div>
												</li>
												<li class="p-about-skill__barometerItem p-about-skill__barometerItem--inexperienced">
													経験のないもの
													<span
													>システム監視・AWSの各種製品を組み合わせた設計構築・GitHub
													Actions以外のCI/CDの構築・GCPの各種サービスを組み合わせた設計構築</span
													>
												</li>												
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

					<ul class="p-about-certs">
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