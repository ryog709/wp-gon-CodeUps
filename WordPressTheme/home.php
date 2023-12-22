<?php get_header(); ?>
<main>
	<!-- sub-mv -->
	<section class="sub-mv">
		<div class="sub-mv__inner">
			<picture class="sub-mv__picture">
				<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-pc.webp" media="(min-width: 768px)" type="image/webp" />
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-sp.webp" alt="海中を漂う熱帯魚" />
			</picture>
			<h1 class="sub-mv__title">blog</h1>
		</div>
	</section>

	<!-- breadcrumbs -->
	<div class="breadcrumbs layout-breadcrumbs">
		<div class="breadcrumbs__inner inner">
			<!-- Breadcrumb NavXT 7.1.0 -->
			<span>
				<a href="./"><span>TOP</span></a>
			</span>
			<span>
				<span>ブログ一覧</span>
			</span>
		</div>
	</div>

	<!-- blog -->
	<section class="blog layout-blog">
		<div class="blog__inner inner">
			<div class="blog__menu-wrap">
				<article class="blog__main-menu blog-main-menu">
					<ul class="blog-main-menu__list blog-cards blog-cards--column">
						<!-- WordPress ループの開始 -->
						<?php
						$args = array(
							'post_type' => 'post', // カスタム投稿タイプの名前
							'posts_per_page' => 10 // 表示する投稿数
						);
						$the_query = new WP_Query($args);

						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
								<li class="blog-main-menu__list-card blog-card">
									<a href="<?php the_permalink(); ?>">
										<figure class="blog-card__img">
											<?php if (has_post_thumbnail()) : ?>
												<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="301" height="201" loading="lazy" />
											<?php else : ?>
												<img class="noimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.webp" alt="noimage" width="301" height="201" loading="lazy" />
											<?php endif; ?>
											<figcaption class="blog-card__body">
												<time class="blog-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
												<p class="blog-card__title"><?php the_title(); ?></p>
												<p class="blog-card__text"><?php echo wp_trim_words(get_the_content(), 80, '…'); ?></p>
											</figcaption>
										</figure>
									</a>
								</li>
						<?php
							endwhile;
						else :
							echo '<p>投稿が見つかりませんでした。</p>';
						endif;
						wp_reset_postdata();
						?>
					</ul>

					<!-- wp-pagenavi -->
					<div class="blog__wp-pagenavi wp-pagenavi">
						<a class="previouspostslink" rel="prev" href="#" aria-label="前のページへ"></a>
						<span class="current">1</span>
						<a class="page smaller" href="#">2</a>
						<a class="page smaller" href="#">3</a>
						<a class="page smaller" href="#">4</a>
						<a class="page smaller u-desktop" href="#">5</a>
						<a class="page larger u-desktop" href="#">6</a>
						<a class="nextpostslink" rel="next" href="#" aria-label="次のページへ"></a>
					</div>
				</article>

				<!-- サイドバー -->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>